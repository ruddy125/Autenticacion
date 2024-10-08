<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TwoFactorController extends Controller
{
    
    public function index()
    {
        return view('auth.verify');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $user = auth()->user();

        if($request->input('code') == $user->code){
            $user->restCode();
            return redirect()->route('dashboard');
        }

        return redirect()->back()->withErrors(['code'=>'Codigo de verificacion ingresado no valido.']);
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
