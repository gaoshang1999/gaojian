@extends('admin/admin')

@section('subTitle') 人才管理  @stop

{{-- Content --}}
@section('content')



    <div class="page-content">
    <h3 class="header smaller lighter blue">人才列表 </h3>
    
    <form class="form-group   form-inline" role="form" method="get" action="{{ url('/admin/talent/search') }}" >    
      <label class=" pull-left" 	for=""> 文本项目 </label>      
      <?php $column = App\Models\Column::whereIn('type', ['string', 'text'])->orderBy('cn')->get();?>  
      <select class=" col-xs-1 col-sm-5 pull-left" id="field" name="field" style="width:150px" tabindex="1"> <?php $field = isset($field) ? $field : ""; ?>
               @foreach($column as $c)
                  <option value="{{ $c->en }}" {{ $field == $c->en  ? 'selected' : '' }}>{{ $c->cn }}</option>
               @endforeach
       </select>
            
      <input class=" col-xs-10 col-sm-5 pull-left" style="width:200px" type="text" placeholder="" name ="q" value="{{ isset($q) ? $q : "" }}" tabindex="2"/>  
      
      <label class=" pull-left" 	for=""> 量化项目 </label>  
      <?php $column = App\Models\Column::whereIn('type', ['integer', 'float'])->orderBy('cn')->get();?>       
      <select class=" col-xs-1 col-sm-5 pull-left" id="field2" name="field2" style="width:150px" tabindex="1"> <?php $field = isset($field2) ? $field2 : ""; ?>
      
               @foreach($column as $c)
                  <option value="{{ $c->en }}" {{ $field == $c->en  ? 'selected' : '' }}>{{ $c->cn }}</option>
               @endforeach
                 </select>
            
      <input class=" col-xs-10 col-sm-5 pull-left" style="width:100px" type="number" placeholder="" name ="q2_start" step="1" value="{{ isset($q2_start) ? $q2_start : "" }}" tabindex="2"/>  
      <input class=" col-xs-10 col-sm-5 pull-left" style="width:100px" type="number" placeholder="" name ="q2_end" step="1" value="{{ isset($q2_end) ? $q2_end : "" }}" tabindex="2"/>
      
      <label class=" pull-left" for=""> 日期项目 </label>      
      <?php $column = App\Models\Column::whereIn('type', ['date'])->orderBy('cn')->get();?>  
      <select class=" col-xs-1 col-sm-5 pull-left" id="field3" name="field3" style="width:150px" tabindex="1"> <?php $field = isset($field3) ? $field3 : ""; ?>
               @foreach($column as $c)
                  <option value="{{ $c->en }}" {{ $field == $c->en  ? 'selected' : '' }}>{{ $c->cn }}</option>
               @endforeach
       </select>
            
      <div class="input-group " style="width:240px">
         <input class="form-control date-picker col-xs-10 col-sm-5"
			id="q3_start" name="q3_start" type="text"
			data-date-format="yyyy-mm-dd" value="{{ isset($q3_start) ? $q3_start : "" }}" /> <span
			class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="q3_end" name="q3_end" type="text"
			data-date-format="yyyy-mm-dd" value="{{ isset($q3_end) ? $q3_end : "" }}" /> <span
			class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
																	
		</div>      
        
        
      <button class="btn btn-xs btn-success  pull-left" type="submit" tabindex="3"><i class="icon-search icon-on-right bigger-160">搜索&nbsp;</i></button>	
														
    </form>
              
              
     <div class="row">
		<div class="col-xs-12">
			
		    <a href="#modal-form" class="btn btn-xs btn-info pull-right" data-toggle="modal" tabindex="4">
				<i class="icon-upload bigger-160">&nbsp;简历上传</i>
			</a>
			
			<a href="{{ url('/admin/talent/batchUpdate') }}" style="margin:0px 5px;" class="btn btn-xs btn-success pull-right"  tabindex="4">
				<i class="icon-edit bigger-160">&nbsp;批量修改</i>
			</a>
			
			<a href="{{ url('/admin/talent/add') }}" class="btn btn-xs btn-info pull-right"  tabindex="4">
				<i class="icon-plus bigger-160">&nbsp;新增</i>
			</a>
					
             

    			<div class="table-responsive">
    				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
    					<thead>
    						<tr>
    						<th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
							</th>
<th>人才编号</th> 
<th>姓名</th> 
<th>手机</th> 
<th>最近公司</th> 
<th>性别</th> 
<!-- <th>身份证</th>  -->
<th>出生日期</th> 
<th>户口所在地点</th> 
<th>所在地点</th> 
<!-- <th>基本扩展信息1</th>  -->
<!-- <th>基本扩展信息2</th>  -->
<!-- <th>基本扩展信息3</th>  -->
<!-- <th>基本扩展信息4</th>  -->
<!-- <th>基本扩展信息5</th>  -->
<!-- <th>英文水平</th>  -->
<!-- <th>其他语言水平</th>  -->
<!-- <th>期望参数1</th>  -->
<!-- <th>期望参数2</th>  -->
<!-- <th>期望参数3</th>  -->
<!-- <th>期望标签1</th>  -->
<!-- <th>期望标签2</th>  -->
<!-- <th>期望标签3</th>  -->
<!-- <th>工作年限</th>  -->
<!-- <th>开始工作时间</th>  -->
<!-- <th>最高学历</th>  -->
<!-- <th>起步学历</th>  -->
<!-- <th>最高学历学校</th>  -->
<!-- <th>最差学校</th>  -->
<!-- <th>本科评级</th>  -->
<!-- <th>硕士评级</th>  -->
<!-- <th>MBA评级</th>  -->
<!-- <th>学校综合评级</th>  -->
<!-- <th>本科专业</th>  -->
<!-- <th>本科学校</th>  -->
<!-- <th>本科开始时间</th>  -->
<!-- <th>本科结束时间</th>  -->
<!-- <th>硕士专业</th>  -->
<!-- <th>硕士学校</th>  -->
<!-- <th>硕士开始时间</th>  -->
<!-- <th>硕士结束时间</th>  -->
<!-- <th>博士专业</th>  -->
<!-- <th>博士学校</th>  -->
<!-- <th>博士开始时间</th>  -->
<!-- <th>博士结束时间</th>  -->
<!-- <th>mba学校</th>  -->
<!-- <th>mba开始时间</th>  -->
<!-- <th>mba结束时间</th>  -->
<!-- <th>附加学历</th>  -->
<!-- <th>附加学历学校</th>  -->
<!-- <th>附加开始时间</th>  -->
<!-- <th>附加结束时间</th>  -->
<!-- <th>教育经历</th>  -->
<!-- <th>教育参数1</th>  -->
<!-- <th>教育参数2</th>  -->
<!-- <th>行业标签1</th>  -->
<!-- <th>行业标签2</th>  -->
<!-- <th>行业标签3</th>  -->
<!-- <th>行业标签4</th>  -->
<!-- <th>行业标签5</th>  -->
<!-- <th>期望行业</th>  -->
<th>产品标签1</th> 
<!-- <th>产品标签2</th>  -->
<!-- <th>产品标签3</th>  -->
<!-- <th>产品标签4</th>  -->
<!-- <th>产品标签5</th>  -->
<!-- <th>产品标签6</th>  -->
<!-- <th>产品标签7</th>  -->
<!-- <th>产品标签8</th>  -->
<!-- <th>产品标签9</th>  -->
<!-- <th>产品标签10</th>  -->
<!-- <th>产品参数1</th>  -->
<!-- <th>产品参数2</th>  -->
<!-- <th>产品参数3</th>  -->
<!-- <th>产品参数4</th>  -->
<!-- <th>产品参数5</th>  -->
<!-- <th>产品参数6</th>  -->
<!-- <th>产品参数7</th>  -->
<!-- <th>产品参数8</th>  -->
<!-- <th>产品参数9</th>  -->
<!-- <th>产品参数10</th>  -->
<!-- <th>目前年薪范围</th>  -->
<!-- <th>目前税前年薪</th>  -->
<!-- <th>目前税前月薪</th>  -->
<!-- <th>期望税前年薪</th>  -->
<!-- <th>期望税前月薪</th>  -->
<!-- <th>期望薪水涨幅</th>  -->
<!-- <th>薪水结构参数1</th>  -->
<!-- <th>薪水结构参数2</th>  -->
<!-- <th>薪水结构参数3</th>  -->
<!-- <th>薪水结构参数4</th>  -->
<!-- <th>公司1</th>  -->
<!-- <th>公司2</th>  -->
<!-- <th>公司3</th>  -->
<!-- <th>公司4</th>  -->
<!-- <th>公司5</th>  -->
<!-- <th>公司6</th>  -->
<!-- <th>公司7</th>  -->
<!-- <th>公司8</th>  -->
<!-- <th>公司9</th>  -->
<!-- <th>公司10</th>  -->
<!-- <th>开始时间1</th>  -->
<!-- <th>开始时间2</th>  -->
<!-- <th>开始时间3</th>  -->
<!-- <th>开始时间4</th>  -->
<!-- <th>开始时间5</th>  -->
<!-- <th>开始时间6</th>  -->
<!-- <th>开始时间7</th>  -->
<!-- <th>开始时间8</th>  -->
<!-- <th>开始时间9</th>  -->
<!-- <th>开始时间10</th>  -->
<!-- <th>结束时间1</th>  -->
<!-- <th>结束时间2</th>  -->
<!-- <th>结束时间3</th>  -->
<!-- <th>结束时间4</th>  -->
<!-- <th>结束时间5</th>  -->
<!-- <th>结束时间6</th>  -->
<!-- <th>结束时间7</th>  -->
<!-- <th>结束时间8</th>  -->
<!-- <th>结束时间9</th>  -->
<!-- <th>结束时间10</th>  -->
<!-- <th>职级1</th>  -->
<!-- <th>职级2</th>  -->
<!-- <th>职级3</th>  -->
<!-- <th>职级4</th>  -->
<!-- <th>职级5</th>  -->
<!-- <th>职级6</th>  -->
<!-- <th>职级7</th>  -->
<!-- <th>职级8</th>  -->
<!-- <th>职级9</th>  -->
<!-- <th>职级10</th>  -->
<!-- <th>经历1</th>  -->
<!-- <th>经历2</th>  -->
<!-- <th>经历3</th>  -->
<!-- <th>经历4</th>  -->
<!-- <th>经历5</th>  -->
<!-- <th>经历6</th>  -->
<!-- <th>经历7</th>  -->
<!-- <th>经历8</th>  -->
<!-- <th>经历9</th>  -->
<!-- <th>经历10</th>  -->
<!-- <th>总职业经历</th>  -->
<!-- <th>职业状态</th>  -->
<!-- <th>跳槽数字</th>  -->
<!-- <th>失业时间</th>  -->
<!-- <th>职业参数1</th>  -->
<!-- <th>职业参数2</th>  -->
<!-- <th>职业参数3</th>  -->
<!-- <th>职业参数4</th>  -->
<!-- <th>职业参数5</th>  -->
<!-- <th>职业参数6</th>  -->
<th>公司标签1</th> 
<!-- <th>公司标签2</th>  -->
<!-- <th>公司标签3</th>  -->
<!-- <th>公司标签4</th>  -->
<!-- <th>公司标签5</th>  -->
<!-- <th>公司标签6</th>  -->
<!-- <th>公司标签7</th>  -->
<!-- <th>公司标签8</th>  -->
<!-- <th>公司标签9</th>  -->
<!-- <th>公司标签10</th>  -->
<!-- <th>公司参数1</th>  -->
<!-- <th>公司参数2</th>  -->
<!-- <th>公司参数3</th>  -->
<!-- <th>公司参数4</th>  -->
<!-- <th>公司参数5</th>  -->
<!-- <th>公司参数6</th>  -->
<!-- <th>公司参数7</th>  -->
<!-- <th>公司参数8</th>  -->
<!-- <th>公司参数9</th>  -->
<!-- <th>公司参数10</th>  -->
<!-- <th>工具标签1</th>  -->
<!-- <th>工具标签2</th>  -->
<!-- <th>工具标签3</th>  -->
<!-- <th>认证标签1</th>  -->
<!-- <th>认证标签2</th>  -->
<!-- <th>认证标签3</th>  -->
<!-- <th>工具参数1</th>  -->
<!-- <th>工具参数2</th>  -->
<!-- <th>工具参数3</th>  -->
<!-- <th>认证参数1</th>  -->
<!-- <th>认证参数2</th>  -->
<!-- <th>认证参数3</th>  -->
<!-- <th>简历全文</th>  -->  
<!-- <th>简历分割1</th>  -->  
<!-- <th>简历分割2</th>  --> 
<!-- <th>简历分割3</th>  -->  
<!-- <th>简历分割4</th>  --> 
<!-- <th>简历分割5</th>  -->  
<!-- <th>简历分割6</th>  -->  
<!-- <th>抓取状态1</th>  -->
<!-- <th>抓取状态2</th>  -->
<!-- <th>抓取状态3</th>  -->
<!-- <th>解析状态参数1</th>  -->
<!-- <th>解析状态参数2</th>  -->
<!-- <th>解析状态参数3</th>  -->
<!-- <th>解析状态参数4</th>  -->
<!-- <th>解析状态参数5</th>  -->
<!-- <th>解析状态参数6</th> 									 -->
    
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
    		@foreach ($talent->all() as $v)
						<tr>
							<td class="center">
								<label>
									<input type="checkbox" class="ace" />
									<span class="lbl"></span>
								</label>
							</td>    						
	                        <td><a href='{{ url("/admin/talent/edit/{$v->id}") }}'>{{ $v->id }}  </a></td>
<td> {{$v-> name }} </td> 
<td> {{$v-> mobile }} </td> 
<td> {{$v-> last_corporation }} </td> 
<td> {{ array_get($constant, 'sex.'.$v-> sex, '') }} </td> 
<td> {{$v-> id_card }} </td> 
<td> {{$v-> birth_date }} </td> 
<td> {{$v-> permanent_residence }} </td> 
<td> {{$v-> location }} </td> 
<!-- <td> {{$v-> basic_extension_info_1 }} </td>  -->
<!-- <td> {{$v-> basic_extension_info_2 }} </td>  -->
<!-- <td> {{$v-> basic_extension_info_3 }} </td>  -->
<!-- <td> {{$v-> basic_extension_info_4 }} </td>  -->
<!-- <td> {{$v-> basic_extension_info_5 }} </td>  -->
<!-- <td> {{ $constant['english_level'][$v-> english_level] }} </td>  -->
<!-- <td> {{$v-> other_language_level }} </td>  -->
<!-- <td> {{$v-> expect_parameter_1 }} </td>  -->
<!-- <td> {{$v-> expect_parameter_2 }} </td>  -->
<!-- <td> {{$v-> expect_parameter_3 }} </td>  -->
<!-- <td> {{$v-> expect_label_1 }} </td>  -->
<!-- <td> {{$v-> expect_label_2 }} </td>  -->
<!-- <td> {{$v-> expect_label_3 }} </td>  -->
<!-- <td> {{$v-> work_year }} </td>  -->
<!-- <td> {{$v-> start_work_time }} </td>  -->
<!-- <td> {{ $constant['highest_education'][$v-> highest_education] }} </td>  -->
<!-- <td> {{ $constant['initial_education'][$v-> initial_education] }} </td>  -->
<!-- <td> {{$v-> highest_education_school }} </td>  -->
<!-- <td> {{$v-> worst_school }} </td>  -->
<!-- <td> {{$v-> college_grade }} </td>  -->
<!-- <td> {{$v-> master_grade }} </td>  -->
<!-- <td> {{$v-> mba_grade }} </td>  -->
<!-- <td> {{$v-> school_comprehensive_grade }} </td>  -->
<!-- <td> {{$v-> college_major }} </td>  -->
<!-- <td> {{$v-> college_school }} </td>  -->
<!-- <td> {{$v-> college_start_time }} </td>  -->
<!-- <td> {{$v-> college_over_time }} </td>  -->
<!-- <td> {{$v-> master_major }} </td>  -->
<!-- <td> {{$v-> master_school }} </td>  -->
<!-- <td> {{$v-> master_start_time }} </td>  -->
<!-- <td> {{$v-> master_over_time }} </td>  -->
<!-- <td> {{$v-> doctor_major }} </td>  -->
<!-- <td> {{$v-> doctor_school }} </td>  -->
<!-- <td> {{$v-> doctor_start_time }} </td>  -->
<!-- <td> {{$v-> doctor_over_time }} </td>  -->
<!-- <td> {{$v-> mba_school }} </td>  -->
<!-- <td> {{$v-> mba_start_time }} </td>  -->
<!-- <td> {{$v-> mba_over_time }} </td>  -->
<!-- <td> {{$v-> additional_education }} </td>  -->
<!-- <td> {{$v-> additional_education_school }} </td>  -->
<!-- <td> {{$v-> additional_start_time }} </td>  -->
<!-- <td> {{$v-> additional_over_time }} </td>  -->
<!-- <td> {{$v-> education_experience }} </td>  -->
<!-- <td> {{$v-> education_parameter_1 }} </td>  -->
<!-- <td> {{$v-> education_parameter_2 }} </td>  -->
<!-- <td> {{$v-> occupation_label_1 }} </td>  -->
<!-- <td> {{$v-> occupation_label_2 }} </td>  -->
<!-- <td> {{$v-> occupation_label_3 }} </td>  -->
<!-- <td> {{$v-> occupation_label_4 }} </td>  -->
<!-- <td> {{$v-> occupation_label_5 }} </td>  -->
<!-- <td> {{$v-> expect_occupation }} </td>  -->
<td> {{$v-> product_label_1 }} </td> 
<!-- <td> {{$v-> product_label_2 }} </td>  -->
<!-- <td> {{$v-> product_label_3 }} </td>  -->
<!-- <td> {{$v-> product_label_4 }} </td>  -->
<!-- <td> {{$v-> product_label_5 }} </td>  -->
<!-- <td> {{$v-> product_label_6 }} </td>  -->
<!-- <td> {{$v-> product_label_7 }} </td>  -->
<!-- <td> {{$v-> product_label_8 }} </td>  -->
<!-- <td> {{$v-> product_label_9 }} </td>  -->
<!-- <td> {{$v-> product_label_10 }} </td>  -->
<!-- <td> {{$v-> product_parameter_1 }} </td>  -->
<!-- <td> {{$v-> product_parameter_2 }} </td>  -->
<!-- <td> {{$v-> product_parameter_3 }} </td>  -->
<!-- <td> {{$v-> product_parameter_4 }} </td>  -->
<!-- <td> {{$v-> product_parameter_5 }} </td>  -->
<!-- <td> {{$v-> product_parameter_6 }} </td>  -->
<!-- <td> {{$v-> product_parameter_7 }} </td>  -->
<!-- <td> {{$v-> product_parameter_8 }} </td>  -->
<!-- <td> {{$v-> product_parameter_9 }} </td>  -->
<!-- <td> {{$v-> product_parameter_10 }} </td>  -->
<!-- <td> {{ $constant['current_annual_salary_range'][$v-> current_annual_salary_range] }} </td>  -->
<!-- <td> {{$v-> current_pretax_annual_salary }} </td>  -->
<!-- <td> {{$v-> current_pretax_salary }} </td>  -->
<!-- <td> {{$v-> expect_pretax_annual_salary }} </td>  -->
<!-- <td> {{$v-> expect_pretax_salary }} </td>  -->
<!-- <td> {{$v-> expect_salary_increase }} </td>  -->
<!-- <td> {{$v-> salary_structure_parameter_1 }} </td>  -->
<!-- <td> {{$v-> salary_structure_parameter_2 }} </td>  -->
<!-- <td> {{$v-> salary_structure_parameter_3 }} </td>  -->
<!-- <td> {{$v-> salary_structure_parameter_4 }} </td>  -->
<!-- <td> {{$v-> corporation_1 }} </td>  -->
<!-- <td> {{$v-> corporation_2 }} </td>  -->
<!-- <td> {{$v-> corporation_3 }} </td>  -->
<!-- <td> {{$v-> corporation_4 }} </td>  -->
<!-- <td> {{$v-> corporation_5 }} </td>  -->
<!-- <td> {{$v-> corporation_6 }} </td>  -->
<!-- <td> {{$v-> corporation_7 }} </td>  -->
<!-- <td> {{$v-> corporation_8 }} </td>  -->
<!-- <td> {{$v-> corporation_9 }} </td>  -->
<!-- <td> {{$v-> corporation_10 }} </td>  -->
<!-- <td> {{$v-> start_time_1 }} </td>  -->
<!-- <td> {{$v-> start_time_2 }} </td>  -->
<!-- <td> {{$v-> start_time_3 }} </td>  -->
<!-- <td> {{$v-> start_time_4 }} </td>  -->
<!-- <td> {{$v-> start_time_5 }} </td>  -->
<!-- <td> {{$v-> start_time_6 }} </td>  -->
<!-- <td> {{$v-> start_time_7 }} </td>  -->
<!-- <td> {{$v-> start_time_8 }} </td>  -->
<!-- <td> {{$v-> start_time_9 }} </td>  -->
<!-- <td> {{$v-> start_time_10 }} </td>  -->
<!-- <td> {{$v-> over_time_1 }} </td>  -->
<!-- <td> {{$v-> over_time_2 }} </td>  -->
<!-- <td> {{$v-> over_time_3 }} </td>  -->
<!-- <td> {{$v-> over_time_4 }} </td>  -->
<!-- <td> {{$v-> over_time_5 }} </td>  -->
<!-- <td> {{$v-> over_time_6 }} </td>  -->
<!-- <td> {{$v-> over_time_7 }} </td>  -->
<!-- <td> {{$v-> over_time_8 }} </td>  -->
<!-- <td> {{$v-> over_time_9 }} </td>  -->
<!-- <td> {{$v-> over_time_10 }} </td>  -->
<!-- <td> {{$v-> job_level_1 }} </td>  -->
<!-- <td> {{$v-> job_level_2 }} </td>  -->
<!-- <td> {{$v-> job_level_3 }} </td>  -->
<!-- <td> {{$v-> job_level_4 }} </td>  -->
<!-- <td> {{$v-> job_level_5 }} </td>  -->
<!-- <td> {{$v-> job_level_6 }} </td>  -->
<!-- <td> {{$v-> job_level_7 }} </td>  -->
<!-- <td> {{$v-> job_level_8 }} </td>  -->
<!-- <td> {{$v-> job_level_9 }} </td>  -->
<!-- <td> {{$v-> job_level_10 }} </td>  -->
<!-- <td> {{$v-> experience_1 }} </td>  -->
<!-- <td> {{$v-> experience_2 }} </td>  -->
<!-- <td> {{$v-> experience_3 }} </td>  -->
<!-- <td> {{$v-> experience_4 }} </td>  -->
<!-- <td> {{$v-> experience_5 }} </td>  -->
<!-- <td> {{$v-> experience_6 }} </td>  -->
<!-- <td> {{$v-> experience_7 }} </td>  -->
<!-- <td> {{$v-> experience_8 }} </td>  -->
<!-- <td> {{$v-> experience_9 }} </td>  -->
<!-- <td> {{$v-> experience_10 }} </td>  -->
<!-- <td> {{$v-> total_occupation_experience }} </td>  -->
<!-- <td> {{ $constant['occupation_status'][$v-> occupation_status] }} </td>  -->
<!-- <td> {{$v-> job_hopping_digit }} </td>  -->
<!-- <td> {{$v-> unemployment_time }} </td>  -->
<!-- <td> {{$v-> occupation_parameter_1 }} </td>  -->
<!-- <td> {{$v-> occupation_parameter_2 }} </td>  -->
<!-- <td> {{$v-> occupation_parameter_3 }} </td>  -->
<!-- <td> {{$v-> occupation_parameter_4 }} </td>  -->
<!-- <td> {{$v-> occupation_parameter_5 }} </td>  -->
<!-- <td> {{$v-> occupation_parameter_6 }} </td>  -->
<td> {{$v-> corporation_label_1 }} </td> 
<!-- <td> {{$v-> corporation_label_2 }} </td>  -->
<!-- <td> {{$v-> corporation_label_3 }} </td>  -->
<!-- <td> {{$v-> corporation_label_4 }} </td>  -->
<!-- <td> {{$v-> corporation_label_5 }} </td>  -->
<!-- <td> {{$v-> corporation_label_6 }} </td>  -->
<!-- <td> {{$v-> corporation_label_7 }} </td>  -->
<!-- <td> {{$v-> corporation_label_8 }} </td>  -->
<!-- <td> {{$v-> corporation_label_9 }} </td>  -->
<!-- <td> {{$v-> corporation_label_10 }} </td>  -->
<!-- <td> {{$v-> corporation_parameter_1 }} </td>  -->
<!-- <td> {{$v-> corporation_parameter_2 }} </td>  -->
<!-- <td> {{$v-> corporation_parameter_3 }} </td>  -->
<!-- <td> {{$v-> corporation_parameter_4 }} </td>  -->
<!-- <td> {{$v-> corporation_parameter_5 }} </td>  -->
<!-- <td> {{$v-> corporation_parameter_6 }} </td>  -->
<!-- <td> {{$v-> corporation_parameter_7 }} </td>  -->
<!-- <td> {{$v-> corporation_parameter_8 }} </td>  -->
<!-- <td> {{$v-> corporation_parameter_9 }} </td>  -->
<!-- <td> {{$v-> corporation_parameter_10 }} </td>  -->
<!-- <td> {{$v-> tool_label_1 }} </td>  -->
<!-- <td> {{$v-> tool_label_2 }} </td>  -->
<!-- <td> {{$v-> tool_label_3 }} </td>  -->
<!-- <td> {{$v-> certification_label_1 }} </td>  -->
<!-- <td> {{$v-> certification_label_2 }} </td>  -->
<!-- <td> {{$v-> certification_label_3 }} </td>  -->
<!-- <td> {{$v-> tool_parameter_1 }} </td>  -->
<!-- <td> {{$v-> tool_parameter_2 }} </td>  -->
<!-- <td> {{$v-> tool_parameter_3 }} </td>  -->
<!-- <td> {{$v-> certification_parameter_1 }} </td>  -->
<!-- <td> {{$v-> certification_parameter_2 }} </td>  -->
<!-- <td> {{$v-> certification_parameter_3 }} </td>  -->
<!-- <td> {{$v-> resume }} </td>  -->
<!-- <td> {{$v-> resume_segment_1 }} </td>  -->
<!-- <td> {{$v-> resume_segment_2 }} </td>  -->
<!-- <td> {{$v-> resume_segment_3 }} </td>  -->
<!-- <td> {{$v-> resume_segment_4 }} </td>  -->
<!-- <td> {{$v-> resume_segment_5 }} </td>  -->
<!-- <td> {{$v-> resume_segment_6 }} </td>  -->
<!-- <td> {{$v-> grab_status_1 }} </td>  -->
<!-- <td> {{$v-> grab_status_2 }} </td>  -->
<!-- <td> {{$v-> grab_status_3 }} </td>  -->
<!-- <td> {{$v-> analysis_status_parameter_1 }} </td>  -->
<!-- <td> {{$v-> analysis_status_parameter_2 }} </td>  -->
<!-- <td> {{$v-> analysis_status_parameter_3 }} </td>  -->
<!-- <td> {{$v-> analysis_status_parameter_4 }} </td>  -->
<!-- <td> {{$v-> analysis_status_parameter_5 }} </td>  -->
<!-- <td> {{$v-> analysis_status_parameter_6 }} </td>  -->
    	                        
    							
    							
    							<td>{{ $v->created_at }}</td>
    
    							<td class="hidden-480">
    								{{ $v->updated_at }}
    							</td>
    							
    							<td> 
    							<form action='{{ url("/admin/talent/delete/{$v->id}") }}' method="post">
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
    				<div> {!! $talent->render() !!} </div>
    			</div>
    		</div>
    	</div><!-- /.row -->
    	
    					<div id="modal-form" class="modal" tabindex="-1">
                		  <form id="upload-form" role="form" method="post" enctype="multipart/form-data"
            				action="{{ url('/admin/talent/upload') }}">
            				<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">选择要上传的简历文件（只支持txt或zip格式）</h4>
											</div>
			
											<div class="modal-body overflow-visible">
												<div class="row">
													<div class="col-xs-12 col-sm-12">
														<div class="space"></div>

														<input id="file" name="file" type="file" accept=".zip,.txt" />
													</div>

												</div>
											</div>
         
											<div class="modal-footer">
												<button class="btn btn-sm" data-dismiss="modal">
													<i class="icon-remove"></i>
													取消
												</button>

												<button class="btn btn-sm btn-primary" type="button" id="submit-upload-form">
													<i class="icon-ok"></i>
													上传
												</button>
											</div>
										</div>
									</div>
					</form>
				</div><!-- PAGE CONTENT ENDS -->
    	 
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
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose: '拖拽文件到这里或者点击选择文件', //'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				});
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				});

				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
				
				$("#submit-upload-form").click(function(){  
					if ($("#file").val() == "") {
	                     alert("请选择一个文件，再点击上传。");
	                     return false;
	                 }
				   $(this).html("<i class=\"icon-ok\"></i>上传中...");
				   $(this).prop('disabled', true);
                   $("#upload-form").ajaxSubmit({		   
			           success: function (data) {

	   			           	var ret = eval(data);            	
	   			               if(ret.success ){
	   			            	    $(this).html("<i class=\"icon-ok\"></i>上传");
	   						        $(this).prop('disabled', false);
	   			                    alert(ret.message);
	   			                   	location.reload();
	   			               }else{
	   			            	   alert(ret.message);
	   			            	   $(this).html("<i class=\"icon-ok\"></i>上传");
	   						       $(this).prop('disabled', false);
	   			               }
	   			           },
			           error:function (data) {
				           alert(data);
			           }
	   			   }  );  

                });                
				
	  
				
			});
</script>
@endsection		