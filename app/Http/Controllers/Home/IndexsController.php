<?php

namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\Redis;
use App\Model\Message;
use App\Model\Follow;
use App\Model\Userinfo;
use App\Model\Forward;
use App\Model\Praise;
use App\Model\Comments;
use App\Model\Reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexsController extends Controller
{
    public function index(Request $request)
	{
		 $user_id = session()->get('homeuser')[0]->id;
		
		
	
		
		//echo"<pre>";
		//var_dump($list);die;
			//统计个人发布的微博，关注，粉丝
   		
		 $datas = Follow::where('id',$user_id)->orderBy('follow_count','desc')->first();
		 //dd($datas);
		  $dataf = Follow::where('id',$user_id)->orderBy('fans_count','desc')->first();
		 $datam = count(Message::where('user_id',$user_id)->get());
		
		$id = session()->get("homeuser")[0]->id;
        //dd($id);die;
		$list = Userinfo::where("user_id",$id)->where("status",1)->first();
        //dump($list);die;

		$info = Message::where('status',1)->orderBy('publish_time','desc')->paginate(8);
        
		$message = [];
		$ccc = [];
		$ddd = [];
		//$acc = [];
		foreach($info as $k=>$v){
			
			$message[$k]['user_id'] = $v['user_id'];
			$message[$k]['content'] = $v['content'];
			$message[$k]['tupian'] = $v['picname'];
			$message[$k]['publish_time'] = $v['publish_time'];
			$message[$k]['message_id'] = $v['message_id'];
			//$praise = Praise::where('user_id',$user_id)->get()->toArray();
			//$dasdasd[$k] = Praise::where('message_id',$praise[$k]['message_id'])->first()->toArray();
			
			
		}
		foreach($message as $k=>$v){
			
			$ddd[$k]= Userinfo::where('user_id',$v['user_id'])->first();
			$lasd[$k]= Comments::where('message_id',$v['message_id'])->orderBy('comments_time','desc')->first();
			$sdasd[$k]= Reply::where('comments_id',$lasd[$k]['comments_id'])->orderBy('reply_time','desc')->first();
			$asda[$k]= Userinfo::where('user_id',$lasd[$k]['user_id'])->first();
			$ccc[$k]['nickname']=$ddd[$k]['nickname'];
			$ccc[$k]['picname']=$ddd[$k]['picname'];
			
		
			$message[$k]['nickname'] = $ccc[$k]['nickname'];
			$message[$k]['touxiang'] = $ccc[$k]['picname'];
			$message[$k]['comments_content'] = $lasd[$k]['comments_content'];
			$message[$k]['mingzi'] = $lasd[$k]['nickname'];
			$message[$k]['comments_time'] = $lasd[$k]['comments_time'];
			$message[$k]['comments_id'] = $lasd[$k]['comments_id'];
			$message[$k]['comments_userid'] = $lasd[$k]['user_id'];
			$message[$k]['touxiangs'] = $asda[$k]['picname'];
			$message[$k]['reply_uname'] = $sdasd[$k]['uname'];
			$message[$k]['reply_cname'] = $sdasd[$k]['cname'];
			$message[$k]['reply_content'] = $sdasd[$k]['reply_content'];
			$message[$k]['reply_time'] = $sdasd[$k]['reply_time'];
			 
			$ddd= Userinfo::where('user_id',$id)->first();
			$message[$k]['zijitouxiang'] = $ddd->picname;
		}		
		
		 

			 
		//echo"<pre>";
		//var_dump($message);die;
		//$bianlian = Redis::hgetall("comment");
		return view("home.indexs.index",["list"=>$list,'info'=>$info,'message'=>$message,'datas'=>$datas,'dataf'=>$dataf,'datam'=>$datam]);
    }
	
	
	function store(Request $request)
    {
		$user_id = session()->get('homeuser')[0]->id;
        //
		 //获取指定的部分数据
        $data = $request->only("content");
		$publish_time = time()+480*60;
		$data['publish_time']=date("Y-m-d H:i:s",$publish_time);
		$data['user_id']=$user_id;	
        $id = Message::insertGetId($data);
        
		
		 $path = [];
		//判断文件是否上传
		if($id){
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
				//$path= (env('DEFAULT').'/'."$fileName");
				$path['picname']= $disk->getDriver()->imagePreviewUrl($fileName,'imageView2/2/w/200/h/200/q/75');   
               //echo$a;die;
				
				//返回地址
			   
			   $admin_id = Message::where("message_id",$id)->update($path);
               //return "图片地址为:".$path;
			   if($admin_id && $id){
				  return redirect('/indexs');
			   }
			
            }
            return '上传失败';
        }
       return redirect('/indexs');
		}else{
			 return redirect('/indexs');
		}
		
    }
	//关注，粉丝
function follow($uid,$sud)
    {
		//var_dump($content);die;
		//$dksjd = Userinfo::where('user_id',$sud)->first()->toArray();
		$dksjd = Follow::where('id',$uid)->orderBy("follow_count","desc")->first();
		
		$dasdk = Follow::where('id',$sud)->orderBy("fans_count","desc")->first();
		//$dksjd = Follow::where('user_id',$uid)->where('message_id',$mid)->orderby("follow_count","desc")->first();
		//$dasdk = Follow::where('user_id',$uid)->where('message_id',$mid)->orderby("fans_count","desc")->first();
		//$data['message_id'] = $mid;
		//dump($mid);die;
		//echo"<pre>";
		//var_dump($dksjd->follow_count);die;
	
	 
		//dd($dataf);die;
		//$data['message'] = $mid;
		$data['suser_id'] = $sud;
		$data['id'] = $uid;
		$follow_count = $dksjd->follow_count+1;
		//echo"<pre>";
		//var_dump($follow_count);die;
		$data['follow_count'] = $follow_count;
		Follow::insertGetId($data);
		//dump($sud);die;
		if(!empty($dasdk)){
		$dadd['id'] = $sud;
		$dadd['user_id'] = $uid;
		$fans_count = $dasdk->fans_count+1;
		$dadd['fans_count'] = $fans_count;
		Follow::insertGetId($dadd);
		}else{
		$dadd['id'] = $sud;
		$dadd['user_id'] = $uid;
		$dadd['fans_count'] = 1;
		Follow::insertGetId($dadd);
		}


	}
	//
	function follows($uid,$sud)
	{

			Follow::where("id",$uid)->where("suser_id",$sud)->delete();
			
		 
			Follow::where("id",$sud)->where("user_id",$uid)->delete();
		  
		  
		
	

	
	}
	

	function praise($mid,$uid)
	{
		$list = Praise::where('user_id',$uid)->where('message_id',$mid)->first();
		//dump($list);die;
		if($list==''){
				$data['message_id'] = $mid;
				$data['user_id'] = $uid;
				$id = Praise::insertGetId($data);	
				
				$info = Message::where('message_id',$mid)->first();
				if($info->praise_count!=null){
					$praise_count = $info->praise_count+1;
					$date['praise_count'] =$info->praise_count;
					$m = Message::where('message_id',$mid)->update($date);
				}else{
					$date['praise_count'] =1;
					$m = Message::where('message_id',$mid)->update($date);
				}
		}elseif($list->praise_count=='1'){
				
				$praise_count = $list->praise_count--;
				$data['praise_count'] =$list->praise_count;
				$d = Praise::where('user_id',$uid)->where('message_id',$mid)->update($data);
				
				$info = Message::where('message_id',$mid)->first();
				if($info->praise_count!=null){
				$praise_count = $info->praise_count--;
				$dddd['praise_count'] =$info->praise_count;
				$m = Message::where('message_id',$mid)->update($dddd);
			}else{
				$date['praise_count'] =0;
				$m = Message::where('message_id',$mid)->update($date);
			}
		}elseif($list->praise_count=='0'){
				$praise_count = $list->praise_count++;
				$data['praise_count'] =$list->praise_count;
				$d = Praise::where('user_id',$uid)->where('message_id',$mid)->update($data);
				
				$info = Message::where('message_id',$mid)->first();
				if($info->praise_count!=null){
				$praise_count = $info->praise_count++;
				$dddd['praise_count'] =$info->praise_count;
				$m = Message::where('message_id',$mid)->update($dddd);
			}else{
				$date['praise_count'] =1;
				$m = Message::where('message_id',$mid)->update($date);
			}
		}
		
	 
		
		//return $data;
	}


		function forward($mid,$sud,$id,$content)
    {
		
		//var_dump($content);die;
		$forward_time = time()+480*60;
		$data['user_id'] = $id;
		$data['message_id'] = $mid;
		$data['su_id'] = $sud;
		$data['forward_time']=date("Y-m-d H:i:s",$forward_time);
		if($content=='null'){
			
		$data['forward_content']='';
		$id = Forward::insertGetId($data);
		}else{
			$data['forward_content']=$content;
			$id = Forward::insertGetId($data);
		}
			 return redirect('/indexs');
	}

	 function search(Request $request)
	{
		 $where = [];
        if ($request->only('nickname')) {
           $nickname = $request->input("nickname");   
           $where['nickname']=$nickname;
        }
        
        $bbb =Userinfo::where("nickname","like",'%'.$nickname.'%')->paginate(4);
       // dd($list);
    	return view('home.search.index',['bbb'=>$bbb,'where'=>$where]);
		
	}


		function comments($mid,$id,$nickname,$content)
		{

			//$ acc = [];
			$comments = Redis::hmset("comment",["message_id"=>$mid,"user_id"=>$id,"nickname"=>$nickname,"content"=>$content]);
			$sjdd = Redis::hgetall("comment");
			$data['message_id'] = $mid;
			$data['user_id'] = $id;
			$data['nickname'] = $nickname;
			$data['comments_content'] = $content;
			$comments_time = time()+480*60;
			$data['comments_time'] = date("Y-m-d H:i:s",$comments_time);
			Comments::insertGetId($data);
			//dd($bianlian);
			echo(":".$sjdd['content']);
			//echo(":".$sjdd['nickname']);
			 //return $sjdd;
		}

		//意见提交
		function opinion($id,$content)
		{

			//$ acc = [];
			$data['opinion_id'] = $id;
			$data['opinion_content'] = $content;
			$opinion_time = time()+480*60;
			$data['opinion_time'] = date("Y-m-d H:i:s",$opinion_time);
			Opinion::insertGetId($data);
			//dd($bianlian);
			//echo(":".$sjdd['opinion']);
			//echo(":".$sjdd['nickname']);
			 //return $sjdd;
		}
		public function pinglun($mid)
		{
			$lasd= Comments::where('message_id',$mid)->orderBy('comments_time','desc')->get()->toArray();
			foreach($lasd as $k=>$v){
				$sddas[$k]= Userinfo::where("user_id",$v['user_id'])->first()->toArray();
				$lasd[$k]['picname'] =$sddas[$k]['picname'];
				
				//$lasd[$k]['huifu'] = Reply::where('comments_id',$v['comments_id'])->get()->toArray();
				//$dd = $lasd[$k]['huifu'];
			}
			//echo"<pre>";
			return($lasd);
		}


}
