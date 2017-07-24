<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="灵步网微博，灵步网，围脖" />
<meta name="description" content="灵步网微博——点滴生活，精彩每一天，大家赶快加入吧" />
<title>灵步网微博</title>
<link href="./styles/global.css" type="text/css" rel="stylesheet"  />
<link href="./styles/index.css" type="text/css" rel="stylesheet" />
<link rel="icon" href="./favicon.ico" mce_href="./favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="./favicon.ico" mce_href="./favicon.ico" type="image/x-icon" />
<script src="./script/index.js" language="javascript"></script>
<script src="./script/trim.js" language="javascript"></script>
</head>
<body>
<!-- 总容器DIV -->
<div id="container">
	<!-- top部分DIV -->
	<div id="top">
    	<!-- top部分的LogoDIV -->
    	<div id="topLogo">
        	<!-- topLogo部分的icoDIV -->
            <div id="topLogoIco"> <a href="/"><img src="./images/logo_ipad.png" width="72" height="72" alt="" /></a>
          </div>
            <!-- topLogo部分的icoDIV结束 -->
            
            <!-- topLogo部分的wordDIV -->
            <div id="topLogoWord"> <a href="/"><img src="./images/LogoMaker.gif" width="128" height="60" alt="" /></a>
          </div>
            <!-- topLogo部分的wordDIV -->
        </div>
        <!-- top部分的LogoDIV结束 -->
        
        <!-- top部分的文字导航 -->
        <div id="topWordMenu">
        	<ul>
            	<li>已有灵步账号，<a href="/login">请登录</a></li>
                <li><a href="/register">注册</a></li>
                <li><a href="#">手机</a></li>
                <li><a href="#">帮助</a></li>
            </ul>
        </div>
        <!-- top部分的文字导航结束 -->
    </div>
    <!-- top部分结束 -->
    <!-- banner部分 -->
    <div id="banner">
    	<!-- banner部分的登入部分 -->
        <div id="bannerLogin">
        	<!-- banner部分表单 -->
            <form id="bannerLoginForm" action="/dologin" method="post" >
              <!-- 注册提示 -->
			  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              <div id="bannerLoginFormWord">即刻登录，分享心情</div>
              <div id="bannerLoginFormID">
              	  <div id="userIdWord">手机号登录</div>
                  <div id="userIdInput">
                    <input name="phone" type="text" class="textForm" id="userId" value="" />
                  </div>
              </div>
              <div id="bannerLoginFormPass">
              	<div id="userPassWord">密码</div>
                <div id="userPassInput">
                  	<input name="password" type="password" class="textForm" id="userPass" value="" />
                </div>
              	<div id="submitDIV">
              	  <input name="submit" type="submit" id="submit" value="登   录" />
              	  <div id="autoLogin"><input name="autoLg" type="checkbox" id="autoLoginSel" value="" />自动登录</div>
              	</div>
              </div>          
            </form>
            
       
            <div id="forgetPass">@if(session("msg"))
            <p class="login-box-msg" style="color:red;">{{session("msg")}}</p>
            @endif</div>
    
        </div>
        <!-- banner部分的登入部分结束 -->
  </div>
    <!--banner部分结束-->
    <!-- main部分 -->
<div id="main">
    	<!-- main部分左栏 -->
    	<div id="mainLeft">
        	<!-- main左栏的推荐用户部分 -->
        	<div id="faceShowWord">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新 添 加 用 户</div>
            
            <div id="faceShow">
           
            	<div id="faceShow1">

                	<table width="180" border="0" cellspacing="0" cellpadding="0">
                      
                      @foreach ($list as $v)
                      <tr>
                        <td width="60" height="60" align="center" title="{{$v->nickname}}"><a href="#" ><img src="http://{{$v['picname']}}" alt="" width="48" height="48" /></a></td>
                      </tr>
					  
                      <tr>
                        <td height="20"  align="center"><a href="#">{{$v->nickname}}</a></td>
                        
                      </tr>
                      @endforeach
                    </table>
              </div>
               
           <!--    <div id="faceShow2">
                	<table width="180" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="60" height="60"  align="center"><a href="#" title="怪帥姜聲揚"><img src="./images/face/4.jpg" alt="" width="48" height="48" /></a></td>
                        <td width="60"  align="center"><a href="#" title="袁博"><img src="./images/face/5.jpg" alt="" width="48" height="48" /></a></td>
                        <td width="60" align="center"><a href="#" title="柯云路"><img src="./images/face/6.jpg" alt="" width="48" height="48" /></a></td>
                      </tr>
                      <tr>
                        <td height="20"  align="center"><a href="#">怪帥姜聲揚</a></td>
                        <td  align="center"><a href="#">袁博</a></td>
                        <td  align="center"><a href="#">柯云路</a></td>
                      </tr>
                </table>
                </div> -->
              	<!--  <div id="faceShow3">
                     <table width="180" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="60" height="60"  align="center"><a href="#" title="李立军"><img src="./images/face/7.jpg" alt="" width="48" height="48" /></a></td>
                        <td width="60"  align="center"><a href="#" title="黄海波"><img src="./images/face/8.jpg" alt="" width="48" height="48" /></a></td>
                        <td width="60" align="center"><a href="#" title="时事辩论"><img src="./images/face/9.jpg" alt="" width="48" height="48" /></a></td>
                      </tr>
                      <tr>
                        <td height="20"  align="center"><a href="#">李立君</a></td>
                        <td  align="center"><a href="#">黄海波</a></td>
                        <td  align="center"><a href="#">时事辩论</a></td>
                      </tr>
                    </table>
                </div> -->
             <!--  <div id="faceShow4">
                	<table width="180" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="60" height="60"  align="center"><a href="#" title="程鹤麟"><img src="./images/face/10.jpg" alt="" width="48" height="48" /></a></td>
                        <td width="60"  align="center"><a href="#" title="冯磊"><img src="./images/face/11.jpg" alt="" width="48" height="48" /></a></td>
                        <td width="60" align="center"><a href="#" title="邓浩志"><img src="./images/face/12.jpg" alt="" width="48" height="48" /></a></td>
                      </tr>
                      <tr>
                        <td height="20"  align="center"><a href="#">程鹤麟</a></td>
                        <td  align="center"><a href="#">冯磊</a></td>
                        <td  align="center"><a href="#">邓浩志</a></td>
                      </tr>
                  </table>
                 </div> -->
              <!--     <div id="faceShow5">
                	<table width="180" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="60" height="60"  align="center"><a href="#" title="程鹤麟"><img src="./images/face/13.jpg" alt="" width="48" height="48" /></a></td>
                        <td width="60"  align="center"><a href="#" title="黄海波"><img src="./images/face/14.jpg" alt="" width="48" height="48" /></a></td>
                        <td width="60" align="center"><a href="#" title="怪帥姜聲"><img src="./images/face/15.jpg" alt="" width="48" height="48" /></a></td>
                      </tr>
                      <tr>
                        <td height="20"  align="center"><a href="#">程鹤麟</a></td>
                        <td  align="center"><a href="#">黄海波</a></td>
                        <td  align="center"><a href="#">怪帥姜聲</a></td>
                      </tr>
                    </table>
                </div> -->
          </div>
            <!-- main左栏的推荐用户部分结束 -->
        </div>
        <!-- main部分左栏结束 -->
        <!-- main部分中间部分开始-->
        <div id="mainBody">
		
          <div id="hotword">最新微博消息</div>
		  
          <div id="stateShow">

		  @foreach ($message as $k=>$v)
            <div class="stateShow" id="stateShow1">
			
              <div class="stateShowWord">
			  
                <table width="450" border="0" cellpadding="0" cellspacing="0">
				
				 @if($v['touxiang'])
                  <tr>
				  
                    <td width="60" align="center" valign="top"><a href="#"><img src="http://{{$v['touxiang']}}" alt="" width="48" height="48" /></a></td>
                    <td width="390"><a href="#">{{$v['nickname']}}:</a>{{$v['content']}}</td>
                  </tr>
				  @else
				  <tr>
                    <td width="60" align="center" valign="top"><a href="#"><img src="./images/tx1.jpg" alt="" width="48" height="48" /></a></td>
                    <td width="390"><a href="#">{{$v['nickname']}}:</a>{{$v['content']}}</td>
                  </tr>
				 @endif
                </table>
				
              </div>
			 <div class="stateShowtime"> 
                    <td width="390">{{$v['publish_time']}}</a></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					
					
					
			
			</div>
            </div>
			@endforeach
          
          </div>
  </div>
        <!-- main部分中间部分结束 -->
        <!-- main部分右栏 -->
        <div id="mainRight">
        	<div id="mainRightRegister">
            	 
            </div>
            <div id="registerButton"><a href="/register"><img src="./images/ico/register.gif" width="225" height="51"  /></a></div>
            <div id="mobile"><br/><br/>
            	<div id="mobileTip">用手机将精彩随身携带</div>
            	<div>
            	<table width="200" border="0" cellpadding="0" cellspacing="0">
                @foreach($url as $v)
				 <tr>
                    <td width="100" height="71" align="center"><a href="http://{{$v->url}}" ><img src="http://{{$v->url_picname}}" width="64" title="{{$v->urlname}}" height="63" alt=""/></a></td>
                    <td width="100" align="center"><a href="http://{{$v->url}}"><img src="http://{{$v->url_picname}}" width="64" height="63" title="{{$v->urlname}}" alt="" /></a></td>
                  </tr>
				@endforeach
                </table>
               </div>
          </div>
    </div>
        <!-- main部分右栏结束 -->
    </div>
    <!-- main部分结束 -->
    <!-- footer部分 -->
    <div id="footer">
    	<!-- footer网站链接部分 -->
    	<div id="footerLink">
        	<ul>
            	<li><a href="#">灵步网介绍</a></li>
                <li><a href="#">广告服务</a></li>
                <li><a href="#">API</a></li>
                <li><a href="#">诚征英才</a></li>
                <li><a href="#">保护隐私权</a></li>
                <li><a href="#">免责条款</a></li>
                <li><a href="#">法律顾问</a></li>
                <li><a href="#">意见反馈</a></li>
            </ul>
        </div>
        <!-- footer网站链接部分结束 -->
        <!-- footer网站版权信息 -->
        <div id="footerCopy">
        	Copyright&copy;2011-2012 灵步小组 版权所有
        </div>
        <!-- footer网站版权信息结束 -->
    </div>
    <!-- footer部分结束 -->
</div>
<!-- 总容器DIV结束 -->
</body>
</html>
