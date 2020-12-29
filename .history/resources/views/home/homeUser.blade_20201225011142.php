@extends('layouts.app')
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
<div style="padding-top: 20px; padding-bottom:70px; ">
    <div class="container">
        @auth
         <center>
                <div class="card-body" style="font-family: 'Arial Black'; font-size: 28px; ">
                    <p class="badge badge-pill badge-light" style="padding:15px;letter-spacing:0.2em;">Happy to see you 
                        <b>{{ strtoupper(Auth::user()->firstname) }}!</b>
                    </p> <br> <br>
                    <p class="badge badge-pill badge-dark" style="background-color: #1B0A2A; padding:15px;letter-spacing:0.2em;">
                        Maktabati is for you!  
                    </p> <br>
                    <p class="badge badge-pill badge-dark" style="background-color: #1B0A2A; padding:15px;letter-spacing:0.2em;">
                       So please enjoy and learn as much as possible from it!
                    </p> <br> <br>
                    <p class="badge badge-pill badge-light" style="background-color: rgb(209, 171, 219); padding:15px;letter-spacing:0.2em;">
                        Have a good day!
                    </p>
                    <br>
                    <br>
                       
                            <a href="{{ route('books.index') }}" title="Click here if you want discover ou borrow a book">
                                <button class="btn btn-outline-dark btn-lg btn-block" style="height: 70px; width:500px;">BOOKS</button>
                            </a>      
                        
                </div>
    
            </center>
        @endauth
    </div></div>
@endsection