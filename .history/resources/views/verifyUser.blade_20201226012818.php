<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Email</title>
    <style>
      .btn{
        background-color: #1B0A2A;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
      }
    </style>
  </head>
  <body style="font-size: 20px;">
    <h3>Welcome to MAKTABATI </h3>
    <br/>
    <p> 
       Dear {{ $data->firstname }},
       <br> <br>
       Please click the button above to verify your email address 
       and continue your registration:
       <br> <br>       
        <center>
       <a href="{{ route('register4',$data->id) }}">
       <button class="btn">
         V E R I F Y &nbsp; &nbsp; E M A I L
       </button>
       </a></center>
       <br> <br> 
       If you haven't recently try to create an account on MAKTABATI,
       you can safely ignore this message ! </b>
    </p>


    
    
    
  </body>
</html>