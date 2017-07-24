<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Privileges;

class PrivilegesController extends Controller
{
    public function index(Request $request)
	{
   		
        //dd($request);
        //判断并执行搜索和封装搜索条件
        $where = [];
        if ($request->only('title')) {
           $title = $request->input("title");   
           $where['title']=$title;
        }
        
        $list =Privileges::where("title","like",'%'.$title.'%')->paginate(2);
        //dd($list);
    	return view('admin.privileges.index',["list"=>$list,'where'=>$where]);
    }
    
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.privileges.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //表单验证
        $this->validate($request, [
            'title' => 'required|max:10',
        ]);

        //获取指定的部分数据
        $data = $request->only('title','method','url');
        $data['state'] = 1;
        $id = Privileges::insertGetId($data);
        
        if($id>0){
            return redirect('admin/privileges');
        }else{
           return back()->with("err","添加失败!");
        }
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
        $v = Privileges::where("id","=",$id)->first();
        return view("admin.privileges.edit",['v'=>$v]);
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
        $input = $request->only('title','method','url','state');
        $m = Privileges::where("id",$id)->update($input);
        if($m){
            echo "修改用户状态成功!";
            return redirect("admin/privileges");
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
        Privileges::where("id",$id)->delete();

        return redirect('admin/privileges');
    }
}
