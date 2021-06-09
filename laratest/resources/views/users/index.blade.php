<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
</head>

<body>
    <center>
        <h3>User List</h3>
        <a href="/users/create">Create User</a>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Action</td>
            </tr>
            @foreach($userslist as $user)
            <tr>
                <td>{{$user[0]}}</td>
                <td>{{$user[1]}}</td>
                <td>{{$user[2]}}</td>
                <td>
                    <a href="/users/details/{{$user[0]}}"> Details </a> |
                    <a href="/users/edit/{{$user[0]}}"> Edit </a> |
                    <a href="/users/delete/{{$user[0]}}"> Delete </a> |
                </td>
            </tr>
            @endforeach
        </table>
    </center>
</body>

</html>