<?php

namespace App\Http\Controllers;

use App\Models\Entry;

class HomeController extends Controller
{
	public function index()
	{
		$entries = Entry::orderBy('id', 'desc')->take(4)->get();

		return view('home', ['entries' => $entries]);
	}
}
