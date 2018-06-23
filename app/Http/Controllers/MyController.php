<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function xinchao()
    {
    	return view('CongThanh');
    }

      public function nhandulieu(Request $req)
    {
    	if($req->has('ten'))
    	echo $req->ten;
    }


}
