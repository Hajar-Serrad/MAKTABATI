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
    <title>Welcome</title>
    <!-- Styles -->
    <style>
       html,body
      {
          width: 100%;
          height: 100%;
          margin: 0px;
          padding: 0px;
          overflow-x: hidden; 
      
      }
      .vertical-line{
        border-left: 2px solid #000;
        display: inline-block;
        height: 160px;
        margin: 0 20px;
      }
      #cercle9 {
        width: 130px;
        height: 130px;
        border-radius: 100px;
        background: #5858FA;
      }
      #cercle0 {
        width: 20px;
        height: 20px;
        border-radius: 20px;
        background: #FF00FF;
      }
      #cercle1 {
        width: 40px;
        height: 40px;
        border-radius: 20px;
        background: #5858FA;
      }
      #cercle2 {
        width: 60px;
        height: 60px;
        border-radius: 50px;
        background: #FF00FF;
      }
      #cercle3 {
        width: 100px;
        height: 100px;
        border-radius: 50px;
        background: #5858FA;
      }
      #cercle4 {
        width: 50px;
        height: 50px;
        border-radius: 50px;
        background: #FF00FF;
      }
      #cercle5 {
        width: 80px;
        height: 80px;
        border-radius: 100px;
        background: #5858FA;
      }
      #cercle6 {
        width: 100px;
        height: 100px;
        border-radius: 50px;
        background: #FF00FF;
      }
      #cercle7 {
        width: 120px;
        height: 120px;
        border-radius: 100px;
        background: #5858FA;
      }
      #cercle8 {
        width: 135px;
        height: 135px;
        border-radius: 100px;
        background: #FF00FF;
      }

      .alert-warning{
         background-color: #F8E6E0;
     }

    
    </style>
</head>
<body>
    
  <div class="container-fluid" style="margin: 0px ; padding: 0px ;">
      <div style="padding-top: 5px; padding-left: 10px; padding-right:10px;">
        @if (session('message'))
            <div class="alert alert-warning" role="alert">
                {{ session('message') }}
            </div>
        @endif
      </div>
    <div class="row">
        <div class="col-sm-6">
            <div style="padding-left: 100px; padding-top:7px;">
                <img src="images/near.png" height="590px;" width="640px;">
                <div class="row">
                    <div id="cercle1" style="margin-left: 30px;"></div>    <div id="cercle2" style="margin-left: 30px;"></div>    <div id="cercle7" style="margin-left: 30px;"></div> <div id="cercle6" style="margin-left: 30px;"></div> <div id="cercle5" style="margin-left: 30px;"></div></div>
            </div>
            
        </div>
        <div class="col-sm-6">
            <div style="padding-top: 100px; padding-right: 50px; ">
            <div class="row">
                <div id="cercle3" style="margin-right: 40px;"></div> <div id="cercle2" style="margin-right: 40px;"></div>    <div id="cercle1" style="margin-right: 40px;"></div>  <div id="cercle0" style="margin-right: 40px;"></div>  <div id="cercle0" style="margin-left: 40px;"></div> &nbsp; &nbsp; <div id="cercle1"></div> &nbsp; &nbsp;<div id="cercle2"></div> &nbsp; &nbsp;<div id="cercle3"></div></div>
            <div style="padding-top: 50px; padding-right: 100px; ">    
            <div class="card" >
            <div class="card-body" style="background-color:#F8E6E0;">
                <h3 style="font-family: 'Bahnschrift Condensed'; letter-spacing: 0.1em; color: #FF00FF; ">Let's get started!</h3> <br>
                <div class="row">
                <div class="col-sm-5">
                    <div class="card-body">
                        <center>
                            <h4 style="font-family: 'Bahnschrift Condensed'; color: #5858FA; ">LOGIN</h4> <br>
                        <a class="badge badge-pill badge-primary" style="font-family: 'Bahnschrift Condensed'; font-size: 20px;" href="{{ route('Userlogin1') }}">
                            As A User
                        </a> <br> <br>
                        <a class="badge badge-pill badge-primary" style="font-family: 'Bahnschrift Condensed'; font-size: 20px;" href="{{ route('Adminlogin1') }}">
                            As An Admin
                        </a>
                        </center>
                    </div>
                </div>
                <div class="col-sm-1">
                    <span class="vertical-line"></span>
                </div>
                <div class="col-sm-6">
                    <center>
                        <div class="card-body">
                            <h4 style="font-family: 'Bahnschrift Condensed'; color: #5858FA; ">New here?</h4> <br>
                            <a href="{{ route('register1') }}" class="badge badge-pill badge-secondary" style="font-family: 'Bahnschrift Condensed'; font-size: 20px;">
                                REGISTER
                            </a>
                        </div>
                    </center>
                </div>
                </div>
            </div></div> </div></div>
            <br> 
            <div class="row">
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <div id="cercle6" style="margin-left: 100px"></div>   <div id="cercle7" style="margin-left: 40px"></div> <div id="cercle8" style="margin-left: 40px"></div>  </div>
        </div></div>
    </div>
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