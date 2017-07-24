<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use \App\Model\Userinfo;
use \App\Model\Register;

class AccountController extends Controller
{
    public function index()
	{
   		//

		//return view("home.account.index");
		
		$id =session()->get('homeuser')[0]->id;
		//dd ($id);
		$list = Userinfo::where("user_id",$id)->first();
		//dump($list);
		return view("home.account.index",['list'=>$list]);

    }
	public function edit()
	{
		$v = Userinfo::where("user_id",$id)->first();
        return view("home.account.index",['v'=>$v]);
	}
    public function update(Request $request, $id)
    {
 
		 //$user_id = session()->get('homeuser')[0]->id;
		 $path = [];
		//判断文件是否上传
    if($request->hasFile('picname')){
			//获取文件
            $file = $request->file('picname');
			//初始化
            $disk = \Storage::disk('qiniu');
			//生成文件名
            $fileName = md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension();
			//开始上传
            $bool = $disk->put($fileName,file_get_contents($file->getRealPath()));
            //判断是否成功
			if($bool){
               
				$v = Userinfo::where("user_id",$id)->first();
				//返回地址
			    $input = $request->only('nickname','email','age','sex','sexual','birthday','address','name','QQ');
				$input['picname']= (env('DEFAULT').'/'."$fileName");
				$input['register_time']= $v->register_time;

				//dump($input);die;
			   $m = Userinfo::where("user_id",$id)->update($input);
			  
			   if($m){
				  
				   return redirect('/account');
				   
			   }
			
            }
            return '上传失败';
      }else{
				$input = $request->only('nickname','phone','email','age','sex','sexual','birthday','address','name','QQ');
				$dddd = $request->only('nickname','phone');
				//$input = $request->all();
				//return($input);die;
				$m = Userinfo::where("user_id",$id)->update($input);
				$d = Register::where("id",$id)->update($dddd);
				   if($m){
				   return redirect('/account');
				   
			   }
			}	
    }
}