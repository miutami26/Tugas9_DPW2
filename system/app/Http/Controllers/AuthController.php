<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller{
		function showLogin(){
		return view('login');
	}

	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('beranda')->with('success', 'login berhasil');
		}else{
			return redirect('login')->with('danger', 'login gagal, silahkan cek email dan password anda'); 
		}
	}
	function logout(){
		Auth::logout();
		return redirect('beranda');
	}

	function register(){
		Auth::register();
		return redirect('beranda');
	}
}
