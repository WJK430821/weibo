<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Follow;
use \App\Model\Message;
use \App\Model\Comments;
use \App\Model\Userinfo;


class MessageController extends Controller
{
    public function del($id)
	{
		 $m = Message::where("message_id",$id)->delete();
		 $d = Comments::where("message_id",$id)->delete();
		 if($m){
			  return redirect('/personal');
		 }else{
			 return "删除失败!";
		 }
	}
}