<?php

namespace App\Http\Controllers\Home;
use  App\Model\Userinfo;
use  App\Model\Message;
use  App\Model\Url;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
		$url =Url::orderBy('id','desc')->take(3)->get();
		//dump($url);die;
		$list = Userinfo::orderBy('register_time','desc')->take(4)->get();
		$info = Message::where('status',1)->orderBy('publish_time','desc')->take(4)->get();
     
		//  dump($info);die;
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
			
		
		
		//$id = session()->get("homeuser")[0]->id;		
		
		//$message[] = Userinfo::where("user_id",$aa)->get();
		//$acc=Message::where("user_id",$aa)->first();
		//$message[$k]->content=$acc->content;
		//$message[$k]->publish_time=$acc->publish_time;
		
		}
		foreach($message as $k=>$v){
			
			$ddd[$k]= Userinfo::where('user_id',$v['user_id'])->first()->toArray();
			$ccc[$k]['nickname']=$ddd[$k]['nickname'];
			$ccc[$k]['picname']=$ddd[$k]['picname'];
			
			$message[$k]['nickname'] = $ccc[$k]['nickname'];
			$message[$k]['touxiang'] = $ccc[$k]['picname'];
		
		}
		//echo"<pre>";
		//var_dump($message);
		return view('home.index.index',['list'=>$list,'message'=>$message,'url'=>$url]);
			
			
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
