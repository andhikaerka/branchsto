<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

//load models
use App\Models\User;

class AuthController extends Controller
{

    /**
     * register
     *
     * @param Request $request
     * @return void
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Bad Request'
            ], 400);
        }

        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->telepon = $request->telepon;
        $user->alamat = $request->alamat;

        $user->save();

        return response()->json([
            'message' => 'user created sucessfully'
        ], 200);
    }


    /**
     * login
     *
     * @param  mixed $request
     * @return void
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $user= User::where('email', $request->email)->first();
        
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                    'success'   => false,
                    'message' => ['These credentials do not match our records.']
                ], 404);
        }
        
        $token = $user->createToken('ApiToken')->plainTextToken;
        
        $response = [
                'success'   => true,
                'user'      => $user,
                'token'     => $token
            ];
        
        return response($response, 201);
    }

    /**
     * logout
     *
     * @return void
     */
    public function logout()
    {
        // auth()->logout();
        return response()->json([
            'success'    => true
        ], 200);
    }
}
