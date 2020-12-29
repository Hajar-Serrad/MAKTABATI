@extends('layouts.app')

@section('content')
<div class="container">
    <div style="padding-top: 150px; padding-left: 10px; padding-right: 10px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
