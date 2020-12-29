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
       
         <div class="row">
           <div class="col-sm-4">
              <img src="{{ asset('images/members/'.$user->image) }}" class="rounded-circle" alt="Profile Picture" width="95" height="95">
           </div>
         </div>
       <center>
         <div class="row">
          <div class="col-sm-6">
            <span class="badge badge-pill badge-light"> &nbsp; Student Code:</span> <span>&nbsp;&nbsp;{{ $user->person_id }}</span> <br> <br>
            <span class="badge badge-pill badge-light">&nbsp;Firstname:</span> <span>&nbsp;&nbsp;{{ $user->firstname }}</span> <br> <br>
            <span class="badge badge-pill badge-light">&nbsp;Lastname:</span> <span>&nbsp;&nbsp;{{ $user->lastname }}</span> <br> <br>
            <span class="badge badge-pill badge-light">&nbsp;Class:</span> <span>&nbsp;&nbsp;{{ $user->class }}</span> <br> <br>
          </div>
          <div class="col-sm-6">
            <span class="badge badge-pill badge-light">&nbsp;Email:</span> <span>&nbsp;&nbsp;{{ $user->email }}</span> <br> <br>
            <span class="badge badge-pill badge-light">&nbsp;Phone:</span> <span>&nbsp;&nbsp;{{ $user->phone }}</span> <br> <br>
            <span class="badge badge-pill badge-light">&nbsp;Address:</span> <span>&nbsp;&nbsp;{{ $user->address }}</span> <br> <br>
          </div>
        </div>
       </center>
    </div>
  
</div> 

@endsection