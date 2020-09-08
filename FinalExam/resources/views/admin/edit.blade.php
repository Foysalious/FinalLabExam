<h3>Edit Employee</h3>
<form method="POST">
    @csrf
    <label>Username</label>
    <input type="text" name="username" value={{$user->username}} id=""> <br>
    <label>Password</label>
    <input type="text" name="password" value={{$user->password}} id=""> <br>
    <label>Name</label>
    <input type="text" value={{$user->name}} name="name" id=""> <br>
    <label>Company</label>
    <input type="text" value={{$user->company}} name="company" id=""> <br>
    <label>Contact No.</label>
    <input type="text" value={{$user->contact}} name="contact" id=""> <br>

    <button type="submit">Update Employee</button>
</form>