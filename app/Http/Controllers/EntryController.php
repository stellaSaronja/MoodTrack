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
			'challenge' => 'max:500',
			'photo' => 'mimes:jpeg,png,jpg'
		]);

		$entry = new Entry;
		$entry->user_id = $request->user()->id;
		$entry->mood = $request->mood;
		$entry->activity = $request->activity;
		$entry->challenge = $request->challenge;
		// $entry->photo = $request->photo;
		if ($request->file('image')) {
			$file = $request->file('image');
			$filename = date('YmdHi') . $file->getClientOriginalName();
			$file->move(public_path('public/uploads'), $filename);
			$entry['image'] = $filename;
		}

		if ($entry->save()) {
			return redirect()->route('home')->with('info', 'Entry saved successfully!');
		}
	}

	public function viewEntry()
	{
		$entry = Entry::all();
		return view('entry.view');
	}
}
