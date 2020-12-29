@extends('layouts.appAdmin')
@section('title','WELCOME TO MAKTABATI')
@section('css')
<style>
.alert-success{
    background-color:#01DFA5;
}
.alert-light{
    background-color: #2E2E2E;
}
</style>
@endsection
@section('content')
<div style="padding-top: 150px; padding-left: 10px; padding-right: 10px;">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
</div>

<div style="padding-top: 15px; padding-bottom:70px; ">
<div class="container">
    @auth('admin')
     <center>
            <div class="card-body" style="font-family: 'Arial Black'; font-size: 28px;">
                <p class="badge badge-pill badge-light" style="letter-spacing:0.2em;padding:15px;;">Happy to see you 
                    <b>{{ strtoupper(Auth::guard('admin')->user()->firstname) }}!</b>
                </p> <br>
                <p class="badge badge-pill badge-dark" style="background-color: #1B0A2A;letter-spacing:0.2em;padding:15px;">
                    We count on you to make this site as awesome as you can!
                </p> <br>
                <p class="badge badge-pill badge-light" style="background-color: rgb(209, 171, 219);letter-spacing:0.2em; padding:15px;">
                    Have a good day!
                </p>
                <br>
                <br>
                <div class="row" style="padding-left: 150px;">
                    <div class="col-sm-3">
                        <a href="{{ route('index') }}" title="Click here if you want manage the books">
                            <button class="btn btn-outline-dark btn-lg btn-block" style="height: 70px; width:px;">BOOKS</button>
                        </a>
                    </div>
                    
                    <div class="col-sm-3" style="padding-left: 40px;">
                        <a href="{{ route('borrowing.index') }}" title="Click here if you want manage the borrowings">
                            <button class="btn btn-light btn-lg btn-block" style="height: 70px; width:px;">BORROWINGS LIST</button>
                        </a>                    
                    </div>

                    <div class="col-sm-3" style="padding-left: 40px;">
                        <a href="{{ route('borrowing.index') }}" title="Click here if you want manage the borrowings">
                            <button class="btn btn-light btn-lg btn-block" style="height: 70px; width:px;">BORROWINGS LIST</button>
                        </a>                    
                    </div>

                    <div class="col-sm-1"></div>        
                </div>
            </div>

        </center>
    @endauth
</div></div>
@endsection