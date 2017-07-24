<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Model\Comments;
use App\Model\Reply;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$nickname = session()->get('homeuser')[0]->nickname;
		$sdasd= Reply::where('cname',$nickname)->orderBy('reply_time','desc')->get()->toArray();
		
        return view('home.comments.index',['sdasd'=>$sdasd]);
    }

	public function del($id)
	{
		Comments::where("comments_id",$id)->delete();
	    Reply::where("comments_id",$id)->delete();
		 
	}
	public function reply($id,$cid,$uname,$cname,$content){
		 $data['user_id'] = $id;
		 $data['comments_id'] = $cid;
		 $data['uname'] = $uname;
		 $data['cname'] = $cname;
		 $reply_time = time()+480*60;
		 $data['reply_time'] = date("Y-m-d H:i:s",$reply_time);
		 $data['reply_content'] = $content;
		 $id = Reply::insertGetId($data);
		 if($id>0){
			 return "OK";
		 }else{
			 return false;
		 }
	}

}
