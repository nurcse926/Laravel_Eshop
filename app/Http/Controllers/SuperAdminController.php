<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
Session_start();

class SuperAdminController extends Controller
{
    

    public function index(){
    	$this->AdminAuthCheck();
    	return view('admin.dashboard');
    }

public function logout(){
    	
    	Session::flush();
    	return Redirect('/admin');
    }

public function AdminAuthCheck(){

	$admin_id=Session::get('admin_id');
	if($admin_id){
		return;
	}else{
      return Redirect::to('/admin')->send();
	}

}

}
