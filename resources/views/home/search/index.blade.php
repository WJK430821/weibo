<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="{{asset('myadmin/assets/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>明星主页 灵步网微博-点滴生活，精彩每一天！</title>
<link href="../styles/global.css" type="text/css" rel="stylesheet">
<link href="../styles/star.css" type="text/css" rel="stylesheet">
<script src="../script/star.js" type="text/javascript" >
</script>
</head>

<body>
<!-- 页面整体 -->
<div id="container">
	<!-- top部分DIV -->
  	<div id="top">
    	<!-- top部分的LogoDIV -->
   		<div id="topLogo">
        	<!-- topLogo部分的icoDIV -->
            <div id="topLogoIco"> <a href="index.html"><img src="../images/logo_ipad.png" width="72" height="72" alt="" /></a>
          	</div>
            <!-- topLogo部分的icoDIV结束 -->
            
            <!-- topLogo部分的wordDIV -->
            <div id="topLogoWord"> <a href="index.html"><img src="../images/LogoMaker.gif" width="128" height="60" alt="" /></a>
          	</div>
            <!-- topLogo部分的wordDIV -->
      </div>
      <!-- top部分的LogoDIV结束 -->
        
      <!-- top部分的文字导航 -->
      <div id="topWordMenu">
        	<ul>
            	<li><a href="/indexs">首页</a></li>
                <li><a href="/personal">我的微博</a></li>
                <li><a href="/account">设置</a></li>
                <li><a href="/password">修改密码</a></li>
                <li><a href="/logout">退出</a></li>
            </ul>
        </div>
      <!-- top部分的文字导航结束 -->
    </div>
    <!-- top部分结束 -->
    
    
    
<!-- 下部容器头部注内 DIV 开始 -->
<div id="mainTop">
   	<!--下部容器头部注册内容 DIV 开始 -->
	<div id="mainTopContent">
        <!-- 字体DIV 开始 -->
        <div id="topWord" class="topWord"> 点击生活，精彩世界，快来加入灵步网微博吧 </div>
        <!-- 字体DIV 结束 -->
        <!-- 文本框DIV 开始 -->
       
		
        <!-- 注册按钮 DIV 结束-->
        <!-- 电子邮箱 开始 -->
        <div id="mail1">电子邮箱 </div>
        <!-- 电子邮箱 结束 -->
        <!-- 创建密码 开始 -->
        <div id="password11">创建密码 </div>
        <!-- 创建密码 结束 -->
        <!-- 密码确认 开始 -->
        <div id="password21">密码确认 </div>
        <!-- 密码确认 结束 -->
        <!-- 验证码 开始 -->
        <div id="yangzhen1">验 证 码 </div>
        <!-- 验证码 结束 -->
        <!-- 电子邮箱输入框 开始 -->
        <div id="mail2" >
          	<input id="mailInput" type="text" onblur="checkMail()" class="mailInput"/>
        </div>
        <!-- 电子邮箱输入框 结束 -->
        <!-- 创建密码输入框 开始 -->
        <div id="password12" >
          	<input id="passwordInput" type="password" onblur="checkPassword()" />
        </div>
        <!-- 创建密码输入框 结束 -->
        <!-- 密码确认输入框 开始 -->
        <div id="password22" >
          <input id="passwordTwice" type="password" onblur="isSame()" />
        </div>
        <!-- 密码确认输入框 结束 -->
        <!-- 验证码输入框 开始 -->
        <div id="yangzheng2" >
          <input id="yangzhen" type="text" onblur="checkIsRight()" />
        </div>
        <!-- 验证码输入框 结束 -->
        <!-- 电子邮箱提示框 开始 -->
        <div id="mail3"> 找回账号和密码用。如123@ifeng.com </div>
        <!-- 电子邮箱提示框 结束 -->
        <!-- 创建密码提示框 开始 -->
        <div  id="password13">密码至少包含一个数字和字母且不能小于6位,最长不能超过12位</div>
        <!-- 创建密码提示框 结束 -->
        <!-- 密码确认提示框 开始 -->
        <div  id="password23"></div>
        <!-- 密码确认提示框 结束 -->
        <!-- 验证码提示框 开始 -->
        <div id="yangzhen3"></div>
        <!-- 验证码提示框 结束 -->
        <div id="picyanzheng"></div>
        <!-- 换验证码 DIV 开始 -->
        <div id="change"> 看不清？&nbsp;&nbsp;<a href="javascript:getnum()">换一换</a><br />
        </div>
        <!-- 换验证码 DIV 结束 -->
        <!-- 注册成功 DIV 开始 -->
        <div id="success"> <img  id="link" src="../images/ZCButton1.gif" border="0" onclick="checkAll()" /> </div>
        <!-- 注册成功 DIV 结束 -->
        <!-- 头部拉起控制DIV 开始 -->
        <div id="hangUp"> <img src="../images/UpArrow.gif" width="20" height="23" onclick="hangUp()" /> </div>
        <!-- 头部拉起控制DIV 结束 -->
    </div>
    <!-- 下部容器头部注内容册 DIV 结束 -->
    <!-- flash1 DIV 开始 -->
    <div id="flash1" style=" visibility:hidden;">
      <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="500" height="207">
        <param name="movie" value="flash/41.swf" />
        <param name="quality" value="high" />
        <param name="wmode" value="transparent" />
        <param name="swfversion" value="6.0.65.0" />
        <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="flash/41.swf" width="500" height="207">
          <!--<![endif]-->
          <param name="quality" value="high" />
          <param name="wmode" value="transparent" />
          <param name="swfversion" value="6.0.65.0" />
          <param name="expressinstall" value="Scripts/expressInstall.swf" />
          <!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
          <div>
            <h4>此页面上的内容需要较新版本的 Adobe Flash Player。</h4>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取 Adobe Flash Player" /></a></p>
          </div>
          <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </object>
    </div>
    <!-- flash1 DIV 结束 -->        
</div>
<!-- 下部容器头部注内 DIV 结束 -->   
        
        
	
   <!-- 页面整体 -->
   <div id="main" style="background-color:#E9f4FA;">
   <div id="banner">
   
   <!-- banner顶部部分 -->
   @foreach ($bbb as $k=>$v)
     <div id="bannerTop">
       <img src="http://{{$v['picname']}}" width="97" height="98" alt="" />
     </div>
    <!-- bannerWord字的部分 -->
     <div id="bannerWord">
       <font color="#000000" size="3"><b>{{$v['nickname']}}</b></font><img src="images/1.gif" width="17" height="15" alt="" />
       <br/><font color="#0066FF"></font>
     </div>
     <!-- 加关注 -->
     <div id="bannerFocus">
       <a id="{{$k}}" href="javascript:follow({{session('homeuser')[0]->id}},{{ $v['user_id']}},{{$k}})" >关注他(她)</a>
     </div>
	 @endforeach
     <!-- banner微博部分 -->
    {{ $bbb->appends($where)->links() }} 
  </div> 
  <script>
    function follow(uid,sud,p){
        if(uid==sud){
            alert('亲 不可以关注自己哦!')
            return;
        }
        var guan = document.getElementById(p).innerHTML;
        //alert(aa);die;
          
        if(guan=='关注他(她)'){
        //1. 创建一个请求对象
        var xmlhttp;
        if(window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else{// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        } 

        //2. 设置回调函数
        xmlhttp.onreadystatechange = function(){
            //alert('ok:'+xmlhttp.readyState);
            //当前请求状态为4时
            if(xmlhttp.readyState==4){
                //判断响应状态码:是否是200
                if(xmlhttp.status == 200){ 
                //alert(p);
                document.getElementById(p).innerHTML = ("已关注");
                    //var str = xmlhttp.responseText;
                    //alert(str);
                }else{
                    alert("服务器端响应错误!");
                }
            }
            
        }
        
        //3. 初始化请求对象
        xmlhttp.open("get","/indexs/follow/"+uid+"/"+sud,true);
        //设置请求头信息,让其支持post的参数提交
        //xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

        //4. 执行发送:
        xmlhttp.send();
        
        return false;
        }


    if(guan=='已关注'){
        //1. 创建一个请求对象
        var xmlhttp;
        if(window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }else{// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }

        //2. 设置回调函数
        xmlhttp.onreadystatechange = function(){
            //alert('ok:'+xmlhttp.readyState);
            //当前请求状态为4时
            if(xmlhttp.readyState==4){
                //判断响应状态码:是否是200
                if(xmlhttp.status == 200){ 
                document.getElementById(p).innerHTML = ("关注他(她)");
                    var str = xmlhttp.responseText;
                    //alert(str);
                }else{
                    alert("服务器端响应错误!");
                }
            }
            
        }
        
        //3. 初始化请求对象
        xmlhttp.open("get","/indexs/follows/"+uid+"/"+sud,true);
        //设置请求头信息,让其支持post的参数提交
        //xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

        //4. 执行发送:
        xmlhttp.send();
        
        return false;
       }
    }
    </script>
  </div> 
      <!-- 脚部footer DIV 开始 -->
      <div id="footer">
    	<!-- footer网站链接部分 -->
    	<div id="footerLink">      
            <ul>
            	<li><a href="#" class="a2">灵步网介绍</a></li>
                <li><a href="#" class="a2">广告服务</a></li>
                <li><a href="#" class="a2">API</a></li>
                <li><a href="#" class="a2">诚征英才</a></li>
                <li><a href="#" class="a2">保护隐私权</a></li>
                <li><a href="#" class="a2">免责条款</a></li>
                <li><a href="#" class="a2">法律顾问</a></li>
                <li><a href="#" class="a2">意见反馈</a></li>
            </ul>
        </div>
        <!-- footer网站链接部分结束 -->
        <!-- footer网站版权信息 -->
        <div id="footerCopy">
        	Copyright&copy;2011-2012 灵步小组 版权所有
      </div>
        <!-- footer网站版权信息结束 -->
</div>
    <!-- 脚部footer DIV 结束 -->
</div>
</body>
</html>
