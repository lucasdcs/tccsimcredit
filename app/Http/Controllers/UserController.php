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
        'list.index', [
            'usuarios' => $usuarios
        ]
        );

    }

    public function edit(string $id)
    {
        $usuarios = User::find($id);
        return view(
            'list.list-edit', compact('usuarios')
            );
    }

    public function update(Request $request, string $id)
    {
        $usuarios = User::find($id);
        $usuarios->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'role' => $request->role,
            ]
        );
        
        $request->user()->save();

        
            return redirect('/list');
    }

    public function destroy(string $id)
    {
        $usuarios = User::find($id);
        $usuarios->delete();
        return redirect('/list');
    }
}