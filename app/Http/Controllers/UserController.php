<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Traits\ImageHandler;
use Illuminate\Http\Request;

class UserController extends Controller
{

    use ImageHandler;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::with('roles')->get();

        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        $user = new User();

        return view('backend.users.create', compact('user', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
                    'name' => 'required',
                    'email' => 'required|email|unique:users',
                    'password' => 'min:4|confirmed'
        ];

        $this->validate($request, $rules);

        $campos = $request->all();
        $campos['verified'] = User::USUARIO_NO_VERIFICADO;
        $campos['verification_token'] = User::generateVerificationToken();

        if ($request->hasFile('avatar')) {
            $campos['avatar'] = $this->storeAndRezise($request->avatar, 'public/avatars', 50)->imagePath;
        }else{
            $campos['avatar'] = '/imagenes/avatars/avatar-' . rand(1, 4) . '.jpg';
        }

        $user = User::create($campos);

        $user->roles()->sync($request->roles);

        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();

        $user = User::with('roles')->firstOrFail();

        return view('backend.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $rules = [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email,'.$user->id,
                    'password' => 'min:4|confirmed'
        ];

        $this->validate($request, $rules);

        $user->update($request->all());

        $user->roles()->sync($request->roles);

        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
