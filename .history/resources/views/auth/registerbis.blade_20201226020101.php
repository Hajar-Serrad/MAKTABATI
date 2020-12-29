@extends('layouts.app')
@section('title','REGISTER')
@section('css')
<style>
.alert-success{
    background-color:#01DFA5;
}
.alert-danger{
     background-color: #1B0A2A;
     color: whitesmoke;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
              
            <div class="card bg-dark text-white" style="margin-top: 200px; margin-bottom:100px;">
              @if(!empty($success))
  <div class="alert alert-success"> {{ $success }}</div>
@endif

              @if (session('error'))
                  <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                  </div>
              @endif
                <div class="card-header" style="letter-spacing: 0.2em"> <h3> {{ __('Register') }}</h3></div>

                <div class="card-body">
                    <form method="post" action="{{ route('register3') }}" enctype="multipart/form-data">
                        @csrf
                        <input 
                        name="status"
                        type="hidden"
                        value="{{ $data->status }}" />
                        <input 
                        name="email"
                        type="hidden" 
                        value=" {{ $data->email }} " >
                        <input 
                        name="code"
                        type="hidden"
                        value=" {{ $data->id }} " />
                        <input
                        name="firstname"
                        type="hidden"
                        value=" {{ $data->firstname }} ">
                        <input
                        name="lastname"
                        type="hidden"
                        value=" {{ $data->lastname }} ">
                        @if(  $data->status == 0  )
                        <div class="form-group row">
                                <label for="code" class="col-md-1 col-form-label text-md-right"> 
                                    <i class="fas fa-fingerprint fa-2x"></i> </label>
                            <div class="col-md-11" >
                            <input
                              type="text"
                              id="code"
                              class="form-control"
                              placeholder="Student Code"
                              value=" {{ $data->id }} "
                              required="true">
                                </div> </div>
                                <br>
                                <div class="form-group row">
                                    <label for="firstname" class="col-md-1 col-form-label text-md-right"> 
                                        <i class="fas fa-user fa-2x"></i> </label>
                                <div class="col-md-11" >
                                <input
                                  type="name"
                                  id="firstname"
                                  class="form-control"
                                  placeholder="Firstname"
                                  value=" {{ $data->firstname }} "
                                  required="true" >
                                    </div> </div>
                                    <br>
                                    <div class="form-group row">
                                        <label for="lastname" class="col-md-1 col-form-label text-md-right"> 
                                            <i class="fas fa-user fa-2x"></i> </label>
                                        <div class="col-md-11" >
                                    <input
                                      type="name"
                                      id="lastname"
                                      value=" {{ $data->lastname }} "
                                      class="form-control"
                                      placeholder="Lastname"
                                      required="true" >
                                        </div> </div>
                                        
                                        <br>
                                        <div class="form-group row">
                                            <label for="password" class="col-md-1 col-form-label text-md-right"> 
                                                <i class="fas fa-lock fa-2x"></i> </label>
                                         <div class="col-md-11">
                                        <input
                                          name="password"
                                          type="password"
                                          id="password"
                                          class="form-control"
                                          placeholder="Password"
                                          required="true" >
                                            </div> </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-md-1 col-form-label text-md-right"> 
                                                    <i class="fas fa-lock fa-2x"></i> </label>
                                             <div class="col-md-11">
                                            <input 
                                            id="password-confirm" 
                                            type="password" 
                                            name="password_confirmation" 
                                            class="form-control" 
                                            placeholder="Confirm Your Password" 
                                            required >
                                            </div> </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="class" class="col-md-1 col-form-label text-md-right"> 
                                                    <i class="fas fa-user-graduate fa-2x"></i> </label>
                                            <div class="col-md-11" >
                                              <select class="form-control" id="class" name="class" required="true">
                                                <option selected>Choose Your Class...</option>
                                                <option value="CP1">CP1</option>
                                                <option value="CP2">CP2</option>
                                                <option value="GINF1">GINF1</option>
                                                <option value="GIL1">GIL1</option>
                                                <option value="GSTR1">GSTR1</option>
                                                <option value="GSEA1">GSEA1</option>
                                                <option value="G3EI1">G3EI1</option>
                                                <option value="GINF2">GINF2</option>
                                                <option value="GIL2">GIL2</option>
                                                <option value="GSTR2">GSTR2</option>
                                                <option value="GSEA2">GSEA2</option>
                                                <option value="G3EI2">G3EI2</option>
                                              </select>
                                                </div> </div>
                                                <br>
                                                <div class="form-group row">
                                                    <label for="tel" class="col-md-1 col-form-label text-md-right"> 
                                                        <i class="fas fa-phone-volume fa-2x"></i> </label>
                                                <div class="col-md-11" >
                                                <input
                                                  name="tel"
                                                  type="tel"
                                                  id="tel"
                                                  class="form-control"
                                                  placeholder="Phone number"
                                                  required="true">
                                                    </div> </div>
                                                    <br>
                                                    <div class="form-group row">
                                                        <label for="address" class="col-md-1 col-form-label text-md-right"> 
                                                            <i class="fas fa-map-marker-alt fa-2x"></i> </label>
                                                    <div class="col-md-11" >
                                                    <input
                                                      name="address"
                                                      id="address"
                                                      class="form-control"
                                                      placeholder="Address"
                                                      required="true">
                                                      </div> </div>
                                                      <br>
                                                      <div class="form-group row">
                                                        <label for="image" class="col-md-1 col-form-label text-md-right" class="custom-file-label"> <i class="fas fa-camera fa-2x"></i> </label>
                                                        &nbsp; &nbsp; &nbsp; 
                                                        <div class="col-md-10">
                                                         <input type="file" class="form-control" id="image" name="image" required> 
                                                        <label class="custom-file-label" for="image">Add Your Picture...</label> 
                                                        </div>
                                                      </div> 
                                                        <br>  
                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-11 offset-md-1">
                                                                <label>
                                                                    <input type="checkbox" name="rgpd" id="rgpd" {{ old('rgpd') ? 'checked' : '' }}>
                                                                    <span> I agree to the <a href="{{ route('privacy') }}" target="_blank">privacy policy </a>.</span>
                                                                  </label>
                                                                  <br> <br> <br>
                                                                <button  type="submit" class="btn btn-primary btn-lg btn-block" style="letter-spacing: 0.1em">
                                                                    {{ __('Register') }} &nbsp; 
                                                                    <i class="fas fa-sign-in-alt"></i>
                                                                </button> <br>
                                                                
                                                            </div>
                                                        </div>
                            
                        @elseif( $data->status == 1 )
                        <div class="form-group row">
                            <label for="code" class="col-md-1 col-form-label text-md-right"> 
                                <i class="fas fa-fingerprint fa-2x"></i> </label>
                        <div class="col-md-11" >
                        <input
                          type="text"
                          id="code"
                          class="form-control"
                          placeholder="Professor Code"
                          value=" {{ $data->id }} "
                          required="true">
                            </div> </div>
                            <br>
                            <div class="form-group row">
                                <label for="firstname" class="col-md-1 col-form-label text-md-right"> 
                                    <i class="fas fa-user fa-2x"></i> </label>
                            <div class="col-md-11" >
                            <input
                              type="name"
                              id="firstname"
                              class="form-control"
                              placeholder="Firstname"
                              value=" {{ $data->firstname }} "
                              required="true" >
                                </div> </div>
                                <br>
                                <div class="form-group row">
                                    <label for="lastname" class="col-md-1 col-form-label text-md-right"> 
                                        <i class="fas fa-user fa-2x"></i> </label>
                                    <div class="col-md-11" >
                                <input
                                  type="name"
                                  id="lastname"
                                  value=" {{ $data->lastname }} "
                                  class="form-control"
                                  placeholder="Lastname"
                                  required="true" >
                                    </div> </div>
                                    
                                    <br>
                                    <div class="form-group row">
                                        <label for="password" class="col-md-1 col-form-label text-md-right"> 
                                            <i class="fas fa-lock fa-2x"></i> </label>
                                     <div class="col-md-11">
                                    <input
                                      name="password"
                                      type="password"
                                      id="password"
                                      class="form-control"
                                      placeholder="Password"
                                      required="true" >
                                        </div> </div>
                                        <br>
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-1 col-form-label text-md-right"> 
                                                <i class="fas fa-lock fa-2x"></i> </label>
                                         <div class="col-md-11">
                                        <input 
                                        id="password-confirm" 
                                        type="password" 
                                        name="password_confirmation" 
                                        class="form-control" 
                                        placeholder="Confirm Your Password" 
                                        required >
                                        </div> </div>
                       
                        <br>  
                            <div class="form-group row mb-0">
                                <div class="col-md-11 offset-md-1">
                                    <label>
                                        <input type="checkbox" name="rgpd" id="rgpd" {{ old('rgpd') ? 'checked' : '' }}>
                                        <span> I agree to the <a href="{{ route('privacy_policy') }}" target="_blank">privacy policy </a>.</span>
                                      </label>
                                      <br> <br> <br>
                                    <button  type="submit" class="btn btn-primary btn-lg btn-block" style="letter-spacing: 0.1em">
                                        {{ __('Register') }} &nbsp; 
                                        <i class="fas fa-sign-in-alt"></i>
                                    </button> <br>
                                    
                                </div>
                            </div>

                          @endif

                        <!-- **************** -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

