<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
class ContactController extends Controller
{
    public function index()
    {
    	return view('contact');
    }

    public function InsertContact(Request $request)
    {
    	$data = array();
    	$data['contact_phone'] = $request->contact_phone;
    	$data['contact_email'] = $request->contact_email;
    	$data['contact_name'] = $request->contact_name;
    	$data['msg'] = $request->msg;
    	$insert_contact = DB::table('contact')->insert($data);
    	return Redirect::to('/success');
    }

    public function AllContact()
    {
    	$all_contact = DB::table('contact')->get();
    	return view('all_contact', compact('all_contact'));
    }

    public function DeleteContact($contact_id)
    {
        DB::table('contact')->where('contact_id', $contact_id)->delete();
        return Redirect()->back();
    }
}
