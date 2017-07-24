<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>灵步网微博-点滴生活，精彩世界</title>
<link href="./styles/CustomerIndex.css" type="text/css" rel="stylesheet" />
<link href="./styles/global.css" type="text/css" rel="stylesheet" />
<script language="javascript" src="./script/CustomerIndex.js" ></script>
<script language="javascript" src="./script/trim.js" ></script>
<script src="./script/jquery-1.8.3.min.js"></script>
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
</head>

<body style="filter:alpha(opacity=100)" id="totop">
<!-- 总容器 container开 始-->
<div>
<div id="container">
	    <!-- topDIV 开始 -->
  <div id="top">
    <!-- top部分的LogoDIV -->
    	<div id="topLogo">
        	<!-- topLogo部分的icoDIV -->
            <div id="topLogoIco"> <a href="CustomerIndex.html"><img src="./images/logo_ipad.png" width="72" height="72" alt="" /></a>
          </div>
            <!-- topLogo部分的icoDIV结束 -->
            
            <!-- topLogo部分的wordDIV -->
            <div id="topLogoWord"> <a href="CustomerIndex.html"><img src="./images/LogoMaker.gif" width="128" height="60" alt="" /></a>
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
                <li><a href="/opinion">意见反馈</a></li>
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
        	<!-- mainBannerTop DIV 开始 -->
      <div id="mainBannerTop">
            <!--id=mainBannerTopIssue 发布框-->
        <div id="mainBannerTopIssue">
                    <!--id=mainBannerTopIssuePoint 提示-->
                    <div id="mainBannerTopIssuePoint">正在发生的事情
                    </div>
                    <div style="float:right;">您还可以输入<font id="counter1">140</font>字！
                    </div>
                    <form name="form" action="/indexs/add" method="post" enctype="multipart/form-data" onsubmit="return doSubmit()">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                      <div id="mainBannerTopIssueForm">
                            <!--id="mainBannerTopIssueFrame-->
                            <div id="mainBannerTopIssueFrame">
                              <textarea name="content" rows="4" class="Size" id="textfield2"  style="overflow:hidden;border:1px #0CF solid;" onkeyup="calNum(this,counter1,0)"></textarea>
							  
                            </div>
                            <!--id="mainBannerTopIssueInsert 插入链接-->
                        <div id="mainBannerTopIssueInsert">
                            <!--4个小div-->
                        </div>
                          <!--确认发布-->
                        <div id="mainBannerTopIssueSure">
                        <div id="mainBannerTopIssueSure2">
						<div id="mainBannerTopIssueInsert2">
						<input type="file" name="picname" >
						 </div>				
						<!-- <a href="file" class="a1">
                            <div id="mainBannerTopIssueInsert1"></div>
                          
                            </a>
                            <div id="mainBannerTopIssueInsert3"></div>
                            <div id="mainBannerTopIssueInsert4">插入视频 </div>
                            <a href="javascript:biaoQingXianShi()" class="a1">
                              <div id="mainBannerTopIssueInsert5"></div>
                              <div id="mainBannerTopIssueInsert6">插入表情</div>
                            </a> -->
                            <input type="submit" name="button1" id="button1" value="发布" style="background-color:#3295E6; border:none"  />
                        </div>
                        </div>
                        </div>
									<script>
				//提交判断
				function doSubmit(){
					return content();
				}
				
				//验证姓名
				function content(){
					//获取姓名
					var content=document.form.content.value;
					//判断
					if(content.match(/^.+$/)==null){
						alert("您输入的内容为空,请重新输入在完成发布!");
						return false;
					
					}
					return true;
				}

			
			</script>
                    </form> 
          </div>

        </div> 
            
            <!--id="mainBannerTitle 首页-->
            <div id="mainBannerTitle">
                <!--id="mainBannerTitleWord"-->
                <div id="mainBannerTitleWord"><b>首页</b>
                </div>
                <!--首页提示与隐藏-->
                <div id="mainBannerTitleWord2">
                        <input type="checkbox" name="checkbox" id="checkbox" onclick="tdImgState()"/>
                        隐藏图片 
                </div>
            </div> 
            <!--不同人的内容-->
            <div id="mainBannerContent">
            	<!--个人展示-->
				
            	<div class="stateShow" onmouseover="stateMouseOver(this)" onmouseout="stateMouseOut(this)">
				
					
				@foreach ($message as $k=>$v)
                  <div class="stateShowWord">
				  
					
                    <table width="450" border="0" cellpadding="0" cellspacing="0" class="stateTable">
					
                      <tr>
                        <td width="70" align="center" valign="top"><a href="#"><img src="http://{{$v['touxiang']}}" alt="" width="48" height="48" /></a></td>
                        <td width="380" ><a id="n{{$k}}" href="#">{{$v['nickname']}}</a><img src="./images/1.gif" align="absmiddle" style="border:none;" />{{$v['content']}}</td>
                      </tr>
					  
                    </table>
						
                  </div>
				  
                   <div class="stateImgShow"><img src="{{$v['tupian']}}" /></div>            
					<div class="stateShowtime" id ="d{{$k}}"> 
                    <td width="390">{{$v['publish_time']}}</a></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                     @if(session('homeuser')[0]->id!==$v['user_id'])
					<td><a id="i{{$k}}" href="javascript:comments({{ $v['message_id'] }},{{session('homeuser')[0]->id}},'{{session('homeuser')[0]->nickname}}',{{$k}},'{{$v['zijitouxiang']}}')" onclick="reXianShi(this)" >评论</a></td>&nbsp;&nbsp;&nbsp;
					
					 
					<td ><a id="{{$k}}" href="javascript:praise({{ $v['message_id'] }},{{session('homeuser')[0]->id}},{{$k}})">点赞</a></td>&nbsp&nbsp&nbsp

					
					<td><a href="javascript:submit({{ $v['message_id'] }},{{ $v['user_id']}},{{session('homeuser')[0]->id}})" id="zhuanfa">转发</a></td>&nbsp&nbsp&nbsp
					
					<td><a id="s{{$k}}" href="javascript:follow({{session('homeuser')[0]->id}},{{ $v['user_id']}},{{$k}})" >关注他(她)</a></td>
					 @endif
					
					</div>
					
					 <br/>
					 @if($v['mingzi'])
					 <div class='stateRshow' id="hh{{$k}}">
						<div class='stateRshowWord'><table width='380' border='0' cellpadding='0' cellspacing='0' class='stateTable'><tr><td width='70' align='center' valign='top'><a href='#'><img src='http://{{$v['touxiangs']}}' alt='' width='48' height='48' /></a></td><td width='310' ><a href='#'>{{$v['mingzi']}}</a><img src='images/1.gif' align='absmiddle' style='border:none;' />{{$v['comments_content']}}</td></tr></table></div><div class='stateRimgShow'></div><div class='stateRshowtime'>{{$v['comments_time']}}</div>
					 
					
					<div class="stateShowtime"> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					@if(session('homeuser')[0]->id!==$v['comments_userid'])
					
				
					@if($v['reply_content'])
					@else
					<td ><a id="h{{$k}}" href="javascript:huifu({{session('homeuser')[0]->id}},'{{session('homeuser')[0]->nickname}}',{{ $v['comments_id'] }},'{{$v['mingzi']}}',{{$k}})" >回复</a></td >
					@endif

				 
					@if($v['reply_content'])
					<div class='stateRshowWord'><table width='380' border='0' cellpadding='0' cellspacing='0' class='stateTable'><tr><td width='70' align='center' valign='top'></td><td width='310' ><a href='#'>{{$v['reply_uname']}}</a>回复<a href='#'>{{$v['reply_cname']}}</a><img src='images/1.gif' align='absmiddle' style='border:none;' />{{$v['reply_content']}}</td></tr></table></div><div class='stateRimgShow'></div><div class='stateRshowtime'>{{$v['reply_time']}}<td ><a id="h{{$k}}" href="javascript:huifu({{session('homeuser')[0]->id}},'{{session('homeuser')[0]->nickname}}',{{$v['comments_id']}},'{{$v['mingzi']}}',{{$k}})" >&nbsp;&nbsp;&nbsp;&nbsp;回复</a></td ></div>
					@endif
					
					@endif
					<!--td ><a	id="d{{$k}}" onclick="del({{session('homeuser')[0]->id}},{{$v['user_id']}},{{$v['comments_id']}})" href="#">删除</a></td-->
					@if(session('homeuser')[0]->id==$v['comments_userid'])
					<td ><a	id="ddd{{$k}}" href="javascript:del({{$v['comments_id']}},{{$k}})">删除</a></td>
					@endif
					
					</div>
					<a id="cha{{$k}}" style="float:right" href ="javascript:aa({{$k}},{{$v['message_id']}})">查看评论</a>
					</div>
					  @endif
				  @endforeach
				 <br/>

                </div>
				<script type="text/javascript">
		 
				
				
               
				function aa(d,mid){
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
									
									 
										//$("#sdasd"+i).toggle();
									var dd = xmlhttp.response;
										//alert(str[1]);
										//alert(str);
									var js=eval("("+dd+")"); 
										//alert(js.length);
										for(var i=0;i<js.length;i++){
										$("#hh"+d).append(" <br/><div id='sasd' class='stateRshow'><div class='stateRshowWord'><table width='380' border='0' cellpadding='0' cellspacing='0' class='stateTable'><tr><td width='70' align='center' valign='top'><a href='#'><img src='http://"+js[i+1].picname+ "' width='48' height='48' /></a></td><td width='310' ><a href='#'>"+js[i+1].nickname+"</a><img src='images/1.gif' align='absmiddle' style='border:none;' />"+js[i+1].comments_content+"</td></tr></table></div><div class='stateRimgShow'></div><div class='stateRshowtime'>"+js[i+1].comments_time+"</div><div/>");
										}
										var display =$('#sasd').css('display');
										if(display == 'block'){
											$("#sasd").hide;
										}
										
										
									}else{
										alert("服务器端响应错误!");
									}
								}
								
							}
							
							//3. 初始化请求对象
							xmlhttp.open("get","/indexs/pinglun/"+mid,true);
							//设置请求头信息,让其支持post的参数提交
							//xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

							//4. 执行发送:
							xmlhttp.send();
							
							return false;
				 
				}
				 
				</script>

                <div id="recieve">
                        <div id="ff" style="float:left;"><font style="font-size:16px; color:#FDFDFD">&nbsp;&nbsp;&nbsp;&nbsp;评&nbsp;&nbsp;论</font></div>
                        <div id="left" style="float:right; margin-top:10px; color:#FFF; margin-right:10px;">您还有可以输入<font id="counter2" color="#ffffff">140</font>字！&nbsp;&nbsp;&nbsp;<img src="./images/hongcha1.gif" alt="" width="14" height="13" align="absmiddle" title="" onclick="windowClose()" /></div><br />
                        <div id="wt">
                        <form action="#" method="post" name="myform1" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <textarea name="content" cols="" rows="" id="ta1" onkeyup="calNum(this,counter2,1)" style="overflow:hidden;border:1px #0CF solid;">
                          
						  </textarea>
                          <br />
                        </form>   
							<div style="float:right; margin-right:25px; margin-top:7px; text-align:right;">
                                <input type="button" value=" 评 论 " id="dddd"  />
                            </div>						
                        </div> 
                  </div>

				 
          
			
				  


				<script>
		
		
		
					function sdasdas(uname,cname,time,val,i){
						$("#hh"+i).append(" <br/><div class='stateRshow'><div class='stateRshowWord'><table width='380' border='0' cellpadding='0' cellspacing='0' class='stateTable'><tr><td width='70' align='center' valign='top'></td><td width='310' ><a href='#'>"+uname+"</a>回复<a href='#'>"+cname+"</a><img src='images/1.gif' align='absmiddle' style='border:none;' />"+val+"</td></tr></table></div><div class='stateRimgShow'></div><div class='stateRshowtime'>"+time+"</div><div/>");
					}


					
					function huifu(id,uname,cid,cname,i){
						  var val=prompt("请输入你要回复的内容!","")
						  
						  if(val){
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
									
									 var time = inittime();//取出当前时间
											//var nickname = document.getElementById("n"+i).innerHTML;
										sdasdas(uname,cname,time,val,i);
									
										 
									}else{
										alert("服务器端响应错误!");
									}
								}
								
							}
							
							//3. 初始化请求对象
							xmlhttp.open("get","/comments/reply/"+id+"/"+cid+"/"+uname+"/"+cname+"/"+val,true);
							//设置请求头信息,让其支持post的参数提交
							//xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

							//4. 执行发送:
							xmlhttp.send();
							
							return false;
							  
							  
						  }
						  
					}
		
		
		
					 function del(id,i){
						  var dd = document.getElementById("ddd"+i);
						dd.onclick=function(){
							if(confirm("确定删除吗?")){
							
						
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
									//判断响应状态码:
									
									if(xmlhttp.status == 200){ 
									var sdas = document.getElementById("hh"+i);
									sdas.style.display = "none";
										alert("删除成功!");
									}else{
										alert("服务器端响应错误!");
									}
								}
								
							}
							
							//3. 初始化请求对象
							xmlhttp.open("get","/comments/del/"+id,true);
							//设置请求头信息,让其支持post的参数提交
							//xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

							//4. 执行发送:
							xmlhttp.send();
							
							return false;
						   } 
						}
						}
						
						 function ddd(id,uid,usid){
							 if(uid==usid){
							if(confirm("确定删除吗?")){
								 window.location.href="/comments/del/"+id;
								}
							 }else{
								 alert("")
							 }
						 }
						
						
						function skjd(i,str,nickname,time,picname){
						
						$("#d"+i).append(" <br/><div class='stateRshow'><div class='stateRshowWord'><table width='380' border='0' cellpadding='0' cellspacing='0' class='stateTable'><tr><td width='70' align='center' valign='top'><a href='#'><img src='http://"+picname+"' alt='' width='48' height='48' /></a></td><td width='310' ><a href='#'>"+nickname+"</a><img src='images/1.gif' align='absmiddle' style='border:none;' />"+str+"</td></tr></table></div><div class='stateRimgShow'></div><div class='stateRshowtime'>"+time+"</div><div/>");
					 
						}
					
									
					
					
		
				    function comments(mid,id,nickname,i,picname){
						
						document.getElementById("dddd").onclick=function(){
							 
							var dd = document.getElementById("ta1").value;
							if(dd){
							//alert(i);
							  var dian = document.getElementById("i"+i).innerHTML;
							   if(dian=='评论'){
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
										//alert(i);
										//document.getElementById(i).innerHTML = ("已点赞");
											var str = xmlhttp.responseText;
											//alert(i);
											//document.myform.action = "/indexs/comments/"+mid+"/"+id+"/"+dd;
											//document.myform.submit();
											//alert(成);
											var p = document.getElementById("recieve");
											var f = document.getElementById("i"+i);
											 
											 var time = inittime();//取出当前时间
											//var nickname = document.getElementById("n"+i).innerHTML;
											skjd(i,str,nickname,time,picname);
										 
											p.style.display = "none";
											//var obj = eval('(' + str + ')');
											//salert(obj.mesage_id);
											f.onclick=function(){
												                          
												p.style.display = "block";
												//reXianShi(this);
											}
											
											
											
										}else{
											alert("服务器端响应错误!");
										}
									}
									
								}
								
								//3. 初始化请求对象
								xmlhttp.open("get","/indexs/comments/"+mid+"/"+id+"/"+nickname+"/"+dd,true);
								//设置请求头信息,让其支持post的参数提交
								xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

								//4. 执行发送:
								xmlhttp.send();
								
								return false;
								}
							
							
							

							}else{
								alert("请输入内容!");
							}
						};
						
					}
					
					

            function praise(mid,uid,i){
        
               var dian = document.getElementById(i).innerHTML;
               //alert(dian);die;
               if(dian=='点赞'){
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
						//alert(i);
						document.getElementById(i).innerHTML = ("已点赞");
                            //var str = xmlhttp.responseText;
							//alert(str);
                        }else{
                            alert("服务器端响应错误!");
                        }
                    }
                    
                }
                
                //3. 初始化请求对象
                xmlhttp.open("get","/indexs/praise/"+mid+"/"+uid,true);
                //设置请求头信息,让其支持post的参数提交
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

                //4. 执行发送:
                xmlhttp.send();
                
                return false;
			   }
		
		
			if(dian=='已点赞'){
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
						document.getElementById(i).innerHTML = ("点赞");
                            var str = xmlhttp.responseText;
							//alert(str);
                        }else{
                            alert("服务器端响应错误!");
                        }
                    }
                    
                }
                
                //3. 初始化请求对象
                xmlhttp.open("get","/indexs/praise/"+mid+"/"+uid,true);
                //设置请求头信息,让其支持post的参数提交
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

                //4. 执行发送:
                xmlhttp.send();
                
                return false;
			   }
            }
            
             function follow(uid,sud,p){
                if(uid==sud){
					alert('亲 不可以关注自己哦!')
					return;
				}
               var guan = document.getElementById("s"+p).innerHTML;
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
						document.getElementById("s"+p).innerHTML = ("已关注");
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
						document.getElementById("s"+p).innerHTML = ("关注他(她)");
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
				
						   <center>
                    	{{ $info->links() }} 
                    </center>
                 <!--个人展示结束-->
                  <!--个人展示-->

                
            </div>
      </div>
      <!-- 左侧mainBanner DIV 结束-->
      <!-- 右侧mainRight DIV开始 -->
  <div id="mainRight">
          <table width="200" border="0" cellpadding="0" cellspacing="0" bgcolor="#E9F4FA">
 				<tr>
                    <td bgcolor="#E9F4FA">
                    	<!-- 右侧mainRightPostionFirstLine DIV 开始 -->
                    	<div id="mainRightPostionFirstLine">
                            <!-- 右侧mainRightPostionFirstLineIcon DIV 开始 -->
                            
                            <div style="height:58px;">
                            <div id="mainRightPostionFirstLineIcon">
                            	<a href="/personal"><img src="http://{{$list->picname}}" alt="" width="48" height="48" align="absmiddle" title="" border="0" /></a>
                            </div>
                            <!-- 右侧mainRightPostionFirstLineIcon DIV 结束 -->
                            <!-- 右侧mainRightPostionFirstLineWord1 DIV 开始 -->
                            <div id="mainRightPostionFirstLineWord1">               
                            &nbsp;<font color="#005DC3" ><b><a href="/personal" class="a1">{{$list->nickname}}</a></b></font><br />
                            </div>
                            </div>
                            
                            <!-- 右侧mainRightPostionFirstLineWord1 DIV 结束 -->
                        	<!-- 右侧mainRightPostionFirstLineWord2 DIV 开始 -->
                          <div id="mainRightPostionFirstLineWord2">
                                <ul>
                                	<a href="/personal" class="a1"><li><font class="style1">{{$datam}}</font><br /><font class="style2">微博</font></li></a>
   								    <a href="/follow" class="a1"><li><font class="style1">{{ $datas->follow_count }}</font><br /><font class="style2">关注</font></li></a>
   								    <a href="/fans" class="a1"><li><font class="style1">{{ $dataf->fans_count }}</font><br /><font class="style2">粉丝</font></li></a>
                                </ul>
                           </div>
                           <!-- 右侧mainRightPostionFirstLineWord2 DIV 结束 -->                    
                        </div>
                        <!-- 右侧mainRightPostionFirstLine DIV 结束 -->
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#E9F4FA">                    
                        <!-- 右侧mainRightPostionSecondLine DIV 开始 -->
                        <div id="mainRightPostionSecondLine">
                            <!-- 右侧mainRightPositionSecondLineContent DIV 开始 -->
                            <div id="mainRightPositionSecondLineContent">
                                <a href="/indexs" class="a1"><font style="font-size:16px;font-weight:700; color:#000;">首页</font></a><br />
                                <hr color="#79BDD1" zize="2" style="" />
                                 
                               
                                <a href="/personal" class="a1"><font class="style3">我发布的微博</font></a>
                                <hr class="h1">
                                <a href="/follow" class="a1"><font id="asdlkja"	class="style3">我关注的</font></a>
                                <hr class="h1">
                                <a href="/fans" class="a1"><font class="style3">我的粉丝</font></a>
								<hr class="h1">
                                <a href="/comments" class="a1"><font class="style3">回复我的</font></a>
							    <hr class="h1">
                            </div>
                            <!-- 右侧mainRightPositionSecondLineContent DIV 开始 -->
                        </div>
                        <!-- 右侧mainRightPostionSecondLine DIV 结束 -->
                    </td>
                </tr>
				
                <tr>
                  <td>  
                        <!-- 右侧mainRightPostionThirdLine DIV 开始 -->
                        <div id="mainRightPostionThirdLine">
                            <!-- 右侧mainRightPositionThirdLineContent DIV 开始 -->
                            <div id="mainRightPositionThirdLineContent">
                            <p><a href="#" onclick="" class="a1"><font class="style4">你可能感兴趣的人</font>
                            <img src="./images/ThirdLineUpArrow.gif" alt="" width="12" height="14" align="right" title="" border="0"/></a></p>
                            <br />
                            <div id="d32" style="float:right"><a href="#" class="a1">查看更多</a></div>
                            </div>                    	
                            <!-- 右侧mainRightPositionThirdLineContent DIV 结束 -->	
                        </div>
                        <!-- 右侧mainRightPostionThirdLine DIV 开始 -->
                  </td>
                </tr>
                <tr>
                    <td>
                        <!-- 右侧mainRightPostionFourthLine DIV 开始 -->
                        <div id="mainRightPostionFouthLine">
                        	<!-- 右侧mainRightPositionThirdLineContent DIV 结束 -->	
                        	<div id="mainRightPositionFourthLineContent">
                            <form action="/search" method="get">
                              <input type="text" class="am-form-field " name="nickname" placeholder="用户昵称">
                              <button><img src="./images/search.gif" alt="" width="27" height="25" align="middle" title="" border="0"/></a></button>
                            </form>
                            <a href="#" onclick="" class="a1"><font class="style4">热门话题</font>
                            <img src="./images/ThirdLineUpArrow.gif" alt="" width="12" height="14" align="right" title="" border="0"/></a>
                            <ul id="ul2" style="line-height:25px;">
                            	<a href="#" class="a1"><li><font class="style2">动车(49585)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">高铁(48704)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">遇难者(10616)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">发言人(12875)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">铁道部(24488)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">暴雨(8914)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">伊伊(921</font>)</li></a>
                                <a href="#" class="a1"><li><font class="style2">变形金刚(2908)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">味千拉面(450)</font></li></a>
                                <a href="#" class="a1"><li><font class="style2">第三届网络原创歌曲大赛(27)</font></li></a>
                            </ul>
                            </div>
                            <!-- 右侧mainRightPositionThirdLineContent DIV 结束 -->	
                        </div>
                        <!-- 右侧mainRightPostionFoutrhLine DIV 结束 -->
                    </td>
                </tr>
                <tr>
                    <td> <!-- 右侧mainRightPostionFifthLine DIV 开始 -->
                    <div id="mainRightPostionFifthLine">
                    	<div id="mainRightPositionFifthLineContent">
                        	<a href="#" onclick="" class="a1"><font class="style4">我关注的话题</font>
                            <img src="./images/ThirdLineUpArrow.gif" alt="" width="12" height="14" align="right" title="" border="0"/></a>
                        </div>
                    </div>
                    <!-- 右侧mainRightPostionFifthLine DIV 结束 -->
                    </td>
                </tr>
                <tr>
                    <td><!-- 右侧mainRightPostionSixthLine DIV 开始 -->
                    <div id="mainRightPostionSixthLine">
                    	<div id="mainRightPositionSixthLineContent">
                        	<a href="#" onclick="" class="a1"><font class="style4">我关注的</font>
                            <img src="./images/ThirdLineUpArrow.gif" alt="" width="12" height="14" align="right" title="" border="0"/></a>
                        </div>
                        <ul>
                        	<a href="#" class="a1"><li><img src="./images/WBXM.gif" border="0" /><br /><font class="style2">微博小秘</font></li></a>
                            <a href="#" class="a1"><li><img src="./images/AXXR.gif" border="0" /><br /><font class="style2">&nbsp;&nbsp;转&nbsp;&nbsp;发</font></li></a>
                            <a href="#" class="a1"><li><img src="./images/LBXR.gif" border="0" /><br /><font class="style2">微博新人</font></li></a>
                        </ul>
                    </div>
                    <!-- 右侧mainRightPostionSixthLine DIV 结束 -->
                    </td>
                </tr>
                <tr>
                    <td><!-- 右侧mainRightPostionSeventhLine DIV 开始 -->
                    <div id="mainRightPostionSeventhLine">
                        <div id="mainRightPositionSevenLineContent">
                        灵步微博的成长，离不开你们。<br/>
				
                        <font class="style2"><a href="/opinion" class="a1" >有意见要提（点击） </a><br /><br />
                        <a href="#" class="a1" onclick="set()" >不良信息举报中心</a></font> 
                        
                        </div>
                    </div>
                    <!-- 右侧mainRightPostionSeventhLine DIV 结束 -->
                    </td>
                </tr>
          </table>

     </div>
      <!-- 右侧mainRightDiv 结束 -->
  </div>
    <!-- 回复DIV 开始 -->
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
 <p id="backtop"><a id="backtop1" href="#totop"><span></span>回到顶部</a></p>
					
					
					
					<form style="display:none;" action="" name="myform" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</form>
					
 
 
 <script>
 
			<!--关注-->


	 function submit(mid,sud,id){
		 var val=prompt("需要说些什么话","");//将输入的内容赋给变量 val ，
		// alert(val);
		 if(val!=='' && val!==null){
			
			if(sud==id){
				  alert('亲 不允许转发自己的微博哦!');
				  
			  }else{
				  if(confirm("是否转发此微博？")){
			  
		 
			   document.myform.action = "/indexs/forward/"+mid+"/"+sud+"/"+id+"/"+val;
               document.myform.submit();
              // alert(mid);
              // alert(uid);
              // alert(id);
               }
            }

		 }if(val=='' && val!==null){
			 val = null;
			 if(sud==id){
				  alert('亲 不允许转发自己的微博哦!');
				  
			  }else{
				  if(confirm("是否转发此微博？")){
			  
		 
			   document.myform.action = "/indexs/forward/"+mid+"/"+sud+"/"+id+"/"+val;
               document.myform.submit();
              // alert(mid);
              // alert(uid);
              // alert(id);
               }
            }
			 
			 
		 }
			
		
	}
	
	
	
 </script>
</body>
</html>
	
