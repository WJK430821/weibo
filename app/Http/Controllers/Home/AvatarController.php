<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Userinfo;

class AvatarController extends Controller
{
    public function index()
	{
   		//
		$user_id = session()->get('homeuser')[0]->id;
		$list = Userinfo::where('user_id',$user_id)->first();
		//dump($list['picname']);
		return view("home.avatar.index",['list'=>$list]);
    }
	
	public function uploadFile(Request $request)
	{    $user_id = session()->get('homeuser')[0]->id;
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
                $path['picname']= (env('DEFAULT').'/'."$fileName");
				
				//返回地址
			   
			   $admin_id = Userinfo::where("user_id",$user_id)->update($path);
               //return "图片地址为:".$path;
			   if($admin_id){
				   return '上传成功';
			   }
			
            }
            return '上传失败';
        }
        return '没有文件';
    }
	
    
}