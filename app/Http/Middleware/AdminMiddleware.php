<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //判断会员是否没有登录
        if(!$request->session()->has('adminuser')){
            return redirect('admin/login');
        }
        
        return $next($request);//继续往后走
    }
}
//namespace App\Http\Middleware;

//use Closure;

///class AdminMiddleware
//{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   // public function handle($request, Closure $next)
    //{
        //判断会员是否没有登录
       // if(!$request->session()->has('adminuser')){
          //  return redirect('admin/login');
       // }
   // }

        //return $next($request);//继续往后走
        //dd(session("adminuser"));
       //  判断是否是超级用户

        // if(session("adminuser")->admin_id==1){
        //     return $next($request);
        // }
      //  判断权限   
       //dd(session("nodelist"));
        //$nodelist = session("nodelist");
       // $res = session('res');
       // dd($nodelist);//dd($nodelist);
       //dd($res);
        // $n = 0;
        // foreach($res[0] as $k => $v){
        //     $n++;
        //     //dd($res[0][1]);
        //     if($request->is($v->url) && $request->isMethod($v->method)){
        //         return $next($request);
        //     }elseif($n != count($res[0])){
        //         continue;
        //     }else{
        //         return redirect("admin");
        //     }
        //}

        




        /*
        foreach($nodelist as $k=>$v){
            //判断权限
            //dd($request);
            //dd($v);
            foreach ($v as $key => $value) {
                foreach($v as $key2 => $value2){
                    if($value['url']==$value2['url'] && $value['method']==$value2['method']){
                        return $next($request);
                    }
                }





              // if($request->is($value['url']) && $request->isMethod($value['method'])){

              //       //dd($request->is($value['url']) && $request->isMethod($value['method']));
              //       //dd($request->is($value['url']));
              //       //dd([$value['url'],$value['method']]);
              //       //dd($n);
              //       return $next($request);
              //   }else{
              //       return redirect("admin");
              //   }
            }
                
        }

        //return back()->with("err","抱歉你没有此操作权限!");
        */

        
    //}
