<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Comments;

class CommentsController extends Controller
{
    public function index(Request $request)
	{
   		// $add = Comments::all();
         $where = [];
        if ($request->only('user_id')) {
           $user_id = $request->input("user_id");   
           $where['user_id']=$user_id;
        }
        $list =Comments::where("user_id","like",'%'.$user_id.'%')->paginate(2);
		//dd($list);
    	return view("admin.comments.index",["list"=>$list,'where'=>$where]);
    }
    
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //返回add界面
		return view("admin.comments.add");
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
        $data = $request->only('message_id','user_id','comments_content','comments_time');
        $id = comments::insertGetId($data);
        
        if($id>0){
            return redirect('admin/comments');
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
    public function show($message_id)
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
		//dd($id);
		$v = Comments::where("comments_id",$id)->first();
		//dd($v->status);
        return view("admin.comments.edit",['v'=>$v]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	 
	 
	 
   /*  public function update(Request $request, $id)
    {
        $input = $request->only("status");
		$m = Comments::where("comments_id",$id)->update($input);
        if($m){
            echo "修改用户状态成功!";
            return redirect("admin/comments");
        }else{
            echo "修改用户状态失败!";
        }
    } */
	
	 public function update(Request $request,$comments_id)
    {
        
        //获取要修改的数据
        $data = $request->only('status');
        //执行修改
        $sid = Comments::where("comments_id",$comments_id)->update($data);
        //判断
        if($sid){
            return redirect("admin/comments");
        }else{
             echo "修改用户状态失败!";
        }
        
        //return view("admin.stu.info",['info'=>$info]);
        //return redirect("admin/comments")->with("err",$info);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($comments_id)
    {
		Comments::where("comments_id",$comments_id)->delete();


        return redirect('admin/comments');
    }
}
