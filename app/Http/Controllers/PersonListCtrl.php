<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;



class listPersonCtrl extends Controller
{private $user;



public function __construct() {
	$this->user = new User();
}
    public function show(){
		

		
	//$userShow=DB::table('users')->orderBy('id') ['us' => $userShow];
$userShow=User::all()->toArray();
	return view('users', compact('userShow') );
	
	
}


  public function account(){
		
//$account = DB::table('users')->where('id', $userShow['id'])->first() ,compact('account');
		
	
	return view('account');
	
	
}
}
