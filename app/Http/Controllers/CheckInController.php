<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CheckInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = User::All();
        return view('post/index', ['register' => $show]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Login.SignUp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $injection = new User();
        $injection ->name = $request->input('name');
        $injection ->username = $request->input('username');
        $injection ->pais = $request->input('pais');
        $injection ->city = $request->input('city');
        $injection ->numberidentification = $request->input('numberidentification');
        $injection ->phone = $request->input('phone');
        $injection ->email = $request->input('email');
        $injection ->password = bcrypt($request->input('password'));
        $injection ->password2 = bcrypt($request->input('password2'));
        $injection ->save();
        return redirect()->route('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $show)
    {
        return view('post.show',['show' => $show]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $show)
    {
        return view('post.edit',['show' => $show]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $show)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'pais' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'numberidentification' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);    


        $show ->name = $request->input('name');
        $show ->username = $request->input('username');
        $show ->pais = $request->input('pais');
        $show ->city = $request->input('city');
        $show ->numberidentification = $request->input('numberidentification');
        $show ->phone = $request->input('phone');
        $show ->email = $request->input('email');
        $show ->save();

        return redirect()->route('index', $show);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $show)
    {
        $show->delete();
        
        return redirect()->route('index', $show);
    }
}
