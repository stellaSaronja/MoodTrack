<?php

namespace App\Http\Controllers;

use App\Models\Entry;

class HomeController extends Controller
{
	public function index()
	{
		return view('index');
	}

	public function home()
	{
		$entries = Entry::orderBy('id', 'desc')->take(4)->get();

		return view('home', ['entries' => $entries]);
	}
}
