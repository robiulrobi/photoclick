<?php

namespace App\Http\Controllers;
use App\Slider;
use Image;
use App\Picture;
use Session;

use Illuminate\Http\Request;

class imageController extends Controller
{
       public function addSlider(){
        return view('admin.slider.add-slider');
    }


    //slider save



        public function saveSlider(Request $request){

            $this->validate($request,[
                   'slider_name' => 'required',
                   // 'slider_image' => 'slider_image|nullable|max:9999'
                    ]);

            $slider= new Slider();
            $slider->slider_name = $request->slider_name;

            //slider upload
            if($request->hasFile('slider_image')){
               $sliderimage = $request->file('slider_image');
               $filename = time(). '.' . $sliderimage->getClientOriginalExtension();
               $location = public_path('images/'.$filename);
               Image::make($sliderimage)->resize(800,400)->save($location);
               $slider->slider_image = $filename;

            }

            $slider->save();

            return redirect('/slider/add-slider')->with('massage','Slider upload successfully');
    }

    //slider save


    public function manageSlider(){
       $sliders = Slider::all();

        return view('admin.slider.manage_slider',['sliders'=>$sliders]);
    }

    public function deleteSlider($id){
        $slider_delete = Slider::find($id);
        $slider_delete->delete();

        return redirect('/slider/manage-slider')->with('massage','Slider Info Delete Successfully');
    }




    public function addImage(){
        return view('admin.image.add-image');
    }
    //save image

    public function saveImage(Request $request){


        $this->validate($request,[
               'image_name' => 'required',
               'location' => 'required',
               // 'gallery_image' => 'gallery_image|nullable|max:9999'
                ]);

        $picture = new Picture();
        $picture->image_name = $request->image_name;
        $picture->location = $request->location;

        //image upload
        if($request->hasFile('gallery_image')){
           $image = $request->file('gallery_image');
           $filename = time(). '.' . $image->getClientOriginalExtension();
           $location = public_path('images/'.$filename);
           Image::make($image)->resize(800,400)->save($location);
           $picture->gallery_image = $filename;

        }

        $picture->save();

        return redirect('/images/add-image')->with('massage','image upload successfully');

    }
    //image save

    public function manageImage(){
        $pictures = Picture::all();

        return view('admin.image.manage_image',['pictures'=>$pictures]);
    }

       public function deleteImage($id){
        $delete_picture = Picture::find($id);
        $delete_picture->delete();
        return redirect('/images/manage-image')->with('massage','Image Delete Successfully');
    }
}
