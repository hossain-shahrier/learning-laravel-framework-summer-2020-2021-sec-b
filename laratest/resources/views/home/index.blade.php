<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Welcome, {{$name}}, your Id is {{$id}}</h1>
    <a href="/users/create">Create User</a> |
    <a href="/users/list"> User List </a> |
    <a href="/logout"> Logout </a>
</body>

</html>