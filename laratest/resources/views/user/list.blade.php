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

        <table border="1">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Action</td>
            </tr>
            @foreach($userlist as $user)
            <tr>
                <td>{{$user[0]}}</td>
                <td>{{$user[1]}}</td>
                <td>{{$user[2]}}</td>
                <td>
                    <a href="/user/details/{{$user[0]}}"> Details </a> |
                    <a href="/user/edit/{{$user[0]}}"> Edit </a> |
                    <a href="/user/delete/{{$user[0]}}"> Delete </a> |
                </td>
            </tr>
            @endforeach
        </table>
    </center>
</body>

</html>