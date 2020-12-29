@extends('layouts.app')
@section('title','Profile')
@section('css')
<style>
 
</style>
@endsection
@section('content')  
 
 
  
  <div style="padding-top: 150px; padding-left: 40px; color: black; ">
    <div class="row">
      <div class="col-sm-2">
          <a href="{{ route('home') }}"> <button  class="btn btn-dark" >
              <i class="fas fa-arrow-left"></i> &nbsp; <b> {{ __('Return to the main page') }}</b> 
                  
              </button> </a> 
              
      </div>
      
     
           <div class="col-sm-10" class="row" style="font-size: 18px; font-family:Geneva, Tahoma, sans-serif;"> <br> <br> <br> 
        <div  class="card-body" style="margin: 15px; margin-right: 0; padding: 10px; background-color:rgb(234, 206, 255);">
     
               
            <div class="row"> 
                <div class="col-sm-5"> 
                  <div class="row">
                    <div class="col-sm-6"> 
                       <img src="{{ asset('images/members/'.$user->image) }}" class="rounded-circle" alt="Profile Picture" width="150px;" height="150px;">
                    </div>
                  </div> <br> <br>   
                 <div class="row" >
                   
                    <span class="col-sm-4"><span class="badge badge-dark" style="padding: 7px; font-size:17px;">Student Code</span></span> 
                   <span class="col-sm-4">{{ $user->person_id }}</span>
                  
                 </div> <br> <br>
                 <div class="row">
                   
                    <span class="col-sm-4"><span class="badge badge-light" style="rgb(209, 171, 219); padding: 7px; font-size:17px;">Firstname</span></span> 
                   <span class="col-sm-4">{{ $user->firstname }}</span>
             
                 </div> <br>  <br> 
                 <div class="row">
                   
                    <span class="col-sm-4"><span class="badge badge-dark" style="padding: 7px; font-size:17px;">Lastname</span></span> 
                   <span class="col-sm-4">{{ $user->lastname }}</span>
               
                 </div> <br>   <br>
                 <div class="row">
                 
                  <span class="col-sm-4"><span class="badge badge-light" style="rgb(209, 171, 219); padding: 7px; font-size:17px;">Class</span></span> 
                   <span class="col-sm-4">{{ $user->class }}</span>
             
                 </div> <br> <br> 
                 
                </div>
                <div class="col-sm-7">
                   <br> <br> <br> <br> <br> 
                 <div class="row">
                   
                   <span class="col-sm-2"><span class="badge badge-dark" style=" padding: 7px; font-size:17px;">Email</span></span> 
                   <span class="col-sm-10">{{ $user->email }}</span>
                 
                 </div> <br> <br>
                 <div class="row">
                   
                   <span class="col-sm-2"><span class="badge badge-light" style="rgb(209, 171, 219); padding: 7px; font-size:17px;">Phone</span></span> 
                   <span class="col-sm-5">{{ $user->phone }}</span>
                
                 </div> <br> <br>
                 <div class="row">
                  
                   <span class="col-sm-2"><span class="badge badge-dark" style="padding: 7px; font-size:17px;">Address</span></span> 
                   <span class="col-sm-5">{{ $user->address }}</span>
                 
                 </div>
  
                 <br> <br>
                 <div class="row">
                  
                   <span class="col-sm-6"><span class="badge badge-light" style="rgb(209, 171, 219);
                   .padding: 7px; font-size:17px;">Number of books I'm borrowing</span></span> 
                   <span class="col-sm-2" data-toggle="modal" data-target="#Modal">{{ $array['n1'] }}</span>
                     <!-- MODAL -->
                     <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" style="font-family: 'Bahnschrift Condensed'; font-size: 15px; background-color: whitesmoke;">
                      <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content" style="">
                            <div class="modal-header"> 
                              <span class="badge badge-pill badge-light"> The books I'm borrowing </span>
                            </div>
                              <div class="modal-body">
        
            <table class="table table-hover table-striped table-light" style="background-color: whitesmoke">
              <!--Table head-->
              <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Category</th>
                    <th scope="col">Borrowed At</th>
                    <th scope="col">Must Be Returned At</th>
                </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
                @php
                    $nbr = 0;
                @endphp
                @foreach ($borrowings as $borrowing)
                     <tr >
                       @foreach ($books as $book)
                           @if ($borrowing->ISBN == $book->ISBN)
                                <th scope="row">{{ ++$nbr }}</th>   
                                <td>{{ $borrowing->ISBN }}</td> 
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author }}</td> 
                                <td>{{ $book->category }}</td>
                                <td>{{ $borrowing->borrowed_at }}</td>
                                <td>{{ $borrowing->must_be_returned_at }}</td>
                           @endif
                       @endforeach
                     </tr>
                @endforeach
            </tbody>
            <!--Table body-->
            </table>
         
                              </div>
                          </div>
                      </div>
                  </div>
                     <!-- /MODAL -->
                 </div>
  
                 <br> <br>
                 <div class="row">
                   
                   <span class="col-sm-7"><span class="badge badge-dark" style="padding: 7px; font-size:16px;">Number of books I have already borrowed</span></span> 
                   <span class="col-sm-2">{{ $array['n2'] }}</span> 
                 </div>
                </div>       
            </div>
           </div>
          </div>
          </div> </div>  
     
    
  </div> 
 

@endsection