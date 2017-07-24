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
    
    

        
	
   <!-- 页面整体 -->
   <div id="main" style="background-color:#E9f4FA;">

					@foreach ($sdasd as $k=>$v)
                  <div class='stateRshow'><div class='stateRshowWord'><table width='380' border='0' cellpadding='0' cellspacing='0' class='stateTable'><tr><td width='310' ><a href='#'>{{$v['uname']}}</a>回复我<img src='images/1.gif' align='absmiddle' style='border:none;' />{{$v['reply_content']}}</td></tr></table></div><div class='stateRimgShow'></div><div class='stateRshowtime'>{{$v['reply_time']}}</div></div>
			@endforeach
 
  
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
