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
<div style="padding-top: 150px; padding-left: 10px; padding-right: 10px;">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
</div>

<div class="row" style="padding-top: 50px; padding-bottom:50px;">
    <div class="col-sm-2" style="padding-left: 60px;">
        <a href="{{ route('dashboard') }}"> <button  class="btn btn-dark" >
            <i class="fas fa-arrow-left"></i> &nbsp; <b> {{ __('Return') }}</b></button> 
        </a>
    </div>
    <div class="col-sm-8">
        @auth('admin')
        <center>
        <!--Table-->
        <table class="table table-hover table-striped table-dark" style="background-color: #1B0A2A">
            <!--Table head-->
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Code</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Class</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Adress</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Number of books in loan</th>
                    <th scope="col">Number of books borrowed</th>
                    <th></th>
                </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
                @php
                    $nbr = 0;
                @endphp
                @foreach ($users as $user)
                     <tr >
                        <th scope="row">{{ ++$nbr }}</th>
                        <td>{{ $user->person_id }}</td>
                        <<td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->class }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->adress }}</td>
                        <td></td>
                        <td>
                          @php
                              $n1 = $borrowings1::where('user_id',$user->person_id)->count();
                          @endphp  
                          {{ $n }}
                        </td>
                        <td>
                          @php
                            $n2 = $borrowings2::where('user_id',$user->person_id)->count();
                          @endphp  
                        {{ $n1 + $n2 }} 
                        </td>
                        <td>
                                <form action="{{ route('borrowing.destroy',$nbr) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-light ">DELETE</button>
                                </form>
                        </td>
                     </tr>
                @endforeach
            </tbody>
            <!--Table body-->
        </table>
        </center>
        <!--Table-->
  
    @else
    <center>
        <div class="alert alert-danger" role="alert" style="background-color: #1B0A2A; color: whitesmoke; font-size: 23px; width: 850px;">
            
            <b>    You must log in if you want to ... the list of students borrowing! <br>If you don't have an account yet please create one!
        </b></div>
    </center>    
    @endauth
    </div>
    <div class="col-sm-2">
        <div style="padding-left: 35px;">
            <a href="{{ route('collect') }}">                    
                <button type="submit" class="btn btn-secondary" style="margin-left: 10px; margin-right: 10px">
                    Collect Emails
                </button>
            </a>
         </div>
    </div>
</div>

@endsection