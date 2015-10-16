@extends('admin/admin') 

@section('subTitle') 用户管理  @stop
@section('content') 

    <div class="page-content">
     
			<h3 class="header smaller lighter blue">用户列表 </h3>
		
			<a href="{{ url('/admin/user/add') }}" class="btn btn-xs btn-info pull-right"  tabindex="4">
				<i class="icon-plus bigger-160"> 新增</i>
			</a>
					
             <form class="form-group   form-inline" role="form" method="get" action="{{ url('/admin/user/search') }}" >    
                
               	  <select class=" col-xs-1 col-sm-5 pull-left" id="field" name="field" style="width:100px" tabindex="1">  <?php $field = isset($field) ? $field : ""; ?>
              
                  <option value="id" {{ $field==='id' ? 'selected' : '' }}>ID</option>              
    
                 </select>
            
                 <input class=" col-xs-10 col-sm-5 pull-left" style="width:300px" type="text" placeholder="" name ="q" value="" tabindex="2"/>  
                 <button class="btn btn-xs btn-success  pull-left" type="submit" tabindex="3"><i class="icon-search icon-on-right bigger-160">搜索 </i></button>																	
              </form>
              
        <div class="row">
        		<div class="col-xs-12">
        		
    			<div class="table-responsive">
    				<table id="main-table" class="table table-striped table-bordered table-hover">
    					<thead>
    						<tr>								
                    
    							<th>id</th>               
                    
    							<th>用户名</th>               
                    
    							<th>真实姓名</th>               
                    
    							<th>公司</th>               
                    
    							<th>手机号码</th>               
                    
    							<th>身份证号码</th>               
                    
    							<th>地点</th>               
                    
    							<th>邮箱</th>               
                    
    							<th>qq</th>               
                    
    							<th>微信</th>               
                    
    							<th>邮箱2</th>               
                    
    							<th>手机2</th>               
                    
    							<th>性别</th>     
                    
    							<th>角色</th>               
                    
    
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
    					
    		@foreach ($user->all() as $v)	 
         
                        <tr>     					 
    							 <td><a href='{{ url("/admin/user/edit/{$v->id}") }}'>{{ $v->id }}  </a></td>
           
    							<td> {{$v-> user_name  }} </td> 
              
    							<td> {{$v-> really_name  }} </td> 
              
    							<td> {{$v-> corporation  }} </td> 
              
    							<td> {{$v-> mobile_number  }} </td> 
              
    							<td> {{$v-> id_card_number  }} </td> 
              
    							<td> {{$v-> location  }} </td> 
              
    							<td> {{$v-> email  }} </td> 
              
    							<td> {{$v-> qq  }} </td> 
              
    							<td> {{$v-> webchat  }} </td> 
              
    							<td> {{$v-> email_2  }} </td> 
              
    							<td> {{$v-> mobile_2  }} </td> 
              
    							<td> {{ array_get($constant, 'sex.'.$v-> sex, '') }} </td>           
            
    							<td> {{ array_get($constant, 'role.'.$v-> role, '') }} </td> 
  							
    							<td>{{ $v->created_at }}</td>    
    							<td>{{ $v->updated_at }}</td>
    							
    							<td> 
    							<form action='http://localhost/admin/dict/delete/892' method="post">
    							 <input type="hidden" name="_token" value="ByeBrfOAQaQ4VCfhmXf7zSpx2l2xfs5mTX23tOg7" >
    							   
    									<button class="btn btn-xs btn-danger" onclick="return deleleConfirm();">																	
    										<i class="icon-trash bigger-120"> 刪除</i>
    									</button>
    							</form>
    							</td>
    						</tr>
             
             @endforeach		 
    					</tbody>												
    				</table> 
    				<div> {!! $user->render() !!}  <ul class="pagination pull-left"><li><span> <strong>{{$user->total()==0?0:$user->toArray()['from']}} - {{$user->toArray()['to']}} /{{$user->total()}} </strong></span></li> </ul></div>
    			</div>
    		</div>
    	</div><!-- /.row -->
    </div><!-- /.page-content -->
@endsection	