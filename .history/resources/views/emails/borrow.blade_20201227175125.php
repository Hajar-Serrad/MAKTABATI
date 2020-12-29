<!DOCTYPE html>
<html>
  <head>
    <title>###</title>
    <style>
      
    </style>
  </head>
  <body style="font-size: 20px;">
     <h5> <em>Your request has been accepted</em> </h5>
     <p>
       Hello {{ $user }}, <br> <br> <br> <br>
       &nbsp; &nbsp; You requested to borrow {{ $book }} edition {{ $copy }} on {{ $borrowing->borrowed_at }}.<br> <br>
       &nbsp; &nbsp; Your borrowing has been confirmed.<br> <br> 
       &nbsp; &nbsp; Please be at the library as soon as possible to pick up your book.<br> <br> 
       &nbsp; &nbsp; The last deadline to give it back is  {{ $borrowing->must_be_returned_at }}.<br> <br>
       &nbsp; &nbsp; Take care of it so that other students can benefit too.<br> <br> <br> <br> <br>
       MAKTABATI

      

     </p>

    
    
    
  </body>
</html>