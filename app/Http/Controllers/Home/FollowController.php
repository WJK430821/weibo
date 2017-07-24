<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Follow;
use \App\Model\Message;
use \App\Model\Userinfo;


class FollowController extends Controller
{
    public function index(Request $request)
	{
        //统计个人粉丝，关注，所发微博数量
        $user_id = session()->get('homeuser')[0]->id;
		$add= Userinfo::where("user_id",$user_id)->first();//名字
		
        $datas = Follow::where('id',$user_id)->orderBy('follow_count','desc')->first();
        $dataf = Follow::where('id',$user_id)->orderBy('fans_count','desc')->first();
      
    	$datam = count(Message::where('user_id',$user_id)->get());
	
		
        //遍历关注人信息
        $follow = Follow::where('id',$user_id)->paginate(3);
        //dd($follow);
        $list = [];
        $user = [];
        $users = [];
        
        foreach ($follow as $k=>$v){
            //dd($v);
            if(!empty($v->suser_id)){

                    $list[$k]['suser_id'] = $v['suser_id'];
                }
        }
        //dd($list);
        foreach ($list as $k=>$v){
            $users[$k] = Userinfo::where('user_id',$v['suser_id'])->first()->toArray();
            $user[$k]['picname'] = $users[$k]['picname'];
            $user[$k]['nickname'] = $users[$k]['nickname'];
            $user[$k]['address'] = $users[$k]['address'];
            $user[$k]['signature'] = $users[$k]['signature'];
        }

        //dd($users);
   		//返回视图,分配数据
		return view("home.follow.follow",['datas'=>$datas,'dataf'=>$dataf,'follow'=>$follow,'datam'=>$datam,'users'=>$users,'add'=>$add]);
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
       
    }
}