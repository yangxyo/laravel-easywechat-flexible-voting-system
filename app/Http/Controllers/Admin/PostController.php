<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin/post/index',['posts'=>$posts,'title'=>'作品列表']);
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        $cate = Post::where('id',$id)->first();
        if(Post::where('id',$id)->first()->delete()){
            return back()->with('info','删除成功!');
        }else{
            return back()->with('error','删除失败!');
        }
    }

}
