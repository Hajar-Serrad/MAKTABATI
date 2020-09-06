@extends('layouts.appAdmin')
@section('title','Edit A Book')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card bg-dark text-white" style="margin-top: 200px; margin-bottom:100px;">
                <div class="card-header" style="letter-spacing: 0.2em"> <h3> {{ __('Enter the new details') }}</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('books.update',$book->ISBN) }}" enctype="multipart/form-data">
                        @method('PATCH') 
                        @csrf
                        <div class="form-group row">
                         <label for="title" class="col-md-1 col-form-label text-md-right"> <i class="fas fa-grip-lines fa-2x"></i> </label>

                            <div class="col-md-11">
                                <input id="title" type="text" value="{{ $book->title }}" class="form-control" name="title" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="author" class="col-md-1 col-form-label text-md-right"> <i class="fas fa-user fa-2x"></i> </label>
   
                               <div class="col-md-11">
                                   <input id="author" type="name" value="{{ $book->author }}" class="form-control" name="author" >
                               </div>
                        </div>
                        <br>
                        <div class="form-group row">
                        <label for="category" class="col-md-1 col-form-label text-md-right"> <i class="fas fa-tasks fa-2x"></i> </label>
                        <div class="col-md-11" >
                                <select class="mdb-select form-control" id="type" name="category" >
                                    <option value="{{ $book->category }}" disabled selected>{{ $book->category }}</option>
                                    <option >computer science</option> 
                                    <option >statistics</option>
                                    <option >analysis</option>
                                    <option >algebra</option>
                                    <option >mechanics</option>
                                    <option >chemistry</option>
                                    <option >electronic</option>
                                    <option >networks</option>
                                    <option >automatic</option>
                                    <option >communication and personal development</option>
                                    <option >novels</option>
                                </select>
                            </div>
                           </div>
                           <br>
                           <div class="form-group row">
                            <label for="image" class="col-md-1 col-form-label text-md-right" class="custom-file-label"> <i class="fas fa-camera fa-2x"></i> </label>
                            &nbsp; &nbsp; &nbsp; 
                            <div class="col-md-10">
                             <input type="file" class="form-control" id="image" name="image" value="{{ $book->image }}"> 
                            <label class="custom-file-label" for="image">Cover Picture...</label> 
                            </div>
                          </div> 
                           <br>
                           <div class="form-group row">
                            <label for="description" class="col-md-1 col-form-label text-md-right"> <i class="fas fa-file-alt fa-2x"></i> </label>
   
                               <div class="col-md-11">
                                <textarea class="form-control " id="description" name="desc" value="{{ $book->description }}"></textarea>
                                </div>
                           </div>
                          <br> <br>
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