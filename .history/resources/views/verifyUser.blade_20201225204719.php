<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Email</title>
  </head>
  <body>
    <h2>Welcome MAKTABATI {{ $data->firstname }} </h2>
    <br/>
    Your registered email-id is {{$data->email}} , Please click on the below link to verify your email account
    <br/>
    <a href="{{ route('register4',$data->id) }}">Verify Email</a>
    
    
  </body>
</html>