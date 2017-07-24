@extends('admin.base')
@section('content')
    <div class="row">

        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">编辑用户</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
                <div class="widget-body am-fr">

                    <form class="am-form tpl-form-border-form tpl-form-border-br" action="/admin/userinfo/{{ $v->id }}" method="post">
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="nickname" value="{{$v->nickname}}">用户昵称</label>
                            <div class="am-u-sm-9">
                                <input type="readonly" class="tpl-form-input" id="user-name" placeholder="{{$v->nickname}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="email" value="{{$v->email}}">邮箱</label>
                            <div class="am-u-sm-9">
                                <input type="readonly" class="tpl-form-input" id="user-name" placeholder="{{$v->email}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="phone" value="{{$v->phone}}">手机</label>
                            <div class="am-u-sm-9">
                                <input type="readonly" class="tpl-form-input" id="user-name" placeholder="{{$v->phone}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="age" value="{{$v->age}}">年龄</label>
                            <div class="am-u-sm-9">
                                <input type="readonly" class="tpl-form-input" id="user-name" placeholder="{{$v->age}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="sex" value="{{$v->sex}}">性别</label>
                            <div class="am-u-sm-9">
                                <input type="readonly" class="tpl-form-input" id="user-name" placeholder="@if ($v->sex=="w")女 @else 男 @endif">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="sexual" value="{{$v->sexual}}">性取向</label>
                            <div class="am-u-sm-9">
                                <input type="readonly" class="tpl-form-input" id="user-name" placeholder="@if ($v->sexual=="w")女 @else 男 @endif">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="birthday" value="{{$v->birthday}}">生日</label>
                            <div class="am-u-sm-9">
                                <input type="readonly" class="tpl-form-input" id="user-name" placeholder="{{$v->birthday}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="address" value="{{$v->address}}">详细地址</label>
                            <div class="am-u-sm-9">
                                <input type="readonly" class="tpl-form-input" id="user-name" placeholder="{{$v->address}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="name" value="{{$v->name}}">真实姓名</label>
                            <div class="am-u-sm-9">
                                <input type="readonly" class="tpl-form-input" id="user-name" placeholder="{{$v->name}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="register_time" value="{{$v->register_time}}">注册时间</label>
                            <div class="am-u-sm-9">
                                <input type="readonly" class="tpl-form-input" id="user-name" placeholder="{{$v->register_time}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label" name="QQ" value="{{$v->QQ}}">QQ</label>
                            <div class="am-u-sm-9">
                                <input type="readonly" class="tpl-form-input" id="user-name" placeholder="{{$v->QQ}}">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">头像</label>
                            <div class="am-u-sm-9">
                                <div class="am-form-group am-form-file">
                                    <div class="tpl-form-file-img">
                                        <img src="assets/img/a5.png" alt="">
                                    </div>
                                    <input id="doc-form-file" type="file" multiple="">
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
		