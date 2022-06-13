<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
	public function signup()
	{
		return view('auth.signup');
	}

	public function postSignup(Request $request)
	{
		$this->validate($request, [
			'username' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed',
		]);

		$user = new User($request->all());
		$user->password = bcrypt($request->get('password'));
		$user->remember_token = Str::random(60);
		$user->save();

		return redirect()->route('entry.index')->with('info', 'Signup successfull!');
	}

	public function login()
	{
		return view('auth.login');
	}

	public function postLogin(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required',
		]);

		$credentials = $request->only(['email', 'password']);
		$remember_me = $request->has('remember_mspoe');

		if (auth()->attempt($credentials, $remember_me)) {
			return redirect()->route('entry.index');
		} else {
			return redirect()->route('login')->with('error', 'Invalid credentials');
		}
	}

	public function logout()
	{
		auth()->logout();
		return redirect()->route('login')->with('info', 'Goodbye!');
	}
}
