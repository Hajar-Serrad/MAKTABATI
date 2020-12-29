<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
     integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
    <title>LATECOMERS</title>
    <style>
        
    </style>
</head>
<body style="font-size: 20px; font-family:sans-serif; ">
    <br> <br> 
    <center> <h4 style="color: crimson; text-decoration: crimson; ">LATECOMERS LIST</h4> </center>
    <table class="table table-hover table-striped table-light">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th>Student Code</th>
                <th>Book's ISBN</th>
                <th>Borrowed At</th>
                <th>Must Be Returned At</th>
            </tr>
        </thead>
        <tbody>
            @php
                $nbr = 0;
            @endphp
            @foreach ($borrowings as $borrowing)
                @foreach ($users as $user)
                    @if ($borrowing->user_id == $user->id)
                        <tr>
                            <th scope="row">{{ ++$nbr }}</th>
                            <td>{{ $user->person_id }}</td>
                            <td>{{ $borrowing->ISBN }}</td>
                            <td>{{ $borrowing->borrowed_at->isoFormat('MMMM Do YYYY, h:mm a') }}</td>
                            <td>{{ $borrowing->must_be_returned_at->isoFormat('MMMM Do YYYY, h:mm a') }}</td>
                        </tr>
                        
                    @endif
                @endforeach
            @endforeach
        </tbody>
    </table>
</body>
</html>