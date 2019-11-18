@extends('front.master')

@section('title')
Dream's Click

@endsection


@section('body')
 <div id="menu-container">

	<div class="divs">
            <!-- homepage start -->
            <div class="content homepage" id="menu-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">


                            <div class="main-slider">
                                <div class="flexslider">
                                    <ul class="slides">
                                        @foreach($sliders as $slider)
                                        <li>
                                            <div class="slider-caption">
                                                <h2>{{ $slider->slider_name }}</h2>                                             
                                            </div>
                                            <img src="{{ asset($slider->slider_image) }}" alt="Slide 1">
                                        </li>
                                        @endforeach    


                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="clear"></div>
    <div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<h1>Latest Photo's</h1>
            </div>
        </div>
        <div class="clear"></div>
        <div class="row">
            @foreach($latest_images as $latest_image)
        	<div class="col-md-3 col-sm-12 templatemo_servicegap">
                    <img src=" {{ asset($latest_image->gallery_image) }}" alt="" style="height: 250px;">
            <p class="text-primary" style="text-align: center;"> Location: {{ $latest_image->location }}</p>        
            </div>
            @endforeach
        </div>
    </div>
<!-- homepage end -->

<!-- service start -->
	<div class="content service" id="menu-2">
    <div class="container">
        <div class="row">
        	<div class="col-md-12">
        		<h1>Our Services</h1>
            </div>
        </div>
        <div class="row">
            
            @foreach($services as $service)
        	<div class="col-md-3 col-sm-12 templatemo_servicegap">
            	<div class="templatemo_icon">
                	<span class="fa fa-flask"></span>
                </div>
            	<div class="templatemo_greentitle">{{ $service->title }}</div>
                <div class="clear"></div>
                <p>{{ $service->description }}</p>
            </div>
            
          @endforeach
        </div>
    </div>
</div>
<!-- portfolio end -->

<div class="content portfolio" id="menu-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our pohoto's</h1>
            </div>
        </div>
        <div class="clear"></div>
        <div class="row templatemo_portfolio">
            @foreach($images as $image)
            <div class="col-md-2 col-sm-12">
                <div class="gallery-item">
                    <img src="{{ asset($image->gallery_image) }}" alt="gallery 1">
                    <p style="text-align: center;"> Location: {{ $image->location }}</p>
                    <div class="overlay">
                        <a href="{{ asset($image->gallery_image) }}" data-rel="lightbox" class="fa fa-arrows-alt"></a>
                        
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>


<!-- contact start -->
<div class="content contact" id="menu-5">
  <div class="container">
  	<div class="row">
    	<div class="col-md-12">
        	<h1>Contact us</h1>
        </div>
    </div>
      <div class="clear"></div>
    <div class="row">
         <h3 class="text-success" style="text-align: center">{{ Session::get('massage') }}</h3>
    	<div class="col-md-8 col-sm-12">
            <form action="{{ route('send-massage') }}"  method="post" id="contact_form">
                @csrf
        	<div class="templatemo_textbox"><input name="full_name" type="text" class="form-control" id="fullname" placeholder="Your Name"></div>
            <div class="templatemo_textbox"><input name="email_address" type="email" class="form-control" id="email" placeholder="Your Email"></div>
            <div class="clear"></div>
             <div class="templatemo_textareabox"><textarea name="message" class="form-control" id="message"  placeholder="Your message ... "></textarea>
             <div class="clear"></div>
             <input type="submit" name="btn" value="Send Massage" class="btn btn-primary">
             </div>
             </form>
             <div class="clear"></div>
        </div>
        <div class="col-md-4 col-sm-12 templatemo_address">
        	<ul>
            	<li class="fa fa-phone"></li>
                <li class="text">010-020-0340</li>
                <li class="fa fa-map-marker"></li>
                <li class="text">480 Mogote Street, Digital Estate</li>
                <li class="fa fa-envelope"></li>
                <li class="text">info@company.com</li>
                <li class="fa fa-globe"></li>
                <li class="text"><a href="#">www.company.com</a></li>
            </ul>
        </div>
    </div>
  </div>
  </div>
<!-- contact end -->
	</div>
</div>
 </div>

@endsection