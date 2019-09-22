<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class AboutController extends Controller
{
    public function index()
    {
    	return view('add_goal');
    }

    public function InsertGoal(Request $request)
    {
    	$data = array();
    	$data['goal_title'] = $request->goal_title;    
        $data['goal_description'] = $request->goal_description;
        $insert_goal = DB::table('goal')->insert($data);
        if($insert_goal){
        	Session::put('message', 'Goal Inserted Successfully');
        	return Redirect()->back();
        }
    }

    public function AddAppoitment(Request $request)
    {
        $data = array();
        $data['service_id'] = $request->service_id;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone_number'] = $request->phone_number;
        
        DB::table('appoitment')->insert($data);
        return Redirect::to('/success');
    }

    public function AllAppoitment()
    {
        $all_appoitment = DB::table('appoitment')
         ->join('services', 'appoitment.id', 'services.service_id')
         ->select('services.service_title', 'appoitment.*')
        ->get();
        return view('all_appoitment', compact('all_appoitment'));
    }

    public function DeleteThis($id)
    {
        DB::table('appoitment')->where('id', $id)->delete();
        return Redirect()->back();
    }

    public function Success()
    {
        return view('success');
    }

    public function AddCEO()
    {
        return view('add_ceo');
    }

    public function InsertCEO(Request $request)
    {
        $data = array();
        $data['ceo_name'] = $request->ceo_name;
        $data['ceo_short_description'] = $request->ceo_short_description;
        $image = $request->file('ceo_image');
            if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/CEO/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['ceo_image']=$image_url;
                $blog=DB::table('ceo')
                         ->insert($data);
              if ($blog) {
                 Session::put('message', 'CEO Inserted Successfully');
                return Redirect()->back();                      
             }    
                
            
           }
        }
    }

    public function ManageCEO()
    {
        $manage_ceo = DB::table('ceo')->get();
        return view('manage_ceo', compact('manage_ceo'));
    }

    public function EditCEO($id)
    {
        $edit_ceo = DB::table('ceo')->first();
        return view('edit_ceo', compact('edit_ceo'));
    }

    public function UpdateCEO(Request $request, $id)
    {
        $data = array();
        $data['ceo_name'] = $request->ceo_name;
        $data['ceo_short_description'] = $request->ceo_short_description;
        $image = $request->file('ceo_image');
         if ($image) {
       $image_name=str_random(20);
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='public/ceo/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       if ($success) {
          $data['ceo_image']=$image_url;
             $img=DB::table('ceo')->where('id',$id)->first();
             $image_path = $img->ceo_image;
             
          $blog=DB::table('ceo')->where('id',$id)->update($data); 
         if ($blog) {
               Session::put('message', 'CEO  Updated Successfully');
               return Redirect()->back();                      
            }else{
              return Redirect()->back();
             } 
          }
      }else{
        $oldphoto=$request->old_photo;
         if ($oldphoto) {
          $data['ceo_image']=$oldphoto;  
          $user=DB::table('ceo')->where('id',$id)->update($data); 
         if ($user) {
                Session::put('message', 'CEO  Updated Successfully');
               return Redirect()->back();                      
            }else{
              return Redirect()->back();
             } 
          }
       }
    }

    public function AddClient()
    {
        return view('add_client_testimonial');
    }

    public function InsertTestimonail(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['location'] = $request->location;
        $data['details'] = $request->details;
        $image = $request->file('photo');
         if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/Clients/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['photo']=$image_url;
                $blog=DB::table('teams')
                         ->insert($data);
              if ($blog) {
                 Session::put('message', 'Client Inserted Successfully');
                return Redirect()->back();                      
             }    
                
            
           }
        }
    }
}
