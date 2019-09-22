<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminController extends Controller
{  

   public function index()
   {
   	  return view('admin.admin_login');
   }	

   public function XYZ()
   {
   	  return view('admin.admin_register');
   }

    public function AdminRegister(Request $request)
    {
    	$data['admin_name'] = $request->admin_name;
    	$data['admin_email'] = $request->admin_email;
    	$data['admin_password'] = $request->admin_password;
      
    	$admin_id = DB::table('admin')
    	     ->insertGetId($data);
       if($admin_id)
       {
       	  Session::put('admin_id', $admin_id);
       	  Session::put('admin_name', $request->admin_name);
       	  Session::put('message', 'Register Inserted Successfully');
       	  return Redirect()->back();
       }
       
    }
}
