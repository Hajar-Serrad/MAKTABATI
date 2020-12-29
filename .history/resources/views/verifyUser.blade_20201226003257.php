<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Email</title>
  </head>
  <body>
    <h3>Welcome to MAKTABATI </h3>
    <br/>
    <p>
       Dear {{ $data->firstname }},
       <br>
       Please click the button above to verify your email address 
       and continue your registration:
       <br>
       <button class="btn btn-primary btn-lg btn-block" style="letter-spacing: 0.1em;">
        <a href="{{ route('register4',$data->id) }}">Verify Email</a>
       </button>
       <br> <br>
       If you haven't recently try to create an account on MAKTABATI,
       you can safely ignore this message !
    </p>


    
    
    
  </body>
</html>