<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\config;
use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Input;
use Redirect;
use Validator;
use File;
use Session;
use DB;

class ProductController extends Controller
{
   public function Addnewproduct(Request $data){

			 $nameproduct = $data->Input('name');
			 $id_catagory = $data->Input('catagory');
			 $bid = $data->Input('bidprice');
			 $data1 = $data->Input('date1');
			 $detailproduct = $data->Input('detailproduct');
			 $starttime = $data->Input('starttime');
			 $overtime = $data->Input('overtime');
			 $pricestart = $data->Input('pricestart');
			 $files = $data->file('images');
		     $file_count = count($files);
		     $uploadcount = 0;

		    foreach($files as $file) {
			      $rules = array('file' => 'required|mimes:jpeg,png,jpg,gif|max:5000000');
			      $validator = Validator::make(array('file'=> $file), $rules);

			      if ($validator->fails()) {

    					Session::flash('error', 'Fail');
					    return Redirect::to('admin');
					  }

			      if($validator->passes()){
			        $destinationPath = 'images';
			        $extension = $file->getClientOriginalExtension();
			        $filename = rand(11111,99999).'.'.$extension;
			        $upload_success = $file->move($destinationPath, $filename);
			        $uploadcount ++;

					      }

						$data = array(
			        	'productname' => $nameproduct,
			        	'catagory_id' => $id_catagory,
			        	'bid' => $bid,
			        	'price_start' => $pricestart,
			        	'date' => $data1,
			        	'time_up' => $starttime,
			        	'time_stop' => $overtime,
			        	'detail_product' => $detailproduct,
			        	'file_name' => $upload_success
			        	);

			            config::Addnewproduct($data);

					}

						Session::flash('success', 'Successfully');
						return Redirect::to('admin');

	}

	public function getregister(Request $data){

			 $user = $data->Input('user');
			 $password = $data->Input('password');
			 $email = $data->Input('email');
			 
				$data = array(
	        	'username' => $user,
	        	'password' => $password,
	        	'email' => $email
	        	);

	            config::Addmember($data);
	            return Redirect::to('register');

	}

	public function getproduct(){
			$results = config::Select_dataproduct();
			// $product = DB::table('product')->get();
			// $image = $product[0]->file_name;
			// echo $image;
			 return view('flashdrive',['results' => $results]);
			 
	}

	public function index(){
      $msg = "This is a simple message.";
      return response()->json(array('msg'=> $msg), 200);
   }

}
