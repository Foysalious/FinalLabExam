@extends('Backend.template.layout');
@section('main-content')
   
@section('content')

<form action="{{ route('storeuser') }}" method="POST" action="http://127.0.0.1:8000/register" enctype="multipart/form-data">
    
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name" autofocus>

                                        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Company Name</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control " name="cname" value="" required autocomplete="name" autofocus>

                                        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Contact No</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control " name="contact" value="" required autocomplete="name" autofocus>

                                        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email">

                                        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">

                                        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </div>
</form>
@endsection