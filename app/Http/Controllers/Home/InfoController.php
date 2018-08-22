<?php

namespace App\Http\Controllers\Home;


class InfoController extends Controller
{
	public function index(){
		phpinfo();
	}

}



