@extends('admin.base')
@section('content')
<link href="{{asset('myadmin/assets/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
<div class="row">

    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">意见表</div>
                <div class="widget-function am-fr">
                    <a href="javascript:;" class="am-icon-cog"></a>
                </div>
            </div>
            <div class="widget-body  widget-body-lg am-fr">
	 <form action="/admin/opinion" method="get">
                                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                            <input type="text" class="am-form-field " name="opinion_content" placeholder="内容">
                                            <span class="am-input-group-btn">
                                                <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit"></button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                    <thead>
                        <tr>
                            <th>发布意见者ID</th>
                            <th>意见内容</th>
                            <th>发布时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $vs)
                        <tr class="gradeX">
							<td>{{$vs->opinion_id}}</td>
							<td>{{$vs->opinion_content}}</td>
                            <td>{{$vs->opinion_time}}</td>
                            <td>
								<div class="tpl-table-black-operation">
									<a href="/admin/opinion/{{ $vs->opinion_id }}/edit">
										<i class="am-icon-pencil"></i>编辑</a>
								<!--<button onclick="doDel({{$vs->comments_id}})"><i class="am-icon-trash"></i>删除</button> -->
								 <a href="javascript:doDel({{$vs->id}})" class="tpl-table-black-operation-del">
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
            function doDel(id){
                if(confirm('确定要删除吗？')){
                    $("#mydeleteform").attr("action","/admin/opinion/"+id).submit(); 
                }
            }
	</script>
    @endsection
			</div>
        </div>
    </div>
</div>

		