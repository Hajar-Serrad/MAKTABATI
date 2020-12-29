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
    <a href="{{ view('auth.registerbis')->with(compact('data')) }}">Verify Email</a>
    
    
  </body>
</html>