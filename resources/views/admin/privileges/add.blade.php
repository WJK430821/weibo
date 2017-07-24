@extends('admin.base')
@section('content')
    <div class="row">

        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">添加权限</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
                <div class="widget-body am-fr">

                    <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/privileges" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="title">节点名称</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="user-name" name="title" placeholder="请输入权限名称">
                                <small>请填写权限名称10字以内。</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="method">请求方式</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="user-name" name="method" placeholder="请输入请求方式">
                                <small>请填写请求方式10字以内。</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="url">请求地址</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="user-name" name="url" placeholder="请输入请求地址">
                                <small>请填写请求地址10字以内。</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="提交" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
		