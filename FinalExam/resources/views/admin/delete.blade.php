<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete </title>
</head>

<body>
    <h1>Delete Eoploye</h1>
    <ul>
        <li>Name: <strong>{{$user->name}}</strong></li>
        <li>Username: <strong>{{$user->username}}</strong></li>
        <li>Company: <strong>{{$user->company}}</strong></li>
    </ul>

    <form method="POST">
        @csrf
        Are you sure to delete this employee?
        <button type="submit">Confirm</button>
    </form>
</body>

</html>
