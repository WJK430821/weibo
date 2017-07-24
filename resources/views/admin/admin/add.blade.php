@extends('admin.base')
@section('content')
    <div class="row">

        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">添加管理员</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
                <div class="widget-body am-fr">

                    <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/admin" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="admin_name">管理员名称</label>
                            <div class="am-u-sm-9">
                                <input type="text" style="width:200px" class="tpl-form-input" name="admin_name" id="user-name">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="admin_password">管理员密码</label>
                            <div class="am-u-sm-9">
                                <input type="password" style="width:200px" name="admin_password" class="tpl-form-input" id="user-name">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="repassword">重复密码</label>
                            <div class="am-u-sm-9">
                                <input type="password" style="width:200px" name="repassword" class="tpl-form-input" id="user-name">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="admin_phone">联系方式</label>
                            <div class="am-u-sm-9">
                                <input type="text" style="width:200px" name="admin_phone" class="tpl-form-input" id="user-name">
                            </div>
                        </div>
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
		