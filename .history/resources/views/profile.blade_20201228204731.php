@extends('layouts.app')
@section('title','Profile')
@section('css')
<style>
 
</style>
@endsection
@section('content')  
 
 
  
  <div style="padding-top: 150px; padding-left: 40px; color: black; ">
    <div class="row">
      <div class="col-sm-2">
          <a href="{{ route('home') }}"> <button  class="btn btn-dark" >
              <i class="fas fa-arrow-left"></i> &nbsp; <b> {{ __('Return to the main page') }}</b> 
                  
              </button> </a> 
              
      </div>
      
     
           <div class="col-sm-10" class="row" style="font-size: 18px; font-family:Geneva, Tahoma, sans-serif;"> <br> <br> 
        <div class="card " style="margin: 50px; padding: 10px;">
     
               
            <div class="row"> 
                <div class="col-sm-5"> 
                  <div class="row">
                    <div class="col-sm-6"> 
                       <img src="{{ asset('images/members/'.$user->image) }}" class="rounded-circle" alt="Profile Picture" width="120" height="120">
                    </div>
                  </div> <br> <br> <br>  
                 <div class="row" >
                   
                    <span class="col-sm-4"><span class="badge badge-pill badge-dark" style="padding: 7px; font-size:17px;">Student Code</span></span> 
                   <span class="col-sm-4">{{ $user->person_id }}</span>
                  
                 </div> <br> <br>
                 <div class="row">
                   
                    <span class="col-sm-4"><span class="badge badge-pill badge-light" style="rgb(209, 171, 219); padding: 7px; font-size:17px;">Firstname</span></span> 
                   <span class="col-sm-4">{{ $user->firstname }}</span>
             
                 </div> <br>  <br> 
                 <div class="row">
                   
                    <span class="col-sm-4"><span class="badge badge-pill badge-dark" style="padding: 7px; font-size:17px;">Lastname</span></span> 
                   <span class="col-sm-4">{{ $user->lastname }}</span>
               
                 </div> <br>   <br>
                 <div class="row">
                 
                  <span class="col-sm-4"><span class="badge badge-pill badge-light" style="rgb(209, 171, 219); padding: 7px; font-size:17px;">Class</span></span> 
                   <span class="col-sm-4">{{ $user->class }}</span>
             
                 </div> <br> <br> 
                 
                </div>
                <div class="col-sm-7">
                   <br> <br> <br> <br> <br> 
                 <div class="row">
                   
                   <span class="col-sm-2"><span class="badge badge-pill badge-dark" style=" padding: 7px; font-size:17px;">Email</span></span> 
                   <span class="col-sm-10">{{ $user->email }}</span>
                 
                 </div> <br> <br>
                 <div class="row">
                   
                   <span class="col-sm-2"><span class="badge badge-pill badge-light" style="rgb(209, 171, 219); padding: 7px; font-size:17px;">Phone</span></span> 
                   <span class="col-sm-5">{{ $user->phone }}</span>
                
                 </div> <br> <br>
                 <div class="row">
                  
                   <span class="col-sm-2"><span class="badge badge-pill badge-dark" style="padding: 7px; font-size:17px;">Address</span></span> 
                   <span class="col-sm-5">{{ $user->address }}</span>
                 
                 </div>
  
                 <br> <br>
                 <div class="row">
                  
                   <span class="col-sm-5"><span class="badge badge-pill badge-light" style="rgb(209, 171, 219);
                   .padding: 7px; font-size:17px;">Number of books I'm borrowing</span></span> 
                   <span class="col-sm-2">{{ $array['n1'] }}</span>
                  
                 </div>
  
                 <br> <br>
                 <div class="row">
                   
                   <span class="col-sm-6"><span class="badge badge-pill badge-dark" style="padding: 7px; font-size:16px;">Number of books I have already borrowed</span></span> 
                   <span class="col-sm-2">{{ $array['n2'] }}</span> 
                 </div>
                </div>       
            </div>
           </div>
          </div>
          </div> </div>  
     
    
  </div> 
 

@endsection