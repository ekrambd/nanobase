<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class ClientController extends Controller
{
    public function index()
    {
    	return view('add_client');
    }

    public function insertTest(Request $request)
    {
    	$data = array();
    	$data['name'] = $request->name;
    	$image = $request->file('image');
    	if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/Client/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['image']=$image_url;
                $blog=DB::table('testimonial')
                         ->insert($data);
              if ($blog) {
                 Session::put('message', 'Client Inserted Successfully');
                return Redirect()->back();                      
             }    
                
            
           }
        }
    }
}
