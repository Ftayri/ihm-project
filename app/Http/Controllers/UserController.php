<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    public function storeBeneficiary(Request $request)
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
        Auth::login($beneficiary);
        return redirect()->route('home');
    }
    public function storeServiceProvider(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'id_card_number' => 'required|unique:users|digits:8',
            'email' => 'required|unique:users',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone_number' => 'required|unique:users|digits:8',
            'city' => 'required',
            'password' => 'required',
            'service_sub_category_id' => 'required',
            'service_description' => 'required',
        ], [
            'first_name.required' => 'Veuillez saisir votre prénom',
            'last_name.required' => 'Veuillez saisir votre nom',
            'id_card_number.required' => 'Veuillez saisir votre numéro de carte d\'identité',
            'id_card_number.unique' => 'Ce numéro de carte d\'identité est déjà utilisé',
            'id_card_number.digits' => 'Veuillez saisir un numéro de carte d\'identité valide',
            'email.required' => 'Veuillez saisir votre email',
            'email.unique' => 'Cet email est déjà utilisé',
            'phone_number.required' => 'Veuillez saisir votre numéro de téléphone',
            'phone_number.unique' => 'Ce numéro de téléphone est déjà utilisé',
            'phone_number.digits' => 'Veuillez saisir un numéro de téléphone valide',
            'city.required' => 'Veuillez saisir votre ville',
            'password.required' => 'Veuillez saisir votre mot de passe',
            'service_sub_category_id.required' => 'Veuillez choisir une sous-catégorie de service',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator, 'providerSignUpErrors');
        }
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'id_card_number' => $request->id_card_number,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'city' => $request->city,
            'password' => Hash::make($request->password),
        ]);
        if ($request->remember_token) {
            $user->remember_token = $request->remember_token;
        }
        $user->save();
        $serviceProvider = new ServiceProvider();
        $serviceProvider->user_id = $user->id;
        $serviceProvider->service_sub_category_id = $request->service_sub_category_id;
         $imageName = time().'.'.$request->profile_picture->extension();
        $request->profile_picture->move(public_path('profile_pictures'), $imageName);
        $serviceProvider->profile_picture = $imageName;
        $serviceProvider->service_description = $request->service_description;
        $serviceProvider->save();
        Auth::login($serviceProvider);
        return redirect()->route('home');
        
    }
    public function login(Request $request){
        $validator=  Validator::make($request->all(), [
            'email' => 'required|exists:users',
            'password' => 'required',
        ],[
            'email.required' => 'Veuillez saisir votre email',
            'password.required' => 'Veuillez saisir votre mot de passe',
            'email.exists' => 'Email incorrect',
            'password.exists' => 'Mot de passe incorrect',
        ],);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator, 'loginErrors');
        }
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'remember_token'=>$request->rememberMe])){
            return redirect()->back();
        }
        $error['invalid']= 'Email ou mot de passe incorrect';
        return redirect()->back()->withErrors($error, 'loginErrors');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }

    public function profile()
    {
        if (!Auth::check()) {
            return redirect()->route('home');
        }
        $serviceCategories = ServiceCategory::all();
        $beneficiary = Beneficiary::where('user_id', Auth::user()->id)->first();
        if(!$beneficiary){
            $serviceProvider = ServiceProvider::where('user_id', Auth::user()->id)->first();
            $services = $serviceProvider->services;
            return view('user.profile', compact('serviceCategories','services','serviceProvider'));
        }
        $services = $beneficiary->services;
        return view('user.profile', compact('serviceCategories','services'));
    }
}
