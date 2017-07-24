<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Url;

class UrlController extends Controller
{
    public function index(Request $request)
	{
         //判断并执行搜索和封装搜索条件
   		 $where = [];
            if ($request->only('url')) {
             $url = $request->input("url");   
             $where['url']=$url;
        }
        
        $list =Url::where("url","like",'%'.$url.'%')->paginate(5);
    	return view('admin.url.index',["list"=>$list,'where'=>$where]);
    }
    
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		  return view("admin.url.create");
		
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
		 //获取要添加的数据
        $data = $request->only('url','urlname');
        //执行添加
        $id = \DB::table("url",'urlname')->insertGetId($data);
	
		 $path = [];
		//判断文件是否上传
        if($request->hasFile('picname')){
			//获取文件
            $file = $request->file('picname');
			//初始化
            $disk = \Storage::disk('qiniu');
			//生成文件名
            $fileName = md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension();
			//开始上传
            $bool = $disk->put($fileName,file_get_contents($file->getRealPath()));
            //判断是否成功
			if($bool){
                $path['url_picname']= (env('DEFAULT').'/'."$fileName");
				
				//返回地址
			   
			    $dd = Url::where("id",$id)->update($path);
               //return "图片地址为:".$path;
			   if($dd){
				   //return '添加成功';
				   return redirect('/admin/url');
			   }
			
            }
            return '上传失败';
        }
        return '没有文件';
        
     
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
		 $v = Url::where("id","=",$id)->first();
        return view("admin.url.edit",['v'=>$v]);
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
		 $input = $request->only("url");
        $m = Url::where("id",$id)->update($input);
        if($m){
            echo "修改用户状态成功!";
            return redirect("admin/url");
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
        Url::where("id",$id)->delete();

        return redirect('admin/url');
    }
}