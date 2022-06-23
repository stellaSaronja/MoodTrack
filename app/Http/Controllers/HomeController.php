<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\User;

class HomeController extends Controller
{
	public function index()
	{
		return view('index');
	}

	public function home()
	{
		$entries = Entry::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->take(4)->get();

		return view('home', ['entries' => $entries]);
	}
}
