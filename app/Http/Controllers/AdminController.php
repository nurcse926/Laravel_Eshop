<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
Session_start();
class adminController extends Controller
{
public function index(){
return view('admin_login');
}

public function nurdash(Request $request){
	$admin_email=$request->admin_email;
	$admin_password=md5($request->admin_password);
	$result=DB::table('lara')
		 ->where('admin_email', $admin_email)
		 ->where('admin_password',$admin_password)
		 ->first();
		if($result){
			Session::put('admin_name', $result->admin_name);
			Session::put('admin_id', $result->admin_id);
			return Redirect('/dashboard');
		}else{
			Session::put('message','Sorry Invalied Email or Passwarod !!');
			return Redirect('/admin');
		}
}
}