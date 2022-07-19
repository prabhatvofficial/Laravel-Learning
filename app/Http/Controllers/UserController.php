<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show($id){
        return "Hello, I am UserController. $id";
    }
    function loadUserView(){
        return view('users');
    }
}
