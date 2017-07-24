<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Userinfo;
use \App\Model\Opinion;
class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$id =session()->get('homeuser')[0]->id;
		//dd ($id);
		$list = Userinfo::where("user_id",$id)->first();
		//dump($list);
		return view("home.opinion.opinion",['list'=>$list]);
		
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
		$user_id = session()->get('homeuser')[0]->id;
		//dump($user_id);
        //dump($user_id);die;
		 //获取指定的部分数据

       $ps = $request->input('opinion_content');
	   //dump($ps);die;
	   //dump($content);
		$publish_time = time()+480*60;
		//dump($publish_time);
		$data['opinion_time']=date("Y-m-d H:i:s",$publish_time);
		//dump($data['opinion_time']);
		$data['opinion_id']=$user_id;	
		//dump($data['opinion_id']);
		$data['opinion_content']=$ps;
	
		//dump($data['opinion_content']);
		
        $list = Opinion::insertGetId($data);
		//dump($id);
		
		return redirect('/indexs');
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
