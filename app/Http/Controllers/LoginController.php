<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
//use App;

class LoginController extends Controller
{
   /* public function check_user(Request $r)
    {
      $email=$r->email;
      $password = $r->password; 
    } */
    public function login()
    {
        return "Login";
    }
    public function registration()
    {
        return "Registration";
    }
  
}
