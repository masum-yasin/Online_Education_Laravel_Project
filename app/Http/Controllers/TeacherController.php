<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
   public function login(){
    return view('teacher.login');
   }
   public function store(Request $request){
    $user = $request->all();
    // dd($user);
    if(Auth::guard('teacher')->attempt(['email'=>$user['email'],'password'=>$user['password']])){
        return redirect()->route('teacher.tdashboard');
    }
    else{
        return view('teacher.login');
    }
   }
   public function tdashboard(){
    return view('teacher.tdashboard');
   }
   
}
