<?php

namespace App\Http\Controllers;

use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function register(Request $request){

        $validator = Validator::make($request->all(), [
            'first_name'=> 'required|string|max:255',
            'last_name'=> 'required|string|max:255',
            'email'=> 'required|string|email|max:255|unique:users',
            'password'=> 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['data'=> $user, 'token'=>$token, 'token_type'=> 'bearer']);
    }

    public function login(Request $request){
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message'=> 'Verification Failed'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['message'=>'acceso exitoso', 'user'=> $user, 'token'=>$token, 'token_type'=> 'bearer']);
    }

    public function logout(){
        auth()->user()->tokens()->delete();
        return response()->json(['message'=> 'Session has been finished']);
    }
}
