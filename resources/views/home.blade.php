@extends('layouts.master')

@section('title', 'Home')

@section('container')

<main>
	<div class="mobile">
		<div class="item-container mood">
			<p class="mood__day">Today</p>
			<p class="mood__date">15 Oct</p>
			<span class="mood__emoji">
				<svg width="45px" height="45px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M7.5 10C6.25369 10 5.26738 9.16489 5.04642 8H9.95358C9.73262 9.16489 8.74631 10 7.5 10Z" fill="#24EA53" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 7.5C0 3.35786 3.35786 0 7.5 0C11.6421 0 15 3.35786 15 7.5C15 11.6421 11.6421 15 7.5 15C3.35786 15 0 11.6421 0 7.5ZM4 6H5V5H4V6ZM4.5 7C4.36739 7 4.24021 7.05268 4.14645 7.14645C4.05268 7.24021 4 7.36739 4 7.5C4 9.47066 5.52934 11 7.5 11C9.47066 11 11 9.47066 11 7.5C11 7.36739 10.9473 7.24021 10.8536 7.14645C10.7598 7.05268 10.6326 7 10.5 7H4.5ZM11 6H10V5H11V6Z" fill="#24EA53" />
				</svg>
			</span>
		</div>

		<div class="item-container mood">
			<p class="mood__day">Yesterday</p>
			<p class="mood__date">14 Oct</p>
			<span class="mood__emoji">
				<svg width="45px" height="45px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M7.5 10C6.25369 10 5.26738 9.16489 5.04642 8H9.95358C9.73262 9.16489 8.74631 10 7.5 10Z" fill="#24EA53" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 7.5C0 3.35786 3.35786 0 7.5 0C11.6421 0 15 3.35786 15 7.5C15 11.6421 11.6421 15 7.5 15C3.35786 15 0 11.6421 0 7.5ZM4 6H5V5H4V6ZM4.5 7C4.36739 7 4.24021 7.05268 4.14645 7.14645C4.05268 7.24021 4 7.36739 4 7.5C4 9.47066 5.52934 11 7.5 11C9.47066 11 11 9.47066 11 7.5C11 7.36739 10.9473 7.24021 10.8536 7.14645C10.7598 7.05268 10.6326 7 10.5 7H4.5ZM11 6H10V5H11V6Z" fill="#24EA53" />
				</svg>
			</span>
		</div>
	</div>

	<div class="desktop">
		<div class="item-container today">
			<p>Today</p>
			<p class="today__date">15 Oct</p>
			<svg viewBox="0 0 24 24" class="today__emoji">
				<path d="M12,17.5C14.33,17.5 16.3,16.04 17.11,14H6.89C7.69,16.04 9.67,17.5 12,17.5M8.5,11A1.5,1.5 0 0,0 10,9.5A1.5,1.5 0 0,0 8.5,8A1.5,1.5 0 0,0 7,9.5A1.5,1.5 0 0,0 8.5,11M15.5,11A1.5,1.5 0 0,0 17,9.5A1.5,1.5 0 0,0 15.5,8A1.5,1.5 0 0,0 14,9.5A1.5,1.5 0 0,0 15.5,11M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" fill="#006dd9" />
			</svg>
		</div>

		<div class="item-container calendar">
			Month
			<div>akjshdkajsdadfasdjhasdjhsfaksjdfhksdjf</div>
		</div>


		<div class="history">
			<div class="history__item">
				<p class="history__day">Yesterday</p>
				<p class="history__date">{{ $entry }}</p>
				<span class="history__emoji"></span>
			</div>
			<div class="history__item">
				<p class="history__day">Wednesday</p>
				<p class="history__date">11 Oct</p>
				<span class="history__emoji">
					<svg viewBox="0 0 24 24" class="mood__svg">
						<path d="M12,17.5C14.33,17.5 16.3,16.04 17.11,14H6.89C7.69,16.04 9.67,17.5 12,17.5M8.5,11A1.5,1.5 0 0,0 10,9.5A1.5,1.5 0 0,0 8.5,8A1.5,1.5 0 0,0 7,9.5A1.5,1.5 0 0,0 8.5,11M15.5,11A1.5,1.5 0 0,0 17,9.5A1.5,1.5 0 0,0 15.5,8A1.5,1.5 0 0,0 14,9.5A1.5,1.5 0 0,0 15.5,11M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
					</svg>
				</span>
			</div>
			<div class="history__item">
				<p class="history__day">Tuesday</p>
				<p class="history__date">12 Oct</p>
				<span class="history__emoji">
					<svg viewBox="0 0 24 24" class="mood__svg">
						<path d="M12,17.5C14.33,17.5 16.3,16.04 17.11,14H6.89C7.69,16.04 9.67,17.5 12,17.5M8.5,11A1.5,1.5 0 0,0 10,9.5A1.5,1.5 0 0,0 8.5,8A1.5,1.5 0 0,0 7,9.5A1.5,1.5 0 0,0 8.5,11M15.5,11A1.5,1.5 0 0,0 17,9.5A1.5,1.5 0 0,0 15.5,8A1.5,1.5 0 0,0 14,9.5A1.5,1.5 0 0,0 15.5,11M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
					</svg>
				</span>
			</div>
		</div>

	</div>
</main>

@endsection