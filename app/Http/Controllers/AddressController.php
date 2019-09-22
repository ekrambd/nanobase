<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
class AddressController extends Controller
{
    public function index()
    {
    	return view('add_address');
    }

    public function InsertAddress(Request $request)
    {
    	$data = array();
    	$data['address_title'] = $request->address_title;
    	$data['address_details'] = $request->address_title;
    	$insert_address = DB::table('address')->insert($data);
    	if($insert_address)
    	{
    		Session::put('message', 'Address Inserted Successfully');
    		return Redirect()->back();
    	}
    	else{
    		return Redirect()->back();
    	}
    }

    public function ManageAddress()
    {
        $manage_address = DB::table('address')->get();
        return view('manage_address', compact('manage_address'));
    }

    public function EditAddress($address_id)
    {
        $edit_address = DB::table('address')->first();
        return view('edit_address', compact('edit_address'));
    }

    public function UpdateAddress(Request $request, $address_id)
    {
        $data = array();
        $data['address_title'] = $request->address_title;
        $data['address_details'] = $request->address_details;
        $update_address = DB::table('address')->where('address_id', $address_id)->update($data);
        if($update_address)
        {
            Session::put('message', 'Address Update Successfully');
            return Redirect::to('/manage-address');
        }
        else{
            return Redirect()->back();
        }
    }

    public function AddPhone()
    {
        return view('add_phone');
    }

    public function InsertPhone(Request $request)
    {
        $data = array();
        $data['phone_number'] = $request->phone_number;
        $data['schedule'] = $request->schedule;
        $insert_phone = DB::table('phone_schedule')->insert($data);
        if($insert_phone)
        {
            Session::put('message', 'Phone and Schedule Inserted Successfully');
            return Redirect()->back();
        }
        else{
            return Redirect()->back();
        }
    }


    public function ManagePhone()
    {
        $manage_phone = DB::table('phone_schedule')->get();
        return view('manage_phone', compact('manage_phone'));
    }

    public function EditPhone($phone_id)
    {
        $edit_phone_id = DB::table('phone_schedule')->first();
        return view('edit_phone', compact('edit_phone_id'));
    }

    public function UpdatePhone(Request $request, $phone_id)
    {
        $data = array();
        $data['phone_number'] = $request->phone_number;
        $data['schedule'] = $request->schedule;
        $update_phone = DB::table('phone_schedule')->where('phone_id', $phone_id)->update($data);
        if($update_phone)
        {
            Session::put('message', 'Phone and Schedule Updated Successfully');
            return Redirect()->back();
        }
        else{
            return Redirect()->back();
        }
    }
}
