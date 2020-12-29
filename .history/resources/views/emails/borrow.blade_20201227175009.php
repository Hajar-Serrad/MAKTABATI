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
      &nbsp; &nbsp; We wish you enjoyed the book you are borrowing right now. <br> <br>
      &nbsp; &nbsp; Sadly, the deadline to return it will end soon. <br> <br>
      &nbsp; &nbsp; Please be at the library as soon as possible to give it back. <br> <br>
      &nbsp; &nbsp; Thank you for your time. <br> <br> <br> <br> <br>
       MAKTABATI

       You requested to borrow {{ $book }} edition {{ $copy }} on {{ $borrowing->borrowed_at }}
       Your borrowing has been confirmed. 
       Please be at the library as soon as possible to pick up your book. 
      The last deadline to give it back is  {{ $borrowing->must_be_returned_at }}
      Take care of it so that other students can benefit too.

     </p>

    
    
    
  </body>
</html>