<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Follow;
use \App\Model\Message;
use \App\Model\Userinfo;

class FansController extends Controller
{	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //统计个人粉丝，关注，所发微博数量
        $user_id = session()->get('homeuser')[0]->id;
        $datas = Follow::where('id',$user_id)->orderBy('follow_count','desc')->first();
        $dataf = Follow::where('id',$user_id)->orderBy('fans_count','desc')->first();
        $datam = count(Message::where('user_id',$user_id)->get());
        $userss = Userinfo::where('user_id',$user_id)->first();

        $follow = Follow::where('id',$user_id)->paginate(2);  
        //dd($follow);
        $list = [];
        $user = [];
        $users = [];
        //dd($follow);
        
            foreach ($follow as $k=>$v){
                if(!empty($v->user_id)){
                    $list[$k]['user_id'] = $v['user_id'];
                }
            }

        foreach ($list as $k=>$v){
             //dd($list[$k][$v]);
            $users[$k] = Userinfo::where('user_id',$v['user_id'])->first()->toArray();
            //dd($users);
            $user[$k]['picname'] = $users[$k]['picname'];
            $user[$k]['nickname'] = $users[$k]['nickname'];
            $user[$k]['address'] = $users[$k]['address'];
            $user[$k]['signature'] = $users[$k]['signature'];
        }
 //dd($users);

		return view("home.fans.fans",['datas'=>$datas,'follow'=>$follow,'dataf'=>$dataf,'datam'=>$datam,'userss'=>$userss,'users'=>$users]);
	}

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
