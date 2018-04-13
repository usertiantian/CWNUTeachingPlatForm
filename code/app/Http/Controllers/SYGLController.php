<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SYGLController extends Controller
{
    //实验管理模块由肖勇负责
    public function index(){
        return view('SYGL\index');
    }

    public function postTest(Request $request)
    {
        return response()->json(array([
                                          'status' => 'success',
                                          'msg' => 'ok',
                                      ]));
    }
}
