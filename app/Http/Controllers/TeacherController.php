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
    $type = 'teacher';
    // dd($user);
    if(Auth::guard('teacher')->attempt(['email'=>$user['email'],'password'=>$user['password']])){
        return redirect()->route('teacher.tdashboard',$type);
    }
    else{
        return view('teacher.login');
    }
   }
   public function tdashboard($type){
    $user = Auth::guard($type)->user();
    return view('teacher.tdashboard',compact('user'));
   }
   
}
