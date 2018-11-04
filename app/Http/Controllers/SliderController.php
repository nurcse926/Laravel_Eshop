<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
Session_start();

class SliderController extends Controller
{
    public function index(){
    	return view('admin.add_slider');
    }

public function save_slider(Request $request){
	$this->AdminAuthCheck();
	$data=array();
    $data['publication_status']=$request->publication_status;
	$image=$request->file('slider_image');
	if($image){
		$image_name=str_random(20);
		$ext=strtolower($image->getClientOriginalExtension());
		$image_full_name=$image_name.'.'.$ext;
		$upload_path='slider_images/';
		$image_url=$upload_path.$image_full_name;
		$success=$image->move($upload_path,$image_full_name);
		if($success){
			$data['slider_image']=$image_url;
			 DB::table('tbl_slider')->insert($data);
       session::put('message','Slider added successfully!!');
       return Redirect::to('/add_slider');
		}
	}
    $data['slider_image']= '';
    DB::table('tbl_products')->insert($data);
    session::put('message','Product added successfully without image');
    return Redirect::to('/add_product');
}


//All Slider function here
public function all_slider(){
	$this->AdminAuthCheck();
$all_slider=DB::table('tbl_slider')->get();
$manage_slider=view('admin.all_slider')
->with('all_slider', $all_slider);
return view('admin_layout')
->with('admin.all_slider', $manage_slider);
}





//Slider Delete Function Here
public function delete_slider($slider_id){
	DB::table('tbl_slider')
	->where('slider_id', $slider_id)
	->delete();
	Session::put('message','Slider Delete is Successfully!!!');
	return Redirect('/all_slider');
}

//public function active_slider
public function active_slider($slider_id){
	DB::table('tbl_slider')
	->where ('slider_id', $slider_id)
	->update(['publication_status'=>1]);
	Session::put('message','Slider Active Successfully!!');
	return Redirect::to('/all_slider');
}

//public function unactive_slider
public function unactive_slider($slider_id){
	DB::table('tbl_slider')
	->where ('slider_id', $slider_id)
	->update(['publication_status'=>0]);
	Session::put('message','Slider Unactive Successfully!!');
	return Redirect::to('/all_slider');
}




//Login Authentication Function

public function AdminAuthCheck(){

	$admin_id=Session::get('admin_id');
	if($admin_id){
		return;
	}else{
      return Redirect::to('/admin')->send();
	}

}



}
