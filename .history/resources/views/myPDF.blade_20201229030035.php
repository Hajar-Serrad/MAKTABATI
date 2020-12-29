<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LATECOMERS</title>
    <style>
        table, td, th {
          border: 1px solid black;
        }
        
        table {
          width: 100%;
          border-collapse: collapse;
        }
    </style>
</head>
<body style="font-size: 10px;">
    <h4>LATECOMERS LIST</h4>
    <table style="border-collapse: collapse;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th>Student Code</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Class</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
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
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->class }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->address }}</td>
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