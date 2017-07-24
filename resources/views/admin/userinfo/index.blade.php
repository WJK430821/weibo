@extends('admin.base')
@section('content')
<link href="{{asset('myadmin/assets/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">

<div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">用户管理</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
							 <form action="/admin/userinfo" method="get">
                                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                            <input type="text" class="am-form-field " name="nickname" placeholder="用户昵称">
                                            <span class="am-input-group-btn">
                                                <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit"></button>
                                            </span>
                                      </div>
                                    </div>
                                </form>
							 
                            <div class="widget-body  widget-body-lg am-fr">

                                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th>用户昵称</th>
                                            <th>手机</th>
                                            <th>年龄</th>
                                            <th>性别</th>
                                            <th>用户姓名</th>
                                            <th>用户状态</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($list as $v)
                                        <tr class="gradeX">
                                            <td>{{$v->nickname}}</td>
                                            <td>{{$v->phone}}</td>
                                            <td>{{$v->age}}</td>
                                            <td>@if ($v->sex=="w")女 @else 男 @endif</td>
                                            <td>{{$v->name}}</td>
                                            <td>@if ($v->status=="0")禁用 @else 启用 @endif</td>
                                            <td>
														<div class="tpl-table-black-operation">
                                                    <a href="/admin/userinfo/{{ $v->id }}">
                                                        <i class="am-icon-pencil"></i> 详情
                                                    </a>
                                                </div>
                                                <div class="tpl-table-black-operation">
                                                    <a href="/admin/userinfo/{{ $v->id }}/edit">
                                                        <i class="am-icon-pencil"></i> 编辑
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                        <!-- more data -->
                                    </tbody>
                                </table>
								 {{ $list->appends($where)->links() }} 
                            </div>
                        </div>
                    </div>




                </div>
					    @endsection
		