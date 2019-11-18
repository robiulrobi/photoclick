@extends('admin.master')

@section('title')

Manage Image
@endsection



@section('body')

 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Image Manage Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <h3 class="text-success" style="text-align: center;"> {{ Session::get('massage')}} </h3>
                <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Image Id</th>
                      <th>Image Name</th>
                      <th>Location</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @php($i=1)
                      @foreach($pictures as $picture)

                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $picture->image_name }}</td>
                      <td>{{ $picture->location }}</td>
                      <td style="width: 200px;">
                          <img src="{{ asset('images/' ,$picture->gallery_image ) }}" alt="" height="70" width="160" />
                      </td>
                      <td style="width:250px;">
                          <a style="width:250px;" href="{{ route('delete-image',['id'=>$picture->id]) }}" class="btn btn-danger badge-pill">
                              <span class="glyphicon glyphicon-edit">Delete</span>
                          </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
           </div>

@endsection
