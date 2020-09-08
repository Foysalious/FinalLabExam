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
        <li>Company: <strong>{{$job->company}}</strong></li>
        <li>Title: <strong>{{$job->title}}</strong></li>
        <li>Location: <strong>{{$job->location}}</strong></li>
    </ul>

    <form method="POST">
        @csrf
        Are you sure to delete this Job?
        <button type="submit">Confirm</button>
    </form>
</body>

</html>