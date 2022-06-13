@extends('layouts.master')

@section('title', 'Signup')

@section('container')

<form method="post" action="{{ route('postSignup') }}" autocomplete="on" class="item-container">
	@csrf

	<div class="form__img-container">
		<img src="img/avatar.jpg" alt="Profile picture" id="photo">
		<input type="file" id="file">
		<label for="file" id="uploadBtn">
			<svg height="18px" version="1.1" viewBox="0 0 18 18" width="18px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink">
				<title />
				<desc />
				<defs />
				<g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
					<g fill="#fff" id="Core" transform="translate(-213.000000, -129.000000)">
						<g id="create" transform="translate(213.000000, 129.000000)">
							<path d="M0,14.2 L0,18 L3.8,18 L14.8,6.9 L11,3.1 L0,14.2 L0,14.2 Z M17.7,4 C18.1,3.6 18.1,3 17.7,2.6 L15.4,0.3 C15,-0.1 14.4,-0.1 14,0.3 L12.2,2.1 L16,5.9 L17.7,4 L17.7,4 Z" id="Shape" />
						</g>
					</g>
				</g>
			</svg>
		</label>
	</div>

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

@endsection