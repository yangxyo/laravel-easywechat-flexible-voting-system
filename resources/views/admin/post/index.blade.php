@extends('admin.layout.main')
@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-table"></i>用户表</span>
        </div>
        <div class="mws-panel-body no-padding">
            <table class="mws-datatable-fn mws-table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>作品名称</th>
                    <th>姓名</th>
                    <th>年级</th>
                    <th>专业</th>
                    <th>联系电话</th>
                    <th>链接</th>
                    <th>图片</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post['id']}}</td>
                        <td>{{$post['name']}}</td>
                        <td>{{$post['real_name']}}</td>
                        <td>{{$post['class']}}</td>
                        <td>{{$post['profession']}}</td>
                        <td>{{$post['tel']}}</td>
                        <td>{{$post['link']}}</td>
                        <td><img src="{{$post['img']}}" alt="" width="60"></td>
                        <td>
                            <span class="btn-group">
                                <a href="/admin/posts/delete?id={{$post['id']}}" class="btn btn-small"  title="删除"><i class="icon-trash"></i></a>
                            </span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Panels End -->
@endsection