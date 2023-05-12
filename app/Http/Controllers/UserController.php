<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store_beneficiary(Request $request)
    {
        //validate request
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'id_card_number' => 'required|unique:users|digits:8',
            'email' => 'required|unique:users',
            'phone_number' => 'required|unique:users|digits:8',
            'city' => 'required',
            'password' => 'required',
        ]);
        //create user and remember token
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'id_card_number' => $request->id_card_number,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'city' => $request->city,
            'password' => Hash::make($request->password),
        ]);
        //if remember token is not null, save it
        if ($request->remember_token) {
            $user->remember_token = $request->remember_token;
        }
        $user->save();
        $beneficiary = new Beneficiary();
        $beneficiary->user_id = $user->id;
        $beneficiary->save();
        Auth::login($user);
        return redirect()->route('home');
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        //check if user exists
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'Email ou mot de passe incorrect');
        }
        //check if password is correct
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Email ou mot de passe incorrect');
        }
        Auth::login($user);
        return redirect()->route('home');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
