<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
  public function index()
  {
    return view('login');
  }

  public function login(Request $request)
  {
    $request->validate([
      'email' => 'required',
      'password' => 'required'
    ], [
      'email.required' => 'Email wajib diisi',
      'password.required' => 'Password wajib diisi'
    ]);

    $infoLogin = [
      'email' => $request->email,
      'password' => $request->password
    ];

    if (Auth::attempt($infoLogin)) {
      if (Auth::user()->role == 'operator') {
        return redirect('/admin/operator');
      } elseif (Auth::user()->role == 'keuangan') {
        return redirect('/admin/keuangan');
      } elseif (Auth::user()->role == 'marketing') {
        return redirect('/admin/marketing');
      }
    } else {
      return redirect('/')->withErrors('Username / Password salah')->withInput();
    }
  }

  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
  }
}
