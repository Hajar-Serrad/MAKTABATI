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
<body style="font-size: 20px;">
    <h4>LATECOMERS LIST</h4>
    <table>
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