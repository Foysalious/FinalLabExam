<h2>Edit a JOB</h2>
<form method="POST">
    @csrf
    <label>Company</label>
    <input type="text" name="company" value={{$job->company}} id=""> <br>

    <label>Title</label>
    <input type="text" name="title" value={{$job->title}} id=""> <br>

    <label>location</label>
    <input type="text" name="location" value={{$job->location}} id=""> <br>

    <label>Salary</label>

    <input type="number" name="salary" value={{$job->salary}} id=""> <br>

    <button type="submit">Add New Job</button>
</form>

@if($errors->any())

<div style="color: red">
    @foreach ($errors->all() as $err)
    <strong> {{$err}} <br></strong>
    @endforeach
</div>
@endif