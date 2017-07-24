@extends('admin.base')
@section('content')
    <div class="row">

        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12 ">
            <div class="widget am-cf ">
                <div class="widget-head am-cf ">
                    <div class="widget-title am-fl">添加评论</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
                <div class="widget-body am-fr">

                    <form class="am-form tpl-form-border-form tpl-form-border-br"  method="post" action="/admin/comments">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="am-form-group">
						<label for="user-name" class="am-u-sm-5 am-form-label center-bolck" >被评论微博ID</label>
						
                            <div class="am-u-sm-7">
                                <input type="text" style="width:200px" name="message_id" class="tpl-form-input" id="user-name">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-5 am-form-label" name="user_id">评论者ID</label>
                            <div class="am-u-sm-7">
                                <input type="text" style="width:200px" name="user_id"  class="tpl-form-input" id="user-name">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-5 am-form-label" name="comments_content">评论内容id</label>
                            <div class="am-u-sm-7">
                                <input type="text" style="width:200px" name="comments_content" class="tpl-form-input" id="user-name" >
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-5 am-form-label" name="comments_time">评论时间</label>
                            <div class="am-u-sm-7">
                                <input type="text"   style="width:200px" class="tpl-form-input" id="user-name">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-5 am-u-sm-push-6">
                                <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="提交" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
		