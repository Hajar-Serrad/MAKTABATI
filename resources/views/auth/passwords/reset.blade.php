@extends('layouts.app')
@section('title','Reset Password')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white" style="margin-top: 200px; margin-bottom:100px;">
                <div class="card-header" style="letter-spacing: 0.2em"> <h3> {{ __('Reset Password') }} </h3>  </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-1 col-form-label text-md-right"> <i class="fas fa-envelope fa-2x"> </i> </label>

                            <div class="col-md-11">
                                <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-1 col-form-label text-md-right"><i class="fas fa-lock fa-2x"></i></label>

                            <div class="col-md-11">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-1 col-form-label text-md-right"><i class="fas fa-lock fa-2x"></i></label>

                            <div class="col-md-11">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" required autocomplete="new-password">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-11 offset-md-1">
                                <button  type="submit" class="btn btn-primary btn-lg btn-block" style="letter-spacing: 0.1em">
                                    {{ __('Reset Password') }} &nbsp; 
                                    <i class="fas fa-unlock"></i>
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
