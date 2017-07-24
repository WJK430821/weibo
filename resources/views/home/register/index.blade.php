<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>注册 灵步网微博-点滴生活，精彩每一天</title>
<link href="./styles/register.css" type="text/css" rel="stylesheet">
<link href="./styles/global.css" type="text/css" rel="stylesheet">
<script src="./script/sitedata_bas.js" language="javascript"></script>
<script src="./script/datecreate.js" language="javascript"></script>
<script src="./script/trim.js" language="javascript"></script>
<script src="./script/register.js" language="javascript"></script>
<script src="./script/jquery-1.8.3.min.js" language="javascript"></script>
</head>
<body>
<div id="container">
  <!-- top部分DIV -->
	<div id="top">
    	<!-- top部分的LogoDIV -->
    	<div id="topLogo">
        	<!-- topLogo部分的icoDIV -->
            <div id="topLogoIco"> <a href="index.html"><img src="images/logo_ipad.png" width="72" height="72" alt="" /></a>
        </div>
            <!-- topLogo部分的icoDIV结束 -->
            
            <!-- topLogo部分的wordDIV -->
            <div id="topLogoWord"> <a href="index.html"><img src="images/LogoMaker.gif" width="128" height="60" alt="" /></a>
          </div>
            <!-- topLogo部分的wordDIV -->
        </div>
        <!-- top部分的LogoDIV结束 -->
        
        <!-- top部分的文字导航 -->
        <div id="topWordMenu">
        	<ul>
            	<li>已有灵步账号，<a href="/login">请登录</a></li>
                <li><a href="SBGG.html">随便逛逛</a></li>
                <li><a href="#">手机</a></li>
                <li><a href="#">帮助</a></li>
            </ul>
        </div>
        <!-- top部分的文字导航结束 -->
    </div>
    <!-- top部分结束 -->
  <div id="banner">
    <div id="bannerTop">
      <div id="bannerWord1">加入灵步微博</div>
      <div id="bannerWord2">如果你已经是灵步网注册用户，请直接<a href="/login">登陆微博</a></div>
      <div id="bannerWord3">已经是灵步微博用户？<a href="/login">登陆微博</a></div>
    </div>
    <div id="main">
      <form action="/register/add" method="post" name="myform"	>
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <table width="765" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
          <td align="center" valign="middle" class="wordleft">昵 &nbsp; &nbsp;&nbsp;&nbsp;称</td>
          <td align="center" valign="middle"><input name="nickname" type="text" class="form" id="userName" onfocus="getfocus(this,img2)" onblur="checkUserName(img2,this)" maxlength="20" /></td>
          <td align="left" valign="middle" class="wordright"><img name="img2" width="16" height="16" id="img2" /><div class="registertip" id="userNametip">请输入4到20位数字、字符、中文</div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="center" valign="middle" class="wordleft">手 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机</td>
          <td align="center" valign="middle" class="a"><input name="phone" type="text" class="form" id="userTel" onblur="checkUserTel(img3,this)" onfocus="getfocus(this,img3)" /></td>
          <td align="left" valign="middle" class="wordright"><img name="img3" width="16" height="16" id="img3" /><div class="registertip" id="userTeltip">请输入您的手机号码，之后可以用手机及时发布信息</div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="center" valign="middle" class="wordleft">创建密码</td>
          <td align="center" valign="middle"><input name="password" type="password" class="form" id="userPass" onfocus="getfocus(this,img5)" onblur="checkUserPass(img5,this)" maxlength="20" /></td>
          <td align="left" valign="middle" class="wordright"><img name="img5" width="16" height="16" id="img5" /><div class="registertip" id="userPasstip">密码由6到20个字母、数字、特殊符号组成，字母区分大小写</div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="center" valign="middle" class="wordleft">密码确认</td>
          <td align="center" valign="middle"><input name="Repassword" type="password" class="form" id="userRpass" onblur="checkUserRpass(img6,this)" onfocus="getfocus(this,img6)" maxlength="20" /></td>
          <td align="left" valign="middle" class="wordright"><img name="img6" width="16" height="16" id="img6" /><div class="registertip" id="userRpasstip">请再次输入密码</div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="center" valign="middle" class="wordleft">验 &nbsp;证 &nbsp;码</td>
          <td align="center" valign="middle"><input name="code" type="text" class="form" id="verify" onblur="checkVertyCode(img7,this)" onfocus="getfocus(this,img7)" maxlength="6" /></td>
          <td align="left" valign="middle" class="verifyword"> 
              <a  href="javascript:void(0)"  id="sendMobileCode">
                            <input type="button" style="width:100px;height:35px" id="dyMobileButton" value="获取验证码" onclick="settime(this)" />
                            
              </a>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="4" align="center">
            <input name="checkbox" type="checkbox" id="checkbox" onclick="deal(this,button)" />
            我已经看过
          ，并同意<a href="#">《灵步网使用协议》</a></td>
          </tr>
        <tr>
          <td colspan="4" align="center" valign="middle"><input type="submit" disabled="disabled" name="button" id="button" onclick="nickname()" value="立即注册" onclick="nickname()" class="button"/></td>
          </tr>
      </table>
      @if(session("err"))
            <center><p class="login-box-msg" style="color:red;">{{session()->pull("err")}}</p></center>
      @endif
    </form>
    </div>
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
</div>
</body>
<script>
    // var wait = 60;
    // function time(o){
    //   if(wait == 0){
    //     o.removeAttribute("disabled");
    //     o.value="获取验证码";
    //     wait = 120;
    //   }else{
    //     o.setAttribute("disabled",true);
    //     o.value="重新发送("+wait+")";
    //     wait--;
    //     setTimeout(function(){
    //       time(o)
    //     },1000)
    //   }
    // }
    //document.getElementById("dyMobileButton").onclick=function(){time(this);}

    //设置300秒有效时间
    var countdown=300;
    //定时器
    function settime(obj) {
        //alert(1);
        var phone = document.myform.phone.value;
        // if(phone.match(/^1[34578]\d{9}$/)==null){
        //     $("<span style='color:red;'>用户名不合法请重新输入</span>").insertAfter("input[name='phone']");
        //     return false;
        // }
        // if(phone == ""){
        //     $("<span style='color:red;'>用户名不能为空</span>").insertAfter("input[name='phone']");
        //     return false;
        // }
		if(phone.match(/^1[3-8][0-9]{9}$/)!==null){
				if (countdown == 0) {
				obj.removeAttribute("disabled");
				obj.value="获取验证码";
				countdown = 300;
				return;
				} else {
				obj.setAttribute("disabled", true);
				obj.value="重新发送(" + countdown + ")";
				countdown--;
				if(countdown == 299){
					sendMobileCode();
					}
				}
			setTimeout(function() {settime(obj) },1000)
		}else{
				alert("您输入的手机格式有误!");
				return false;			
		}
    }
	
	
    function sendMobileCode()
        {
         
            var phone = document.myform.phone.value;
            //alert(123);
            $.ajax({
                url:'/register/sendMobileCode',
                type:"get", 
                data:'phone='+phone+"&num="+1,
                dataType:'text',
                headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}
                // success:function(data){
                //     alert(data);                  
                // }
            });
            return true;
        }
 
		

				

</script>
</html>
