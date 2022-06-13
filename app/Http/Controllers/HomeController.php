<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(Request $request)
	{
		$entries = Entry::all();

		return view('home');
	}
}
