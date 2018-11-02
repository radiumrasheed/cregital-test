@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" align="center"> {{ __('Merchant Registration Form') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('member.store') }}" aria-label="{{ __('Member') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="districts"
                                       class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>

                                <div class="col-md-6">
                                    <input id="districts" type="text"
                                           class="form-control{{ $errors->has('districts') ? ' is-invalid' : '' }}"
                                           name="districts" value="{{ old('districts') }}" required
                                           autofocus>

                                    @if ($errors->has('districts'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('districts') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="surname"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="surname" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('surname'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="first_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text"
                                           class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                           name="first_name" value="{{ old('first_name') }}"
                                           required autofocus>

                                    @if ($errors->has('first_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--<div class="form-group row">--}}
                            {{--<label for="password"--}}
                            {{--class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                            {{--<input id="password" type="password"--}}
                            {{--class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"--}}
                            {{--name="password" value="{{ old('password') }}" required--}}
                            {{--autofocus>--}}

                            {{--@if ($errors->has('password'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                            {{--<strong>{{ $errors->first('password') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group row">
                                <label for="gender"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                <div class="col-md-6">
                                    <select id="gender" type="text"
                                            class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                            name="gender" value="{{ old('gender') }}" required autofocus>
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
                                <label for="phone_number"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="tel" maxlength="11"
                                           class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}"
                                           name="phone_number"
                                           value="{{ old('phone_number') }}" required autofocus>

                                    @if ($errors->has('phone_number'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <p align="center"><strong> Bank Details </strong></p>

                            <div class="form-group row">
                                <label for="bank_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Bank Name ') }}</label>
                                <div class="col-md-6">
                                    <select name="bank_name" id="bank_name" onchange="changeCat(this);"
                                            class="form-control{{ $errors->has('bank_name') ? ' is-invalid' : '' }}">
                                        <option value="">Select</option>
                                        <option value="access">Access Bank</option>
                                        <option value="diamond">Diamond Bank</option>
                                        <option value="citi">Citi Bank</option>
                                        <option value="eco">Eco Bank</option>
                                        <option value="fidelity">Fidelity Bank</option>
                                        <option value="first">First Bank</option>
                                        <option value="fcmb">First City Monument Bank</option>
                                        <option value="gtb">Guaranty Trust Bank</option>
                                        <option value="heritage">Heritage Bank</option>
                                        <option value="keystone">Keystone Bank</option>
                                        <option value="polaris">Polaris Bank</option>
                                        <option value="stanbic">Stanbic IBTC Bank</option>
                                        <option value="sterling">Sterling Bank</option>
                                        <option value="union">Union Bank</option>
                                        <option value="uba">United Bank For Africa</option>
                                        <option value="wema">Wema Bank</option>
                                        <option value="sun_trust">Sun Trust Bank</option>
                                        <option value="zenith">Zenith Bank</option>
                                        {{--<option value="first">First Bank</option>--}}
                                        {{--<option value="first">First Bank</option>--}}
                                        {{--<option value="first">First Bank</option>--}}
                                        {{--<option value="first">First Bank</option>--}}
                                        {{--<option value="first">First Bank</option>--}}
                                        {{--<option value="first">First Bank</option>--}}
                                        {{--<option value="first">First Bank</option>--}}
                                        {{--<option value="first">First Bank</option>--}}
                                        {{--<option value="first">First Bank</option>--}}


                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="account_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Account Name') }}</label>

                                <div class="col-md-6">
                                    <input id="account_name" type="text"
                                           class="form-control{{ $errors->has('account_name') ? ' is-invalid' : '' }}"
                                           name="account_name" value="{{ old('account_name') }}" required autofocus>

                                    @if ($errors->has('account_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('account_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="account_no"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Account Number') }}</label>

                                <div class="col-md-6">
                                    <input id="account_no" type="tel" :maxlength="10"
                                           class="form-control{{ $errors->has('account_no') ? ' is-invalid' : '' }}"
                                           name="account_no" value="{{ old('account_no') }}" required autofocus>

                                    @if ($errors->has('account_no'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('account_no') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="residential_address"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Residential address') }}</label>

                                <div class="col-md-6">
                                    <input id="residential_address" type="text"
                                           class="form-control{{ $errors->has('residential_address') ? ' is-invalid' : '' }}"
                                           name="residential_address"
                                           value="{{ old('residential_address') }}" required autofocus>

                                    @if ($errors->has('residential_address'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('residential_address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="business_category"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Business category') }}</label>

                                <div class="col-md-6">
                                    <select name="business_category" id="business_category" onchange="changeCat(this);"
                                            class="form-control{{ $errors->has('business_category') ? ' is-invalid' : '' }}">
                                        <option value="">Select</option>
                                        <option value="automative_industrial">Automotive & Industrial</option>
                                        <option value="baby_kids_toys">Baby, Kids and Toys</option>
                                        <option value="beauty_health_personalcare"> Beauty, Health & Personal Care
                                        </option>
                                        <option value="books_media_library"> Books & Media Library</option>
                                        <option value="computers_accessories"> Computers and Accessories</option>
                                        <option value="drinks_groceries"> Drinks & Groceries</option>
                                        <option value="electronics"> Electronics</option>
                                        <option value="fashion"> Fashion</option>
                                        <option value="home_kitchen"> Home and Kitchen</option>
                                        <option value="lifestyle_services"> Lifestyle & Services</option>
                                        <option value="office_school_supplies"> Office & School Supplies</option>
                                        <option value="home_kitchen"> Home and Kitchen</option>
                                        <option value="phones_tablets"> Phones and Tablets</option>
                                        <option value="sports_fitness">Sports and Fitness</option>
                                        <option value="other_categories"> Other categories</option>
                                    </select>

                                    {{--<div class="col-md-6">--}}
                                    {{--<input id="business_category" type="text"--}}
                                    {{--class="form-control{{ $errors->has('business_category') ? ' is-invalid' : '' }}"--}}
                                    {{--name="business_category"--}}
                                    {{--value="{{ old('business_category') }}" required autofocus>--}}

                                    @if ($errors->has('business_category'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('business_category') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="business_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Business name') }}</label>

                                <div class="col-md-6">
                                    <input id="business_name" type="text"
                                           class="form-control{{ $errors->has('business_name') ? ' is-invalid' : '' }}"
                                           name="business_name"
                                           value="{{ old('business_name') }}" required autofocus>

                                    @if ($errors->has('business_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('business_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="business_location"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Business Location') }}</label>

                                <div class="col-md-6">
                                    <input id="business_location" type="text"
                                           class="form-control{{ $errors->has('business_location') ? ' is-invalid' : '' }}"
                                           name="business_location" value="{{ old('business_location') }}" required
                                           autofocus>

                                    @if ($errors->has('business_location'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('business_location') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="discount_permitted"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Discount permitted') }}</label>

                                <div class="col-md-6">
                                    <input id="discount_permitted" type="text"
                                           class="form-control{{ $errors->has('discount_permitted') ? ' is-invalid' : '' }}"
                                           name="discount_permitted"
                                           value="{{ old('discount_permitted') }}" required autofocus>

                                    @if ($errors->has('discount_permitted'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('discount_permitted') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="payment_method"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Payment Method') }}</label>

                                <div class="col-md-6">
                                    <select id="payment_method" type="text"
                                            class="form-control{{ $errors->has('payment_method') ? ' is-invalid' : '' }}"
                                            name="payment_method"
                                            required autofocus>
                                        <option value="prepaid"> prepaid</option>
                                        <option value="payment_on_delivery"> payment on delivery</option>
                                        <option value="both"> both</option>
                                    </select>

                                    @if ($errors->has('payment_method'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('payment_method') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            {{--<h4> Subscription Mode </h4>--}}
                            {{--<p> SUBSCRIPTION AMOUNT DESCRIPTION (Please select one of the 3 category below)</p>--}}

                            {{--<div class="form-group row">--}}
                            {{--<label for="subscription_mode"--}}
                            {{--class="col-md-4 col-form-label text-md-right">{{ __('Subscription mode') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                            {{--<select name="subscription_mode" id="subscription_mode" onchange="changeCat(this);"--}}
                            {{--class="form-control{{ $errors->has('payment_method') ? ' is-invalid' : '' }}">--}}
                            {{--<option value="">Select</option>--}}
                            {{--<option value="monthly">Monthly</option>--}}
                            {{--<option value="quarterly">Quarterly</option>--}}
                            {{--<option value="annually">Annually</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}



                            {{--// mega drop down (super drop down)--}}

                            {{--<div class="form-group row">--}}
                            {{--<label for="subscription_mode"--}}
                            {{--class="col-md-4 col-form-label text-md-right">{{ __('Subscription amount description') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                            {{--<select name="subscription_mode" id="category" size="5"--}}
                            {{--class="form-control{{ $errors->has('payment_method') ? ' is-invalid' : '' }}">--}}
                            {{--<option value="">Select</option>--}}
                            {{--</select>--}}

                            {{--@if ($errors->has('subscription_mode'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                            {{--<strong>{{ $errors->first('subscription_mode') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}


                            {{--<script>--}}
                            {{--let monthly = ["5products/servicespictures #1,000", "10products/servicespictures #2,000", "20produtcs/servicespictures #4,000", "30products/servicespictures #5,700", "Artisans #500", "Professionals #1000"];--}}
                            {{--let quarterly = ["5products/servicespictures #3,000", "10products/servicespictures #6,000", "20produtcs/servicespictures #12,000", "30products/servicespictures #17,100", "Artisans #1500", "Professionals #3,000"];--}}
                            {{--let annually = ["5products/servicespictures #12,000", "10products/servicespictures #24,000", "20produtcs/servicespictures #48,000", "30products/servicespictures #68,400", "Artisans #12,000", "Professionals #24,000"];--}}

                            {{--let changeCat = function changeCat(firstList) {--}}
                            {{--let newSel = document.getElementById("category");--}}
                            {{--//if you want to remove this default option use newSel.innerHTML=""--}}
                            {{--newSel.innerHTML = "<option value=\"\">Select</option>"; // to reset the second list everytime--}}
                            {{--let opt;--}}

                            {{--//test according to the selected value--}}
                            {{--switch (firstList.options[firstList.selectedIndex].value) {--}}
                            {{--case "monthly":--}}
                            {{--for (let i = 0; len = monthly.length, i < len; i++) {--}}
                            {{--opt = document.createElement("option");--}}
                            {{--opt.value = monthly[i];--}}
                            {{--opt.text = monthly[i];--}}
                            {{--newSel.appendChild(opt);--}}
                            {{--}--}}
                            {{--break;--}}

                            {{--case "quarterly":--}}
                            {{--for (let i = 0; len = quarterly.length, i < len; i++) {--}}
                            {{--opt = document.createElement("option");--}}
                            {{--opt.value = quarterly[i];--}}
                            {{--opt.text = quarterly[i];--}}
                            {{--newSel.appendChild(opt);--}}
                            {{--}--}}
                            {{--break;--}}
                            {{--case "annually":--}}
                            {{--for (let i = 0; len = annually.length, i < len; i++) {--}}
                            {{--opt = document.createElement("option");--}}
                            {{--opt.value = annually[i];--}}
                            {{--opt.text = annually[i];--}}
                            {{--newSel.appendChild(opt);--}}
                            {{--}--}}
                            {{--break;--}}
                            {{--}--}}

                            {{--}--}}

                            {{--</script>--}}

                            {{----}}

                            {{--<div class="form-group row">--}}
                            {{--<label for="monthly_subscription_rates" class="col-md-4 col-form-label text-md-right">{{ __(' Category 1. monthly subscription rate') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                            {{--<select id="monthly_subscription_rates" type="text" class="form-control{{ $errors->has('monthly_subscription_rates') ? ' is-invalid' : '' }}"--}}
                            {{--name="monthly_subscription_rates">--}}
                            {{--<option value="">Select</option>--}}
                            {{--<option value="5product/servicespictures1,000">5 product/services pictures 1,000</option>--}}
                            {{--<option value="10product/servicespictures2,000">10 product/ services pictures 2,000</option>--}}
                            {{--<option value="20product/servicespictures4,000"> 20 product / services pictures 4,000</option>--}}
                            {{--<option value="30product/servicespictures5,700">30 product / services pictures 5,700</option>--}}
                            {{--<option value="Artisans500">Artisans 500</option>--}}
                            {{--<option value="professionals1,000">professionals 1,000</option>--}}
                            {{--</select>--}}
                            {{--@if ($errors->has('monthly_subscription_rates'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                            {{--<strong>{{ $errors->first('monthly_subscription_rates') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                            {{--<label for="quarterly_subscription_rates" class="col-md-4 col-form-label text-md-right">{{ __('Category 2. Quarterly subscription rates ') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                            {{--<select id="quarterly_subscription_rates" type="text" class="form-control{{ $errors->has('quarterly_subscription_rates') ? ' is-invalid' : '' }}"--}}
                            {{--name="quarterly_subscription_rates">--}}
                            {{--<option value="">Select</option>--}}
                            {{--<option value="10product/servicespictures6,000">10 product/ services pictures 6,000</option>--}}
                            {{--<option value="20product/servicespictures12,000"> 20 product / services pictures 12,000</option>--}}
                            {{--<option value="30product/servicespictures17,100">30 product / services pictures 17,100</option>--}}
                            {{--<option value="Artisans1,500">Artisans 1,500</option>--}}
                            {{--<option value="professionals3,000">professionals 3,000</option>--}}
                            {{--</select>--}}
                            {{--@if ($errors->has('quarterly_subscription_rates'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                            {{--<strong>{{ $errors->first('quarterly_subscription_rates') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                            {{--<label for="annually_subscription_rates" class="col-md-4 col-form-label text-md-right">{{ __(' Category 3. Annually subscription rates') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                            {{--<select id="annually_subscription_rates" type="text" class="form-control{{ $errors->has('annually_subscription_rates') ? ' is-invalid' : '' }}"--}}
                            {{--name="annually_subscription_rates">--}}
                            {{--<option value="">Select</option>--}}
                            {{--<option value="5product/servicespictures12,000">5 product/ services pictures 12,000</option>--}}
                            {{--<option value="10product/servicespictures24,000">10 product/ services pictures 24,000</option>--}}
                            {{--<option value="20product/servicespictures48,000"> 20 product / services pictures 48,000</option>--}}
                            {{--<option value="30product/servicespictures68,400">30 product / ses pictures 68,400</option>--}}
                            {{--<option value="Artisans12,000">Artisans 12,000</option>--}}
                            {{--<option value="professionals24,000">professionals 24,000</option>--}}
                            {{--</select>--}}
                            {{--@if ($errors->has('annually_subscription_rates'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                            {{--<strong>{{ $errors->first('annually_subscription_rates') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group row">
                                <label for="rc_number"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Rc number (Company Registration Number)') }}</label>

                                <div class="col-md-6"> Optional
                                    <input id="rc_number" type="text" maxlength="6"
                                           class="form-control{{ $errors->has('rc_number') ? ' is-invalid' : '' }}"
                                           name="rc_number" value="{{ old('rc_number') }}">

                                    @if ($errors->has('rc_number'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rc_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            {{--<div class="form-group row">--}}
                            {{--<label for="delivery_services"--}}
                            {{--class="col-md-4 col-form-label text-md-right">{{ __('Delivery services') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                            {{--<select id="delivery_services" type="text"--}}
                            {{--class="form-control{{ $errors->has('delivery_services') ? ' is-invalid' : '' }}"--}}
                            {{--name="delivery_services" required autofocus>--}}
                            {{--<option value="merchant_to_pay">Merchant to pay for delivery</option>--}}
                            {{--<option value="customer_to_pay">Customer to pay for delivery</option>--}}
                            {{--</select>--}}

                            {{--@if ($errors->has('delivery_service'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                            {{--<strong>{{ $errors->first('delivery_service') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group row">--}}
                            {{--<label for="name_of_care_group_leader"--}}
                            {{--class="col-md-4 col-form-label text-md-right">{{ __('Name of care group leader') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                            {{--<input id="name_of_care_group_leader" type="text"--}}
                            {{--class="form-control{{ $errors->has('name_of_care_group_leader') ? ' is-invalid' : '' }}"--}}
                            {{--name="name_of_care_group_leader"--}}
                            {{--value="{{ old('name_of_care_group_leader') }}" required autofocus>--}}

                            {{--@if ($errors->has('name_of_care_group_leader'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                            {{--<strong>{{ $errors->first('name_of_care_group_leader') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group row">
                                <label for="care_group"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Care group') }}</label>

                                <div class="col-md-6">
                                    <input id="care_group" type="text"
                                           class="form-control{{ $errors->has('care_group') ? ' is-invalid' : '' }}"
                                           name="care_group"
                                           value="{{ old('care_group') }}" required autofocus>

                                    @if ($errors->has('care_group'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('care_group') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telephone"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                                <div class="col-md-6">
                                    <input id="telephone" type="tel" maxlength="11"
                                           class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}"
                                           name="telephone" value="{{ old('telephone') }}" required autofocus>

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

@endsection
