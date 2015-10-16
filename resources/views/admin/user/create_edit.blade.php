@extends('admin/admin') 

@section('subTitle') 用户管理  @stop
@section('content') 



<div class="page-content"> 	<div class="row">
		<div class="col-xs-12">
		<h3 class="header smaller lighter blue"> {{ $user ? '编辑' : '新建' }} 用户 </h3>
			<form class="form-horizontal" role="form" method="post"  action="{{ url('/admin/user/' . ($user ? 'edit/'.$user->id : 'add')) }}">
			    <input type="hidden" name="_token" value="{{ csrf_token() }}">
				
    	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="user_name"> 用户名 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="user_name" name="user_name" placeholder="用户名" 
							class="col-xs-10 col-sm-5" value="{{ old('user_name', $user  ? $user-> user_name : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="really_name"> 真实姓名 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="really_name" name="really_name" placeholder="真实姓名" 
							class="col-xs-10 col-sm-5" value="{{ old('really_name', $user  ? $user-> really_name : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="corporation"> 公司 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="corporation" name="corporation" placeholder="公司" 
							class="col-xs-10 col-sm-5" value="{{ old('corporation', $user  ? $user-> corporation : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="mobile_number"> 手机号码 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="mobile_number" name="mobile_number" placeholder="手机号码" 
							class="col-xs-10 col-sm-5" value="{{ old('mobile_number', $user  ? $user-> mobile_number : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="id_card_number"> 身份证号码 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="id_card_number" name="id_card_number" placeholder="身份证号码" 
							class="col-xs-10 col-sm-5" value="{{ old('id_card_number', $user  ? $user-> id_card_number : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="location"> 地点 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="location" name="location" placeholder="地点" 
							class="col-xs-10 col-sm-5" value="{{ old('location', $user  ? $user-> location : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="email"> 邮箱 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="email" name="email" placeholder="邮箱" 
							class="col-xs-10 col-sm-5" value="{{ old('email', $user  ? $user-> email : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="qq"> qq </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="qq" name="qq" placeholder="qq" 
							class="col-xs-10 col-sm-5" value="{{ old('qq', $user  ? $user-> qq : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="webchat"> 微信 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="webchat" name="webchat" placeholder="微信" 
							class="col-xs-10 col-sm-5" value="{{ old('webchat', $user  ? $user-> webchat : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="email_2"> 邮箱2 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="email_2" name="email_2" placeholder="邮箱2" 
							class="col-xs-10 col-sm-5" value="{{ old('email_2', $user  ? $user-> email_2 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="mobile_2"> 手机2 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="mobile_2" name="mobile_2" placeholder="手机2" 
							class="col-xs-10 col-sm-5" value="{{ old('mobile_2', $user  ? $user-> mobile_2 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="sex"> 性别 </label> 
             
					
					<?php  $constant = App\Models\Constant::where('en', 'sex')->orderBy('k')->get();?>  
					<div class="col-sm-9">						
					    <select id="sex" name="sex" class="col-xs-10 col-sm-5"> 
					    <option value="-1" ></option> 
					     @foreach($constant as $c)  
					        	<option value="{{ $c->k }}" @if($user && $user->sex == $c->k ) selected @endif  >{{ $c->v }}</option> 
					     @endforeach  
    					</select>	
					</div>								

		
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="password"> 密码 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="password" name="password" placeholder="密码" 
							class="col-xs-10 col-sm-5" value="{{ old('password', $user  ? $user-> password : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="role"> 角色 </label> 
             
					
					<?php  $constant = App\Models\Constant::where('en', 'role')->orderBy('k')->get();?>  
					<div class="col-sm-9">						
					    <select id="role" name="role" class="col-xs-10 col-sm-5"> 
					    <option value="-1" ></option> 
					     @foreach($constant as $c)  
					        	<option value="{{ $c->k }}" @if($user && $user->role == $c->k ) selected @endif  >{{ $c->v }}</option> 
					     @endforeach  
    					</select>	
					</div>								

		
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="group_1"> 组别1 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="group_1" name="group_1" placeholder="组别1" 
							class="col-xs-10 col-sm-5" value="{{ old('group_1', $user  ? $user-> group_1 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="group_2"> 组别2 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="group_2" name="group_2" placeholder="组别2" 
							class="col-xs-10 col-sm-5" value="{{ old('group_2', $user  ? $user-> group_2 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="group_parameter"> 组别参数 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="group_parameter" name="group_parameter" placeholder="组别参数" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('group_parameter', $user  ? $user-> group_parameter : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="read_write_privilege_parameter_1"> 读写权限参数1 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="read_write_privilege_parameter_1" name="read_write_privilege_parameter_1" placeholder="读写权限参数1" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('read_write_privilege_parameter_1', $user  ? $user-> read_write_privilege_parameter_1 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="read_write_privilege_parameter_2"> 读写权限参数2 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="read_write_privilege_parameter_2" name="read_write_privilege_parameter_2" placeholder="读写权限参数2" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('read_write_privilege_parameter_2', $user  ? $user-> read_write_privilege_parameter_2 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="read_write_privilege_parameter_3"> 读写权限参数3 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="read_write_privilege_parameter_3" name="read_write_privilege_parameter_3" placeholder="读写权限参数3" 
							class="col-xs-10 col-sm-5" value="{{ old('read_write_privilege_parameter_3', $user  ? $user-> read_write_privilege_parameter_3 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="read_write_privilege_parameter_4"> 读写权限参数4 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="read_write_privilege_parameter_4" name="read_write_privilege_parameter_4" placeholder="读写权限参数4" 
							class="col-xs-10 col-sm-5" value="{{ old('read_write_privilege_parameter_4', $user  ? $user-> read_write_privilege_parameter_4 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="read_write_privilege_parameter_5"> 读写权限参数5 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="read_write_privilege_parameter_5" name="read_write_privilege_parameter_5" placeholder="读写权限参数5" 
							class="col-xs-10 col-sm-5" value="{{ old('read_write_privilege_parameter_5', $user  ? $user-> read_write_privilege_parameter_5 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="read_write_privilege_parameter_6"> 读写权限参数6 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="read_write_privilege_parameter_6" name="read_write_privilege_parameter_6" placeholder="读写权限参数6" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('read_write_privilege_parameter_6', $user  ? $user-> read_write_privilege_parameter_6 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="read_write_privilege_parameter_7"> 读写权限参数7 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="read_write_privilege_parameter_7" name="read_write_privilege_parameter_7" placeholder="读写权限参数7" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('read_write_privilege_parameter_7', $user  ? $user-> read_write_privilege_parameter_7 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="read_write_privilege_parameter_8"> 读写权限参数8 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="read_write_privilege_parameter_8" name="read_write_privilege_parameter_8" placeholder="读写权限参数8" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('read_write_privilege_parameter_8', $user  ? $user-> read_write_privilege_parameter_8 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="read_write_privilege_parameter_9"> 读写权限参数9 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="read_write_privilege_parameter_9" name="read_write_privilege_parameter_9" placeholder="读写权限参数9" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('read_write_privilege_parameter_9', $user  ? $user-> read_write_privilege_parameter_9 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="read_write_privilege_parameter_10"> 读写权限参数10 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="read_write_privilege_parameter_10" name="read_write_privilege_parameter_10" placeholder="读写权限参数10" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('read_write_privilege_parameter_10', $user  ? $user-> read_write_privilege_parameter_10 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="search_privilege_parameter_1"> 搜索权限参数1 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="search_privilege_parameter_1" name="search_privilege_parameter_1" placeholder="搜索权限参数1" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('search_privilege_parameter_1', $user  ? $user-> search_privilege_parameter_1 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="search_privilege_parameter_2"> 搜索权限参数2 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="search_privilege_parameter_2" name="search_privilege_parameter_2" placeholder="搜索权限参数2" 
							class="col-xs-10 col-sm-5" value="{{ old('search_privilege_parameter_2', $user  ? $user-> search_privilege_parameter_2 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="search_privilege_parameter_3"> 搜索权限参数3 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="search_privilege_parameter_3" name="search_privilege_parameter_3" placeholder="搜索权限参数3" 
							class="col-xs-10 col-sm-5" value="{{ old('search_privilege_parameter_3', $user  ? $user-> search_privilege_parameter_3 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="search_privilege_parameter_4"> 搜索权限参数4 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="search_privilege_parameter_4" name="search_privilege_parameter_4" placeholder="搜索权限参数4" 
							class="col-xs-10 col-sm-5" value="{{ old('search_privilege_parameter_4', $user  ? $user-> search_privilege_parameter_4 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="search_privilege_parameter_5"> 搜索权限参数5 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="search_privilege_parameter_5" name="search_privilege_parameter_5" placeholder="搜索权限参数5" 
							class="col-xs-10 col-sm-5" value="{{ old('search_privilege_parameter_5', $user  ? $user-> search_privilege_parameter_5 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="additional_parameter_1"> 附加参数1 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="additional_parameter_1" name="additional_parameter_1" placeholder="附加参数1" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('additional_parameter_1', $user  ? $user-> additional_parameter_1 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="additional_parameter_2"> 附加参数2 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="additional_parameter_2" name="additional_parameter_2" placeholder="附加参数2" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('additional_parameter_2', $user  ? $user-> additional_parameter_2 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="additional_parameter_3"> 附加参数3 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="additional_parameter_3" name="additional_parameter_3" placeholder="附加参数3" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('additional_parameter_3', $user  ? $user-> additional_parameter_3 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="additional_parameter_4"> 附加参数4 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="additional_parameter_4" name="additional_parameter_4" placeholder="附加参数4" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('additional_parameter_4', $user  ? $user-> additional_parameter_4 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="additional_parameter_5"> 附加参数5 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="additional_parameter_5" name="additional_parameter_5" placeholder="附加参数5" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('additional_parameter_5', $user  ? $user-> additional_parameter_5 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="filter_privilege_parameter_1"> 筛选权限参数1 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="filter_privilege_parameter_1" name="filter_privilege_parameter_1" placeholder="筛选权限参数1" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('filter_privilege_parameter_1', $user  ? $user-> filter_privilege_parameter_1 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="filter_privilege_parameter_2"> 筛选权限参数2 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="filter_privilege_parameter_2" name="filter_privilege_parameter_2" placeholder="筛选权限参数2" 
							class="col-xs-10 col-sm-5" value="{{ old('filter_privilege_parameter_2', $user  ? $user-> filter_privilege_parameter_2 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="filter_privilege_parameter_3"> 筛选权限参数3 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="filter_privilege_parameter_3" name="filter_privilege_parameter_3" placeholder="筛选权限参数3" 
							class="col-xs-10 col-sm-5" value="{{ old('filter_privilege_parameter_3', $user  ? $user-> filter_privilege_parameter_3 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="filter_privilege_parameter_4"> 筛选权限参数4 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="filter_privilege_parameter_4" name="filter_privilege_parameter_4" placeholder="筛选权限参数4" 
							class="col-xs-10 col-sm-5" value="{{ old('filter_privilege_parameter_4', $user  ? $user-> filter_privilege_parameter_4 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="filter_privilege_parameter_5"> 筛选权限参数5 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="filter_privilege_parameter_5" name="filter_privilege_parameter_5" placeholder="筛选权限参数5" 
							class="col-xs-10 col-sm-5" value="{{ old('filter_privilege_parameter_5', $user  ? $user-> filter_privilege_parameter_5 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="filter_privilege_parameter_6"> 筛选权限参数6 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="filter_privilege_parameter_6" name="filter_privilege_parameter_6" placeholder="筛选权限参数6" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('filter_privilege_parameter_6', $user  ? $user-> filter_privilege_parameter_6 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="filter_privilege_parameter_7"> 筛选权限参数7 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="filter_privilege_parameter_7" name="filter_privilege_parameter_7" placeholder="筛选权限参数7" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('filter_privilege_parameter_7', $user  ? $user-> filter_privilege_parameter_7 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="filter_privilege_parameter_8"> 筛选权限参数8 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="filter_privilege_parameter_8" name="filter_privilege_parameter_8" placeholder="筛选权限参数8" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('filter_privilege_parameter_8', $user  ? $user-> filter_privilege_parameter_8 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="filter_privilege_parameter_9"> 筛选权限参数9 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="filter_privilege_parameter_9" name="filter_privilege_parameter_9" placeholder="筛选权限参数9" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('filter_privilege_parameter_9', $user  ? $user-> filter_privilege_parameter_9 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="filter_privilege_parameter_10"> 筛选权限参数10 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="filter_privilege_parameter_10" name="filter_privilege_parameter_10" placeholder="筛选权限参数10" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('filter_privilege_parameter_10', $user  ? $user-> filter_privilege_parameter_10 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="register_bank_1"> 开户银行1 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="register_bank_1" name="register_bank_1" placeholder="开户银行1" 
							class="col-xs-10 col-sm-5" value="{{ old('register_bank_1', $user  ? $user-> register_bank_1 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="register_bank_2"> 开户银行2 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="register_bank_2" name="register_bank_2" placeholder="开户银行2" 
							class="col-xs-10 col-sm-5" value="{{ old('register_bank_2', $user  ? $user-> register_bank_2 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="bank_account_1"> 银行账号1 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="bank_account_1" name="bank_account_1" placeholder="银行账号1" 
							class="col-xs-10 col-sm-5" value="{{ old('bank_account_1', $user  ? $user-> bank_account_1 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="bank_account_2"> 银行账号2 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="bank_account_2" name="bank_account_2" placeholder="银行账号2" 
							class="col-xs-10 col-sm-5" value="{{ old('bank_account_2', $user  ? $user-> bank_account_2 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="alipay"> 支付宝账号 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="alipay" name="alipay" placeholder="支付宝账号" 
							class="col-xs-10 col-sm-5" value="{{ old('alipay', $user  ? $user-> alipay : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="pay_mode_parameter_1"> 支付方式参数1 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="pay_mode_parameter_1" name="pay_mode_parameter_1" placeholder="支付方式参数1" 
							class="col-xs-10 col-sm-5" value="{{ old('pay_mode_parameter_1', $user  ? $user-> pay_mode_parameter_1 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="pay_mode_parameter_2"> 支付方式参数2 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="pay_mode_parameter_2" name="pay_mode_parameter_2" placeholder="支付方式参数2" 
							class="col-xs-10 col-sm-5" value="{{ old('pay_mode_parameter_2', $user  ? $user-> pay_mode_parameter_2 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="display_privilege_parameter_1"> 显示权限参数1 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="display_privilege_parameter_1" name="display_privilege_parameter_1" placeholder="显示权限参数1" 
							class="col-xs-10 col-sm-5" value="{{ old('display_privilege_parameter_1', $user  ? $user-> display_privilege_parameter_1 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="display_privilege_parameter_2"> 显示权限参数2 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="display_privilege_parameter_2" name="display_privilege_parameter_2" placeholder="显示权限参数2" 
							class="col-xs-10 col-sm-5" value="{{ old('display_privilege_parameter_2', $user  ? $user-> display_privilege_parameter_2 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="display_privilege_parameter_3"> 显示权限参数3 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="display_privilege_parameter_3" name="display_privilege_parameter_3" placeholder="显示权限参数3" 
							class="col-xs-10 col-sm-5" value="{{ old('display_privilege_parameter_3', $user  ? $user-> display_privilege_parameter_3 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="display_privilege_parameter_4"> 显示权限参数4 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="display_privilege_parameter_4" name="display_privilege_parameter_4" placeholder="显示权限参数4" 
							class="col-xs-10 col-sm-5" value="{{ old('display_privilege_parameter_4', $user  ? $user-> display_privilege_parameter_4 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="display_privilege_parameter_5"> 显示权限参数5 </label> 
             
				<div class="col-sm-9"> 
						<input type="text" id="display_privilege_parameter_5" name="display_privilege_parameter_5" placeholder="显示权限参数5" 
							class="col-xs-10 col-sm-5" value="{{ old('display_privilege_parameter_5', $user  ? $user-> display_privilege_parameter_5 : '') }}"/>  
				</div> 
						
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="display_privilege_parameter_6"> 显示权限参数6 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="display_privilege_parameter_6" name="display_privilege_parameter_6" placeholder="显示权限参数6" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('display_privilege_parameter_6', $user  ? $user-> display_privilege_parameter_6 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="display_privilege_parameter_7"> 显示权限参数7 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="display_privilege_parameter_7" name="display_privilege_parameter_7" placeholder="显示权限参数7" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('display_privilege_parameter_7', $user  ? $user-> display_privilege_parameter_7 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="display_privilege_parameter_8"> 显示权限参数8 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="display_privilege_parameter_8" name="display_privilege_parameter_8" placeholder="显示权限参数8" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('display_privilege_parameter_8', $user  ? $user-> display_privilege_parameter_8 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="display_privilege_parameter_9"> 显示权限参数9 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="display_privilege_parameter_9" name="display_privilege_parameter_9" placeholder="显示权限参数9" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('display_privilege_parameter_9', $user  ? $user-> display_privilege_parameter_9 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="display_privilege_parameter_10"> 显示权限参数10 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="display_privilege_parameter_10" name="display_privilege_parameter_10" placeholder="显示权限参数10" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('display_privilege_parameter_10', $user  ? $user-> display_privilege_parameter_10 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="publish_demand_count"> 发布需求数量 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="publish_demand_count" name="publish_demand_count" placeholder="发布需求数量" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('publish_demand_count', $user  ? $user-> publish_demand_count : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="publish_demand_parameter_1"> 发布需求参数1 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="publish_demand_parameter_1" name="publish_demand_parameter_1" placeholder="发布需求参数1" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('publish_demand_parameter_1', $user  ? $user-> publish_demand_parameter_1 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="publish_demand_parameter_2"> 发布需求参数2 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="publish_demand_parameter_2" name="publish_demand_parameter_2" placeholder="发布需求参数2" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('publish_demand_parameter_2', $user  ? $user-> publish_demand_parameter_2 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="publish_demand_parameter_3"> 发布需求参数3 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="publish_demand_parameter_3" name="publish_demand_parameter_3" placeholder="发布需求参数3" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('publish_demand_parameter_3', $user  ? $user-> publish_demand_parameter_3 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="publish_demand_parameter_4"> 发布需求参数4 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="publish_demand_parameter_4" name="publish_demand_parameter_4" placeholder="发布需求参数4" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('publish_demand_parameter_4', $user  ? $user-> publish_demand_parameter_4 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="talent_upload_count"> 人才上传数量 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="talent_upload_count" name="talent_upload_count" placeholder="人才上传数量" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('talent_upload_count', $user  ? $user-> talent_upload_count : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="talent_upload_parameter_1"> 人才上传参数1 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="talent_upload_parameter_1" name="talent_upload_parameter_1" placeholder="人才上传参数1" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('talent_upload_parameter_1', $user  ? $user-> talent_upload_parameter_1 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="talent_upload_parameter_2"> 人才上传参数2 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="talent_upload_parameter_2" name="talent_upload_parameter_2" placeholder="人才上传参数2" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('talent_upload_parameter_2', $user  ? $user-> talent_upload_parameter_2 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="talent_upload_parameter_3"> 人才上传参数3 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="talent_upload_parameter_3" name="talent_upload_parameter_3" placeholder="人才上传参数3" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('talent_upload_parameter_3', $user  ? $user-> talent_upload_parameter_3 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="talent_upload_parameter_4"> 人才上传参数4 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="talent_upload_parameter_4" name="talent_upload_parameter_4" placeholder="人才上传参数4" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('talent_upload_parameter_4', $user  ? $user-> talent_upload_parameter_4 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="operation_log_record_parameter_1"> 操作日志记录参数1 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="operation_log_record_parameter_1" name="operation_log_record_parameter_1" placeholder="操作日志记录参数1" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('operation_log_record_parameter_1', $user  ? $user-> operation_log_record_parameter_1 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="operation_log_record_parameter_2"> 操作日志记录参数2 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="operation_log_record_parameter_2" name="operation_log_record_parameter_2" placeholder="操作日志记录参数2" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('operation_log_record_parameter_2', $user  ? $user-> operation_log_record_parameter_2 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="operation_log_record_parameter_3"> 操作日志记录参数3 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="operation_log_record_parameter_3" name="operation_log_record_parameter_3" placeholder="操作日志记录参数3" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('operation_log_record_parameter_3', $user  ? $user-> operation_log_record_parameter_3 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="operation_log_record_parameter_4"> 操作日志记录参数4 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="operation_log_record_parameter_4" name="operation_log_record_parameter_4" placeholder="操作日志记录参数4" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('operation_log_record_parameter_4', $user  ? $user-> operation_log_record_parameter_4 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="operation_log_record_parameter_5"> 操作日志记录参数5 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="operation_log_record_parameter_5" name="operation_log_record_parameter_5" placeholder="操作日志记录参数5" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('operation_log_record_parameter_5', $user  ? $user-> operation_log_record_parameter_5 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="operation_log_record_parameter_6"> 操作日志记录参数6 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="operation_log_record_parameter_6" name="operation_log_record_parameter_6" placeholder="操作日志记录参数6" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('operation_log_record_parameter_6', $user  ? $user-> operation_log_record_parameter_6 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="operation_log_record_parameter_7"> 操作日志记录参数7 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="operation_log_record_parameter_7" name="operation_log_record_parameter_7" placeholder="操作日志记录参数7" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('operation_log_record_parameter_7', $user  ? $user-> operation_log_record_parameter_7 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="operation_log_record_parameter_8"> 操作日志记录参数8 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="operation_log_record_parameter_8" name="operation_log_record_parameter_8" placeholder="操作日志记录参数8" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('operation_log_record_parameter_8', $user  ? $user-> operation_log_record_parameter_8 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="operation_log_record_parameter_9"> 操作日志记录参数9 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="operation_log_record_parameter_9" name="operation_log_record_parameter_9" placeholder="操作日志记录参数9" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('operation_log_record_parameter_9', $user  ? $user-> operation_log_record_parameter_9 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="operation_log_record_parameter_10"> 操作日志记录参数10 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="operation_log_record_parameter_10" name="operation_log_record_parameter_10" placeholder="操作日志记录参数10" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('operation_log_record_parameter_10', $user  ? $user-> operation_log_record_parameter_10 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="score_parameter_1"> 积分参数1 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="score_parameter_1" name="score_parameter_1" placeholder="积分参数1" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('score_parameter_1', $user  ? $user-> score_parameter_1 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="score_parameter_2"> 积分参数2 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="score_parameter_2" name="score_parameter_2" placeholder="积分参数2" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('score_parameter_2', $user  ? $user-> score_parameter_2 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="score_parameter_3"> 积分参数3 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="score_parameter_3" name="score_parameter_3" placeholder="积分参数3" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('score_parameter_3', $user  ? $user-> score_parameter_3 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="score_parameter_4"> 积分参数4 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="score_parameter_4" name="score_parameter_4" placeholder="积分参数4" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('score_parameter_4', $user  ? $user-> score_parameter_4 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="score_parameter_5"> 积分参数5 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="score_parameter_5" name="score_parameter_5" placeholder="积分参数5" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('score_parameter_5', $user  ? $user-> score_parameter_5 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="credit_parameter_1"> 信誉参数1 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="credit_parameter_1" name="credit_parameter_1" placeholder="信誉参数1" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('credit_parameter_1', $user  ? $user-> credit_parameter_1 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="credit_parameter_2"> 信誉参数2 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="credit_parameter_2" name="credit_parameter_2" placeholder="信誉参数2" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('credit_parameter_2', $user  ? $user-> credit_parameter_2 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="credit_parameter_3"> 信誉参数3 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="credit_parameter_3" name="credit_parameter_3" placeholder="信誉参数3" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('credit_parameter_3', $user  ? $user-> credit_parameter_3 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="credit_parameter_4"> 信誉参数4 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="credit_parameter_4" name="credit_parameter_4" placeholder="信誉参数4" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('credit_parameter_4', $user  ? $user-> credit_parameter_4 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="credit_parameter_5"> 信誉参数5 </label> 
             
					<div class="col-sm-9"> 
						<input type="number" id="credit_parameter_5" name="credit_parameter_5" placeholder="信誉参数5" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="{{ old('credit_parameter_5', $user  ? $user-> credit_parameter_5 : '') }}"/>  
					</div> 
			  
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="friends_set"> 好友集合 </label> 
             
					<div class="col-sm-9"> 
						<textarea type="text/plain" id="friends_set"  name="friends_set" rows="5" class="col-xs-10 col-sm-5 autosize-transition">
						{{ old('friends_set', $user  ? $user-> friends_set : '') }}</textarea> 
					</div> 	
					
				
			   </div> 	
	
              
			   <div class="form-group"> 
					<label class="col-sm-3 control-label no-padding-right" for="acquaintance_set"> 熟人集合 </label> 
             
					<div class="col-sm-9"> 
						<textarea type="text/plain" id="acquaintance_set"  name="acquaintance_set" rows="5" class="col-xs-10 col-sm-5 autosize-transition">
						{{ old('acquaintance_set', $user  ? $user-> acquaintance_set : '') }}</textarea> 
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