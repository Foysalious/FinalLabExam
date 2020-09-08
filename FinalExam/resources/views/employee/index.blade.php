<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome Employe</h1>
    <h3><a href="employee/create">Create new Job</a></h3>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Company</td>
            <td>Title</td>
            <td>Location</td>
            <td>Salary</td>
            <td>Actions</td>

        </tr>

        @for($i=0; $i != count($jobs); $i++)
        <tr>
            <td>{{$jobs[$i]->id}}</td>
            <td>{{$jobs[$i]->company}}</td>
            <td>{{$jobs[$i]->title}}</td>
            <td>{{$jobs[$i]->location}}</td>
            <td>{{$jobs[$i]->salary}}</td>
            <td>
                <a href="employee/edit/{{$jobs[$i]->id}}">Edit</a>
                <a href="employee/delete/{{$jobs[$i]->id}}">Delete</a>
            </td>
        </tr>
        @endfor
    </table>
</body>

</html>