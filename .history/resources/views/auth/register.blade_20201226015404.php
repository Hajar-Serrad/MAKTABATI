@extends('layouts.app')
@section('title','REGISTER')
@section('css')
<style>
    .alert-danger{
     background-color: #1B0A2A;
     color: whitesmoke;
    }
</style>
@endsection
@section('content')
<div style="padding-top: 150px; padding-left: 10px; padding-right: 10px;">
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card bg-dark text-white" style="margin-top: 200px; margin-bottom:100px; ">
                <div class="card-header" style="letter-spacing: 0.2em"> <h3> {{ __('Register') }}</h3></div>

                <div class="card-body">
                    <form method="post" action="{{ route('register2') }}">
                        @csrf

                        <div class="form-group row">
                         <label for="email" class="col-md-1 col-form-label text-md-right"> <i class="fas fa-envelope fa-2x"> </i> </label>

                            <div class="col-md-11">
                                <input id="email" type="email" placeholder="Please Enter Your Email Address" class="form-control" name="email"  required>
                            </div>
                        </div> <div class="form-group">
                        <div class="col-md-7 offset-md-1"> 
                       
                           Already have an account?<a class="btn btn-link" href="{{ route('Adminlogin1') }}"> {{ __('Login') }} </a> </div>
                            <div class="text-right">
                                <button  type="submit" class="btn btn-primary " style="letter-spacing: 0.1em; ">
                                    {{ __('Next') }} &nbsp; 
                                    <i class="fas fa-arrow-right"></i>
                                </button> <br>
                            
                        </div> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
