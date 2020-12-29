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
    <div class="col-sm-10">
         <div class="row">
           <div class="col-sm-4">
              <img src="{{ asset('images/members/'.$user->image) }}" class="rounded-circle" alt="Profile Picture" width="95" height="95">
           </div>
         </div>
         <div class="row">
          
             <div class="col-sm-5">
              <div class="row" >
                <div class="col-sm-6">
                <span class="col-sm-3"><span class="badge badge-pill badge-light">Student Code:</span></span> 
                <span class="col-sm-3">{{ $user->person_id }}</span>
               </div>
              </div> <br> <br> 
              <div class="row">
                <div class="col-sm-6">
                <span class="col-sm-3"><span class="badge badge-pill badge-light">Firstname:</span></span> 
                <span class="col-sm-3">{{ $user->firstname }}</span>
               </div>
              </div> <br> <br>  
              <div class="row">
                <div class="col-sm-6">
                <span class="col-sm-3"><span class="badge badge-pill badge-light">Lastname:</span></span> 
                <span class="col-sm-3">{{ $user->lastname }}</span>
               </div>
              </div> <br> <br>  
              <div class="row">
                <div class="col-sm-6">
                <span class="col-sm-3"><span class="badge badge-pill badge-light">Class:</span></span> 
                <span class="col-sm-3">{{ $user->class }}</span>
               </div>
              </div> <br> <br> 
              
             </div>
             <div class="col-sm-7">
              <div class="row">
                <div class="col-sm-6">
                <span class="col-sm-3"><span class="badge badge-pill badge-light">Email:</span></span> 
                <span class="col-sm-3">{{ $user->email }}</span>
               </div>
              </div> <br> <br> 
              <div class="row">
                <div class="col-sm-6">
                <span class="col-sm-3"><span class="badge badge-pill badge-light">Phone:</span></span> 
                <span class="col-sm-3">{{ $user->phone }}</span>
               </div>
              </div> <br> <br> 
              <div class="row">
                <div class="col-sm-6">
                <span class="col-sm-3"><span class="badge badge-pill badge-light">Address:</span></span> 
                <span class="col-sm-3">{{ $user->address }}</span>
               </div>
              </div>
             </div>
          
         </div>
        </div>  
    </div>
  
</div> 

@endsection