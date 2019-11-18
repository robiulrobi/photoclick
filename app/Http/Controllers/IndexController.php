<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use App\Slider;
use App\Massage;
use App\Service;

class indexController extends Controller
{
    public function index(){
       $latest_images= Picture::orderBy('id','DESC')
                ->take(4)
                ->get();
       $images= Picture::orderBy('id')
                ->take(100)
                ->get();
       
       $sliders= Slider::orderBy('id','DESC')
                ->take(3)
                ->get();
       $services = Service::orderBy('id','DESC')
                ->take(4)
                ->get();
                
                
        return view('front.home.home',[
            'images' => $images,
            'sliders' => $sliders,
            'latest_images' => $latest_images,
            'services' => $services,
        ]);
    }
    
    public function sendMassage(Request $request){
        $massage = new Massage();
        $massage->full_name = $request->full_name;
        $massage->email_address = $request->email_address;
        $massage->message = $request->message;
        $massage->save();
        return redirect('/')->with('massage','Massage Send Successfully,Check Your email for Replay');
    }
    
    
    //view massage
    public function viewMassages(){
       $massages= Massage::orderBy('id','DESC')
                ->get();
        return view('admin.massage.view_massage',[
            'massages'=>$massages
        ]);
    }


    //view massage
    
    //delete massage
    public function deleteMassage($id){
        $delete_massage = Massage::find($id);
        $delete_massage->delete();
        return redirect('/massages/view-massages')->with('massage','Massage Delete Successfully');
    }
    //delete masssage
    
    
    //add service
    
    public function addService(){
        return view('admin.service.add_service');
    }
    //add service
    
    //SAVE SERVICE
    public function saveService(Request $request){
        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();
        return redirect('/service/add-service')->with('massage','Service Upload Successfully');
    }
    //SAVE SERVICE
    //manage service
    public function manageService(){
        $services = Service::orderBy('id')
                ->get();
        return view('admin.service.manage_service',[
            'services'=>$services
        ]);
    }
    //manage service
    
    //edit service
    
    public function editService($id){
        $service = Service::find($id);
        return view('admin.service.edit_service',[
            'service'=>$service
        ]);
    }
    //edit service
    
    //update
    public function updateService(Request $request){
        $service = Service::find($request->title_id);
         $service->title = $request->title;
        $service->description = $request->description;
        $service->save();
        return redirect('/service/manage-service')->with('massage','Service Update Successfully');
                
    }
    //update
    
    //delete
    public function deleteService($id){
        $delete_service = Service::find($id);
        $delete_service->delete();
        return redirect('/service/manage-service')->with('massage','Service Delete Successfully');
    }
    //delete
}
