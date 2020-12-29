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
              <img src="{{ asset('images/members/'.$user->image) }}" class="rounded-circle" alt="Profile Picture" width="170" height="170">
           </div>
         </div>
       <center>
         <div class="row">
          <div class="col-sm-6">
            <span class="badge badge-pill badge-light">Student Code:</span> <span>{{ $user->person_id }}</span> <br>
            <span class="badge badge-pill badge-light">Firstname:</span> <span>{{ $user->firstname }}</span> <br>
            <span class="badge badge-pill badge-light">Lastname:</span> <span>{{ $user->lastname }}</span> <br>
            <span class="badge badge-pill badge-light">Class:</span> <span>{{ $user->class }}</span> <br>
          </div>
          <div class="col-sm-6">
            <span class="badge badge-pill badge-light">Email:</span> <span>{{ $user->email }}</span> <br>
            <span class="badge badge-pill badge-light">Phone:</span> <span>{{ $user->phone }}</span> <br>
            <span class="badge badge-pill badge-light">Address:</span> <span>{{ $user->address }}</span> <br>
          </div>
        </div>
       </center>
    </div>
  
</div> 

@endsection