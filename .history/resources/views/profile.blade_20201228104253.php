@extends('layouts.app')
@section('title','Profile')
@section('css')
<style>

</style>
@endsection
@section('content')    
<div style="padding-top: 150px; padding-left: 50px;">
  <div class="row">
    <div class="col-sm-2">
        <a href="{{ route('home') }}"> <button  class="btn btn-dark" >
            <i class="fas fa-arrow-left"></i> &nbsp; <b> {{ __('Return to the main page') }}</b> 
                
            </button> </a> 
            
    </div>
    <div class="col-sm-10"> 
       <center>
         <div class="row">
           <div class="col-sm-4" class="rounded-circle" >
              <img src="{{ asset('images/members/'.$user->image) }}" alt="Profile Picture" width="150" height="150">
           </div>
         </div>
       </center>
    </div>
  </div>
</div> 

@endsection