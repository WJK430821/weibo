<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
 //    return view('home.index.index');
// });

Route::get('/login',"Home\LoginController@login");            //执行加载登录
Route::get('/register', 'RegisterController@index');          //加载注册页
Route::post('/dologin',"Home\LoginController@doLogin"); 	  //执行登录

Route::post('/register/add', 'RegisterController@store');	  //加载注册方法
Route::get('/register/sendMobileCode', 'RegisterController@sendMobileCode');
Route::post('/register/code', 'RegisterController@code');  
Route::get('/logout',"Home\LoginController@logout");		  //执行登录退出



//网站后台路由配置
Route::get('/admin/login',"Admin\LoginController@login"); //加载后台登录界面
Route::post('/admin/dologin',"Admin\LoginController@doLogin"); //执行后台登录
Route::get('/admin/logout',"Admin\LoginController@logout"); //执行退出


Route::group(['prefix' => 'admin','middleware'=>'admin'], function () {
    Route::get('/',"Admin\IndexController@index"); //后台首页
    Route::resource('userinfo', 'Admin\UserinfoController'); //用户详情信息表
    //Route::get('/userinfo/{id}','Admin\UserinfoController@show');
    Route::resource('register', 'Admin\RegisterController'); //加载注册表
    Route::resource('follow', 'Admin\FollowController'); //粉丝表
    Route::resource('message', 'Admin\MessageController'); //微博内容表
    Route::resource('forward', 'Admin\ForwardController'); //转发微博表
    Route::resource('comments', 'Admin\CommentsController'); //评论表
    Route::resource('department', 'Admin\DepartmentController'); //部门表
	Route::resource('content', 'Admin\ContentController'); //内容状态表
	Route::resource('url', 'Admin\UrlController'); //友情链接
	Route::resource('admin', 'Admin\AdminController'); //管理员信息
	Route::resource('privileges', 'Admin\PrivilegesController'); //管理员权限

	Route::resource('/opinion', 'Admin\OpinionController'); //意见反馈

    Route::get('/admin/loadRole/{admin_id}','Admin\AdminController@loadRole');
    Route::post('/saveRole','Admin\AdminController@saveRole');
    Route::get('/admin/loadNode/{admin_id}','Admin\DepartmentController@loadNode');
    Route::post('/saveNode','Admin\DepartmentController@saveNode');
    //Route::post('/admin/rolelist','Admin\AdminController@saveRole');
    //Route::get('admin/rolelist/{admin_id}/{admin_name}','Admin\AdminController@loadRole');

	

 
});





Route::get('/',"Home\IndexController@index"); //前台首页


Route::group(['prefix' => '/','middleware'=>'home'], function () {
Route::get('/indexs',"Home\IndexsController@index");		  //执行加载登录后首页
Route::get('/indexs/pinglun/{mid}',"Home\IndexsController@pinglun");		  //执行加载登录后首页
Route::get('/personal',"Home\personalController@index");      //加载个人主页
Route::get('/setting',"Home\SettingController@index");		  //执行加载设置视图
Route::resource('/password',"Home\PasswordController");	  //执行加载修改密码视图
Route::get('/avatar',"Home\AvatarController@index");		  //执行加载修改头像视图
Route::post('/indexs/add',"Home\IndexsController@store");
Route::post('/indexs/forward/{mid}/{uid}/{id}',"Home\IndexsController@indexs"); //转发
Route::post('/indexs/forward/{mid}/{uid}/{id}/{content}',"Home\IndexsController@forward"); //转发

Route::get('/indexs/follow/{uid}/{sud}',"Home\IndexsController@follow"); //关注
Route::get('/indexs/follows/{uid}/{sud}',"Home\IndexsController@follows"); //关注
Route::get('/indexs/praise/{mid}/{uid}',"Home\IndexsController@praise"); //点赞
Route::get('/indexs/praises/{mid}/{uid}',"Home\IndexsController@praises"); //点赞
Route::post('/indexs/dd',"Home\IndexsController@dd"); //点赞
Route::get('/indexs/comments/{mid}/{id}/{nickname}/{content}',"Home\IndexsController@comments");
Route::get('/opinion',"Home\OpinionController@index");//意见
Route::post('/opinion/{list}',"Home\OpinionController@store");//添加到数据库

Route::get('/comments/del/{id}',"Home\CommentsController@del");
Route::get('/comments/reply/{id}/{cid}/{uname}/{cname}/{content}',"Home\CommentsController@reply");
Route::get('/comments',"Home\CommentsController@index");
Route::get('/message/del/{id}',"Home\MessageController@del");

//Route::get('/indexs/content',"Home\IndexsController@content");
Route::resource('/account',"Home\AccountController");		  //执行加载账号设置视图

Route::get('/follow',"Home\FollowController@index");      //加载关注主页
Route::get('/fans',"Home\FansController@index");      //加载粉丝主页
Route::get('/search',"Home\IndexsController@search");      //加载搜索页
Route::get('/search/follow/{uid}/{sud}',"Home\IndexsController@follow"); //关注
Route::get('/search/follows/{uid}/{sud}',"Home\IndexsController@follows"); //关注

});
Route::post('/avatar/upload',"Home\AvatarController@uploadFile");	
