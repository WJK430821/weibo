<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\Model\Admin;
use \App\Model\Department;
use \App\Model\Admin_Department;

class AdminController extends Controller
{
    public function index(Request $request)
	{
   		 //判断并执行搜索和封装搜索条件
        $where = [];
        if ($request->only('admin_name')) {
           $admin_name = $request->input("admin_name");   
           $where['admin_name']=$admin_name;
        }
        
        $list =Admin::where("admin_name","like",'%'.$admin_name.'%')->paginate(2);
    	return view('admin.admin.index',["list"=>$list,'where'=>$where]);
    }
    
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.admin.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        //获取指定的部分数据
        $data = $request->only("admin_name","admin_password","admin_phone");
        $data['admin_password'] = md5($data['admin_password']);
		$time = time()+480*60;
        $data['admin_time'] = date("Y-m-d H:i:s",$time);
        $admin_id = Admin::insertGetId($data);
        
         if($admin_id>0){
            //ssssecho "添加成功";
            return redirect('admin/admin');
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
    public function edit($admin_id)
    {
        //
        $vo = Admin::where("admin_id","=",$admin_id)->first();
        return view("admin.admin.edit",['vo'=>$vo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $admin_id)
    {
        //
        $input = $request->only("admin_name","admin_phone");
        $m = Admin::where("admin_id",$admin_id)->update($input);
        if($m){
            echo "修改用户状态成功!";
            return redirect("admin/admin");
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
    public function destroy($admin_id)
    {
        //
        Admin::where("admin_id",$admin_id)->delete();

        return redirect('admin/admin');
    }

    //为当前用户准备分配角色信息
    public function loadRole($admin_id=0)
    {
        //获取所有角色信息
        $rolelist = Department::get();
        //dd($admin_id);
        // $role = [];
        // foreach ($rolelist as $v) {
        //     //dd($v['id']);
        //     //dd($v->id);
        //     //$role[$k]['id'] = $v['id']; 
        // }
        // $department = [];
        // dd($role->id);
        //获取当前用户的角色id
        $dids = \DB::table("admin_department") ->where("admin_id",$admin_id)->pluck("did")->toArray();
        //$list = array_intersect($rolelist,$dids);
        // foreach ($dids as $k => $v) {
        //     $rolelist[$k]->chekced = ;
        //     //dd($v);
        // }
        //dd($dids);
        //加载模板
        return view("admin.admin.rolelist",["admin_id"=>$admin_id,"rolelist"=>$rolelist,"dids"=>$dids]);
    }

    public function saveRole(Request $request){
        //return 111;
         //dd($request);
        $admin_id = $request->input("admin_id");
        //清除数据
        Admin_Department::where("admin_id",$admin_id)->delete();
        
        $dids = $request->input("dids");
        if(!empty($dids)){
            //处理添加数据
            $data = [];
            foreach($dids as $v){
                $data[] = ["admin_id"=>$admin_id,"did"=>$v];
            }
            //添加数据
            Admin_Department::insert($data);
        }
        return redirect('admin/admin');
    }
}
