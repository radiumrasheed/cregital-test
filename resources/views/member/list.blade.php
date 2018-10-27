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

						<table class="table table-responsive">
							<thead>
							<tr>
								<th> ID</th>
								<th> Districts</th>
								<th> Surname</th>
								<th> First name</th>
								<th> Gender</th>
								<th> Phone Number</th>
								<th> Email</th>
								<th> Residential Address</th>
								<th> Business Category</th>
								<th> Business Name</th>
								<th> Business Location</th>
								<th> Discount Permitted</th>
								<th> Payment Method</th>
								<th> Subscription Mode</th>
								<th> Monthly Subscription Rates</th>
								<th> Quarterly Subscription Rates </th>
								<th> Annually Subscription Rates</th>
								<th> RC Number</th>
								<th> Delivery Services</th>
								<th> Name of Care Group Leader</th>
								<th> Care Group </th>
								<th> Telephone</th>

							</tr>
							</thead>
							<tbody>
							@foreach($members as $member)
								<tr>
									<td> {{ $member->id }} </td>
									<td> {{ $member->districts }} </td>
									<td> {{ $member->surname }} </td>
									<td> {{ $member->first_name }} </td>
									<td> {{ $member->gender }} </td>
									<td> {{ $member->phone_number }} </td>
									<td> {{ $member->email }} </td>
									<td> {{ $member->residential_address }} </td>
									<td> {{ $member->business_category }} </td>
									<td> {{ $member->business_name }} </td>
									<td> {{ $member->business_location }} </td>
									<td> {{ $member->discount_permitted }} </td>
									<td> {{ $member->payment_method }} </td>
									<td> {{ $member->subscription_mode }} </td>
									<td> {{ $member->monthly_subscription_rates }} </td>
									<td> {{ $member->quaterly_subscription_rates }} </td>
									<td> {{ $member->annually_subscription_rates }} </td>
									<td> {{ $member->rc_number }} </td>
									<td> {{ $member->delivery_services }} </td>
									<td> {{ $member->name_of_care_group_leader }} </td>
									<td> {{ $member->care_group }} </td>
									<td> {{ $member->telephone }} </td>
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
