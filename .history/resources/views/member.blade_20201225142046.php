@extends('layouts.appAdmin')
@section('title','Members List')
@section('css')
<style>
.alert-success{
    background-color:#01DFA5;
}
.alert-light{
    background-color: #2E2E2E;
}
</style>
@endsection
@section('content')

<div class="row" style="padding-top: 50px; padding-bottom:50px;">
    <div class="col-sm-3" style="padding-left: 60px;">
        <a href="{{ route('dashboard') }}"> <button  class="btn btn-dark" >
            <i class="fas fa-arrow-left"></i> &nbsp; <b> {{ __('Return') }}</b></button> 
        </a>
    </div>
</div>
<div class="row" style="padding-top: 100px; padding-bottom:50px;">
    <div class="col-sm-1">
    <div class="col-sm-11">
        @auth('admin')
        <center>
        <!--Table-->
        <table class="table table-hover table-striped table-dark" style="background-color: #1B0A2A">
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
                        <td></td>
                        <td>{{ $user->person_id }}</td>
                        <<td>{{ $user->firstname }}</td>
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

@endsection