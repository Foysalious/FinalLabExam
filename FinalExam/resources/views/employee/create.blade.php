<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employe</title>
</head>

<body>
    <h2>Add a NEW Job</h2>
    <form method="POST">
        @csrf
        <label>Company</label>
        <input type="text" name="company" id=""> <br>

        <label>Title</label>
        <input type="text" name="title" id=""> <br>

        <label>location</label>
        <input type="text" name="location" id=""> <br>

        <label>Salary</label>

        <input type="number" name="salary" id=""> <br>

        <button type="submit">Add New Job</button>
    </form>

    @if($errors->any())

    <div style="color: red">
        @foreach ($errors->all() as $err)
        <strong> {{$err}} <br></strong>
        @endforeach
    </div>
    @endif

</body>

</html>