@extends('admin/admin')

@section('subTitle') 需求管理  @stop

{{-- Content --}}
@section('content')



<div class="page-content">
	<h3 class="header smaller lighter blue">需求列表 </h3>

	<div class="col-sm-12">
    <form class="form-horizontal" role="form" method="get" id="search-form" action="{{ url('/admin/demand/search') }}">
	  <?php   $table = App\Models\Table::where('cn', '需求')->first(); ?>

      @include('admin.common.search_form_element')	  

	</form>
    </div>
    
	<div class="row">
		<div class="col-xs-12">
		
		<a href="{{ url('/admin/demand/add') }}" class="btn btn-xs btn-info pull-right"  tabindex="4">
				<i class="icon-plus bigger-160">&nbsp;新增</i>
		</a>
		
    			<div class="table-responsive">
    				<table id="main-table" class="table table-striped table-bordered table-hover">
    					<thead>
    						<tr>
							<th class="center"><label> <input type="checkbox"  class="ace" />
									<span class="lbl"></span>
							</label></th>
    							<th>需求编号</th> 
<th>招聘公司</th> 
<th>招聘用户</th> 
<th>发布时间</th> 
<th>招聘周期</th> 
<th>截止时间</th> 
<th>需求人数</th> 
<th>需求类型标签1</th> 
<th>需求类型标签2</th> 
<th>需求类型参数1</th> 
<th>需求类型参数2</th> 
<th>岗位名称</th> 
<th>工作地点</th> 
<th>所属部门</th> 
<th>汇报对象</th> 
<th>下属人数</th> 
<th>税前年薪</th> 
<th>税前月薪</th> 
						
    
    							<th>
    								<i class="icon-time bigger-110 hidden-480"></i>
    								创建时间
    							</th>
    							<th>
    								<i class="icon-time bigger-110 hidden-480"></i>
    								修改时间
    							</th>
    
    							<th>刪除</th>
    						</tr>
    					</thead>
               <?php $constant = App\Models\Constant::getInstance(); ?>    
    					<tbody>
    		@foreach ($demand->all() as $v)
    						<tr>
    						<td class="center">
    							<label> 
    							        <input type="checkbox" name="id_checkbox[]" class="ace" value="{{ $v->id }}"/>
    									<span class="lbl"></span>
    							</label>
							</td>
    	                        <td><a href='{{ url("/admin/demand/edit/{$v->id}") }}'>{{ $v->id }}  </a></td>

<td> {{$v-> recruit_corporation }} </td> 
<td> {{$v-> recruit_user }} </td> 
<td> {{$v-> publish_time }} </td> 
<td> {{$v-> recruit_period }} </td> 
<td> {{$v-> end_time }} </td> 
<td> {{$v-> demand_person_numbers }} </td> 
<td> {{$v-> demand_type_label_1 }} </td> 
<td> {{$v-> demand_type_label_2 }} </td> 
<td> {{$v-> demand_type_parameter_1 }} </td> 
<td> {{$v-> demand_type_parameter_2 }} </td> 
<td> {{$v-> post_name }} </td> 
<td> {{$v-> work_location }} </td> 
<td> {{$v-> attach_department }} </td> 
<td> {{$v-> report_object }} </td> 
<td> {{$v-> subordinate_person_numbers }} </td> 
<td> {{$v-> pretax_annual_salary }} </td> 
<td> {{$v-> pretax_salary }} </td> 

    							
    							
    							<td>{{ $v->created_at }}</td>
    
    							<td class="hidden-480">
    								{{ $v->updated_at }}
    							</td>
    							
    							<td> 
    							<form action='{{ url("/admin/demand/delete/{$v->id}") }}' method="post">
    							 <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    							 &nbsp;&nbsp;
    									<button class="btn btn-xs btn-danger" onclick="return deleleConfirm();">																	
    										<i class="icon-trash bigger-120">&nbsp;刪除</i>
    									</button>
    							</form>
    							</td>
    						</tr>
            @endforeach
    					</tbody>												
    				</table> 
    				<div> {!! $demand->render() !!} <ul class="pagination"><li><span> <strong>{{$demand->total()==0?0:$demand->toArray()['from']}} - {{$demand->toArray()['to']}} /{{$demand->total()}} </strong></span></li> </ul></div>
    			</div>
    		</div>
    	</div><!-- /.row -->
    </div><!-- /.page-content -->
@endsection		



@section('scripts')

<script src="/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="/assets/js/chosen.jquery.min.js"></script>
<script src="/assets/js/fuelux/fuelux.spinner.min.js"></script>
<script src="/assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="/assets/js/date-time/bootstrap-timepicker.min.js"></script>
<script src="/assets/js/date-time/moment.min.js"></script>
<script src="/assets/js/date-time/daterangepicker.min.js"></script>
<script src="/assets/js/bootstrap-colorpicker.min.js"></script>
<script src="/assets/js/jquery.knob.min.js"></script>
<script src="/assets/js/jquery.autosize.min.js"></script>
<script src="/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="/assets/js/jquery.maskedinput.min.js"></script>
<script src="/assets/js/bootstrap-tag.min.js"></script>
<script src="/assets/js/jquery.form.js"></script>


<!-- inline scripts related to this page -->

<script type="text/javascript">
			jQuery(function($) {

				$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				/////////
				$('#upload-modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose: '拖拽文件到这里或者点击选择文件', //'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				});
				

				$("#main-table").find('tr > td:first-child input:checkbox').change(function(){
					var ids = $("input[name='id_checkbox[]']:checked").map(function(){return this.value; }).get().join(",");
					$("#ids").val(ids);
				});

				$('#main-table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).change();
						$(this).closest('tr').toggleClass('selected');
					});
						
				});


				
			});
</script>
@endsection