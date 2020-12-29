@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card bg-dark text-white" style="margin-top: 200px; margin-bottom:100px;">
                <div class="card-header" style="letter-spacing: 0.2em"> <h3> {{ __('Verify Your Email Address') }}</h3></div>
                 <div class="card-body">
                    {{ __('We have sent an email with a confirmation link to your email address. In order to complete the sign-up process, please click the confirmation link.
                           If you do not receive a confirmation email, please check your spam folder. 
                           Also, please verify that you entered a valid email address in our sign-up form.') }}   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
