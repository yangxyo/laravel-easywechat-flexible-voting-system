@extends('admin.layout.main')
@section('content')
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>截止日期</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="{{url('/admin/matches/store')}}" method="post" enctype="multipart/form-data">
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">截止日期</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" title="" placeholder="2018-05-01" name="date" maxlength="10" value="{{old('date')}}" equired="required">
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
@endsection