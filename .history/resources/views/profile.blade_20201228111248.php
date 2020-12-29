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
       <center>
         
         
            <div class="row">
              <div class="col-sm-6">
              <span class="col-sm-3"><span class="badge badge-pill badge-light">&nbsp; Student Code:</span></span> 
              <span class="col-sm-3">&nbsp;&nbsp;{{ $user->person_id }}</span>
             </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
              <span class="col-sm-3"><span class="badge badge-pill badge-light">&nbsp; Firstname:</span></span> 
              <span class="col-sm-3">&nbsp;&nbsp;{{ $user->firstname }}</span>
             </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
              <span class="col-sm-3"><span class="badge badge-pill badge-light">&nbsp; Lastname:</span></span> 
              <span class="col-sm-3">&nbsp;&nbsp;{{ $user->lastname }}</span>
             </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
              <span class="col-sm-3"><span class="badge badge-pill badge-light">&nbsp; Class:</span></span> 
              <span class="col-sm-3">&nbsp;&nbsp;{{ $user->class }}</span>
             </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
              <span class="col-sm-3"><span class="badge badge-pill badge-light">&nbsp; Email:</span></span> 
              <span class="col-sm-3">&nbsp;&nbsp;{{ $user->email }}</span>
             </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
              <span class="col-sm-3"><span class="badge badge-pill badge-light">&nbsp; Phone:</span></span> 
              <span class="col-sm-3">&nbsp;&nbsp;{{ $user->phone }}</span>
             </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
              <span class="col-sm-3"><span class="badge badge-pill badge-light">&nbsp; Address:</span></span> 
              <span class="col-sm-3">&nbsp;&nbsp;{{ $user->address }}</span>
             </div>
            </div>
          
       </center>
        </div>
      
    </div>
  
</div> 

@endsection