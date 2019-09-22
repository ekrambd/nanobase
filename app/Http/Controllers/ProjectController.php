<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class ProjectController extends Controller
{
    public function index()
    {
    	return Redirect::to('/all-project');
    }

    public function AllProject()
    {
    	return view('all_project');
    }

    public function AddProject()
    {
    	return view('add_project');
    }

    public function InsertProject(Request $request)
    {
    	$data = array();
    	$data['product_title'] = $request->product_title;
    	$data['sub_title'] = $request->sub_title;
      $data['location'] = $request->location;
      $data['sq_m'] = $request->sq_m;
      $data['year'] = $request->year;
      $data['price'] = $request->price;
      $data['head'] = $request->head;
      $data['video'] = $request->video;
      $data['map'] = $request->map;
    	$image = $request->file('product_image');
    	if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/Project/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['product_image']=$image_url;
                $blog=DB::table('project')
                         ->insert($data);
              if ($blog) {
                 Session::put('message', 'Project Inserted Successfully');
                return Redirect()->back();                      
             }    
                
            
           }
        }
    }

    public function ManageProject()
    {
        $manage_project = DB::table('project')->get();
        return view('manage_project', compact('manage_project'));
    }

    public function EditProject($project_id)
    {
        $edit_project = DB::table('project')->where('project_id', $project_id)->first();
        return view('edit_project', compact('edit_project'));
    }

    public function UpdateProject(Request $request, $project_id)
    {
        $data = array();
        $data['product_title'] = $request->product_title;
        $data['sub_title'] = $request->sub_title;
        $data['location'] = $request->location;
      $data['sq_m'] = $request->sq_m;
      $data['year'] = $request->year;
      $data['price'] = $request->price;
      $data['head'] = $request->head;
      $data['video'] = $request->video;
      $data['map'] = $request->map;
        $image = $request->file('product_image');
         if ($image) {
       $image_name=str_random(20);
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='public/Project/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       if ($success) {
          $data['product_image']=$image_url;
             $img=DB::table('project')->where('project_id',$project_id)->first();
             $image_path = $img->product_image;
             
          $blog=DB::table('project')->where('project_id',$project_id)->update($data); 
         if ($blog) {
               Session::put('message', 'Project Updated Successfully');
               return Redirect()->back();                      
            }else{
              return Redirect()->back();
             } 
          }
      }else{
        $oldphoto=$request->old_photo;
         if ($oldphoto) {
          $data['product_image']=$oldphoto;  
          $user=DB::table('project')->where('project_id',$project_id)->update($data); 
         if ($user) {
                Session::put('message', 'Project Updated Successfully');
               return Redirect()->back();                      
            }else{
              return Redirect()->back();
             } 
          }
       }
    }

    public function DeleteProject($project_id)
    {
        DB::table('project')->where('project_id', $project_id)->delete();
        return Redirect()->back();
    }

    public function AddBg()
    {
       return view('add_bg');
    }

    public function InsertBg(Request $request)
    {
       $data = array();
       $data['bg_sub_title'] = $request->bg_sub_title;
       $data['bg_title'] = $request->bg_title;
       $image = $request->file('bg_image');
       if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/Bg/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['bg_image']=$image_url;
                $blog=DB::table('bg')
                         ->insert($data);
              if ($blog) {
                 Session::put('message', 'Background Inserted Successfully');
                return Redirect()->back();                      
             }    
                
            
           }
        }
    }

    public function ProjectDetails($project_id)
    {
        $project_details = DB::table('project')->where('project_id', $project_id)->first();
        
        return view('project_view', compact('project_details'));
    }
}
