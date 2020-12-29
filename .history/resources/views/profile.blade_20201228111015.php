@extends('layouts.app')
@section('title','Profile')
@section('css')
<style>

</style>
@endsection
@section('content')    
<div style="padding-top: 120px; padding-left: 40px;">
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
          
           </center>
        </div>
      
    </div>
  
</div> 

@endsection