@extends ('backend.template.layout')

@section('main-content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">
        <!-- Create New Category Form Start -->
        <form action="{{ route('store', $contac->id) }}" method="POST" enctype="multipart/form-data">
            @csrf                	
            <div class="form-group">
                <label>Company Name</label>
                <input type="text" name="company_name" class="form-control" placeholder="Please Insert Contact Number">
            </div>
            <div>
                <label>Hello</label>
            </div>
            <div class="form-group">
                <label>Job Titile</label>
                <input type="text" name="job_title" class="form-control" placeholder="Please Insert Contact Number">
            </div>

            <div class="form-group">
                <label>Job Location</label>
                <input type="text" name="job_location" class="form-control" placeholder="Please Insert your official facebook link">
            </div>

            <div class="form-group">
                <label>Salary</label>
                <input type="text" name="salary" class="form-control" placeholder="Please Insert your official youtube link">
            </div>

           
            <div class="form-group">
                <input type="submit" name="addCategory" value="Add Contact Info" class="btn btn-primary">
            </div>
         

        </form>
        <!-- Create New Category Form End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->

@endsection