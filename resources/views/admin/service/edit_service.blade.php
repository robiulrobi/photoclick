@extends('admin.master')


@section('title')
Edit Services
@endsection


@section('body')
<div class="row justify-content-center">

      <div class="col-xl-8 col-lg-5 col-md-8">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <h3 class="text-primary" style="text-align: center;">Services Update Section Here.....</h3>
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                  <h3 class="text-success" style="text-align: center;"> {{ Session::get('massage')}} </h3>
                <div class="p-4">
                    <form class="user" action="{{ route('update-service') }}" method="post">
                        @csrf
                    <div class="form-group">
                        <input type="text" name="title" value="{{ $service->title }}" class="form-control form-control-user" id="exampleInputEmail">
                        <input type="hidden" name="title_id" value="{{ $service->id }}" class="form-control form-control-user" id="exampleInputEmail">
                    </div>
                    <div class="form-group">
                        <textarea rows="5" cols="80" name="description" >{{ $service->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btn" value="Update Your Service" class="btn btn-primary btn-user btn-block"/>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
@endsection





