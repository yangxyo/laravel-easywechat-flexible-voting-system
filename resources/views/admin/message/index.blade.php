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
                    <th>标题</th>
                    <th>内容</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{$message['id']}}</td>
                        <td>{{$message['title']}}</td>
                        <td>{{$message['content']}}</td>
                        <td>
                            <span class="btn-group">
                                <a href="/admin/messages/edit?id={{$message['id']}}" class="btn btn-small" title="修改"><i class="icon-pencil"></i></a>
                                <a href="/admin/messages/delete?id={{$message['id']}}" class="btn btn-small"  title="删除"><i class="icon-trash"></i></a>
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