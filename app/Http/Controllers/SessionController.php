<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password as RulesPassword;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("auth.login");
    }

    /*
     ! Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $user_attribute = $request->validate(
        [
            "email"=> ["required" , "email"], 
            "password" => ["required" , RulesPassword::min(6)]
        ]
       );
       if(! Auth::attempt($user_attribute))
       {
        throw ValidationValidationException::withMessages(
            [
                "email"=>"sorry, those creditionals don't match"
            ]
            );
       }
       request()->session()->regenerateToken();
       return redirect("/"); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();
        return redirect("/");
    }
}
