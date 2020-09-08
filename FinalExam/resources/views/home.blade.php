@extends('Backend.template.layout');
@section('main-content')
   
@section('content')
<div class="row mg-b-20">
    <div class="col-md">
      <div class="card card-body">

         
        <!-- Category Table Start -->
        <table id="myTable" class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">email</th>
              <th scope="col">Contact No</th>
              <th scope="col">Company Name</th>
             
              <th scope="col">Action</th>

            </tr>
          </thead>
          <tbody>
 

              @foreach( $categories as $category )
                  <tr>
                    <th scope="row"> {{ $category->id }} </th>
                    <th scope="row"> {{ $category->name }} </th>
                    <th scope="row"> {{ $category->email }} </th>
                    <th scope="row"> {{ $category->contact }} </th>
                    <th scope="row"> {{ $category->cname }} </th>
                    
                   
                  
                   
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('editCategory', $category->id) }}" class="btn btn-success btn-sm">Update</a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCategory{{ $category->id }}">Delete</button>
                        </div>

                  <!-- Modal -->
								<div class="modal fade" id="deleteCategory{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Do You want to delete this category?</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                             <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                          <form action="{{ route('deleteCategory', $category->id ) }}" method="POST">
                                              @csrf
                                              <button type="submit" class="btn btn-danger">Delete</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                    </td>
                </tr>
               
              @endforeach		    

          </tbody>
        </table>
        <!-- Category Table End -->
      </div><!-- card -->
    </div><!-- col -->            
  </div><!-- row -->


</div><!-- br-section-wrapper -->

@endsection