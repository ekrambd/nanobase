<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();
class SuperAdminController extends Controller
{
    public function AdminLogin(Request $request)
    { 

      $admin_email = $request->admin_email;
      
    	$admin_password = $request->admin_password;

      
    	$result = DB::table('admin')
    	      ->where('admin_email', $admin_email)
    	      ->where('admin_password', $admin_password)
    	      ->first();

       if($result)
       {
       	  Session::put('admin_id', $result->admin_id);
          Session::put('admin_name', $result->admin_name);
       	  return redirect::to('/dashboard');
       }
       else{
        Session::put('message', 'Email Or Password Invalid');

       	return Redirect()->back();
       }
    }

    public function Dashboard()
    {   
    	$this->AdminAuthCheck();

    	return view('admin.pages.dashboard');
    }

    public function AdminLogout()
    {
       Session::flush();
       return Redirect::to('/admin');
    }

   

     public function AdminAuthCheck()
     {
      $admin_id=Session::get('admin_id');
      
      if ($admin_id) {
      	 return;
      }
      else{
         return Redirect::to('/admin')->send();
      }
    }


}
 