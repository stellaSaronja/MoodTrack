@extends('layouts.master')

@section('title', 'Landing Page')

@section('container')

<main>
	<h2 class="landing__h2">MoodTrack - get your mood on the right track!</h2>
	<div class="landing__container">
		<p class="landing__p">Get an overview of your mood entries to see what had an impact on you so you can learn what to avoid. See how your mood improves over time.</p>
		<img src="img/home-screenshot.jpg" alt="Screenshot of the homepage in mobile view" class="landing__img">

		<p>Sign up to get started</p>
		<a href="/signup" class="landing__btn">Sign up</a>
	</div>
</main>

@endsection