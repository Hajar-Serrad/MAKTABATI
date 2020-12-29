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
      #detail{
          color: #5858FA;
      }
    </style>
  </head>
  <body style="font-size: 17px; font-family: sans-serif; ">
    <h3>Welcome to MAKTABATI </h3>
    <br/>
    <p> 
       Dear <span id="detail">{{ $data->firstname }}</span> ,
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
    <br> <br> <br> 
       <span id="detail"> <b>MAKTABATI</b> </span> 

    <div style="color: #2E2E2E; font-size: 14px;">
  
      © 2020 Maktabati made with <span style="color: red"> ♥ </span>
   
    </div>
    
    
    
  </body>
</html>