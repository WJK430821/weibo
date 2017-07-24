<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset('myadmin/assets/i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('myadmin/assets/i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{asset('myadmin/assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('myadmin/assets/css/amazeui.datatables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('myadmin/assets/css/app.css')}}">
    <link href="{{asset('myadmin/assets/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <script src="{{asset('myadmin/assets/js/jquery.min.js')}}"></script>

</head>

<body data-type="login">
    <script src="{{asset('myadmin/assets/js/theme.js')}}"></script>
    <div class="am-g tpl-g">
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">

                </div>


				
				
				
		<!--form class="am-form tpl-form-line-form" action="{{url('admin/dologin')}}" method="post">

          <div class="am-form-group">
           <input type="text" name="admin_name" class="tpl-form-input" id="user-name" placeholder="请输入姓名"/>{{url('admin/dologin')}}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="tpl-form-input" placeholder="请输入密码"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">

          </div>
              <div class="am-form-group">

                        <button type="button" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>

           </div>
        </form -->
			@if(session("msg"))
            <center><p class="login-box-msg" style="color:red;">{{session("msg")}}</p></center>
			@endif
		
		<form class="am-form tpl-form-line-form" action="/admin/dologin" method="post">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <div class="am-form-group">
            <input type="text" name="admin_name" class="tpl-form-input" id="user-name" placeholder="请输入姓名"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="am-form-group">
            <input type="password"  name="admin_password" class="form-control" placeholder="请输入密码"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  
                </label>
              </div>                        
            </div><!-- /.col -->
          </div>
          <div class="row">

            <div class="am-form-group">
              <button type="submit" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">登 陆</button>
            </div><!-- /.col -->
          </div>
        </form>
				
				
				
            </div>
        </div>
    </div>
    <script src="{{asset('myadmin/assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('myadmin/assets/js/app.js')}}"></script>

</body>
</html>