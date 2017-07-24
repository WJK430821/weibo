<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use \App\Model\Register;

class LoginController extends Controller
{
	public function login(Request $request)
	{ 
		//var_dump(session('err'));
		//var_dump(session('msg'));
		if(!$request->session()->has('homeuser')){
            return view("home.login.index");
            return redirect('/login');
        }
		$request->session()->forget('homeuser');
		return view("home.login.index");
        return redirect('/login');
		
		
	}
   //执行用户登录
	public function doLogin(Request $request)
   {
	   
	   
	   
	 
      $this->validate($request, [
            'phone' => 'required|max:11',
            'password' => 'required|max:20|min:6',
        ]);

        $home_phone = $request->input("phone");
        $home_password = $request->input("password");
		 
        $user = Register::where("phone",$home_phone)->first();
		//dump($user);
 	    if($user){
            //判断密码
            if(md5($home_password)==$user->password){
                //存储session跳转页面
                $request->session()->forget('homeuser');
                session()->push("homeuser",$user);
                return redirect("/indexs");
            }else{
				  session()->put('msg', '密码错误!');
				   return redirect("/login");
				//return (session('msg'));die;
			}
        }else{
		  //return back()->with("msg","密码错误!");
		  session()->put('msg','账号不存在!');
		    return redirect("/login");
		   //return redirect("/login");
          //session()->push("msg",'账号或密码错误!');
		  
        }
        //return 1;
        
   }
 
   
   //执行退出
   public function logout(Request $request)
   {
       $request->session()->forget('homeuser');
       return redirect("/");
   }
}
