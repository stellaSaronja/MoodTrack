<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
	public function index()
	{
		return view('entry.index');
	}

	public function postEntry(Request $request)
	{
		$request->validate([
			'mood' => 'required',
			'activity' => 'required|max:500',
			'challenge' => 'max:500'
		]);

		$entry = new Entry;
		$entry->user_id = $request->user()->id;
		$entry->mood = $request->mood;
		$entry->activity = $request->activity;
		$entry->challenge = $request->challenge;

		if ($entry->save()) {
			return redirect()->route('home')->with('info', 'Entry saved successfully!');
		}
	}
}
