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
			'photo' => 'mimes:jpg,jpeg,png,gif|max:2048|dimensions:width=500,height=500'
		]);

		$entry = new Entry;
		$entry->user_id = $request->user()->id;
		$entry->mood = $request->mood;
		$entry->activity = $request->activity;
		$entry->challenge = $request->challenge;
		if ($request->file('photo')) {
			$file = $request->file('photo');
			$filename = date('YmdHi') . $file->getClientOriginalName();
			$file->move(storage_path('app/public/images'), $filename);
			$entry['photo'] = $filename;
		}

		if ($entry->save()) {
			return redirect()->route('home')->with('info', 'Entry saved successfully!');
		}
	}

	public function viewEntry()
	{
		$entry = Entry::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->take(1)->get();

		return view('entry.show', ['entry' => $entry]);
	}
}
