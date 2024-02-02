<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditorController extends Controller
{
    public function login(){
        return view('editor.login');
    }
    public function store(Request $request){
        $euser = $request->all();
        $type = 'editor';
        // dd($euser);
        if(Auth::guard('editor')->attempt(['email'=>$euser['email'],'password'=>$euser['password']])){
            return redirect()->route('editor.edashboard',$type);
        }
        else{
            return view('editor.login');
        }
    }
    public function edashboard($type){
        $user = Auth::guard($type)->user();
        return view('editor.edashboard',compact('user'));
    }
}
