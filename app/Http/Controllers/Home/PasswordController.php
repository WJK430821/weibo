<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use \App\Model\Userinfo;
use \App\Model\Register;

class PasswordController extends Controller
{
    public function index()
	{
		//获取表单传过来的id值
		$id =session()->get('homeuser')[0]->id;
		//dd($id);
		$list = Userinfo::where("user_id",$id)->first();
		//dump($list);die;
		return view("home.password.index",['list'=>$list]);
    }
	public function edit()
	{
		return view("home.password.index");
	}
	
	public function update(Request $request, $id)
	{	
		//获取输入的旧密码
		$dd =session()->get('homeuser')[0]->password;
		$input = ($request->only('pass'));
		
		//将旧密码MD5加密
		//$input['pass'] = trim(md5($input['pass']));
		$input['pass'] = md5($input['pass']);
		
		//获取输入的新密码
		$ps = $request->only('password');
		
		//获取输入的重复密码
		$rps = $request->only('repassword');
		
		//$input['password'] = md5($input['password']);
		//return($id);die;
		//dd($input['pass']);die;
		//	dd($id);die;
		if($input['pass']!==$dd){
			return back()->with("err","原密码错误,请重新输入！");
		}elseif($ps['password']!==$rps['repassword']){
				return back()->with("err","新密码有误,请重新输入！");
			}
			   $ps['password'] = md5($ps['password']);
			   $m = Userinfo::where("user_id",$id)->update($ps);
			   $n = Register::where("id",$id)->update($ps);
			   if($m>0 && $n>0){
				  return redirect('/login');
			   }
		
		
	}
	
}