@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card bg-light " style="margin-top: 200px; margin-bottom:100px;">
                <div class="card-header" style="letter-spacing: 0.2em"> <h4> {{ __('Verify Your Email Address') }}</h4></div>
                 <div class="card-body">
                    <p> <br> <em>
                        We have sent an email with a confirmation link to your email address. <br>
                        In order to complete the sign-up process, please click the confirmation link. <br>
                        If you do not receive a confirmation email, please check your spam folder. <br>
                        Also, please verify that you entered a valid email address in our sign-up form. <br></em>
                    </p>      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
