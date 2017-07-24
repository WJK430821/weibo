@extends('admin.base')
@section('content')
<link href="{{asset('myadmin/assets/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
<div class="row">

    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">评论表</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
			<div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
								<div class="am-form-group">
									<div class="am-btn-toolbar">
										<div class="am-btn-group am-btn-group-xs">
											<a href="/admin/comments/create">
											<button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
											</a>
										</div>
									</div>
								</div>
							</div>

			
            <div class="widget-body  widget-body-lg am-fr">

                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                    <thead>
                        <tr>
                            <th>被评论者ID</th>
                            <th>评论者ID</th>
                            <th>评论内容ID</th>
                            <th>评论内容</th>
                            <th>评论时间</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $vs)
                        <tr class="gradeX">
							<td>{{$vs->comments_id}}</td>
							<td>{{$vs->message_id}}</td>
                            <td>{{$vs->user_id}}</td>
                            <td>{{$vs->comments_content}}</td>
                            <td>{{$vs->comments_time}}</td>
                           <td>@if ($vs->status=="0")禁用 @else 启用 @endif</td>
                            <td>
								<div class="tpl-table-black-operation">
									<a href="/admin/comments/{{ $vs->comments_id }}/edit">
										<i class="am-icon-pencil"></i>编辑</a>
								<!--<button onclick="doDel({{$vs->comments_id}})"><i class="am-icon-trash"></i>删除</button> -->
								 <a href="javascript:doDel({{$vs->comments_id}})" class="tpl-table-black-operation-del">
                                                        <i class="am-icon-trash"></i> 删除
                                                    </a>
								</div>
						</tr>
                        @endforeach
                        <!-- more data -->
                    </tbody>
                </table>
				
				 {{ $list->appends($where)->links() }}
				
		<form action="" style="display:none;" id="mydeleteform" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="DELETE">
		</form>
	@section("myscript")
	@endsection
	<script type="text/javascript">
            function doDel(comments_id){
                if(confirm('确定要删除吗？')){
                    $("#mydeleteform").attr("action","/admin/comments/"+comments_id).submit(); 
                }
            }
	</script>
    @endsection
			</div>
        </div>
    </div>
</div>

		