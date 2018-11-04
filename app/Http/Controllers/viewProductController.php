<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Request;
use DB;
use Session;

class viewProductController extends Controller
{
    public function product_by_category($category_id){
    	echo $category_id;

    }
}
