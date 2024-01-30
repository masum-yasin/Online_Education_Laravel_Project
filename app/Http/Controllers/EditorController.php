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
        // dd($euser);
        if(Auth::guard('editor')->attempt(['email'=>$euser['email'],'password'=>$euser['password']])){
            return redirect()->route('editor.edashboard');
        }
        else{
            return view('editor.login');
        }
    }
    public function edashboard(){
        return view('editor.edashboard');
    }
}
