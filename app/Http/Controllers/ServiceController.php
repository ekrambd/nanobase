<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class ServiceController extends Controller
{
    public function index()
    {
    	return view('add_service');
    }

    public function InsertService(Request $request)
    {
    	$data = array();
    	$data['service_title'] = $request->service_title;
    	$data['short_description'] = $request->short_description;
    	$image = $request->file('service_image');
    		if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/Service/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['service_image']=$image_url;
                $blog=DB::table('services')
                         ->insert($data);
              if ($blog) {
                 Session::put('message', 'Service Inserted Successfully');
                return Redirect()->back();                      
             }    
                
            
           }
        }
    }

    public function ManageService()
    {
        $manage_service = DB::table('services')->get();
        return view('manage_service', compact('manage_service'));
    }

    public function EditService($service_id)
    {
        $edit_service = DB::table('services')->where('service_id', $service_id)->first();
        return view('edit_service', compact('edit_service'));
    }

    public function UpdateService(Request $request, $service_id)
    {
        $data = array();
        $data['service_title'] = $request->service_title;
        $data['short_description'] = $request->short_description;
        $image = $request->file('service_image');
        if ($image) {
       $image_name=str_random(20);
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='public/Service/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       if ($success) {
          $data['service_image']=$image_url;
             $img=DB::table('services')->where('service_id',$service_id)->first();
             $image_path = $img->service_image;
             
          $blog=DB::table('services')->where('service_id',$service_id)->update($data); 
         if ($blog) {
               Session::put('message', 'Service Updated Successfully');
               return Redirect()->back();                      
            }else{
              return Redirect()->back();
             } 
          }
      }else{
        $oldphoto=$request->old_photo;
         if ($oldphoto) {
          $data['service_image']=$oldphoto;  
          $user=DB::table('services')->where('service_id',$service_id)->update($data); 
         if ($user) {
                Session::put('message', 'Service Updated Successfully');
               return Redirect()->back();                      
            }else{
              return Redirect()->back();
             } 
          }
       }
    }

    public function DeleteService($service_id)
    {
        DB::table('services')->where('service_id', $service_id)->delete();
        return Redirect()->back();
    }
}
