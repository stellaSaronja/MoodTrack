@extends('layouts.master')

@section('title', 'Login')

@section('container')

<main class="main-height">
	<form action="{{ route('postLogin') }}" method="post" class="item-container">
		@csrf

		<div class="input-container">
			<label for="username">Your username:</label>
			<input type="text" name="username" id="username" class="form__text-input">
		</div>

		<div class="input-container">
			<label for="email">Your e-mail:</label>
			<input type="email" name="email" id="email" class="form__text-input">
		</div>

		<div class="input-container">
			<label for="password">Your password:</label>
			<input type="password" name="password" id="password" class="form__text-input">
		</div>

		<button type="submit" class="form__btn">Log in</button>
	</form>

	<a href="{{ route('signup') }}" class="redirect-btn">Sign up</a>
</main>


@endsection