@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Card Enrollment List</div>

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
                                <th> Email</th>
                                <th> Church Group</th>
                                <th> District</th>
                                <th> Date of Birth</th>
                                <th> Gender</th>
                                <th> Surname</th>
                                <th> First name</th>
                                <th> Middle name</th>
                                <th> Mobile number</th>
                                <th> Residential Address</th>
                                <th> BVN</th>
                                <th> Passport</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cardenrollments as $cardenrollment)
                                <tr>
                                    <td> {{ $cardenrollment->id }} </td>
                                    <td> {{ $cardenrollment->email_address }} </td>
                                    <td> {{ $cardenrollment->church_group }} </td>
                                    <td> {{ $cardenrollment->district }} </td>
                                    <td> {{ $cardenrollment->dob }} </td>
                                    <td> {{ $cardenrollment->gender }} </td>
                                    <td> {{ $cardenrollment->surname }} </td>
                                    <td> {{ $cardenrollment->firstname }} </td>
                                    <td> {{ $cardenrollment->middlename }} </td>
                                    <td> {{ $cardenrollment->mobile_number }} </td>
                                    <td> {{ $cardenrollment->residential_address }} </td>
                                    <td> {{ $cardenrollment->bvn }} </td>
                                    <td><img src='{{ asset('public/img/'.$cardenrollment->passport_name) }}'></td>
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
