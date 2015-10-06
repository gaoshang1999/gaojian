@extends('admin/admin')

@section('subTitle') 需求管理  @stop

{{-- Content --}}
@section('content')



    <div class="page-content">
     <div class="row">
		<div class="col-xs-12">
			<h3 class="header smaller lighter blue">需求列表 </h3>
		
			<a href="{{ url('/admin/demand/add') }}" class="btn btn-xs btn-info pull-right"  tabindex="4">
				<i class="icon-plus bigger-160">&nbsp;新增</i>
			</a>
					
             <form class="form-group   form-inline" role="form" method="get" action="{{ url('/admin/demand/search') }}" >    
                
               	  <select class=" col-xs-1 col-sm-5 pull-left" id="field" name="field" style="width:100px" tabindex="1"> <?php $field = isset($field) ? $field : ""; ?>
              
                  <option value="recruit_corporation" {{ $field==='recruit_corporation' ? 'selected' : '' }}>招聘公司</option>
 
                  <option value="id" {{ $field==='id' ? 'selected' : '' }}>ID</option>
                 </select>
            
                 <input class=" col-xs-10 col-sm-5 pull-left" style="width:300px" type="text" placeholder="" name ="q" value="{{ isset($q) ? $q : "" }}" tabindex="2"/>  
                 <button class="btn btn-xs btn-success  pull-left" type="submit" tabindex="3"><i class="icon-search icon-on-right bigger-160">搜索&nbsp;</i></button>																	
              </form>

    			<div class="table-responsive">
    				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
    					<thead>
    						<tr>

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
    				<div> {!! $demand->render() !!} </div>
    			</div>
    		</div>
    	</div><!-- /.row -->
    </div><!-- /.page-content -->
@endsection								