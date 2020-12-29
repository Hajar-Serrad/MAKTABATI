@extends('layouts.appAdmin')
@section('title','Members List')
@section('css')
<style>

</style>
@endsection
@section('content')
<div style="padding-top: 180px; padding-bottom:50px; font-color:#2E2E2E;">
<div class="row" >
    <div class="col-sm-3" style="padding-left: 40px;">
        <a href="{{ route('dashboard') }}"> <button  class="btn btn-dark" >
            <i class="fas fa-arrow-left"></i> &nbsp; <b> {{ __('Return') }}</b></button> 
        </a>
    </div>
</div>
<br> <br>
<div class="row" >
    <div class="col-sm-11" style="padding-left: 130px;">
        @auth('admin')
        <center>
        <!--Table-->
        <table class="table table-hover table-striped table-light" style="background-color: whitesmoke">
            <!--Table head-->
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Student Code</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Class</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Number of books in loan</th>
                    <th scope="col">Number of books borrowed</th>
                </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
                @foreach ($users as $user)
                     <tr >
                        <th scope="row">{{ $user->id }}</th> 
                        <td><img src=" {{ asset('images/members/'.$user->image) }} " alt="member picture" height="150px;" width="150px;"></td>
                        <td>{{ $user->person_id }}</td>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->class }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                       
                        
                        @for ($i = 0; $i < $n; $i++)
                            @if ( $user->id  == $array[$i]['id']  )
                               <td>{{ $array[$i]['n1'] }}</td>
                               <td>{{ $array[$i]['n2'] }}</td>
                            @endif
                        @endfor
            
                     </tr>
                @endforeach
            </tbody>
            <!--Table body-->
        </table>
        </center>
        <!--Table-->
     
    @endauth
    </div>
    
</div>
</div>
@endsection