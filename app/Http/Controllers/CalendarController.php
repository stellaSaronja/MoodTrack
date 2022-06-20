<?php

namespace App\Http\Controllers;

use App\Models\Entry;

class CalendarController extends Controller
{
	public function index()
	{
		$entries = Entry::orderBy('id', 'desc')->get();

		return view('calendar.index', ['entries' => $entries]);
	}
}
