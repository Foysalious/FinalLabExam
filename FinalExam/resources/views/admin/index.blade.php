<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome Admin</h1>
    <h3><a href="admin/create">Create new Employee</a></h3>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Type</td>
            <td>Username</td>
            <td>Password</td>
            <td>Contact No.</td>
            <td>Company</td>
            <td>Actions</td>
        </tr>

        @for($i=0; $i != count($users); $i++)
        <tr>
            <td>{{$users[$i]->id}}</td>
            <td>{{$users[$i]->type}}</td>
            <td>{{$users[$i]->username}}</td>
            <td>{{$users[$i]->password}}</td>
            <td>{{$users[$i]->contact}}</td>
            <td>{{$users[$i]->company}}</td>
            <td>
                <a href="admin/edit/{{$users[$i]->id}}">Edit</a>
                <a href="admin/delete/{{$users[$i]->id}}">Delete</a>
            </td>
        </tr>
        @endfor
    </table>
</body>

</html>