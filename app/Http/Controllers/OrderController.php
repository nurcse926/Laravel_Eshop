<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\support\Facades\Redirect;
Session_start();
class OrderController extends Controller
{
   public function order_manage(){

   	$all_order_info=DB::table('tbl_order')
   				->join('tbl_customer', 'tbl_order.customer_id','=','tbl_customer.customer_id')
   				->select('tbl_order.*','tbl_customer.customer_name')
   				->get();
   	$order_manage=view('admin.order_manage')			
   				->with('all_order_info',$all_order_info);
   		return view('admin_layout')
   			->with('admin.order_manage',$order_manage);				
   }


public function order_details(){
	return view('admin.order_details');
}

public function search_page(Request $request){

$data=DB::table('tbl_products')
	 ->where('product_name','LIKE','%'.$request->search.'%')
	 ->orWhere('product_short_description','LIKE','%'.$request->search.'%')
    ->where('tbl_products.publication_status',1)
	 ->get();
     // Session::put('message','Your product is avilable here!');

	  $manage_search=view('pages.searchitem')
	  ->with('data', $data);
	  return view('welcome')
	  ->with('page.searchitem', $manage_search);


// 	 $manage_published_product=view('pages.home_content')
// ->with('all_published_product', $all_published_product);
// return view('welcome')
// ->with('admin.home_content', $manage_published_product);

}


//Product delete function here

public function delete_order($order_id){
   DB::table('tbl_order')
   ->where('order_id', $order_id)
   ->delete();


   Session::put('message','Order Delete is Successfully!!!');
   return Redirect::to('/order_manage');
}


}
