<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HelloController extends Controller
{
    public function index () 
    {
        $user = User::find(1);
        var_dump($user->name);
    }
    
}
