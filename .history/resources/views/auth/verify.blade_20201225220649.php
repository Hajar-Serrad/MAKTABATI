@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card bg-dark text-white" style="margin-top: 200px; margin-bottom:100px;">
                <div class="card-header" style="letter-spacing: 0.2em"> <h3> {{ __('Verify Your Email Address') }}</h3></div>
                 <div class="card-body">
                    {{ __('Before proceeding, please check your email for a verification link.') }}   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
