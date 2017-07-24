<?php

namespace App\Http\Controllers\Admin;

use  App\Model\Userinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //封装搜索条件
		
       $where = [];
        if ($request->only('nickname')) {
           $nickname = $request->input("nickname");   
           $where['nickname']=$nickname;
        }
        
        $list =Userinfo::where("nickname","like",'%'.$nickname.'%')->paginate(2);
       // dd($list);
    	return view('admin.userinfo.index',["list"=>$list,'where'=>$where]);
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
        $v = Userinfo::where("id","=",$id)->first();
        return view("admin.userinfo.edit",['v'=>$v]);
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
        $input = $request->only(['status']);
        $m = Userinfo::where("id",$id)->update($input);
        if($m){
            echo "修改用户状态成功!";
            return redirect("admin/userinfo");
        }else{
            echo "修改用户状态失败!";
        }
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
