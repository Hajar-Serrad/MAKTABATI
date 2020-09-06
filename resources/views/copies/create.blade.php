@extends('layouts.appAdmin')
@section('title','Add A Copy')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card bg-dark text-white" style="margin-top: 200px; margin-bottom:100px;">
                <div class="card-header" style="letter-spacing: 0.2em"> <h3> {{ __('Add A Copy') }}</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('copies.store') }}">
                        @csrf
                        <input type="hidden" value="{{ $number }}" name="number">
                        <div class="form-group row">
                            <label for="ISBN" class="col-md-1 col-form-label text-md-right"> <i class="fas fa-book fa-2x"></i> </label>
                        <div class="col-md-11" >
                            <input value="{{ $ISBN }}" class="form-control"  id="ISBN" name="ISBN" required="true">    
                            </div>
                           </div>

                           <div class="form-group row">
                            <label for="editor" class="col-md-1 col-form-label text-md-right"> <i class="fas fa-book-open fa-2x"></i> </label>
   
                               <div class="col-md-11">
                                   <input id="editor" type="name" placeholder="Editor" class="form-control" name="editor" required="true">
                               </div>
                           </div>
                          <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-11 offset-md-1">
                                <button  type="submit" class="btn btn-primary btn-lg btn-block" style="letter-spacing: 0.1em;">
                                    {{ __('Add') }}  
                                    <i class="fas fa-plus-circle"></i>
                                </button> <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection