@extends('home.base')
@section('content')

	<div id="container">
    <!-- banner部分DIV -->
    <div id="banner">
        <!-- banner部分的leftDIV -->
      
	 <div id="Opinion1" align="center" >
                        <div id="ff" style="float:left align:center;" enctype="multipart/form-data"><font style="font-size:26px; alert:center color:black;">请输入您宝贵的意见！</font></div><br/><br/>
                        <div id="left" style="float:right; margin-top:10px; color:black; margin-right:10px;"><br/>您的意见决定了灵步微博的每一步成长！<br/>谨代表所有开发人员向您致敬！<br/></font>&nbsp;&nbsp;&nbsp;</div><br />
                        <div id="wt">
                        <form action="/opinion/{{ $list->user_id }}"  method="post" name="myform1"  >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                          <textarea  id="shuru" name="opinion_content" cols="80" rows="15" style="border:1px #0CF solid center; ">
                          
						  </textarea>
                          <br />
						  <input name="button" type="submit" class="btn" id="button" value="提交" />
                        </form>   

                            </div>						
                        </div> 
		</form>
        <!-- banner_left部分DIV结束 -->
        <!-- banner_right部分DIV -->
        <div class="right" id="right"><br/>
           <p>程序猿疯狂采纳意见中。。。</p>
        </div>
        <!-- banner_right部分DIV结束 -->
    </div>
    <!-- banner部分DIV结束 -->
	    @endsection