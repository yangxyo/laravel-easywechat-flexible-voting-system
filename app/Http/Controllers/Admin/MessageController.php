<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests;

class MessageController extends Controller
{
    /*
     * 消息列表
     */
    public function index()
    {
        $messages = Message::all();
        return view('admin/message/index',compact('messages'));
    }

    public function add()
    {
        return view('admin/message/add');
    }

    public function store(Request $request)
    {
        $message = new Message();
        $data = $request->all();
        $message->title = $data['title'];
        $message->content = $data['content'];
        $message->save();
        return redirect('/admin/messages');
    }

    public function edit(Request $request)
    {
        $message = Message::where('id',$request->only('id'))->first();
        return view('admin/message/update', compact('message'));
    }


    public function update(Request $request)
    {
        $data = $request->all();
        $message = Message::where('id',$request->only('id'))->first();
        $message->title = $data['title'];
        $message->content = $data['content'];
        $message->save();
        return redirect('/admin/messages')->with('info','更新成功');
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        $cate = Message::where('id',$id)->first();
        if(Message::where('id',$id)->first()->delete()){
            return back()->with('info','删除成功!');
        }else{
            return back()->with('error','删除失败!');
        }
    }

}
