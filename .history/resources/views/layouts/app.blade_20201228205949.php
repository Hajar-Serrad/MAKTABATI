<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Add icon library -->
    
    <script src="https://kit.fontawesome.com/bf85b3c2d1.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Showcard Gothic' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bahnschrift Condensed' rel='stylesheet'>
    <title>@yield('title')</title>
    <!-- Styles -->
    @yield('css')
    <style>
       html,body
      {
          width: 100%;
          height: 100%;
          margin: 0px;
          padding: 0px;
          overflow-x: hidden; 
      }
      nav
      {
        background:url('/images/background/10.jpg') ; 
      }
      .footer
      {
        background-color: #F2E0F7;
      }

      
      
      #header:before {
        content: "";
        position: fixed;
        height: 15%; width: 27%;
        background: url('/images/background/10.jpg');
        background-size: cover;
        z-index: -2; /* Keep the background behind the content */     
        -webkit-filter: blur(8px);
    }
    #avatar:before {

        position: fixed;
        height: 100px; width: 100px;
        background: url('/images/background/10.jpg');
        background-size: cover;
        z-index: -2; /* Keep the background behind the content */     
        -webkit-filter: blur(8px);
    }
    
    </style>
</head>
<body>
    
  <div class="container-fluid" style="margin: 0px ; padding: 0px ;">
       <div style="background-color: #E3CEF6; background-size:cover; height:100%;">
   <!-- header -->
   <!--Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" >
    <a class="navbar-brand" href="#" id="header"> <i class="fas fa-book-reader fa-3x" style="color:#2E2E2E;"></i>  &nbsp; &nbsp; 
      
      <span  style="font-family: 'Showcard Gothic' ;letter-spacing:0.1em; font-size:46px; color: #2E2E2E;"> MAKTABATI </span>
        <div style="font-family:Arial, Helvetica, sans-serif ;letter-spacing:0.1em; font-size:21px; color: #2E2E2E;"> &nbsp;   So much to see. So much to learn. </div> 
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
      aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
      <!--
         <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-0"
            alt="avatar image">
        </a>
        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
          aria-labelledby="navbarDropdownMenuLink-55">
          <a class="dropdown-item" href="{{ route('user.logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
                <button type="button" class="btn btn-light btn-lg" style="cursor: pointer; margin-right: 30px" >{{ __('LOGOUT') }}</button>

        </a>
         <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
      -->
    <ul class="navbar-nav ml-auto">
    @auth
    <li class="nav-item avatar dropdown" >
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" title="Click here to see your profile or to log out">
        <img src="{{ asset('images/members/'.Auth::user()->image) }}" class="rounded-circle z-depth-0"
          alt="avatar image" height="70px;" width="70px;" id="avatar">
      </a>
      <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
        aria-labelledby="navbarDropdownMenuLink-55" style="background-color: #F2E0F7; ">
        
        <a class="dropdown-item" href="{{ route('user.profile',Auth::user()->id) }}" >My Profile</a>

        <a class="dropdown-item" href="{{ route('user.logout') }}"
                                      onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();" >
                {{ __('Log out') }}
        </a>
       <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
        </form>
      </div>
    </li>
        </ul>
    
    @endauth
   </ul>
    </div>
  </nav>
  <!--/.Navbar -->
  
  
    <!--   -->
    @yield('content')
    <!--   -->
    <!-- -->

</div>
 <!-- -->
   <!-- footer -->
   
    
    <div  class="footer" style=" color:#2E2E2E;"> 
        <div style="background:url('/images/background/10.jpg') ; height:50px; "></div>
        <br>
        <div class="row">
            <div class="col-sm-3"></div>
          <div class="col-sm-3" style="color:#2E2E2E;">
            
            <h5>Contact Us</h5>
            
              <i class="fas fa-phone-volume"> </i> &nbsp; &nbsp;  +0625135487 <br>
              <i class="fas fa-envelope"></i>&nbsp; &nbsp; maktabati@gmail.com
            
          </div>
        <div class="col-sm-3" > <br>
            <a href="{{ route('about') }}" target="_blank"><h5 style="color:#2E2E2E;">About Us</h5></a>
            <a href=" {{ route('privacy') }} " target="_blank"><h5 style="color:#2E2E2E;">Privacy Policy</h5></a>
        </div>
        <div class="col-sm-3"></div>
        </div>
        <div class="col-md-4 " >
        <div style="color: #2E2E2E;">
  
          © 2020 Maktabati made with <i class="far fa-heart" style="color: red"></i>
       
        </div> 
      
  </div>    
  <div style="background:url('/images/background/10.jpg') ; height:50px; "></div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" 
    crossorigin="anonymous"></script>
</body>
</html>