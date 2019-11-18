@extends('admin.master')


@section('title')

Manage service
@endsection



@section('body')

 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">View Service Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <h3 class="text-success" style="text-align: center;"> {{ Session::get('massage')}} </h3> 
                <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Service Id</th>
                      <th>Service Title</th>
                      <th>Service Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @php($i=1)
                      @foreach($services as $service)
                    <tr>
                      <td style="width:100px;">{{ $i++ }}</td>
                      <td style="width:200px;" >{{ $service->title }}</td>
                      <td> {{ $service->description }} </td>
                      <td>
                          <a style="width: 100px;" href="{{ route('edit-service',['id'=>$service->id]) }}" class="btn btn-primary badge-pill">
                              Edit
                          </a>
                          <br/>
                          <a style="width: 100px;" href="{{ route('delete-service',['id'=>$service->id]) }}" class="btn btn-danger badge-pill">
                              Delete
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


