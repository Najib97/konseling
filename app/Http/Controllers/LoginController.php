<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Imports\LaporanImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\Models\insertHandler;
use Illuminate\Support\Str;
use App\Models\User;
use File;
use Auth;

class LoginController extends Controller
{
  public function login(){
    return view('login');
  }

  public function postlogin(Request $request){
    if (Auth::attempt($request->only('username','password'))) {
      return redirect('/dashboard');
    }

    return redirect('/login');
  }

  public function logout(){
    Auth::logout();
    return redirect('/login');
  }
}
