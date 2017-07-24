<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>凤凰网微博-点滴生活，精彩世界</title>
<link href="../styles/MyWB.css" type="text/css" rel="stylesheet" />
<link href="../styles/global.css" type="text/css" rel="stylesheet" />
<style>
  .pagination {
  display: inline-block;
  padding-right: 0;
  margin: 20px 0;
  border-radius: 4px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  margin-left: -1px;
  line-height: 1.42857143;
  color: #337ab7;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #ddd;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
</style>
<script language="javascript">
<!--

window.onload = function(){
}
-->
</script>
</head>

<body>
<!-- 总容器 container开 始-->
<div id="container">
    <!-- topDIV 开始 -->
    <div id="top">
      <!-- top部分的LogoDIV -->
    	<div id="topLogo">
        	<!-- topLogo部分的icoDIV -->
            <div id="topLogoIco"> <a href="CustomerIndex.html"><img src="../images/logo_ipad.png" width="72" height="72" alt="" /></a>
          </div>
            <!-- topLogo部分的icoDIV结束 -->
            
            <!-- topLogo部分的wordDIV -->
            <div id="topLogoWord"> <a href="CustomerIndex.html"><img src="../images/LogoMaker.gif" width="128" height="60" alt="" /></a>
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
                <li><a href="#">手机</a></li>
                <li><a href="/logout">退出</a></li>
            </ul>
        </div>
        <!-- top部分的文字导航结束 -->
    </div>
    <!-- topDIv 结束-->
    <!-- 内容总容器 mainDIV 开 始-->
<div id="main">
		<!-- 左侧mainBannerDIV 开始 -->
      	<div id="mainBanner">
            <!-- 左侧mainBannerTopDIV 开始 -->
            <div id="mainBannerTop">
                <!-- 左侧mainBannerTopImgDIV 开始 -->
                <div id="mainBannerTopImg">
                    <img src="http://{{$list->picname}}" width="95" height="97"/>
                </div>
            	<!-- 左侧mainBannerTopImgDIV 结束 -->
                <!-- 左侧mainBannerToWordDIV 开始 -->
                <div id="mainBannerTopWord"><font color="#330000"><b>{{$list->nickname}}</b></font><br />
                <a href="#">http://t.ifeng.com/DarkDemon</a> 
                </div>
            	<!-- 左侧mainBannerTopWordDIV 结束 -->
            </div>
            <!-- 左侧mainBannerTopDIV 结束 -->
            <!-- 左侧mainBannerMenuDIV 开始 -->
            <div id="mainBannerMenu">
                <!-- 左侧mainBannerMenuTopDIV 开始 -->
                <div id="mainBannerMenuTop">
                    <!-- 左侧mainBannerMenuTopWord1DIV 开始 -->
                    <div id="mainBannerMenuTopWord1"><b>我自己</b>
                    </div>
                    <!-- 左侧mainBannerMenuTopWord1DIV 结束-->
                    <!-- 左侧mainBannerMenuTopWord2DIV 开始 -->
                    <div id="mainBannerMenuTopWord2"><img src="../images/mainBannerMenuTopWord2.gif" title="" alt="" /><a href="indexs">发微博</a></div>
                    <!-- 左侧mainBannerMenuTopWord2DIV 结束 -->
                </div>
            	<!-- 左侧mainBannerMenuTopDIV 结束-->
            </div>
            <!-- 左侧mainBannerMenu DIV 结束-->
            <!--自己发微博的地方-->
            @if($list)
            <div id="mainBannerContent"> 
                <!--给微博定位-->
               <div id="mainBannerContent1">
                    <!--给微博定位-->
                  <div id="mainBannerContent2">
                     <!--个人微博-->
                     <div id="mainBannerContent2People">
					  @foreach($forward as $v)
                       <!-- 第一个人微博 mainBannerContent2PeopleImg DIV 开始 -->
                        <div id="mainBannerContent2PeopleImg">
                          	<img src="http://{{$list->picname}}" width="54" height="54" alt="" title="" />
                        </div>
                        <!-- 第一个人微博 mainBannerContent2PeopleImg DIV 结束 -->
                        <!-- 第一个人微博 mainBannerContent2peopleWord DIV 开始  -->
						@if($v->forward_content)
                        <div id="mainBannerContent2PeopleWord">
						<img src="../images/biao.gif" alt="" width="17" height="13" align="absmiddle" id="pic1" title="" />
                        <font class="f1">{{$list->nickname}}<br/>转发并说:</font>{{$v->forward_content}}
						<font class="f1">转自:<a href="#" class="a1">{{$v->nickname}}<br></a></font><font class="f2">{{$v->content}}</font><br />
                        <div class="stateImgShow"><img src="{{$v->picname}}" /></div> 
						<font class="f3">转发时间:{{$v->forward_time}}</font><br />
                       
						 
						</div>
						@else
					    <div id="mainBannerContent2PeopleWord">
						<img src="../images/biao.gif" alt="" width="17" height="13" align="absmiddle" id="pic1" title="" />
                        <font class="f1">{{$list->nickname}}<br/></font>
						<font class="f1">转自:<a href="#" class="a1">{{$v->nickname}}</a></font><br/><font class="f2">{{$v->content}}</font><br />
                        <div class="stateImgShow"><img src="{{$v->picname}}" /></div> 
						<font class="f3">转发时间:{{$v->forward_time}}</font><br />
               
						 
						</div>
						@endif
                        <!-- 第一个人微博 mainBannerContent2peopleWord DIV 结束  -->
						@endforeach
					 
					 
                       @foreach($add as $v)
                       <!-- 第一个人微博 mainBannerContent2PeopleImg DIV 开始 -->
                        <div id="mainBannerContent2PeopleImg">
                          	<img src="http://{{$list->picname}}" width="54" height="54" alt="" title="" />
                        </div>
                        <!-- 第一个人微博 mainBannerContent2PeopleImg DIV 结束 -->
                        <!-- 第一个人微博 mainBannerContent2peopleWord DIV 开始  -->
					
                        <div id="mainBannerContent2PeopleWord">
                         
                        <img src="../images/biao.gif" alt="" width="17" height="13" align="absmiddle" id="pic1" title="" /> <font class="f1"><a href="#" class="a1">{{$v->nickname}}:</a></font><font class="f2">&nbsp;&nbsp;{{$v->content}}</font><br />
                        <div class="stateImgShow"><img src="{{$v->picname}}" /></div> 
						<font class="f3"><div id="textright"><a	href="javascript:ddd({{$v['message_id']}})">删除</a></div></font><br />
                        <font class="style2">{{$v->publish_time}}</font><br />
                            <!--微博回复栏-->
							
                          <br/>
                        
						</div>
				
                        <!-- 第一个人微博 mainBannerContent2peopleWord DIV 结束 -->
                    @endforeach
                    <center>
                    	{{ $add->links() }} 
                    </center>
                    </div>
                     <!--个人微博-->
                  </div>  
                  <!--给微博定位结束-->
               </div>
                 <!--给微博定位结束-->
            </div>

			@else
                
						
			@endif
			
             <!--自己发微博的地方结束-->
			<script>
				 function ddd(id){
							 
							if(confirm("确定删除吗?")){
								 window.location.href="/message/del/"+id;
								}	 
						 }
			
			</script>
        </div>
        <!-- 左侧mainBannerDIV 结束 -->                       
        <!-- 右侧mainRight DIV开始 -->
        <div id="mainRight">
            <div id="mainRight1">
               <!-- 右侧mainRightPostionFirstLine DIV 开始 -->
                <div id="mainRightPostionFirstLine">
                    <!-- 右侧mainRightPostionFirstLineIcon DIV 开始 -->
                    <div id="mainRightPostionFirstLineIcon">
                    <a href="/personal"><img src="http://{{$list->picname}}" alt="" width="48" height="48" align="absmiddle" title="" border="0" /></a>
                    </div>
                    <!-- 右侧mainRightPostionFirstLineIcon DIV 结束 -->
                    <!-- 右侧mainRightPostionFirstLineWord1 DIV 开始 -->
                    <div id="mainRightPostionFirstLineWord1">                 
                    &nbsp;<font color="#005DC3" ><b><a href="/personal" class="a1">{{$list->nickname}}</a></b></font><br />
                    </div>
                    <!-- 右侧mainRightPostionFirstLineWord1 DIV 结束 -->
                    <!-- 右侧mainRightPostionFirstLineWord2 DIV 开始 -->
                    <div id="mainRightPostionFirstLineWord2">
                    <ul id="ul1">
                    <li><a href="/personal" class="a1"><font class="style1">{{$datam}}</font><br /><font class="style2">微博</font></a></li>
                    <li><a href="/follow" class="a1"><font class="style1">{{ $datas->follow_count }}</font><br /><font class="style2">关注</font></a></li>
                    <li><a href="/fans" class="a1"><font class="style1">{{ $dataf->fans_count }}</font><br /><font class="style2">粉丝</font></a></li>
                    </ul>
                    </div>
                <!-- 右侧mainRightPostionFirstLineWord2 DIV 结束 -->                    
                </div>
                <!-- 右侧mainRightPostionFirstLine DIV 结束 -->
                <div id="mainRightPostionFifthLine">
                    
                    </div>
              </div>
                <!-- 右侧mainRightPostionSixthLine DIV 开始 -->
              <div id="mainRightPostionSixthLine">
                    <div id="mainRightPositionSixthLineContent">
                    <a href="#" onclick="" class="a1"><font class="style4">我关注的</font>
                    <img src="../images/ThirdLineUpArrow.gif" alt="" width="12" height="14" align="right" title="" border="0"/></a>
                    </div>
                    <ul>
                    <a href="#" class="a1"><li><img src="../images/WBXM.gif" border="0" /><br /><font class="style2">微博小秘</font></li></a>
                    <a href="#" class="a1"><li><img src="../images/AXXR.gif" border="0" /><br /><font class="style2">&nbsp;&nbsp;转&nbsp;&nbsp;发</font></li></a>
                    <a href="#" class="a1"><li><img src="../images/LBXR.gif" border="0" /><br /><font class="style2">微博新人</font></li></a>
                    </ul>
                </div>
                 <!-- 右侧mainRightPostionSeventhLine DIV 开始 -->
                <div id="mainRightPostionSeventhLine">
                    <div id="mainRightPositionSevenLineContent">
                    灵步微博的成长，离不开你们。<br />
                    <font class="style2"><a href="#" class="a1">有意见要提（点击） </a><br /><br />
                    <a href="#" class="a1" onclick="set()">不良信息举报中心</a></font> 
                    </div>
                </div>
                <!-- 右侧mainRightPostionSixthLine DIV 结束 -->
          </div>
        </div>         
  </div>
  <!-- 内容总容器 mainDIV 结束-->
  <!-- footer部分 -->
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
  <!-- footer部分结束 --> 
</div>
<!--总容器 container结束-->
</body>
</html>
