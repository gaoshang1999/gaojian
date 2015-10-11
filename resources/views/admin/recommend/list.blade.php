@extends('admin/admin')

@section('subTitle') 推荐管理  @stop

{{-- Content --}}
@section('content')



    <div class="page-content">
     <div class="row">
		<div class="col-xs-12">
			<h3 class="header smaller lighter blue">推荐列表 </h3>
		
			<a href="{{ url('/admin/recommend/add') }}" class="btn btn-xs btn-info pull-right"  tabindex="4">
				<i class="icon-plus bigger-160">&nbsp;新增</i>
			</a>
					
             <form class="form-group   form-inline" role="form" method="get" action="{{ url('/admin/recommend/search') }}" >    
                
               	  <select class=" col-xs-1 col-sm-5 pull-left" id="field" name="field" style="width:100px" tabindex="1"> <?php $field = isset($field) ? $field : ""; ?>
              
                  <option value="user_id" {{ $field==='user_id' ? 'selected' : '' }}>用户编号</option>
                  <option value="talent_id" {{ $field==='talent_id' ? 'selected' : '' }}>人才编号</option>
                  <option value="demand_id" {{ $field==='demand_id' ? 'selected' : '' }}>需求编号</option>
                  <option value="id" {{ $field==='id' ? 'selected' : '' }}>ID</option>
                 </select>
            
                 <input class=" col-xs-10 col-sm-5 pull-left" style="width:300px" type="text" placeholder="" name ="q" value="{{ isset($q) ? $q : "" }}" tabindex="2"/>  
                 <button class="btn btn-xs btn-success  pull-left" type="submit" tabindex="3"><i class="icon-search icon-on-right bigger-160">搜索&nbsp;</i></button>																	
              </form>

    			<div class="table-responsive">
    				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
    					<thead>
    						<tr>

    							<th>推荐编号</th> 
<th>用户编号</th> 
<th>人才编号</th> 
<th>需求编号</th> 
<th>推荐时间</th> 
<th>推荐类型</th> 
<th>推荐标签1</th> 
<th>推荐标签2</th> 
<th>推荐标签3</th> 
<th>推荐标签4</th> 
<th>推荐参数1</th> 
<th>推荐参数2</th> 
<th>推荐参数3</th> 
<th>推荐参数4</th> 

						
    
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
    		@foreach ($recommend->all() as $v)
    						<tr>
    	                        <td><a href='{{ url("/admin/recommend/edit/{$v->id}") }}'>{{ $v->id }}  </a></td>

<td> {{$v-> user_id }} </td> 
<td> {{$v-> talent_id }} </td> 
<td> {{$v-> demand_id }} </td> 
<td> {{$v-> recommend_time }} </td> 
<td> {{ array_get($constant, 'recommend_type.'.$v-> recommend_type, '') }} </td> 
<td> {{$v-> recommend_label_1 }} </td> 
<td> {{$v-> recommend_label_2 }} </td> 
<td> {{$v-> recommend_label_3 }} </td> 
<td> {{$v-> recommend_label_4 }} </td> 
<td> {{$v-> recommend_parameter_1 }} </td> 
<td> {{$v-> recommend_parameter_2 }} </td> 
<td> {{$v-> recommend_parameter_3 }} </td> 
<td> {{$v-> recommend_parameter_4 }} </td> 


    							
    							
    							<td>{{ $v->created_at }}</td>
    
    							<td class="hidden-480">
    								{{ $v->updated_at }}
    							</td>
    							
    							<td> 
    							<form action='{{ url("/admin/recommend/delete/{$v->id}") }}' method="post">
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
    				<div> {!! $recommend->render() !!} </div>
    			</div>
    		</div>
    	</div><!-- /.row -->
    </div><!-- /.page-content -->
@endsection								