<!DOCTYPE html>
<html>

<head>
    <title>User Details</title>
</head>

<body>

    <a href="/home"> Back</a> |
    <a href="/logout"> Logout </a>

    <h2>User Details</h2>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>{{$user[0]}}</td>
        </tr>
        <tr>
            <td>Username</td>
            <td>{{$user[1]}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$user[2]}}</td>
        </tr>
    </table>

</body>

</html>