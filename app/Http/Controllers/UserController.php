<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getSignUp(){
        return view('user.signup');

    }
    public function signup(Request $request){
     $user = new User;
     $user->name = $request->name;
     $user->email = $request->email;
     $user->password = $request->password;
     $user->save();
     return redirect('/');


    }
}
