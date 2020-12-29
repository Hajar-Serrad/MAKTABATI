<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LATECOMERS</title>
</head>
<body>
    <table>
        <thead>
            <tr>
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
            @foreach ($borrowings as $borrowing)
                @foreach ($users as $user)
                    @if ($borrowing->user_id == $user->id)
                        <tr>
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