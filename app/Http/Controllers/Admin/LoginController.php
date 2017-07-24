<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends Controller
{
   //加载登录模板
   public function login()
   {
       return view("admin.login");
   }
   
   //执行用户登录
  public function doLogin(Request $request)
   {


        
        //执行登陆判断
        $admin_name = $request->input("admin_name");
        $admin_password = $request->input("admin_password");
        //获取对应用户信息
        $user = \DB::table("admin")->where("admin_name",$admin_name)->first();
        if(!empty($user)){
            //判断密码
            if(md5($admin_password)==$user->admin_password){
                //存储session跳转页面
                session()->push("adminuser",$user);
                return redirect("admin");
                //echo "测试成功!";
            }
        }
        return back()->with("msg","账号或密码错误！");
   }
 
   
   //执行退出
   public function logout(Request $request)
   {
       $request->session()->forget('adminuser');
       return redirect("admin/login");
   }
}
