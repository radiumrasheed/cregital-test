@component('vendor.mail.html.layout')
	{{-- Header --}}
	@slot('header')
		@component('vendor.mail.html.header', ['url' => config('app.url')])
			{{ config('app.name') }}
		@endcomponent
	@endslot

	{{-- Body --}}
	Hi {{ $member->surname }}, {{ $member->first_name }},

	You have successfully registered with us.

	{{-- Subcopy --}}
	@slot('subcopy')
		@component('vendor.mail.html.subcopy')
			If you haven't initiated this registration, please reach out to us.
		@endcomponent
	@endslot

	{{-- Footer --}}
	@slot('footer')
		@component('vendor.mail.html.footer')
			© {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved
		@endcomponent
	@endslot
@endcomponent