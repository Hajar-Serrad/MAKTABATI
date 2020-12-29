@extends('layouts.appAdmin')
@section('title','Borrowings List')
@section('css')
<style>
.alert-success{
    background-color:#01DFA5;
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
    <div class="col-sm-9">
        @auth('admin')
        <center>
        <!--Table-->
        <table class="table table-hover table-striped table-dark" style="background-color: #1B0A2A">
            <!--Table head-->
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Code</th>
                    <th scope="col">Book ISBN</th>
                    <th scope="col">Copy Number</th>
                    <th scope="col">Borrowed At</th>
                    <th scope="col">Must Be Returned At</th>
                    <th scope="col">Actions</th>
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
                        <th scope="row">{{ ++$nbr }}</th>
                        @foreach ($users as $user)
                            @if ($user->id == $borrowing->user_id)
                                <td>{{ $user->person_id }}</td>
                            @endif
                        @endforeach
                        <td>{{ $borrowing->ISBN }}</td>
                        <td>{{ $borrowing->copy_nbr }}</td>
                        <td>{{ $borrowing->borrowed_at->isoFormat('MMMM Do YYYY, h:mm a') }}</td>
                        <td>{{ $borrowing->must_be_returned_at->isoFormat('MMMM Do YYYY, h:mm a') }}</td>
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
    
    @endauth
    </div>
    <div class="col-sm-1"> </div>
</div>

@endsection