@extends('admin.base')
@section('content')
    <div class="row">

        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">修改权限</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
                <div class="widget-body am-fr">

                    <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/saveRole" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <input type="hidden" name="admin_id" value="{{ $admin_id }}"/>
                       @foreach($rolelist as $vo)
					    <div class="checkbox" style="width:140px;height:35px;">
					        <label>
					        <input type="checkbox" name="dids[]" value="{{ $vo->id }}" {{ in_array($vo->id,$dids)?"checked":"" }}> {{ $vo->title }}
					        </label>
					    </div>
					@endforeach
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="提交" />
                            </div>
                        </div>
                    </form>
                    <br/>
                </div>
            </div>
        </div>
    </div>
@endsection
		

		













<!-- <form action="" method="post" id="rolelistform" onsubmit="return false" class="form-inline">
<input type="hidden" name="uid" value="{{ $admin_id }}"/>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@foreach($rolelist as $vo)
    <div class="checkbox" style="width:140px;height:35px;">
        <label>
        <input type="checkbox" name="rids[]" value="{{ $vo->id }}" {{$vo->id,$dids?"checked":"" }}> {{ $vo->title }}
        </label>
    </div>
@endforeach
</form> -->