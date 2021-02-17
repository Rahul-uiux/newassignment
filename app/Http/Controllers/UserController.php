<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\Hash;
use Illuminate\Http\Request;
use App\models\user;

class UserController extends Controller
{
    function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            echo "username and password not match";
            return redirect('login');

        }
        else {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function register(Request $req){
    $user = new user;
    $user->name=$req->name;
    $user->email=$req->email;
    $user->password=Hash::make($req->password);
    $user->save();
    return redirect('login');
    }
}
