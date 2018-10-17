@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header" align="center"> {{ __('Member (Merchant)  Registration Form') }}</div>

					<div class="card-body">
						<form method="POST" action="{{ route('member.store') }}" aria-label="{{ __('Member') }}">
							@csrf

							<div class="form-group row">
								<label for="districts" class="col-md-4 col-form-label text-md-right">{{ __('Districts') }}</label>

								<div class="col-md-6">
									<input id="districts" type="text" class="form-control{{ $errors->has('districts') ? ' is-invalid' : '' }}" name="districts" value="{{ old('districts') }}" required autofocus>

									@if ($errors->has('districts'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('districts') }}</strong>
                                    </span>
									@endif
								</div>
							</div>


							<div class="form-group row">
								<label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

								<div class="col-md-6">
									<input id="surname" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="surname" value="{{ old('name') }}" required autofocus>

									@if ($errors->has('surname'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="first name" class="col-md-4 col-form-label text-md-right">{{ __('first name') }}</label>

								<div class="col-md-6">
									<input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

									@if ($errors->has('first_name'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>

								<div class="col-md-6">
									<input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>

									@if ($errors->has('password'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('gender') }}</label>

								<div class="col-md-6">
									<select id="gender" type="text" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}" required autofocus>
										<option value="male"> male</option>
										<option value="female">female</option>
									</select>

									@if ($errors->has('gender'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="phone number" class="col-md-4 col-form-label text-md-right">{{ __('phone number') }}</label>

								<div class="col-md-6">
									<input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required autofocus>

									@if ($errors->has('phone_number'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
									@endif
								</div>
							</div>


							<div class="form-group row">
								<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

								<div class="col-md-6">
									<input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

									@if ($errors->has('email'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
									@endif
								</div>
							</div>


							<div class="form-group row">
								<label for="residential address" class="col-md-4 col-form-label text-md-right">{{ __('residential address') }}</label>

								<div class="col-md-6">
									<input id="residential_address" type="text" class="form-control{{ $errors->has('residential_address') ? ' is-invalid' : '' }}" name="residential_address" value="{{ old('residential_address') }}" required autofocus>

									@if ($errors->has('residential_address'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('residential_address') }}</strong>
                                    </span>
									@endif
								</div>
							</div>


							<div class="form-group row">
								<label for="business category" class="col-md-4 col-form-label text-md-right">{{ __('business category') }}</label>

								<div class="col-md-6">
									<input id="business_category" type="text" class="form-control{{ $errors->has('business_category') ? ' is-invalid' : '' }}" name="business_category" value="{{ old('business_category') }}" required autofocus>

									@if ($errors->has('business_category'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('business_category') }}</strong>
                                    </span>
									@endif
  								</div>
							</div>


							<div class="form-group row">
								<label for="business_name" class="col-md-4 col-form-label text-md-right">{{ __('business_name') }}</label>

								<div class="col-md-6">
									<input id="business_name" type="text" class="form-control{{ $errors->has('business_name') ? ' is-invalid' : '' }}" name="business_name" value="{{ old('business_name') }}" required autofocus>

									@if ($errors->has('business_name'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('business_name') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="business location" class="col-md-4 col-form-label text-md-right">{{ __('business location') }}</label>

								<div class="col-md-6">
									<input id="business_location" type="text" class="form-control{{ $errors->has('business_location') ? ' is-invalid' : '' }}" name="business_location" value="{{ old('business_location') }}" required autofocus>

									@if ($errors->has('business_location'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('business_location') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="discounted permitted" class="col-md-4 col-form-label text-md-right">{{ __('discounted permitted') }}</label>

								<div class="col-md-6">
									<input id="discounted_permitted" type="text" class="form-control{{ $errors->has('discounted_permitted') ? ' is-invalid' : '' }}" name="discounted_permitted" value="{{ old('discounted_permitted') }}" required autofocus>

									@if ($errors->has('discounted_permitted'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('discounted_permitted') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="payment method" class="col-md-4 col-form-label text-md-right">{{ __('payment method') }}</label>

								<div class="col-md-6">
									<select id="payment_method" type="text" class="form-control{{ $errors->has('payment_method') ? ' is-invalid' : '' }}" name="payment_method" value="{{ old('payment_method') }}" required autofocus>
									<option value="prepaid"> prepaid</option>
									<option value="payment_on_delivery">payment on delivery</option>
										<option value="both"> both </option>
									</select>

									@if ($errors->has('payment_method'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('payment_method') }}</strong>
                                    </span>
									@endif
								</div>
							</div>


							<div class="form-group row">
								<label for="subscription mode" class="col-md-4 col-form-label text-md-right">{{ __('subscription mode') }}</label>



								<div class="col-md-6">
									<select id="subscription_mode" type="text" class="form-control{{ $errors->has('subscription_mode') ? ' is-invalid' : '' }}" name="subscription_mode"  required autofocus>
										<option value="monthly">monthly</option>
										<option value="quarterly">quarterly</option>
										<option value="annually">annually</option>
									</select>


									@if ($errors->has('subscription_mode'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subscription_mode') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<P> SUBSCRIPTION AMOUNT DESCRIPTION (Please select one of the 3 category below)</P>

							<div class="form-group row">
								<label for=" 1. monthly subscription rate" class="col-md-4 col-form-label text-md-right">{{ __(' 1. monthly subscription rate') }}</label>

								<div class="col-md-6">
									<select id="monthly_subscription_rate" type="text" class="form-control{{ $errors->has('monthly_subscription_rate') ? ' is-invalid' : '' }}" name="monthly_subscription_rate"  required autofocus>
									<option value="5product/servicespictures1,000">5 product/services pictures 1,000</option>
									<option value="10product/servicespictures2,000">10 product/ services pictures 2,000</option>
									<option value="20product/servicespictures4,000"> 20 product / services pictures 4,000 </option>
									<option value="30product/servicespictures5,700">30 product / services pictures 5,700</option>
									<option value="Artisans500">Artisans 500</option>
									<option value="professionals1,000">professionals 1,000</option>
									</select>
									@if ($errors->has('monthly_subscription_rate'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('monthly_subscription_rate') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="2. Quarterly subscription rates " class="col-md-4 col-form-label text-md-right">{{ __('2. Quarterly subscription rates ') }}</label>

								<div class="col-md-6">
									<select id="Quarterly_subscription_rates " type="text" class="form-control{{ $errors->has('quarterly_subscription_rate') ? ' is-invalid' : '' }}" name="quarterly subscription rates "  required autofocus>

										<option value="10product/servicespictures6,000">10 product/ services pictures 6,000</option>
										<option value="20product/servicespictures12,000"> 20 product / services pictures 12,000 </option>
										<option value="30product/servicespictures17,100">30 product / services pictures 17,100</option>
										<option value="Artisans1,500">Artisans 1,500</option>
										<option value="professionals3,000">professionals 3,000</option>
									</select>
									@if ($errors->has('quarterly_subscription_rates'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('quarterly_subscription_rates') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for=" 3. Annually subscription rates" class="col-md-4 col-form-label text-md-right">{{ __(' 3. Annually subscription rates') }}</label>

								<div class="col-md-6">
									<select id="Annually_subscription_rates" type="text" class="form-control{{ $errors->has('Annually_subscription_rates') ? ' is-invalid' : '' }}" name="Annually subscription rates"  required autofocus>

										<option value="5product/servicespictures12,000">10 product/ services pictures 12,000</option>
											<option value="10product/servicespictures24,000">10 product/ services pictures 24,000</option>
											<option value="20product/servicespictures48,000"> 20 product / services pictures 48,000 </option>
											<option value="30product/servicespictures68,400">30 product / services pictures 68,400</option>
											<option value="Artisans12,000">Artisans 12,000</option>
											<option value="professionals24,000">professionals 24,000</option>
										</select>
									@if ($errors->has('annually_subscription_rates'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('annually_subscription_rates') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="rc number" class="col-md-4 col-form-label text-md-right">{{ __('rc number (if available)') }}</label>

								<div class="col-md-6">
									<input id="rc_number" type="text" class="form-control{{ $errors->has('rc_number') ? ' is-invalid' : '' }}" name="rc_number" value="{{ old('rc_number') }}" required autofocus>

									@if ($errors->has('rc_number'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rc_number') }}</strong>
                                    </span>
									@endif
								</div>
							</div>


							<div class="form-group row">
								<label for="delivery services" class="col-md-4 col-form-label text-md-right">{{ __('delivery services') }}</label>

								<div class="col-md-6">
									<input id="delivery_services" type="text" class="form-control{{ $errors->has('delivery_services') ? ' is-invalid' : '' }}" name="delivery_services" value="{{ old('delivery_services') }}" required autofocus>

									@if ($errors->has('delivery_service'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('delivery_service') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="name of care group leader" class="col-md-4 col-form-label text-md-right">{{ __('name of care group leader') }}</label>

								<div class="col-md-6">
									<input id="name_of_care_group_leader" type="text" class="form-control{{ $errors->has('name_of_care_group_leader') ? ' is-invalid' : '' }}" name="name_of_care_group_leader" value="{{ old('name_of_care_group_leader') }}" required autofocus>

									@if ($errors->has('name_of_care_group_leader'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name_of_care_group_leader') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="care group" class="col-md-4 col-form-label text-md-right">{{ __('care group') }}</label>

								<div class="col-md-6">
									<input id="care_group" type="text" class="form-control{{ $errors->has('care_group') ? ' is-invalid' : '' }}" name="care_group" value="{{ old('care_group') }}" required autofocus>

									@if ($errors->has('care_group'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('care_group') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('telephone') }}</label>

								<div class="col-md-6">
									<input id="telephone" type="text" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" required autofocus>

									@if ($errors->has('telephone'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
									@endif
								</div>
							</div>



							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary">
										{{ __('Register') }}
									</button>
								</div>
							</div>


						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
