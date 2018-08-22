<?php

namespace App\Http\Controllers\Home;
use EasyWeChat\Factory;
use Illuminate\Http\Request;

use App\Http\Requests;


class MenuController extends Controller
{

	public $menu;

	public function __construct()
	{
		$config = config('wechat.official_account.default');
		$app = Factory::officialAccount($config);
		$this->menu = $app->menu;
	}
	public function menu()
	{	
		$buttons = [
	    [
	        "type" => "view",
	        "name" => "动漫大赛",
	        "url"  => "http://www.cqtxzyjh.com"
	    ],
	    [
	    	"type" => "media_id", 
            "name" =>  "大师班", 
            "media_id" => "OYYYB8AOGsfMvPaubBNeeLEiID6g6JZdH9Q9D-M1IRE"
	    ],
	    [
	    	"type" => "media_id", 
            "name" =>  "联系我们", 
            "media_id" => "OYYYB8AOGsfMvPaubBNeeFvVi9Y-xmqeEF-V6lXO4P4"
	    ],
	    
	    
	];

		$this->menu->create($buttons);
	}

}
