<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class SingInController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:2',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) 
        {
            return redirect()->route('discover');
            
        } else {
            return redirect()->route('SingIn');
        } 
    }
}
