<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class logincontroller extends Controller
{



    function loginAction(Request $req){


        $user= User::where(['email'=>$req->email])->first();

        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{

            $req->session()->put('user',$user);
            return redirect('homepage');


        }


    }
      
}

       