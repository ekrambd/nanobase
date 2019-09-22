<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
class SliderController extends Controller
{
    public function index()
    {
    	return view('add_slider');
    }

    public function insertSlider(Request $request)
    {
    	
    	$slider_title = DB::table('slider-1')->first();
    	if($slider_title === NULL){
    		$data = array();
    		$data['slider_title'] = $request->slider_title;
    		$data['slider_description'] = $request->slider_description;
    		$image = $request->file('slider_image');
    		
    	if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/SLider-1/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['slider_image']=$image_url;
                $blog=DB::table('slider-1')
                         ->insert($data);
              if ($blog) {
                 Session::put('message', 'Slider Inserted Successfully');
                return Redirect()->back();                      
             }    
                
            
           }
        }
      }
     else{
     	Session::put('message', 'Sorry, Slider One is Already Taken');
     	return Redirect()->back();
      }
    }
    public function AddSliderTwo()
    {
        return view('add_slider_two');
    }

    public function InsertSliderTwo(Request $request)
    {
        $slider_two_title = DB::table('slider-2')->first();
        if($slider_two_title === NULL)
        {
            $data = array();
            $data['slider_two_title'] = $request->slider_two_title;
            $data['slider_two_description'] = $request->slider_two_description;
            $image = $request->file('slider_two_image');
            if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/SLider-2/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['slider_two_image']=$image_url;
                $blog=DB::table('slider-2')
                         ->insert($data);
              if ($blog) {
                 Session::put('message', 'Slider Inserted Successfully');
                return Redirect()->back();                      
             }    
                
            
           }
        }
      }
      else{
        Session::put('message', 'Sorry, Slider Two is Already Inserted');
        return Redirect()->back();
      }
    }

    public function AddSliderThree()
    {
       return view('add_slider_three');
    }

    public function InsertSliderThree(Request $request)
    {
        $slider_three_title = DB::table('slider-3')->first();
        if($slider_three_title === NULL){
            $data = array();
            $data['slider_three_title'] = $request->slider_three_title;
            $data['slider_three_description'] = $request->slider_three_description;
            $image = $request->file('slider_three_image');
            if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/SLider-3/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['slider_three_image']=$image_url;
                $blog=DB::table('slider-3')
                         ->insert($data);
              if ($blog) {
                 Session::put('message', 'Slider Inserted Successfully');
                return Redirect()->back();                      
             }    
                
            
           }
        }
       }
       else{
          Session::put('message', 'Slider-3 Is Already Inserted');
          return Redirect()->back();
       }
    }

    public function ManageSlider()
    {
        $manage_slider = DB::table('slider-1')->get();
        return view('manage_slider_one', compact('manage_slider'));
    }

    public function EditSliderOne($slider_id)
    {
       $edit_slider_one = DB::table('slider-1')->first();
       return view('edit_slider_one', compact('edit_slider_one'));
    }
    
    public function UpadteSliderOne(Request $request, $slider_id)
    {
          $data = array();
            $data['slider_title'] = $request->slider_title;
            $data['slider_description'] = $request->slider_description;
            $image = $request->file('slider_image');
            if ($image) {
       $image_name=str_random(20);
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='public/Slider-1/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       if ($success) {
          $data['slider_image']=$image_url;
             $img=DB::table('slider-1')->where('slider_id',$slider_id)->first();
             $image_path = $img->slider_image;
             
          $blog=DB::table('slider-1')->where('slider_id',$slider_id)->update($data); 
         if ($blog) {
               Session::put('message', 'Slider One Updated Successfully');
               return Redirect()->back();                      
            }else{
              return Redirect()->back();
             } 
          }
      }else{
        $oldphoto=$request->old_photo;
         if ($oldphoto) {
          $data['slider_image']=$oldphoto;  
          $user=DB::table('slider-1')->where('slider_id',$slider_id)->update($data); 
         if ($user) {
                Session::put('message', 'Slider One Updated Successfully');
               return Redirect()->back();                      
            }else{
              return Redirect()->back();
             } 
          }
       }
    }

    public function DeleteSlider($slider_id)
    {
       $delete_slider = DB::table('slider-1')->where('slider_id', $slider_id)->delete();
       return Redirect()->back();
    }

    public function ManageSliderTwo()
    {
        $manage_slider_two = DB::table('slider-2')->get();
        return view('manage_slider_two', compact('manage_slider_two'));
    }

    public function EditSLiderTwo($slider_two_id)
    {
        $edit_slider_two = DB::table('slider-2')->where('slider_two_id', $slider_two_id)->first();
        return view('edit_slider_two', compact('edit_slider_two'));
    }

    public function UpdateSliderTwo(Request $request, $slider_two_id)
    {
          $data = array();
            $data['slider_two_title'] = $request->slider_two_title;
            $data['slider_two_description'] = $request->slider_two_description;
            $image = $request->file('slider_two_image');
              if ($image) {
       $image_name=str_random(20);
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='public/Slider-2/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       if ($success) {
          $data['slider_two_image']=$image_url;
             $img=DB::table('slider-2')->where('slider_two_id',$slider_two_id)->first();
             $image_path = $img->slider_two_image;
             
          $blog=DB::table('slider-2')->where('slider_two_id',$slider_two_id)->update($data); 
         if ($blog) {
               Session::put('message', 'Slider Two Updated Successfully');
               return Redirect()->back();                      
            }else{
              return Redirect()->back();
             } 
          }
      }else{
        $oldphoto=$request->old_photo;
         if ($oldphoto) {
          $data['slider_two_image']=$oldphoto;  
          $user=DB::table('slider-2')->where('slider_two_id',$slider_two_id)->update($data); 
         if ($user) {
                Session::put('message', 'Slider Two Updated Successfully');
               return Redirect()->back();                      
            }else{
              return Redirect()->back();
             } 
          }
       }
    }

    public function ManageSliderThree()
    {
        $manage_slider_three = DB::table('slider-3')->get();
        return view('manage_slider_three', compact('manage_slider_three'));
    }

    public function EditSliderThree($slider_three_id)
    {
        $edit_slider_three = DB::table('slider-3')->first();
        return view('edit_slider_three', compact('edit_slider_three'));
    }

    public function UpdateSliderThree(Request $request, $slider_three_id)
    {
         $data = array();
            $data['slider_three_title'] = $request->slider_three_title;
            $data['slider_three_description'] = $request->slider_three_description;
            $image = $request->file('slider_three_image');
              if ($image) {
       $image_name=str_random(20);
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='public/Slider-3/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       if ($success) {
          $data['slider_three_image']=$image_url;
             $img=DB::table('slider-3')->where('slider_three_id',$slider_three_id)->first();
             $image_path = $img->slider_three_image;
             
          $blog=DB::table('slider-3')->where('slider_three_id',$slider_three_id)->update($data); 
         if ($blog) {
               Session::put('message', 'Slider Two Updated Successfully');
               return Redirect()->back();                      
            }else{
              return Redirect()->back();
             } 
          }
      }else{
        $oldphoto=$request->old_photo;
         if ($oldphoto) {
          $data['slider_three_image']=$oldphoto;  
          $user=DB::table('slider-3')->where('slider_three_id',$slider_three_id)->update($data); 
         if ($user) {
                Session::put('message', 'Slider Three Updated Successfully');
               return Redirect()->back();                      
            }else{
              return Redirect()->back();
             } 
          }
       }
    }

    public function DeleteSliderTwo($slider_two_id)
    {
        DB::table('slider-2')->where('slider_two_id', $slider_two_id)->delete();
        return Redirect()->back();
    }

    public function DeleteSliderThree($slider_three_id)
    {
        DB::table('slider-3')->where('slider_three_id', $slider_three_id)->delete();
        return Redirect()->back();
    }

 }



