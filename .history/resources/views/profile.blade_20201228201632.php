@extends('layouts.app')
@section('title','Profile')
@section('css')
<style>

</style>
@endsection
@section('content')    
<div style="padding-top: 150px; padding-left: 40px;">
  <div class="row">
    <div class="col-sm-2">
        <a href="{{ route('home') }}"> <button  class="btn btn-dark" >
            <i class="fas fa-arrow-left"></i> &nbsp; <b> {{ __('Return to the main page') }}</b> 
                
            </button> </a> 
            
    </div>
  </div> <br> <br> 
  
    <div class="row" style="font-size: 18px; font-family:Geneva, Tahoma, sans-serif;">
         <div class="col-sm-1"></div>
         <div class="col-sm-11">
          
          <div class="row">
              <div class="col-sm-5">
                <div class="row">
                  <div class="col-sm-6">
                     <img src="{{ asset('images/members/'.$user->image) }}" class="rounded-circle" alt="Profile Picture" width="120" height="120">
                  </div>
                </div> <br> <br> <br> <br> 
               <div class="row" >
                 <div class="col-sm-6">
                  <span class="col-sm-6"><span class="badge badge-pill badge-dark" style="padding: 7px; font-size:17px;">Student Code</span></span> 
                 <span class="col-sm-6">{{ $user->person_id }}</span>
                </div>
               </div> <br> <br>
               <div class="row">
                 <div class="col-sm-6">
                  <span class="col-sm-6"><span class="badge badge-pill badge-light" style="rgb(209, 171, 219); padding: 7px; font-size:17px;">Firstname</span></span> 
                 <span class="col-sm-6">{{ $user->firstname }}</span>
                </div>
               </div> <br>  <br> 
               <div class="row">
                 <div class="col-sm-6">
                  <span class="col-sm-6"><span class="badge badge-pill badge-dark" style="padding: 7px; font-size:17px;">Lastname</span></span> 
                 <span class="col-sm-6">{{ $user->lastname }}</span>
                </div>
               </div> <br>   <br>
               <div class="row">
                 <div class="col-sm-6">
                <span class="col-sm-6"><span class="badge badge-pill badge-light" style="rgb(209, 171, 219); padding: 7px; font-size:17px;">Class</span></span> 
                 <span class="col-sm-6">{{ $user->class }}</span>
                </div>
               </div> <br> <br> 
               
              </div>
              <div class="col-sm-7">
                 <br> <br> <br> <br> 
               <div class="row">
                 <div class="col-sm-6">
                 <span class="col-sm-6"><span class="badge badge-pill badge-light" style="rgb(209, 171, 219); padding: 7px; font-size:17px;">Email</span></span> 
                 <span class="col-sm-6">{{ $user->email }}</span>
                </div>
               </div> <br> <br>
               <div class="row">
                 <div class="col-sm-6">
                 <span class="col-sm-6"><span class="badge badge-pill badge-dark" style="padding: 7px; font-size:17px;">Phone</span></span> 
                 <span class="col-sm-6">{{ $user->phone }}</span>
                </div>
               </div> <br> <br>
               <div class="row">
                 <div class="col-sm-6">
                 <span class="col-sm-6"><span class="badge badge-pill badge-light" style="rgb(209, 171, 219); padding: 7px; font-size:17px;">Address</span></span> 
                 <span class="col-sm-6">{{ $user->address }}</span>
                </div>
               </div>

               <br> <br>
               <div class="row">
                 <div class="col-sm-6">
                 <span class="col-sm-11"><span class="badge badge-pill badge-dark" style="
                 .padding: 7px; font-size:17px;">Number of books I'm borrowing</span></span> 
                 <span class="col-sm-1">{{ $array['n1'] }}</span>
                </div>
               </div>

               <br> <br>
               <div class="row">
                 <div class="col-sm-6">
                 <span class="col-sm-11"><span class="badge badge-pill badge-light" style="rgb(209, 171, 219); padding: 7px; font-size:17px;">Number of books I have already borrowed</span></span> 
                 <span class="col-sm-1">{{ $array['n2'] }}</span>
                </div>
               </div>




              </div>
           
          </div>
         </div>
         
        </div>  
    </div>
  
</div> 

@endsection