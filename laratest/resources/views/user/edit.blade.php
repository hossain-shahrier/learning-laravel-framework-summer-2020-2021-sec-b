<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <h2>Hello, {{$user[1]}}</h2>
    <p>Update your information</p>

    <body>
        <form method="post">
            <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="uname"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit"></td>
                </tr>
            </table>
        </form>

    </body>
</body>

</html>