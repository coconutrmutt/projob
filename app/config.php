<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers;
use DB;

class config extends Model{

    public static function Addnewproduct($data){	   
		$insert = DB::table('product')->insert($data);
	    }

	public static function Addmember($data){	   
		$insert = DB::table('member')->insert($data);
	    }

	public static function Select_dataproduct(){	   
		return DB::table('product')->get();
	    }
}
