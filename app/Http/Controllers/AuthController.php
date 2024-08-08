<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Http\Request;
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

    public function login(Request $request)
    {
        
    }

    public function logout(Request $request)
    {
        
    }
}
