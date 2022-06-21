<nav>
	<h1>
		<!-- Logo -->
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.636 30.554" width="30" style="margin-right: 10px">
			<g data-name="Group 5">
				<path data-name="Path 63" d="M28.053 13.941a6.99 6.99 0 1 1-13.979 0C14.074 10.081 21.026 0 21.026 0s7.027 9.445 7.027 13.941Z" fill="#294d75" />
				<path data-name="Path 64" d="M28.053 14.114a7.01 7.01 0 0 1-6.907 6.817c-3.666.164-5.7-2.89-5.7-6.559s6.386-13.288 6.386-13.288 6.394 8.802 6.221 13.03Z" fill="#294d75" />
				<path data-name="Path 65" d="M13.17 16.41s-4.639 1.316-4.44 4.111c.165 2.3 3.947 3.454 3.947 3.454a25.878 25.878 0 0 0 8.84 1.327c5.469-.013 8.1-1.492 8.1-1.492s3.182-1.316 3.289-3.125c.164-2.8-3.454-3.947-3.454-3.947" fill="none" stroke="#294d75" stroke-miterlimit="10" stroke-width="2" />
				<path data-name="Path 66" d="M12.512 13.285S1 15.094 1 21.179c0 6.414 12.334 8.387 12.334 8.387" fill="none" stroke="#294d75" stroke-miterlimit="10" stroke-width="2" />
				<path data-name="Path 67" d="M30.602 13.614s9.881 2.3 10.032 7.73c.165 5.921-11.677 8.059-11.677 8.059" fill="none" stroke="#294d75" stroke-miterlimit="10" stroke-width="2" />
			</g>
		</svg>
		MoodTrack
	</h1>

	<!-- Menu -->
	<ul class="nav__ul">
		<li class="nav__li">
			<a href="/home" class="nav__a">Home</a>
		</li>
		<li class="nav__li">
			<a href="/entry" class="nav__a">Entry</a>
		</li>
		<li class="nav__li">
			<a href="/calendar" class="nav__a">Calendar</a>
		</li>

		@if(auth()->guest())
		<li class="nav__li">
			<a class="nav__a" href="{{ route('login') }}">
				<svg data-name="Group 145" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" width="35" height="35">
					<defs>
						<linearGradient id="a" x1=".5" x2=".5" y2="1" gradientUnits="objectBoundingBox">
							<stop offset="0" stop-color="#294d75" />
							<stop offset="1" stop-color="#000e1d" />
						</linearGradient>
						<linearGradient id="b" x1=".5" x2=".5" y2="1" gradientUnits="objectBoundingBox">
							<stop offset=".32" stop-color="#294d75" />
							<stop offset=".44" stop-color="#26486e" />
							<stop offset=".62" stop-color="#1c3a5a" />
							<stop offset=".84" stop-color="#0d2239" />
							<stop offset="1" stop-color="#000e1d" />
						</linearGradient>
						<linearGradient id="c" x1=".499" x2=".499" y2="1.001" gradientUnits="objectBoundingBox">
							<stop offset="0" stop-color="#294d75" />
							<stop offset=".09" stop-color="#234367" />
							<stop offset=".36" stop-color="#10263f" />
							<stop offset=".58" stop-color="#041526" />
							<stop offset=".72" stop-color="#000e1d" />
						</linearGradient>
					</defs>
					<path data-name="Path 128" d="M708.22 280.5a14 14 0 1 1-14 14 14 14 0 0 1 14-14m0-3.5a17.5 17.5 0 1 0 17.5 17.5 17.5 17.5 0 0 0-17.5-17.5Z" transform="translate(-690.72 -277)" fill="url(#a)" />
					<path data-name="Path 129" d="M710.018 287a4.8 4.8 0 1 0 4.8 4.8 4.8 4.8 0 0 0-4.8-4.8Z" transform="translate(-692.518 -278.24)" fill="url(#b)" />
					<path data-name="Path 130" d="M708.766 303.489a12.28 12.28 0 0 1 9.335 4.3 14.052 14.052 0 0 1-18.67 0 12.28 12.28 0 0 1 9.335-4.3m0-3.489A15.773 15.773 0 0 0 695 308.113a17.556 17.556 0 0 0 27.6 0A15.772 15.772 0 0 0 708.8 300Z" transform="translate(-691.266 -279.83)" fill="url(#c)" />
				</svg>
			</a>
		</li>
		@else
		<li class="nav__li">
			<a class="nav__logout" href="{{ route('logout') }}">
				Log out
			</a>
		</li>
		@endif

	</ul>
</nav>