@extends('admin/admin') 

@section('subTitle') 作业管理  @stop
@section('content') 

    <div class="page-content">
     
			<h3 class="header smaller lighter blue">作业列表 </h3>
		
<!-- 			<a href="{{ url('/admin/job/add') }}" class="btn btn-xs btn-info pull-right"  tabindex="4"> -->
<!-- 				<i class="icon-plus bigger-160"> 新增</i> -->
<!-- 			</a> -->
					
             <form class="form-group   form-inline" role="form" method="get" action="{{ url('/admin/job/search') }}" >    
                
               	  <select class=" col-xs-1 col-sm-5 pull-left" id="field" name="field" style="width:100px" tabindex="1">  <?php $field = isset($field) ? $field : ""; ?>
              
                  <option value="job_id" {{ $field==='job_id' ? 'selected' : '' }}>作业id</option> 
                   <option value="task_id" {{ $field==='task_id' ? 'selected' : '' }}>任务id</option> 
                  <option value="id" {{ $field==='id' ? 'selected' : '' }}>ID</option>              
    
                 </select>
            
                 <input class=" col-xs-10 col-sm-5 pull-left" style="width:300px" type="text" placeholder="" name ="q" value="" tabindex="2"/>  
                 <button class="btn btn-xs btn-success  pull-left" type="submit" tabindex="3"><i class="icon-search icon-on-right bigger-160">搜索 </i></button>		
 <!--                <button id="refresh-page" class="btn btn-xs btn-info  pull-left" type="button" tabindex="3" style="margin: 0px 5px;"  ><i class="icon-search icon-on-right bigger-160">刷新 </i></button>  -->															
              </form>
              
        <div class="row">
        		<div class="col-xs-12">
        		
    			<div class="table-responsive">
    				<table id="main-table" class="table table-striped table-bordered table-hover">
    					<thead>
    						<tr>								
                    
    							<th>id</th>               
                    
    							<th>作业id</th>               
                    
    							<th>任务id</th>               
                    
    							<th>状态</th>               
                    
    							<th>计数</th>               
                    
    							<th>总数</th>     
    							
    							<th>进度</th>               
                    
    							<th>开始时间</th>               
                    
    							<th>结束时间</th> 
    							              
            					<th>    			
    								时间花费
    							</th>

    
<!--     							<th>刪除</th> -->
    						</tr>
    					</thead>
                 <?php $constant = App\Models\Constant::getInstance(); ?>    
    					<tbody>
    					
    		@foreach ($job->all() as $v)	 
         
                        <tr>     					 
    							 <td><a href='{{ url("/admin/job/edit/{$v->id}") }}'>{{ $v->id }}  </a></td>
           
    							<td> {{$v-> job_id  }} </td> 
              
    							<td> {{$v-> task_id  }} </td> 
              
    							<td> {{$v-> status  }} </td> 
              
    							<td> {{$v-> count  }} </td> 
              
    							<td> {{$v-> total  }} </td> 
    							
    							<td> {{ number_format( $v-> count * 1.0/ $v-> total * 100, 2)  }} % </td> 
              
    							<td> {{$v-> start_time  }} </td> 
              
    							<td> {{$v-> over_time  }} </td> 
                 							
    							
    							<td> <?php $over = new DateTime($v->over_time);  $start = new DateTime($v-> start_time);
    							$interval = date_diff($over, $start);
    							?>
    							
    							{{  $interval->format("%h小时: %i分: %s秒") }}</td>    

    							
<!--     							<td>  -->
<!--     							<form action='http://localhost/admin/dict/delete/903' method="post"> -->
<!--     							 <input type="hidden" name="_token" value="sEzBfGwsWN60VQz77pZRs4TkvD6QquvH2aTStBpk" > -->
    							   
<!--      									<button class="btn btn-xs btn-danger" onclick="return deleleConfirm();">	-->																
<!--     										<i class="icon-trash bigger-120"> 刪除</i> -->
<!--     									</button> -->
<!--     							</form> -->
<!--     							</td> -->
    						</tr>
             
             @endforeach		 
    					</tbody>												
    				</table> 
    				<div> {!! $job->render() !!}  <ul class="pagination pull-left"><li><span> <strong>{{$job->total()==0?0:$job->toArray()['from']}} - {{$job->toArray()['to']}} /{{$job->total()}} </strong></span></li> </ul></div>
    			</div>
    		</div>
    	</div><!-- /.row -->
    </div><!-- /.page-content -->
@endsection	

@section('scripts')
<script type="text/javascript">
			jQuery(function($) {

// 				$('#refresh-page').on('click' , function(){

// 					setInterval(function(){
// 						alert();
// 						location.reload();   			                  
// 		            }, 1000);	
// 				});
						

			});
</script>
@endsection	
