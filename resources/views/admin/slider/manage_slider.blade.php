@extends('admin.master')

@section('title')

Manage Slider
@endsection



@section('body')
 <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Slider Manage Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered">
                    <h3 class="text-success" style="text-align: center;"> {{ Session::get('massage')}} </h3> 
                  <thead>
                    <tr>
                      <th>Slider Id</th>
                      <th>Slider Name</th>
                      <th>Slider Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @php($i=1)
                      @foreach($sliders as $slider)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $slider->slider_name }}</td>
                      <td style="width: 180px;">
                          <img src="{{ asset( $slider->slider_image ) }}" alt="" height="70" width="160" />
                      </td>
                      <td style="width:200px;">
                          <a style="width:200px;" href="{{ route('delete-slider',['id'=>$slider->id]) }}" class="btn btn-danger badge-pill">
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
