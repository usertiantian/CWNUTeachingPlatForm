<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
class mainController extends Controller{
	public function HOME(){
		return view("HOME");
	}

	public function login(){
		return view("login");
	}
}
?>