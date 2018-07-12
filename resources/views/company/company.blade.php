<!-- /resources/views/company/create.blade.php -->

<h1>Create Company</h1>

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<!-- Create Company Form -->