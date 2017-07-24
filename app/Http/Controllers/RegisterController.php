<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Model\Register;
use \App\Model\Userinfo;
use \App\Model\Follow;
use Session;
//use Illuminate\support\Facades\Redis as redis;
use iscms\Alisms\SendsmsPusher as Sms;

class RegisterController extends Controller
{

    public $sms;
    //构造方法
    public function __construct(Sms $sms)
    {
        $this->sms = $sms;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	 //定义方法显示
    public function index()
    {	//返回视图
		
        return view('home.register.index');
    }
	
    //验证码
    // public function code()
    // {
    //    $builder = new CaptchaBuilder;
    //     //可以设置图片宽高及字体
    //     $builder->build($width = 100, $height = 40, $font = null);
    //     //获取验证码的内容
    //     $phrase = $builder->getPhrase();
    //     //把内容存入session
    //     session()->put('code', $phrase);
    //     //生成图片
    //     header("Cache-Control: no-cache, must-revalidate");
    //     header('Content-Type: image/jpeg');
    //     $builder->output();
    // }
	
    public function sendMobileCode(Request $request){
        //echo 1;
        //dd('k');
        //dd($request ->input('phone'));
        $phone = $request ->input('phone'); // 用户手机号，接收验证码`
        $name = '兄弟连';  // 短信签名,可以在阿里大鱼的管理中心看到
        $num = rand(100000, 999999); // 生成随机验证码
        $smsParams = [
         'number' => "$num"
        ];
        $content = json_encode($smsParams); // 转换成json格式的
        $code = "SMS_75835101";   // 阿里大于(鱼)短信模板ID
        $request ->session()->put('code',$num);  // 存入session 后面做数据验证
        $result=$this->sms->send($phone,$name,$content,$code);
        //die($phone);
     }
   public function store(Request $request)
    {
        $mycode = $request ->input('code');
        $code = $request->session()->get("code");
        //dd($code);
        if($mycode != $code ){
            return back()->with("err","验证码错误");
        }
        $phone = $request->input("phone");
        $nickname = $request->input("nickname");
        $password = $request->input("password");
        $user = Register::where("phone",$phone)->first();
        
		if(empty($user)){
            $data = $request->only('phone','password','nickname');
            $data['password'] = md5($data['password']);
			$time = time()+480*60;
            $data['register_time'] = date("Y-m-d H:i:s",$time);    
           
   		    $id = Register::insertGetId($data);
            $data['user_id']=$id;
			
            Userinfo::insertGetId($data);
			
			
			$follow['id']=$id;
			$follow['suser_id']=7;
			$follow['user_id']=7;
			$follow['follow_count']=1;
			$follow['fans_count']=1;		
			Follow::insertGetId($follow);
			
			
		
			 if($id>0){
				 return redirect('/');
			 }else{
				session()->put("err","注册失败,请重新注册！");
				return redirect("/register");
			 }
        
			  }else{
						session()->put('err','手机号已被注册!');
						
						return redirect("/register");
						
						
					}
        
    
	}

          
}
