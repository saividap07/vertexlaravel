<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function login(){
        return view('loginform');
    }

    public function getLoginDetails(Request $request){
        $username=$request->get('username');
        $password=$request->get('password');
        if($username=="admin@gmail.com" && $password=="admin"){
            //Session::put('username',$username);
            $request->session()->put("username",$username);
            $session= $request->session()->get("username");
            //print_r($str);
            if(isset($session))
            return redirect('/index');
            else{
                echo "<script>
                alert('Invalid Credentials');
                window.location.href='/';
                </script>";
            }
        }
        else{
            echo "<script>
            alert('Invalid Credentials');
            window.location.href='/';
            </script>";
        }
    }

    public function logout(Request $request){
        $request->session()->forget('username');
        return redirect('/admin');
    }
}
