<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>头像设置 - 灵步微博</title>
<link href="./styles/global.css" type="text/css" rel="stylesheet" />
<link href="./styles/avatar.css" type="text/css" rel="stylesheet" />
</head>

<body>


<form action="/avatar/upload" method="post" enctype="multipart/form-data" name="form1" id="form1">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<!-- container部分DIV -->
<div id="container">
    <!-- banner部分DIV -->
    <div id="banner">
        <!-- banner部分的leftDIV -->
        <div class="left" id="left">
            <!-- bannerLeft部分的topDIV -->
          <div class="top" id="bannerTop">
            <!-- bannerLeftTop部分的picDIV -->
			
				@if($list->picname)
                <div class="pic1" id="bannerTopPic"><img src="http://{{ $list->picname}}" width="96" height="96" align="absmiddle" style="filter:   alpha(opacity=50)" />
				@else
				<div class="pic1" id="bannerTopPic"><img src="./images/tx1.jpg" width="96" height="96" align="absmiddle" style="filter:   alpha(opacity=50)" />
				@endif
            </div>
                <!-- bannerLeftTop部分的picDIV结束 -->
                <!-- bannerLeftTop部分的wordDIV -->
            <div class="word" id="bannerTopWord">
                    <!-- 文件搜索区 -->
                    <label>
                        <input type="file" name="picname" id="fileField"/>
                    </label>
              </div>
              <!-- 文件搜索区结束 -->
              <!-- bannerLeftTop部分的wordDIV -->
              <div class="left2" id="bannerLeftTopBtn">
                <label>
                  <input name="button" type="submit" class="btn" id="button" value="提交" />
                </label>
              </div>
              <!-- bannerLfetTop部分的btnDIV -->
            </div>
            <!-- bannerLeft部分的topDIV结束 -->
            <!-- bannerLeft部分的bottomDIV -->

            <!-- bannerLeft部分的bottomDIV -->
        </div>
        <!-- banner_left部分DIV结束 -->
        <!-- banner_right部分DIV -->
        <div class="right" id="right">
            <p><strong>关于头像</strong></p>
            <p>头像是你展示自己的最好方式，再多的话也没一张头像对你的描述来得直接</p>
        </div>
        <!-- banner_right部分DIV结束 -->
    </div>
    <!-- banner部分DIV -->
</div>
<!-- container部分DI结束V -->
</form>
</body>
</html>
