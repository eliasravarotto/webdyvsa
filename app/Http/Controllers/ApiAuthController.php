<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Validator;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;


class ApiAuthController extends Controller
{
    use ApiResponser;
	
	public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'code' => 1,
                'message' => 'Wrong validation',
                'errors' => $validator->errors()
            ], 422);
        }

        $token = JWTAuth::attempt($credentials);

        if ($token) {

            $data = [
                'success' => true,
                'token' => $token,
                'user' => User::where('email', $credentials['email'])->get()->first()
            ];

            return $this->successResponse($data, 200);

        } else {

            return response()->json([
                'success' => false,
                'code' => 2,
                'message' => 'Wrong credentials',
                'errors' => $validator->errors()], 401);
        }
    }

    public function refreshToken()
    {

        $token = JWTAuth::getToken();

        try {
            $token = JWTAuth::refresh($token);
            return response()->json(['success' => true, 'token' => $token], 200);
        } catch (TokenExpiredException $ex) {
            // We were unable to refresh the token, our user needs to login again
            return response()->json([
                'code' => 3, 'success' => false, 'message' => 'Need to login again, please (expired)!'
            ]);
        } catch (TokenBlacklistedException $ex) {
            // Blacklisted token
            return response()->json([
                'code' => 4, 'success' => false, 'message' => 'Need to login again, please (blacklisted)!'
            ], 422);
        }

    }

    public function logout(Request $request)
    {
        //  $this->validate($request, ['token' => 'required']);
        $token = JWTAuth::getToken();

        try {

            $token = JWTAuth::invalidate($token);
            $data = [
                'code' => 5, 
                'success' => true, 
                'message' => "You have successfully logged out."
            ];

            return $this->successResponse($data, 200);

        } catch (JWTException $e) {

            $data = [
                'code' => 6, 
                'success' => false, 
                'message' => 'Failed to logout, please try again.'
            ];

            return $this->successResponse($data, 422);
        }
    }

    public function register(Request $request)
    {
        $data = $request->only('email', 'name', 'password', 'password_confirmation');

        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'min:4|confirmed'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 1,
                'success' => false,
                'message' => 'Wrong validation',
                'errors' => $validator->errors()
            ], 422);
        }

        $data['verified'] = User::USUARIO_NO_VERIFICADO;
        $data['password'] = Hash::make($request->password);
        $data['verification_token'] = User::generateVerificationToken();
        $data['avatar'] = '/imagenes/avatars/avatar-1.jpg';


        $roles = Role::where('slug', 'cliente')->get()->pluck('id');

        $user = User::create($data);
        $user->roles()->sync($roles);

        $data = [
            'code' => 1,
            'user' => $user,
            'success' => true,
            'message' => 'Registration success.'
        ];

        return response()->json($data, 200);
    }

    public function verifyToken(Request $request)
    {
        try {
            if (! $token = JWTAuth::parseToken()) {
                //throw an exception
                return $this->errorResponse('Invalid Token', 200);
            }
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                //throw an exception
                return $this->errorResponse($e, 200);
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                //throw an exception
                return $this->errorResponse($e, 200);
            } else if ( $e instanceof \Tymon\JWTAuth\Exceptions\JWTException) {
                //throw an exception
                return $this->errorResponse($e, 200);
            }else{
                //throw an exception
                return $this->errorResponse($e, 200);
            }
        }

        $data = [
            'success' => true,
            'user' => JWTAuth::toUser($token),
        ];

        return $this->successResponse($data, 200);

    }

}
