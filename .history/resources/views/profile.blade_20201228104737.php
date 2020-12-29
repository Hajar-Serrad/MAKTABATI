@extends('layouts.app')
@section('title','Profile')
@section('css')
<style>

</style>
@endsection
@section('content')    
<div style="padding-top: 200px; padding-left: 40px;">
  <div class="row">
    <div class="col-sm-2">
        <a href="{{ route('home') }}"> <button  class="btn btn-dark" >
            <i class="fas fa-arrow-left"></i> &nbsp; <b> {{ __('Return to the main page') }}</b> 
                
            </button> </a> 
            
    </div>
  </div> <br> <br> <br> <br>
    <div class="col-sm-10"> 
       <center>
         <div class="row">
           <div class="col-sm-4">
              <img src="{{ asset('images/members/'.$user->image) }}" class="rounded-circle" alt="Profile Picture" width="170" height="170">
           </div>
         </div>
         <div class="row">
          <div class="col-sm-6">
            
          </div>
        </div>
       </center>
    </div>
  
</div> 

@endsection