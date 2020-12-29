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
  <div class="row">
    <div class="col-sm-4">
       <img src="{{ asset('images/members/'.$user->image) }}" class="rounded-circle" alt="Profile Picture" width="120" height="120">
    </div>
  </div> <br> <br>
    <div class="row" style="font-size: 19px; font-family: sans-serif; ">
         <div class="col-sm-1"></div>
         <div class="col-sm-11">
          
          <div class="row">
           
              <div class="col-sm-5">
               <div class="row" >
                 <div class="col-sm-6">
                  &nbsp;&nbsp;<span class="col-sm-3"><span class="badge badge-pill badge-dark" style="padding: 6px;">Student Code</span></span> 
                 <span class="col-sm-3">{{ $user->person_id }}</span>
                </div>
               </div> <br> 
               <div class="row">
                 <div class="col-sm-6">
                  &nbsp;&nbsp;<span class="col-sm-3"><span class="badge badge-pill badge-dark" style="padding: 6px;">Firstname</span></span> 
                 <span class="col-sm-3">{{ $user->firstname }}</span>
                </div>
               </div> <br>   
               <div class="row">
                 <div class="col-sm-6">
                  &nbsp;&nbsp;<span class="col-sm-3"><span class="badge badge-pill badge-dark" style="padding: 6px;">Lastname</span></span> 
                 <span class="col-sm-3">{{ $user->lastname }}</span>
                </div>
               </div> <br>   
               <div class="row">
                 <div class="col-sm-6">
                &nbsp;&nbsp; <span class="col-sm-3"><span class="badge badge-pill badge-dark" style="padding: 6px;">Class</span></span> 
                 <span class="col-sm-3">{{ $user->class }}</span>
                </div>
               </div> <br> <br> 
               
              </div>
              <div class="col-sm-7">
               <div class="row">
                 <div class="col-sm-6">
                 <span class="col-sm-3"><span class="badge badge-pill badge-dark" style="padding: 6px;">Email</span></span> 
                 <span class="col-sm-3">{{ $user->email }}</span>
                </div>
               </div> <br> 
               <div class="row">
                 <div class="col-sm-6">
                 <span class="col-sm-3"><span class="badge badge-pill badge-dark" style="padding: 6px;">Phone</span></span> 
                 <span class="col-sm-3">{{ $user->phone }}</span>
                </div>
               </div> <br>
               <div class="row">
                 <div class="col-sm-6">
                 <span class="col-sm-3"><span class="badge badge-pill badge-dark" style="padding: 6px; font-size:15px;">Address</span></span> 
                 <span class="col-sm-3">{{ $user->address }}</span>
                </div>
               </div>
              </div>
           
          </div>
         </div>
         
        </div>  
    </div>
  
</div> 

@endsection