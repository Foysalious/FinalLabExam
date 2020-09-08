<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h3>Register</h3>
    <form method="POST">
        @csrf
        <label>Username</label>
        <input type="text" name="username" id=""> <br>
        <label>Password</label>
        <input type="password" name="password" id=""> <br>
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" id=""> <br>
        <label>Name</label>
        <input type="text" name="name" id=""> <br>
        <label>Company</label>
        <input type="text" name="company" id=""> <br>
        <label>Contact No.</label>
        <input type="text" name="contact" id=""> <br>

        <button type="submit">Register</button>
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