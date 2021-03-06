<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\Models\Status;


class SessionsController extends Controller
{

  public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }  

  public function create()
    {
        return view('sessions.create');
    }
  
   public function store(Request $request)
    {
       $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

       $credentials = [
           'email'    => $request->email,
           'password' => $request->password,
       ];       

       if (Auth::attempt($credentials, $request->has('remember'))) {
           if(Auth::user()->activated) {
               session()->flash('success', 'Welcome back!');
              return redirect()->intended(route('users.show', [Auth::user()]));
           } else {
               Auth::logout();
               session()->flash('warning', 'Your account is not activated, please check it in your email box!');
               return redirect('/');
           }
       } else {
           session()->flash('danger', 'Sorry, your password is wrong for the email!');
           return redirect()->back();
       }
    }
    
   public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'Logged out!');
        return redirect('login');
    }

}

