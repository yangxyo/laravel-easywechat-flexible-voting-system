<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Match;
use App\Post;
use Carbon\Carbon;
use EasyWeChat\Factory;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

/*
参赛板块：
1. 选择分类
2. 输入信息
 */

class PostController extends Controller
{
	public function index()
    {
        $user = session('wechat.oauth_user');
        $config = config('wechat.official_account.default');
        $app = Factory::officialAccount($config);
        //判断是否关注微信
        if($app->user->get($user['default']['id'])['subscribe']==0){
                 return view("home/home/guanzhu");
            }
        return view('home/post/index');
    }

    //插画
    public function addc()
    {
        $match = Match::where('id',1)->first();
        if(Carbon::parse('today') == $match->date)
        {
            return back()->with('info','作品提交时间已截止');
        }
        else
        {
    	   return view('home/post/addc');
        }
    }

    //多格漫画
    public function addd()
    {
        $match = Match::where('id',1)->first();
        if(Carbon::parse('today') == $match->date)
        {
            return back()->with('info','作品提交时间已截止');
        }
        else
        {
           return view('home/post/addd');
        }
    }

    //游戏原画
    public function addy()
    {
        $match = Match::where('id',1)->first();
        if(Carbon::parse('today') == $match->date)
        {
            return back()->with('info','作品提交时间已截止');
        }
        else
        {
           return view('home/post/addy');
        }
    }

    //动画短片
    public function addv()
    {
        $match = Match::where('id',1)->first();
        if(Carbon::parse('today') == $match->date)
        {
            return back()->with('info','作品提交时间已截止');
        }
        else
        {
           return view('home/post/addv');
        }
    }

    public function store(Request $request)
    {
        $user = session('wechat.oauth_user');
        $post = new Post();
        $data = $request->all();
        $post->school = $data['school'];
        $post->class = $data['class'];
        $post->profession = $data['profession'];
        $post->real_name = $data['real_name'];
        $post->tel = $data['tel'];
        $post->name = $data['name'];
        $post->user_id = $user['default']['id'];
        if($data['type']=="video")
        {
            $post->link = $data['link'];
        }
        $post->type = $data['type'];

        $post->img = self::uploadFile();
        if($data['type']!="video")
        {
            $post->imgs = self::uploadFiles();
        }

        if($post->save()){
            return redirect('/mine')->with('info','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }
    public static function uploadFiles()
    {
        $names = '';
        for ($i=0;$i<count($_FILES['imgs']['name']);$i++) {
            $pic = $_FILES['imgs']['name'][$i];
            $dir = config('app.upload_image_dir');
            $name = trim($dir.rand(1000000,9000000).time().'.'.pathinfo($pic,4),'.');
            $imgs = Input::file('imgs');
            $imgs[$i] -> move($dir,$name);
            $names .= $name.',';
        }
        return $names;
    }

    public static function uploadFile()
    {
        $pic = $_FILES['img']['name'];
        $dir = config('app.upload_image_dir');
        $name = trim($dir.rand(1000000,9000000).time().'.'.pathinfo($pic,4),'.');
        Input::file('img')->move($dir,$name);
        return $name;
    }

}



