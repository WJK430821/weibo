<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Department;
use \App\Model\Privileges;
use \App\Model\Department_Privileges;

class DepartmentController extends Controller
{
     public function index(Request $request)
	{
   		//判断并执行搜索和封装搜索条件
        $where = [];
        if ($request->only('title')) {
           $title = $request->input("title");   
           $where['title']=$title;
        }
        
        $list =department::where("title","like",'%'.$title.'%')->paginate(2);
    	return view('admin.department.index',["list"=>$list,'where'=>$where]);
    }
    
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view ("admin.department.add");
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
		$data = $request->only("title");
		//return $data;
        $data['status'] = 1;
		$id = Department::insertGetId($data);
		
		if($id>0){
            return redirect('admin/department');
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
        $v = Department::where("id","=",$id)->first();
        return view("admin.department.edit",['v'=>$v]);
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
        $input = $request->only('title','status');

        //dd($input);
        $m = Department::where("id",$id)->update($input);
        if($m){
            echo "修改权限名称成功!";
            return redirect("admin/department");
        }else{
            echo "修改权限名称失败!";
            return redirect("admin/department");
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
		Department::where("id",$id)->delete();

        return redirect('admin/department');
    }

    //为当前角色准备分配节点信息
    public function loadNode($did=0)
    {
        //获取所有节点信息
        $nodelist = Privileges::get();
        //dd($nodelist);
        //获取当前角色的节点id
        $pids = Department_Privileges::where("did",$did)->pluck("pid")->toArray();
        //加载模板
        return view("admin.Department.nodelist",["did"=>$did,"nodelist"=>$nodelist,"pids"=>$pids]);
    }
    
    public function saveNode(Request $request){
        //return 11;die;
        $did = $request->input("did");
        //清除数据
        Department_Privileges::where("did",$did)->delete();
        
        $pids = $request->input("pids");
        if(!empty($pids)){
            //处理添加数据
            $data = [];
            foreach($pids as $v){
                $data[] = ["did"=>$did,"pid"=>$v];
            }
            //添加数据
            Department_Privileges::insert($data);
        }
        return redirect('admin/department');
    }
}
