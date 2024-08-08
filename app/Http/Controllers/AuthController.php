<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Http\Requests\UserResuest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registro(RegistroRequest $request)
    {
       // DB::beginTransaction();
        $data = $request->validated();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return [
            'status' => true,
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ];
    }

    public function login(UserResuest $request)
    {
        $data = $request->validated();
        
        //Verificar a senha
        if(!Auth::attempt($data)){
            return response([
                'errors' => ['O email ou/e a senha não são validos']
            ], 422);
        }

        //Authenticar o usuario

        $user = Auth::user();   
        return [
            'status' => true,
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ];
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return [
            'user' => null
        ];
    }
}
