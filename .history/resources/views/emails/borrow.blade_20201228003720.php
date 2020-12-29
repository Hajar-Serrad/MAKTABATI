<!DOCTYPE html>
<html>
  <head>
    <title>###</title>
    <style>
      #detail{
          color: #5858FA;
      }
    </style>
  </head>
  <body style="font-size: 17px; font-family: font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;; background-color: #E3CEF6">
     <h5> <span style=" color: #1B0A2A;"> Your request has been accepted</span>  </h5>
     <p>
       Hello <span id="detail">{{ $user }}</span>, <br> <br> <br> 
       &nbsp; &nbsp; You requested to borrow <span id="detail">{{ $book }}</span>, from <span id="detail">{{ $copy }}</span> edition, on <span>{{ $borrowing->borrowed_at->isoFormat('MMMM Do YYYY, h:mm a') }}</span>.<br> <br>
       &nbsp; &nbsp; Your borrowing has been confirmed.<br> <br> 
       &nbsp; &nbsp; Please be at the library as soon as possible to pick up your book.<br> <br> 
       &nbsp; &nbsp; The last deadline to give it back is  <span id="detail">{{ $borrowing->must_be_returned_at->isoFormat('MMMM Do YYYY, h:mm a') }}</span>.<br> <br>
       &nbsp; &nbsp; Take care of it so that other students can benefit too.<br> <br> <br> 
       <span style=" color: #1B0A2A;"> <b>MAKTABATI</b> </span> 

      

     </p>

    
     <div style="color: #2E2E2E; font-size: 14px;">
  
        © 2020 Maktabati made with <span style="color: red"> ♥ </span>
     
      </div>
    
  </body>
</html>