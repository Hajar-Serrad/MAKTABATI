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
    <a href="">Verify Email</a>
    <form method="post" action="{{ route('register4') }}" >
      @csrf
      <input 
      name="data"
      type="hidden"
      value="{{ $data }}" />
    
  </body>
</html>