@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" align="center"> {{ __('Card Enrollment Form') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('cardenrollment.store') }}" aria-label="{{ __('Card') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email_address" type="email" class="form-control{{ $errors->has('email_address') ? ' is-invalid' : '' }}" name="email_address" value="{{ old('email_address') }}" required
                                           autofocus>

                                    @if ($errors->has('email_address'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email_address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="church_group" class="col-md-4 col-form-label text-md-right">{{ __('Church Group') }}</label>

                                <div class="col-md-6">
                                    <input id="church_group" type="text" class="form-control{{ $errors->has('church_group') ? ' is-invalid' : '' }}" name="church_group" value="{{ old('church_group') }}" required autofocus>

                                    @if ($errors->has('church_group'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('church_group') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="district" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>

                                <div class="col-md-6">
                                    <input id="district" type="text" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" value="{{ old('district') }}"
                                           required autofocus>

                                    @if ($errors->has('district'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('district') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <p align="center"> PERSONAL DETAILS</p>

                            <div class="form-group row">
                                <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth (DD/MM/YYYY') }}</label>

                                <div class="col-md-6">
                                    <input id="dob" type="dob" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required
                                           autofocus>
                                    @if ($errors->has('dob'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

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
                                <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required
                                           autofocus>

                                    @if ($errors->has('surname'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                <div class="col-md-6">
                                    <input id="firstname" type="tel" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname"
                                           value="{{ old('firstname') }}" required autofocus>

                                    @if ($errors->has('firstname'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="middlename" class="col-md-4 col-form-label text-md-right">{{ __(' Middle Name') }}</label>

                                <div class="col-md-6">
                                    <input id="residential_address" type="text" class="form-control{{ $errors->has('middlename') ? ' is-invalid' : '' }}" name="middlename"
                                           value="{{ old('middlename') }}" required autofocus>

                                    @if ($errors->has('middlename'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('middlename') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="mobile_number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                                <div class="col-md-6">
                                    <input id="mobile_number" type="tel" maxlength="11" class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}"
                                           name="mobile_number" value="{{ old('mobile_number') }}" required autofocus>

                                    @if ($errors->has('telephone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="residential_address" class="col-md-4 col-form-label text-md-right">{{ __('Residential Address ') }}</label>

                                <div class="col-md-6">
                                    <input id="residential_address" type="text" class="form-control{{ $errors->has('residential_address') ? ' is-invalid' : '' }}" name="residential_address"
                                           value="{{ old('residential_address') }}" required autofocus>

                                    @if ($errors->has('residential_address'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('residential_address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="bvn" class="col-md-4 col-form-label text-md-right">{{ __('BVN') }}</label>

                                <div class="col-md-6">
                                    <input id="bvn" type="tel" maxlength="11" class="form-control{{ $errors->has('bvn') ? ' is-invalid' : '' }}" name="bvn"
                                           value="{{ old('bvn') }}" required autofocus>

                                    @if ($errors->has('bvn'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bvn') }}</strong>
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
