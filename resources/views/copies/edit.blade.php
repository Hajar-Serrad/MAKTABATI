@extends('layouts.appAdmin')
@section('title','Edit A Copy')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card bg-dark text-white" style="margin-top: 200px; margin-bottom:100px;">
                <div class="card-header" style="letter-spacing: 0.2em"> <h3> {{ __('Edit Copies') }}</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update2') }}">
                        @csrf
                        <input type="hidden" value="{{ $ISBN }}" name="ISBN">
                        <input type="hidden" value="{{ $editor }}" name="oldEditor">

                           <div class="form-group row">
                            <label for="editor" class="col-md-1 col-form-label text-md-right"> <i class="fas fa-book-open fa-2x"></i> </label>
   
                               <div class="col-md-11">
                                   <input id="editor" type="name" placeholder="New Editor" class="form-control" name="newEditor" required="true">
                               </div>
                           </div>
                          <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-11 offset-md-1">
                                <button  type="submit" class="btn btn-primary btn-lg btn-block" style="letter-spacing: 0.1em;">
                                    {{ __('Edit') }}<i class="fas fa-pen"></i>
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