<?php

namespace App\Http\Controllers;

use App\Models\employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password as RulesPassword;
use function Laravel\Prompts\password;

class RegisterUserController extends Controller
{
    /*
     ! Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /*
     ! Show the form for creating a new resource.
     */
    public function create()
    {
    return view("auth.register");
    }

    /*
     ! Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!11
        $user_attributes = $request->validate(
         [
                    "name"=>["required"],
                    "email"=>["required" , "email" , "unique:users,email"],
                    "password"=>["required" , "confirmed" , RulesPassword::min(6)],
                ]
            );
        $employer_attributes = $request->validate([
            "employer_name" =>["required"],
             'employer_logo' => ['required']
             ]
        );
        $user = User::create($user_attributes);
        $logo_located = $request->employer_logo->store('logos');
        $user->employer()->create([
            "name" => $employer_attributes["employer_name"] ,
            "logo" => $logo_located
            ]);
        Auth::login($user);
        return redirect('/');
    }
}