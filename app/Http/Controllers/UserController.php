<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // function show($id){
    //     return "Hello, I am UserController. $id";
    // }
    // function loadUserView($age){
    //     // return view('users', ['name'=> ['Prabhat', 'Pankaj', 'Ajeet']]);
    //     return view('users', ['name'=> 'Rohit', 'data' => ['Prabhat', 'Pankaj', 'Ajeet', 'Sandeep']]);
    // }
    function getData(){
        return User::all();
    }
}
