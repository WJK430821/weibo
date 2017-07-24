<?php

namespace App\Http\Controllers\Home;
use App\Model\Userinfo;
use App\Model\Follow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
      public function index(Request $request)
	{
		
				 $where = [];
        if ($request->only('nickname')) {
           $nickname = $request->input("nickname");   
           $where['nickname']=$nickname;
        }
        
        $bbb =Userinfo::where("nickname","like",'%'.$nickname.'%')->paginate(4);

		return view('home.search.index',['bbb'=>$bbb]);
	}
    
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
}
