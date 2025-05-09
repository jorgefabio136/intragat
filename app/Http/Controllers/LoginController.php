<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


public function auth(Request $request){

   $credenciais = $request->validate([
     'email' => ['required', 'email'],
     'password' => ['required'],
   ],[
    'email.required'  => 'Por favor Preencha o Campo do Email ',
    'email.email'  => 'Esse Email Não é valido ',
    'password.required'  => 'Por favor Preencha o Campo da Senha '
   ]
  
  );

if(Auth::attempt($credenciais, $request->remember)){
    $request->session()->regenerate();
    return redirect()->intended(route('site.menuone'));
}
else{
return redirect()->back()->with('erro', 'email ou senha ivalida');
}

}

public function logout(Request $request){
Auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();
return redirect(route('inicial'));
}

public function create(){
  return view('login.create');
  }
}
