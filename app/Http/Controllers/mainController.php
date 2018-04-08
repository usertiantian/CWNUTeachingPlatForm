<?php
namespace App\Http\Controllers;
use Illuminate\Facades\DB;

class mainController extends Controller{
	public function index(){
		return view("main");
	}
}