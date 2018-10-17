@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">Member List</div>

					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif

						<table class="table table-bordered">
							<thead>
							<tr>
								<th> ID</th>
								<th> Districts</th>
								<th> Surname</th>
							</tr>
							</thead>
							<tbody>
							@foreach($members as $member)
								<tr>
									<td> {{ $member->id }} </td>
									<td> {{ $member->districts }} </td>
									<td> {{ $member->surname }} </td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
