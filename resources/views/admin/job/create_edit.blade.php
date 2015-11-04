@extends('admin/admin') 

@section('subTitle') 作业管理  @stop
@section('content') 



<div class="page-content"> 	<div class="row">
		<div class="col-xs-12">
		<h3 class="header smaller lighter blue"> {{ $job ? '编辑' : '新建' }}作业 </h3>
			<form class="form-horizontal" role="form" method="post"  action="{{ url('/admin/job/' . ($job ? 'edit/'.$job->id : 'add')) }}">
			    <input type="hidden" name="_token" value="{{ csrf_token() }}">
				
    	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="job_id"> 作业id </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="job_id" name="job_id" placeholder="作业id" 
							class="col-xs-10 col-sm-5" value="{{ old('job_id', $job  ? $job-> job_id : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="task_id"> 任务id </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="task_id" name="task_id" placeholder="任务id" 
							class="col-xs-10 col-sm-5" value="{{ old('task_id', $job  ? $job-> task_id : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="status"> 状态 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="status" name="status" placeholder="状态" 
							class="col-xs-10 col-sm-5" value="{{ old('status', $job  ? $job-> status : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="count"> 计数 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="count" name="count" placeholder="计数" min="0" step="1"
							class="col-xs-10 col-sm-5" value="{{ old('count', $job  ? $job-> count : '') }}"/>  
					</div> 				
		
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="total"> 总数 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="total" name="total" placeholder="总数" min="0" step="1"
							class="col-xs-10 col-sm-5" value="{{ old('total', $job  ? $job-> total : '') }}"/>  
					</div> 				
		
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="start_time"> 开始时间 </label> 
             
				<div class="input-group col-sm-4"> 
					<input class="form-control date-picker col-xs-10 col-sm-5" id="start_time" name="start_time" type="text" data-date-format="yyyy-mm-dd" value="{{ old('start_time', $job  ? $job-> start_time : '') }}"/> 
					<span class="input-group-addon"> 
						<i class="icon-calendar bigger-100"></i> 
					</span> 
				</div>		 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="over_time"> 结束时间 </label> 
             
				<div class="input-group col-sm-4"> 
					<input class="form-control date-picker col-xs-10 col-sm-5" id="over_time" name="over_time" type="text" data-date-format="yyyy-mm-dd" value="{{ old('over_time', $job  ? $job-> over_time : '') }}"/> 
					<span class="input-group-addon"> 
						<i class="icon-calendar bigger-100"></i> 
					</span> 
				</div>		 
						
				
			   </div> 	
	
				
				
				
				<div class=" form-group">
						<div class="col-md-offset-3 col-md-9">
							<button class="btn btn-info" type="submit">
								<i class="icon-ok bigger-110"></i>
								保存
							</button>

							     
							<button class="btn" type="button" onclick="javascript:history.back(-1)">
								<i class="icon-undo bigger-110"></i>
								返回
							</button>
						</div>
				</div>
				<input type="hidden"  name="referer" value="{{ Request::header('referer') }}" />
			</form>
		</div> <!-- /.row -->
		
	</div>
</div>	<!-- /.page-content -->


@endsection	