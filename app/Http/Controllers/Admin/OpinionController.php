<?php

namespace App\Http\Controllers\Admin;

use  App\Model\Opinion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //封装搜索条件
		
      //$where = [];
        //if ($request->only('opinion_id')) {
          $sscontent = $request->input("opinion_content");   
          // $where['nickname']=$nickname;
       // }
         $where = [];
        if ($request->only('id')) {
           $content = $request->input("opinion_content");   
           $where['opinion_content']=$sscontent;
        }
        $list =Opinion::where("opinion_content","like",'%'.$content.'%')->paginate(2);
       // dd($list);
    	return view('admin.opinion.index',["list"=>$list,"where"=>$where]);
    	//return view('admin.opinion.index');
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
        $v = Userinfo::where("id","=",$id)->first();
        return view("admin.userinfo.show",['v'=>$v]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $v = Userinfo::where("id","=",$id)->first();
        //return view("admin.userinfo.edit",['v'=>$v]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Opinion::where("id",$id)->delete();


        return redirect('admin/opinion');
    }
}
