@extends('home.base')
@section('content')
<div id="container" align='center'>
    <!-- banner部分DIV -->
    <div id="banner">
        <!-- bannerLeft部分DIV -->
		<form id="form1" name="form1"  action="/password/{{ $list->user_id }}" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_method" value="put">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="left" id="left">
            <table width="564" border="0" cellspacing="0" cellpadding="0">
                 <!-- 当前密码 -->
                 <tr>
                     <td width="120" height="65" align="right"><strong>当前密码</strong></td>
                     <td width="20" height="65">&nbsp;</td>
                     <td height="65"><label>
                             <input name="pass" type="password" class="n1" id="textfield1" />
                   <br />
                                <a href="#">密码忘了？</a></label></td>
                 </tr>
                 <!-- 新密码 -->
                 <tr>
                     <td width="120" height="65" align="right"><strong>新密码</strong></td>
                     <td width="20" height="65">&nbsp;</td>
                     <td height="65"><label>
                             <input name="password" type="password" class="n1" id="textfield2" />
                   </label></td>
                 </tr>
                 <!-- 重复新密码 -->
                 <tr>
                     <td width="120" height="65" align="right"><strong>重复新密码</strong></td>
                     <td width="20" height="65">&nbsp;</td>
                     <td height="65"><label>
                             <input name="repassword" type="password" class="n1" id="textfield3" />
                   </label></td>
                 </tr>
                 <!-- 保存按钮 -->
                 <tr>
                     <td width="120" align="right">&nbsp;</td>
                     <td width="20">&nbsp;</td>
                     <td><label>
                          <input name="button" type="submit" class="btn" id="button" value="保存" />
                     </label></td>
                 </tr>
            </table>
			 @if(session("err"))
            <center><p class="login-box-msg"  style="color:red;">{{session("err")}}</p></center>
      @endif
        </div>
        <!-- bannerLeft部分DIV结束 -->
        <!-- bannerRight部分DIV -->
        <div class="right" id="right">
            <p><strong>关于密码</strong></p>
            <p>设置强度较高的账户密码（建议使用6~20位字母+数字+特殊符号，字幕区分大小写）</p>
            <p>避免使用用户名，连续或相同的数字作为密码 </p>
        </div>
		</form>
      <!-- bannerRight部分DIV结束 -->
  </div>
  <!-- banner部分DIV结束 -->
</div>
@endsection