@extends('admin.base')
@section('content')
 <div class="row">

<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
	<div class="widget am-cf">
		<div class="widget-head am-cf">
			<div class="widget-title am-fl"></div>
			<div class="widget-function am-fr">
			<a href="javascript:;" class="am-icon-cog"></a>
			</div>
		</div>
		<div class="widget-body am-fr">

			<form name="myform" class="am-form tpl-form-line-form" enctype="multipart/form-data" action="/admin/url" method="post" onsubmit="return doSubmit()">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				 <div class="am-form-group">
				 <span class="tpl-form-line-small-title">
			
					<div class="am-u-sm-9">
						<input type="text" name="urlname" class="tpl-form-input" id="user-name" placeholder="请输入链接名字">
					</div>
				</div>
				 <div class="am-form-group">
				 <span class="tpl-form-line-small-title">
			
					<div class="am-u-sm-9">
						<input type="text" name="url" class="tpl-form-input" id="user-name" placeholder="请输入链接地址">
					</div>
				</div>
				<div class="am-form-group">
				 <span class="tpl-form-line-small-title">
			
					<div class="am-u-sm-9">
						<input type="file" name="picname" class="tpl-form-input" id="user-name">
					</div>
				</div>
			<div class="am-form-group">
			<div class="am-u-sm-12 am-u-sm-push-12">
				<input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success" value="提交"/>
			</div>
			</div>
			</form>
			
		
		</div>
	</div>
</div>
			<script>
				//提交判断
				function doSubmit(){
					return checkEmail();
				}
				
				//验证邮箱
				function checkEmail(){
					//获取邮箱
					var url=document.myform.url.value;
					//判断
					if(url.match(/^\w+(\.\w+){1,3}$/)==null){
						alert("您输入的邮箱格式有误!");
						return false;
					}
					return true;
				}
			
			</script>
@endsection