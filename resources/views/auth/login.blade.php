@extends('layouts.master')

@section('title', 'Login')

@section('container')

<form action="{{ route('postLogin') }}" method="post" class="item-container">
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
		<input type="text" name="username" id="username" value="maxi" class="form__text-input">
	</div>

	<div class="input-container">
		<label for="email">Your e-mail:</label>
		<input type="email" name="email" id="email" value="max.mustermann@gmail.com" class="form__text-input">
	</div>

	<div class="input-container">
		<label for="password">Your password:</label>
		<input type="password" name="password" id="password" value="secret" class="form__text-input">
	</div>

	<button type="submit" class="form__btn">Log in</button>
</form>

<a href="{{ route('signup') }}" class="redirect-btn">Sign up</a>

<form action="" method="post" class="item-container d-mode">
	<p>Dark Mode</p>
	<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="22px" viewBox="0 0 122.879 72.555" enable-background="new 0 0 122.879 72.555" xml:space="preserve">
		<g>
			<path d="M85.953,5.357h0.65c8.5,0,16.229,3.479,21.834,9.084s9.084,13.335,9.084,21.835c0,0.133,0,0.266-0.002,0.396 c-0.002,0.133-0.004,0.266-0.008,0.398c-0.004,0.131-0.008,0.264-0.012,0.395l0,0c-0.006,0.131-0.012,0.264-0.018,0.395l0,0 c-0.008,0.131-0.016,0.262-0.023,0.393l0,0c-0.008,0.131-0.018,0.262-0.027,0.393l0,0c-0.01,0.129-0.021,0.26-0.033,0.389v0.002 c-0.035,0.389-0.076,0.777-0.125,1.162l0,0c-0.891,6.939-4.107,13.18-8.838,17.91c-4.992,4.992-11.672,8.301-19.074,8.963l0,0 c-0.129,0.012-0.26,0.023-0.389,0.033h-0.002c-0.129,0.01-0.26,0.02-0.391,0.027l0,0c-0.131,0.01-0.262,0.016-0.393,0.023h-0.002 c-0.129,0.006-0.262,0.012-0.393,0.018l0,0c-0.133,0.006-0.264,0.01-0.395,0.012h-0.002c-0.131,0.004-0.264,0.006-0.396,0.008l0,0 c-0.131,0.002-0.264,0.004-0.396,0.004h-0.65c-8.496,0-16.227-3.482-21.834-9.088c-5.605-5.605-9.086-13.334-9.086-21.832 c0-8.5,3.479-16.23,9.084-21.835C69.723,8.836,77.451,5.357,85.953,5.357L85.953,5.357z M86.604,0h-0.65H36.277 c-9.979,0-19.049,4.081-25.623,10.654C4.08,17.228,0,26.298,0,36.277c0,9.979,4.081,19.047,10.655,25.621 c6.574,6.574,15.645,10.656,25.622,10.656h49.676h0.65c0.156,0,0.311-0.002,0.467-0.004l0,0c0.154-0.002,0.311-0.004,0.465-0.008 l0,0c0.154-0.006,0.311-0.01,0.465-0.016l0,0c0.154-0.006,0.309-0.014,0.463-0.021l0,0c0.154-0.008,0.307-0.016,0.461-0.025l0,0 c0.154-0.01,0.307-0.021,0.459-0.033l0,0c0.154-0.012,0.307-0.023,0.459-0.037l0,0c8.693-0.779,16.527-4.656,22.383-10.512 c5.443-5.443,9.178-12.6,10.301-20.564v-0.002c0.043-0.299,0.082-0.602,0.117-0.904l0,0c0.035-0.303,0.066-0.605,0.092-0.912l0,0 c0.014-0.152,0.027-0.305,0.039-0.457l0,0c0.012-0.154,0.023-0.307,0.033-0.461l0,0c0.01-0.152,0.018-0.307,0.025-0.461l0,0 c0.008-0.154,0.016-0.309,0.021-0.463l0,0c0.006-0.154,0.01-0.309,0.014-0.465l0,0c0.004-0.154,0.008-0.309,0.01-0.465 s0.002-0.311,0.002-0.467c0-9.979-4.08-19.049-10.654-25.624C105.652,4.081,96.582,0,86.604,0L86.604,0z" />
		</g>
	</svg>
</form>

@endsection