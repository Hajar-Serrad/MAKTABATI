@extends('layouts.appAdmin')
@section('title', strtoupper($book->title) )
@section('css')
<style>
    .alert-success{
        background-color: crimson;
        color: #F2E0F7;
        font-size: 20px;
        
    }
    .alert-danger{
        background-color: #1B0A2A;
        color: #F2E0F7;
        font-size: 20px;
        
    }
    .btn-circle.btn-lg {
  width: 25px;
  height: 25px;
  border-radius: 100%;
}
</style>
@endsection
@section('content')

    <div style="padding-top: 150px; padding-bottom: 70px;">
        
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif 
    <div class="container">
        @guest('admin')
        <center>
            <div class="alert alert-danger" role="alert" style="background-color: #1B0A2A; color: whitesmoke; font-size: 23px; width: 850px;">
                
                <b>    You must log in if you want to administer Maktabati! <br>If you don't have an account yet please create one!
            </b></div>
        </center>  
        @endguest
        <br> <br> 
        <div class="row">
        <div class="col-md-2">  <a href="{{ route('index') }}"> <button  class="btn btn-dark" >
        <i class="fas fa-arrow-left"></i> &nbsp; <b> {{ __('Return') }}</b> 
            
        </button> </a> 
        </div> 
        
        <div class="col-md-8">
            <div > <center> 
                <span class="badge badge-pill badge-light" style="font-family: 'Bahnschrift Condensed'; letter-spacing: 0.5em; color: rgb(19, 4, 32); padding:11.50px;"> 
                    <h1> <?= strtoupper($book->title) ?></h1>
                </span> </center> <br> <br> <br> 
                <center>
                    <img src=" {{ asset('images/covers/'.$book->image) }} " alt="cover picture" height="390px;" width="390px;">
                </center> <br> <br>
                <p>  <span style="color: gray; font-size:22px;"><b>Written by:</b> &nbsp; &nbsp; </span> 
                    <span class="badge badge-pill badge-light " style="background-color: rgb(209, 171, 219); font-size:18px; ">  <?= strtoupper($book->author) ?></span>   </p>
                <br> <br>
                <p> <span style="color: gray; font-size:22px;"> <b> About:</b> </span> <br> <br>
                    <span style="font-family: 'Bahnschrift Condensed'; font-size: 21px;"><?= $book->description ?></span> </p> 
                <br> <br>
                <p> 
                    <span  style="color: gray; font-size:22px;"><b>Available editions:</b>  </span> 
                    <!--  *********************************************************************************************** -->
                  
                    <!--  *********************************************************************************************** -->      
                @if($total)    
                    @for ($i = 0; $i < $total; $i++)
                    <ul>
                        <span style="font-family: 'Bahnschrift Condensed'; font-size: 21px;">    
                            <li> {{ $nbr[$i]->editor }} &nbsp; ( {{ $nbr[$i]->total }} ) </li>
                        </span>
                    </ul>
                    @endfor
                    
                @else
                    <div class="alert alert-dark" role="alert" style="background-color: #F2E0F7; color:rgb(19, 4, 32);">
                        <center>
                            <b>   All copies of this book are borrowed... </b> 
                        </center>
                    </div>
                @endif
                </p>
            </div>
            
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1" >  
            <div class="row" >
            &nbsp; &nbsp; <button class="btn btn-light btn-lg" data-toggle="modal" data-target="#Modal0" style="background-color:#190707; color: whitesmoke;">Edit</button></a>
            <!-- Modal 0-->
        <div class="modal fade" id="Modal0" tabindex="-1" aria-labelledby="ModalLabel0" aria-hidden="true" style="font-family: 'Bahnschrift Condensed'; font-size: 23px; background-color:#190707;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: whitesmoke; color: black;">
                    <div class="modal-header">
                        <p> &nbsp; <span> <b>{{ strtoupper(Auth::guard('admin')->user()->firstname) }}</b>   </span>, are you sure you want edit the book <span class="badge badge-pill badge-primary">" {{ strtoupper($book->title) }} "</span>
                            written by <span class="badge badge-pill badge-primary"> " {{ strtoupper($book->author) }} "</span> ?</p> 
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            <a href="{{ route('books.edit',$book->ISBN) }}"><button type="button" class="btn btn-primary" >Edit Now</button></a>
                        </center>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
         
         <button class="btn btn-light btn-lg" data-toggle="modal" data-target="#Modal00" style="background-color: #A4A4A4; color:whitesmoke; margin-top: 100px">Delete</button> 
                     <!-- Modal 00-->
                 <div class="modal fade" id="Modal00" tabindex="-1" aria-labelledby="ModalLabel00" aria-hidden="true" style="font-family: 'Bahnschrift Condensed'; font-size: 23px; background-color:#A4A4A4;">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background-color: #151515; color: whitesmoke;">
                            <div class="modal-header">
                                <p> &nbsp; <span> <b>{{ strtoupper(Auth::guard('admin')->user()->firstname) }}</b>   </span>, are you sure you want to delete the book <span class="badge badge-pill badge-primary">" {{ strtoupper($book->title) }} "</span>
                                    written by <span class="badge badge-pill badge-primary"> " {{ strtoupper($book->author) }} "</span> ?</p> 
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('books.destroy',$book->ISBN)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <center>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    <button type="submit" class="btn btn-primary" >Delete Now</button>
                                </center>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div> 
        
        </div>
            <div style="padding-top: 800px; padding-left:200px;">
            @auth('admin')
                    <button class="btn btn-light btn-circle btn-lg"  title="Add Copies" data-toggle="modal" data-target="#Modal1" style="cursor: pointer; padding-bottom: 37px; padding-right:31px;"> <i class="fas fa-plus"></i> </button> 
                    <!-- Modal 1-->
        <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="ModalLabel1" aria-hidden="true" style="font-family: 'Bahnschrift Condensed'; font-size: 23px; background-color:whitesmoke;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: #1B0A2A; color: whitesmoke;">
                    <div class="modal-header">
                        <p> &nbsp; <span> <b>{{ strtoupper(Auth::guard('admin')->user()->firstname) }}</b>   </span>, are you sure you want to add copies to the book <span class="badge badge-pill badge-light">" {{ strtoupper($book->title) }} "</span>
                            written by <span class="badge badge-pill badge-light"> " {{ strtoupper($book->author) }} "</span> ?</p> 
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <center>
                        <p class="badge badge-pill badge-info" style="font-size: 21px;">
                            Please enter the number of copies you want to add <br>(having the same editor)
                        </p> <br> <br>
                        <form action="{{ route('add') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $book->ISBN }}" name="ISBN">
                            <input type="number" class="form-control" name="number" min="1" value="1">
                            <br>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> &nbsp; &nbsp; &nbsp;
                            <button type="submit" class="btn btn-primary" >Add</button>
                        </form> </center>
                    </div>
                </div>
            </div>
        </div>
        <br> <br>
        @if($total)
        <button  class="btn btn-default btn-circle btn-lg" title="Edit copies"  data-toggle="modal" data-target="#Modal2" style="cursor: pointer; background-color: rgb(209, 171, 219); padding-bottom: 38px; padding-right:33px;"> <i class="fas fa-pen"></i> </button> 
                            <!-- Modal 2-->
                            <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="ModalLabel2" aria-hidden="true" style="font-family: 'Bahnschrift Condensed'; font-size: 23px; background-color: whitesmoke;">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content" style="background-color: #151515; color: whitesmoke;">
                                        <div class="modal-header">
                                            <p> &nbsp; <span>  <b>{{ strtoupper(Auth::guard('admin')->user()->firstname) }}</b> </span>, are you sure you want to edit the copies of the book <span class="badge badge-pill badge-light">" {{ strtoupper($book->title) }} "</span>
                                                written by <span class="badge badge-pill badge-light"> " {{ strtoupper($book->author) }} "</span> ?</p> 
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <center>
                                            <p class="badge badge-pill badge-info" style="font-size: 21px">
                                              Choose the edition you want to edit <br> among those presented below.  
                                            </p> <br> <br>
                                            <form action="{{ route('update1') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $book->ISBN }}" name="ISBN">
                                                @for ($i = 0; $i < $total; $i++)
                                                    <input type="radio" id="editor{{ $i }}"  name="editor" value="{{ $nbr[$i]->editor }}" required>
                                                    <label for="editor{{ $i }}" >{{ $nbr[$i]->editor }}</label> <br>
                                                @endfor 
                                                <br>
                                                <br>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <button type="submit" class="btn btn-primary" >Edit Now</button>
                                            </form> </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <br> <br>
            <div class="btn-group dropright">
                <button class="btn btn-dark btn-circle btn-lg dropdown-toggle" title="Delete" data-toggle="dropdown" id="dropdownMenuButton"  style="cursor: pointer; background-color:#1B0A2A; padding-bottom: 37px; padding-right:38px;"> <i class="fas fa-trash-alt"></i> </button> 
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: #F2E0F7;">
                        <div class="dropdown-item" data-toggle="modal" data-target="#Modal3" >Delete a copy</div>
                        <div class="dropdown-item" data-toggle="modal" data-target="#Modal4">Delete all copies</div>
                    </div>
            </div>
                            <!-- Modal 3-->
                <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="ModalLabel3" aria-hidden="true" style="font-family: 'Bahnschrift Condensed'; font-size: 23px; background-color:#1C1C1C;">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background-color: whitesmoke; color: black;">
                            <div class="modal-header">
                                <p> &nbsp; <span> <b>{{ strtoupper(Auth::guard('admin')->user()->firstname) }}</b>   </span>, are you sure you want to delete a copy of the book <span class="badge badge-pill badge-primary">" {{ strtoupper($book->title) }} "</span>
                                    written by <span class="badge badge-pill badge-primary"> " {{ strtoupper($book->author) }} "</span> ?</p> 
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <center>
                                <p class="badge badge-pill badge-info" style="font-size: 21px">
                                  Choose the edition, which you want to delete the copy, <br>among those presented below.  
                                </p> <br> <br>
                                <form action="{{ route('delete')}}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $book->ISBN }}" name="ISBN">
                                    @for ($i = 0; $i < $total; $i++)
                                        <input type="radio" id="editor{{ $i }}"  name="editor" value="{{ $nbr[$i]->editor }}" required>
                                        <label for="editor{{ $i }}" >{{ $nbr[$i]->editor }}</label> <br>
                                    @endfor 
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    <button type="submit" class="btn btn-primary" >Delete Now</button>
                                </form> </center>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Modal 4-->
                 <div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="ModalLabel4" aria-hidden="true" style="font-family: 'Bahnschrift Condensed'; font-size: 23px; background-color:#1C1C1C;">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background-color: whitesmoke; color: black;">
                            <div class="modal-header">
                                <p> &nbsp; <span> <b>{{ strtoupper(Auth::guard('admin')->user()->firstname) }}</b>   </span>, are you sure you want to delete all the copies of the book <span class="badge badge-pill badge-primary">" {{ strtoupper($book->title) }} "</span>
                                    written by <span class="badge badge-pill badge-primary"> " {{ strtoupper($book->author) }} "</span> ?</p> 
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('copies.destroy',$book->ISBN)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <center>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    <button type="submit" class="btn btn-primary" >Delete Now</button>
                                </center>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div> 
                @endif
            @endauth
</div>
        </div>
    </div>
    <br> <br>
    </div>
</div>
@endsection