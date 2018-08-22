@extends('admin.layout.main')
@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>消息发布</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="{{url('/admin/messages/store')}}" method="post" enctype="multipart/form-data">
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">标题</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" title="" name="title" value="{{old('title')}}" maxlength="4" required="required">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">内容</label>
                        <div class="mws-form-item">
                            <textarea wrap="hard" rows="3" cols="30" class="small" title="" name="content" id="content" value="{{old('content')}}" equired="required"></textarea>
                        </div>
                    </div>

                </div>
                <div class="mws-button-row">
                    {{csrf_field()}}
                    <input type="submit" value="保存" class="btn btn-warning">
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
    $("#form").submit(function(){
        var descrip = $("#content").val();
        descrip=descrip.replace(/\n/g,'<br />');
        $("#content").val(descrip);
    }
    </script>
@endsection