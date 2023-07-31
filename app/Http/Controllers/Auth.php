<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AuthModel;

class Auth extends Controller
{
    
    
    
    function do_login(Request $req){
    
    $authuserObj = new AuthModel();
        $data = $authuserObj->where('email', $req->email)->where('password', $req->password)->first();
        if ($data) {

            $req->session()->put('users_detals', $data);
            return Redirect("Dashboard")->withSuccess('Great! You have Successfully loggedin');
        } else {
            return Redirect("/admin");
        }
    
    
    }
    
    
}
