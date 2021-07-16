<?php

namespace App\Http\Controllers;

use App\UserVehicle;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserVehicleController extends Controller
{

    use ApiResponser;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                    'marca' => 'required',
                    'modelo' => 'required',
                    'dominio' => 'required',
        ];

        $this->validate($request, $rules);

        $token = JWTAuth::parseToken();
        $user = JWTAuth::toUser($token);

        $vehicle = new UserVehicle($request->all());
        $user->vehicles()->save($vehicle);

        return $this->showOne($vehicle, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserVehicle  $userVehicle
     * @return \Illuminate\Http\Response
     */
    public function show(UserVehicle $vehicle)
    {

        return $this->showOne($vehicle, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserVehicle  $userVehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(UserVehicle $userVehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserVehicle  $userVehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserVehicle $userVehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserVehicle  $userVehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserVehicle $vehicle)
    {
        $vehicle->delete();

        return $this->successResponse(['message' => 'Vehículo eliminado'], 200);
    }

    public function myVehicles()
    {
        $token = JWTAuth::parseToken();
        $user = JWTAuth::toUser($token);

        $vehicles = $user->vehicles()->get();

        return $this->showAll($vehicles, 200);
    }


}
