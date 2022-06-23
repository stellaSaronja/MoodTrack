<?php

namespace App\Http\Controllers;

use App\Models\Entry;

class CalendarController extends Controller
{
	public function index()
	{
		$entries = Entry::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();

		return view('calendar.index', ['entries' => $entries]);
	}
}
