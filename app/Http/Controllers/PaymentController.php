<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;

class PaymentController extends Controller
{
    public function blog(){
    	return view('pages.blog');
    }

    public function error(){
    	return view('pages.error');
    }

public function contact_us(){
	return view('pages.contact');
}
}
