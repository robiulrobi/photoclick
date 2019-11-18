@extends('admin.master')


@section('title')

Manage Image
@endsection



@section('body')

 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">View Massage Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <h3 class="text-success" style="text-align: center;"> {{ Session::get('massage')}} </h3> 
                <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Massage Id</th>
                      <th>Customer Name</th>
                      <th>Email Address</th>
                      <th>Massage</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @php($i=1)
                      @foreach($massages as $massage)
                    <tr>
                      <td style="width:100px;">{{ $i++ }}</td>
                      <td style="width:150px;" >{{ $massage->full_name }}</td>
                      <td style="width:150px;" >{{ $massage->email_address }}</td>
                      <td> {{ $massage->message }} </td>
                      <td style="width:100px;">
                          <a style="width:100px;" href="{{ route('delete-massage',['id'=>$massage->id]) }}" class="btn btn-danger badge-pill">
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
