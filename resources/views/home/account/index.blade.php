@extends('home.base')
@section('content')

	<div id="container">
    <!-- banner部分DIV -->
    <div id="banner">
        <!-- banner部分的leftDIV -->
        <div class="left" id="left">
				<form id="form1" name="form1"  action="/account/{{ $list->user_id }}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="put">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
<!-- container部分DIV -->

            <table width="564" border="0" cellpadding="0" cellspacing="0" class="left">
                <!-- 昵称 -->
                @if($list->picname)
				<tr>
                    <td width="120" height="49" align="right"><strong>头像</strong></td>
                    <td width="20" height="49">&nbsp;</td>
                    <td width="425" height="49"><label>
                      
                     </label><div class="pic1" id="bannerTopPic"><img src="http://{{ $list->picname}}" width="96" height="96" align="absmiddle" style="filter:   alpha(opacity=50)" />
					<input type="file" name="picname" id="fileField"/>
					</div></td>
                </tr>
				@else
									<tr>
                    <td width="120" height="49" align="right"><strong>头像</strong></td>
                    <td width="20" height="49">&nbsp;</td>
                    <td width="425" height="49"><label>
                     
                     </label><div class="pic1" id="bannerTopPic"><img src="./images/tx1.jpg" width="96" height="96" align="absmiddle" style="filter:   alpha(opacity=50)" />
					<input type="file" name="picname" id="fileField"/>
					</div></td>
                </tr>
				@endif
                <tr>
                    <td width="120" height="50" align="right"><strong>用户名</strong></td>
                    <td width="20" height="60">&nbsp;</td>
                    <td width="425" height="60"><label>
                         <input name="nickname" type="text" class="n1" id="textfield" value="{{$list->nickname}}"/>

<br />
                              您的昵称将显示在您的主页中</label></td>
                </tr>
                <!-- 个性域名 -->
                <tr>
        <td width="120" height="70" align="right"><strong>邮箱</strong></td>
                    <td width="20" height="70">&nbsp;</td>
                    <td width="425" height="70"><label>
                         <input name="email" type="text" class="n1" id="textfield2" value="{{$list->email}}"   />
						 </label></td>
                </tr>
                <!-- 邮箱 -->
                <tr>
                    <td width="120" height="49" align="right"><strong>手机号</strong></td>
                    <td width="20" height="49">&nbsp;</td>
                    <td width="425" height="49"><label>
                         <input name="phone" type="text" class="n1" id="textfield3" value="{{$list->phone}}"/>
                             </label></td>
                </tr>
                <!-- 地址 -->
               <tr>
                    <td width="120" height="49" align="right"><strong>年龄</strong></td>
                    <td width="20" height="49">&nbsp;</td>
                    <td width="425" height="49"><label>
                         <input name="age" type="text" class="n1" id="textfield3" value="{{$list->age}}"/>
                             </label></td>
                </tr>
                <!-- 个人站点-->
                              <tr>
                    <td width="120" height="49" align="right"><strong>性别</strong></td>
                    <td width="20" height="49">&nbsp;</td>
                    <td width="425" height="49">
                         <input  type="radio" name="sex"  value="m" "@if ($list->sex=='m')" checked @endif />男
                         <input  type="radio" name="sex"  value="w" "@if ($list->sex=='w')" checked @endif />女
						
                    </td>
                </tr>
               <!--个性签名 -->
			   
						
                <!-- 隐私 -->
               <tr>
                    <td width="120" height="49" align="right"><strong>性取向</strong></td>
                    <td width="20" height="49">&nbsp;</td>
					<td width="425" height="49">
                         <input  type="radio" name="sexual"  value="m" "@if ($list->sexual=='m')" checked @endif />男
                         <input  type="radio" name="sexual"  value="w" "@if ($list->sexual=='w')" checked @endif />女
                   
           
						 
						 
                    </td>
                </tr>
				 <tr>
                    <td width="120" height="49" align="right"><strong>生日</strong></td>
                    <td width="20" height="49">&nbsp;</td>
                    <td width="425" height="49"><label>
                         <input name="birthday" type="text" class="n1" id="textfield3" value="{{$list->birthday}}"/>
                             </label></td>
                </tr>
				<tr>
                    <td width="120" height="49" align="right"><strong>地址</strong></td>
                    <td width="20" height="49">&nbsp;</td>
                    <td width="425" height="49"><label>
                         <input name="address" type="text" class="n1" id="address" value="{{$list->address}}"/>
                             </label></td>
                </tr>
				<tr>
                    <td width="120" height="49" align="right"><strong>真实姓名</strong></td>
                    <td width="20" height="49">&nbsp;</td>
                    <td width="425" height="49"><label>
                         <input name="name" type="text" class="n1" id="textfield3" value="{{$list->name}}"/>
                             </label></td>
                </tr>
				<tr>
                    <td width="120" height="49" align="right"><strong>QQ</strong></td>
                    <td width="20" height="49">&nbsp;</td>
                    <td width="425" height="49"><label>
                         <input name="QQ" type="text" class="n1" id="textfield3" value="{{$list->QQ}}"/>
                             </label></td>
                </tr>
				

                <!-- 保存按钮 -->
                <tr>
                    <td width="120" height="44" align="right">&nbsp;</td>
                    <td width="20" height="44">&nbsp;</td>
                    <td width="425" height="44"><label>
                         <input name="button" type="submit" class="btn" id="button" value="保存" />
                            </label></td>
                </tr>
            </table>
        </div>

		</form>
        <!-- banner_left部分DIV结束 -->
        <!-- banner_right部分DIV -->
        <div class="right" id="right">
           <p>在这里你可以设置你账号的基本信息</p>
        </div>
        <!-- banner_right部分DIV结束 -->
    </div>
    <!-- banner部分DIV结束 -->
	    @endsection