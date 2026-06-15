<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Email</th>
            <th>Created At</th

</thead>
<tbody>
@foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
</tr>
@endforeach
</tbody>

</table>
<p>{{$user->email}}</p>
</body>
</html>