<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::get();
       
       return view(
        'profile.index', [
            'usuarios' => $usuarios
        ]
        );

    }
}