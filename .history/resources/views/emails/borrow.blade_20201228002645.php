<!DOCTYPE html>
<html>
  <head>
    <title>###</title>
    <style>
      #detail{
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
          color: #1B0A2A;
      }
    </style>
  </head>
  <body style="font-size: 20px; font-family: sans-serif;">
     <h5> <span style=" color: #F2E0F7;"> <b>Your request has been accepted</b> </span>  </h5>
     <p>
       Hello <span id="detail">{{ $user }}</span>, <br> <br> <br> <br>
       &nbsp; &nbsp; You requested to borrow <span id="detail">{{ $book }}</span>, from <span id="detail">{{ $copy }}</span> edition, on <span>{{ $borrowing->borrowed_at }}</span>.<br> <br>
       &nbsp; &nbsp; Your borrowing has been confirmed.<br> <br> 
       &nbsp; &nbsp; Please be at the library as soon as possible to pick up your book.<br> <br> 
       &nbsp; &nbsp; The last deadline to give it back is  <span id="detail">{{ $borrowing->must_be_returned_at }}</span>.<br> <br>
       &nbsp; &nbsp; Take care of it so that other students can benefit too.<br> <br> <br> <br> <br>
       <span style=" color: #F2E0F7;"> <b>MAKTABATI</b> </span> 

      

     </p>

    
    
    
  </body>
</html>