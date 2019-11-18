@extends('admin.master')

@section('title')
Add Image
@endsection


@section('body')
<div class="row justify-content-center">

      <div class="col-xl-8 col-lg-5 col-md-8">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <h3 class="text-primary" style="text-align: center;">Image Upload Section Here.....</h3>
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-12">
                  <h3 class="text-success" style="text-align: center;"> </h3>
                <div class="p-4">
                    <form class="user" action="{{ route('save-image') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                    <div class="form-group">
                        <input type="text" required="" name="image_name" class="form-control form-control-user"  id="image_name" placeholder="Enter Image Name">

                    </div>
                    <div class="form-group">
                        <input type="text" required="" name="location" class="form-control form-control-user" id="location" placeholder="Enter Caption Location">
                    </div>
                    <div class="form-group">
                        <input type="file" name="gallery_image"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btn" value="Publish Your Image" class="btn btn-primary btn-user btn-block"/>
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
