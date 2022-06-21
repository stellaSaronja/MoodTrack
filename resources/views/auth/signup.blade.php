@extends('layouts.master')

@section('title', 'Signup')

@section('container')

<main class="main-height">
	<form method="post" action="{{ route('postSignup') }}" autocomplete="on" class="item-container">
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

		<div class="input-container">
			<label for="input_password" class="form-label">Password confirmation:</label>
			<input type="password" name="password_confirmation" id="password" class="form__text-input">
		</div>

		<button type="submit" class="form__btn">Sign up</button>

	</form>

	<a href="{{ route('login') }}" class="redirect-btn">Log in</a>
</main>

@endsection