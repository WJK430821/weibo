<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Message;

class MessageController extends Controller
{
    public function index(Request $request)
	{
   		 //判断并执行搜索和封装搜索条件
        $where = [];
        if ($request->only('content')) {
           $content = $request->input("content");   
           $where['content']=$content;
		   
        }
        
        $list =Message::where("content","like",'%'.$content.'%')->paginate(2);
        //dd($list);
    	return view('admin.message.index',["list"=>$list,'where'=>$where]);
		
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
    public function edit($message_id)
    {
		$vo = Message::where("message_id","=",$message_id)->first();
        
         return view("admin.message.edit",['vo'=>$vo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $message_id)
    {
         $input = $request->only("status");
		$m = Message::where("message_id",$message_id)->update($input);
        if($m){
            echo "修改用户状态成功!";
            return redirect("admin/message");
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
