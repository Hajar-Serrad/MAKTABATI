@extends('layouts.app')
@section('title', strtoupper($book->title) )
@section('css')
<style>
    .alert-success{
        background-color: crimson;
        color: #F2E0F7;
        font-size: 20px;
        
    }
    .alert-danger{
        background-color: #1B0A2A;
        color: #F2E0F7;
        font-size: 20px;
        
    }
</style>
@endsection
@section('content')

    <div style="padding-top: 150px; padding-bottom: 70px;">
        
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif 
    <div class="container">
        @guest
        <div class="alert alert-danger" role="alert" style="background-color: #1B0A2A; color: whitesmoke;">
            
            <b>
                You must log in if you want borrow a book! <br> If you don't have an account yet please create one!
            </b> 
            
        </div>  
        @endguest
        <br> <br> 
        <div class="row">
        <div class="col-md-2">  <a href="{{ route('books.index') }}"> <button  class="btn btn-dark" >
        <i class="fas fa-arrow-left"></i> &nbsp; <b> {{ __('Return') }}</b> 
            
        </button> </a> 
        </div> 
        
        <div class="col-md-9">
            <div > <center> 
                <span class="badge badge-pill badge-light" style="font-family: 'Bahnschrift Condensed'; letter-spacing: 0.5em; color: rgb(19, 4, 32); padding:11.50px;"> 
                    <h3> <?= strtoupper($book->title) ?></h3>
                </span> </center> <br> <br> <br> 
                <center>
                    <img src=" {{ asset('images/covers/'.$book->image) }} " alt="cover picture" height="390px;" width="390px;">
                </center> <br> <br>
                <p>  <span style="color: gray; font-size:22px;"><b>Written by:</b> &nbsp; &nbsp; </span> 
                    <span class="badge badge-pill badge-light " style="background-color: rgb(209, 171, 219); font-size:18px; ">  <?= strtoupper($book->author) ?></span>   </p>
                <br> <br>
                <p> <span style="color: gray; font-size:22px;"> <b> About:</b> </span> <br> <br>
                    <span style="font-family: 'Bahnschrift Condensed'; font-size: 21px;"><?= $book->description ?></span> </p> 
                <br> <br>
                <p>  <span style="color: gray; font-size:22px;"><b>Available editions:</b> &nbsp; &nbsp; </span> <br> <br>      
                @if($total)    
                    @for ($i = 0; $i < $total; $i++)
                    <ul>
                        <span style="font-family: 'Bahnschrift Condensed'; font-size: 21px;">    
                            <li> {{ $nbr[$i]->editor }} &nbsp; ( {{ $nbr[$i]->total }} ) </li>
                        </span>
                    </ul>
                    @endfor
                    <br>
                    @auth
                    <center>
                        <button class="btn btn-light btn-lg"  data-toggle="modal" data-target="#Modal" style="cursor: pointer;"> Borrow this book</button> 
                                        <!-- Modal -->
                                            <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" style="font-family: 'Bahnschrift Condensed'; font-size: 23px; background-color:thistle;">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content" style="background-color: #1B0A2A; color: whitesmoke;">
                                                        <div class="modal-header">
                                                            <p> &nbsp; <span style="color: "> <b>{{ strtoupper(Auth::user()->firstname) }}</b>  </span>, are you sure you want to borrow the book <span class="badge badge-pill badge-light">" {{ strtoupper($book->title) }} "</span>
                                                                written by <span class="badge badge-pill badge-light"> " {{ strtoupper($book->author) }} "</span> ?</p> 
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="badge badge-pill badge-info">
                                                                Choose the edition you prefer <br> among those presented below to confirm your borrow.  
                                                            </p>
                                                       
                                                        
                                                            
                                                            <form action="{{ route('borrow') }}" method="POST">
                                                                @csrf
                                                                    
                                                                    <input type="hidden" value="{{ Auth::id() }}" name="id">
                                                                    <input type="hidden" value="{{ $book->ISBN }}" name="ISBN">
                                                                    @for ($i = 0; $i < $total; $i++)
                                                                            <input type="radio" id="editor{{ $i }}"  name="editor" value="{{ $nbr[$i]->editor }}" required>
                                                                            <label for="editor{{ $i }}" >{{ $nbr[$i]->editor }}</label> <br>
                                                                    @endfor

                                                                    <br>
                                                                    <div class="alert-info" role="alert">
                                                                        Please note, as soon as you validate this step you will be recognized as a borrower
                                                                        of this book for a period of 15 days, you will therefore have to go to the library 
                                                                        to collect it as soon as possible to benefit from it as much as you can.
                                                                    </div>
                                                                    <br>
                                                                
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> &nbsp; &nbsp; &nbsp;
                                                                    <button type="submit" class="btn btn-primary" >Borrow Now</button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                    </center>
                    @endauth
                @else
                    <div class="alert alert-dark" role="alert" style="background-color: #F2E0F7; color:rgb(19, 4, 32);">
                        <center>
                            <b>   All copies are borrowed... <br>
                                  Please try after few days or check the responsible of the library for more informations! </b> 
                        </center>
                    </div>
                @endif
                </p>
            </div>
            
        </div>
        
    </div>
    </div>
</div>
@endsection