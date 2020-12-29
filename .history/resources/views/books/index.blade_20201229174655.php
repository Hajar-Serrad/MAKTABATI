@extends('layouts.app')
@section('title','BOOKS')
@section('css')
<style>
.alert-success{
    background-color:#01DFA5;
}
.alert-light{
    background-color: #2E2E2E;
}
.active-purple-2 input.form-control[type=text]:focus:not([readonly]) {
  border-bottom: 1px solid #ce93d8;
  box-shadow: 0 1px 0 0 #ce93d8;
}
.active-purple .fa, .active-purple-2 .fa {
  color: #ce93d8;
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
<div style="padding-top: 30px; padding-left: 50px;">
    <div class="row">
    <div class="col-sm-2">
        <a href="{{ route('home') }}"> <button  class="btn btn-dark" >
            <i class="fas fa-arrow-left"></i> &nbsp; <b> {{ __('Return') }}</b> 
                
            </button> </a> 
            
    </div>
<div class="col-sm-8"> 
    <!-- Search form -->
    <form class="form-inline d-flex justify-content-center md-form form-sm active-purple active-purple-2 mt-2">
        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Type an ISBN, a title or an author"
               aria-label="Search">
        <i class="fas fa-search" ></i>
    </form>
    <br> <br> <br>
    @foreach( $books as $book )
        
        @php
          static $category;
          if($category == $book->category)
          {
              continue;
          }
        @endphp
        <div class="alert alert-light" role="alert">
            <center>
            <a href="#" style="color: whitesmoke;"> <h4> <?= strtoupper($book->category) ?> </h4> </a>
            </center>
        </div>
          
         <br> <br>
        @php
          $category = $book->category;  
        @endphp
        <div class="row">
        @foreach( $books as $book )
          @if($book->category == $category)
            <div class="col-sm-5">
                <center>
                    <img src=" {{ asset('images/covers/'.$book->image) }} " alt="cover picture" height="250px;" width="250px;">
                </center>
                
                <div class="card " style="background-color: snow">
                    <br>
                    <div class="card-title"> <center> <a href="{{ route('books.show', $book->ISBN) }}" style="color: #1B0A2A;">
                        <span style="font-family: 'Bahnschrift Condensed'; letter-spacing: 0.1em; "> <h5> <?= strtoupper($book->title) ?></h5></span></a></center> </div>
                    <div class="card-body">
                        <p>  <span style="color: gray; font-size:19px;"><b>Written by:</b> </span> 
                            <span class="badge badge-pill badge-light" style="background-color: rgb(209, 171, 219); "><?= strtoupper($book->author) ?></span>   </p>
                        <p> <span style="color: gray; font-size:19px;"> <b> About:</b> </span> 
                            <span style="font-family: 'Bahnschrift Condensed'; font-size: 18px;"><?= substr($book->description , 0 , 40) ?></span>   &nbsp; 
                            <a href="{{ route('books.show', $book->ISBN) }}" style="color: red" > ... See more </a>  </p> 
                    </div>
                </div>
            
        </div>
        <div class="col-sm-1"></div>
       
       @endif
     @endforeach
    </div>
    <br> <br> <br> 
  @endforeach 
    
</div>
</div>
</div> 

<div class="row">
<div class="col-sm-5"></div>
      <div class="col-sm-1">
      
          {!! $books->render(); !!}
   
      </div>
<div class="col-sm-4"></div> 
</div></div>
@endsection