@extends('admin.base')
@section('content')
<link href="{{asset('myadmin/assets/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
<div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">角色管理</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
							
                            <div class="widget-body  widget-body-lg am-fr">

							
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button  onclick="window.location='/admin/department/create'" type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
							 <form action="/admin/department" method="get">
                                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                            <input type="text" class="am-form-field " name="title" placeholder="权限名">
                                            <span class="am-input-group-btn">
                                                <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit"></button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th>ID号</th>
                                            <th>部门名</th>
                                            <th>当前状态</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($list as $v)
                                        <tr class="gradeX">
                                            <td>{{$v->id}}</td>
                                            <td>{{$v->title}}</td>
                                            <td>@if ($v->status=="0")禁用 @else 启用 @endif</td>
                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="/admin/department/{{ $v->id }}/edit">
                                                        <i class="am-icon-pencil"></i> 编辑
                                                    </a>
                                                    <!-- <a href="javascript:doDel({{ $v->id }});" class="tpl-table-black-operation-del">
                                                        <i class="am-icon-trash"></i> 删除
                                                    </a> -->
                                                    <a href="/admin/admin/loadNode/{{ $v->id }}">
                                                        <i class="am-icon-pencil"></i> 分配节点
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
				       <form style="display:none;" action="" name="myform" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
					    
							               <script>
            function doDel(id){
				if(id){confirm("是否删除信息？")
                document.myform.action = "/admin/department/"+id;
                document.myform.submit();
				}
            }
          </script>
						
		