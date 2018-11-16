@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" align="center"> {{ __('Card Payment Form') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal"
                              role="form">
                            <div class="row" style="margin-bottom:40px;">
                                <div class="col-md-8 col-md-offset-2">
                                    <p>
                                    <div>
                                        Subscription Fee
                                        ₦ 1,500
                                    </div>
                                    </p>
                                    <input type="hidden" name="email"
                                           value="anchorfellowshipabj@gmail.com"> {{-- required --}}
                                    <input type="hidden" name="orderID" value="345">
                                    <input type="hidden" name="amount" value="150000"> {{-- required in kobo --}}
                                    <input type="hidden" name="quantity" value="6">
                                    <input type="hidden" name="metadata"
                                           value="{{ json_encode($array = ['key_name' => 'value',]) }}"> {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                    <input type="hidden" name="reference"
                                           value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                    <input type="hidden" name="key"
                                           value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                                    {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                    <input type="hidden" name="_token"
                                           value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


                                    <p>
                                        <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                            <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
