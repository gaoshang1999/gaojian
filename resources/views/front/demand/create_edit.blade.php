@extends('front/front')

{{-- Content --}}
@section('content')

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper"> 
		      @include('errors.list')
              <!-- page start-->
   
                 <div class="row"><!-- row start-->
                  <div class="col-lg-8"><!-- col start-->
                      <section class="panel">
                          <header class="panel-heading">
                             职位{{ $demand ? '编辑' : '新增' }}
                          </header>
                        <div class="panel-body">
                              <form class="form-horizontal " method="post" action="{{ url('/front/demand/' . ($demand ? 'edit/'.$demand->id : 'add')) }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                  <div class="form-group">
                                      <label class="col-sm-2 control-label"><span style="color: red">*</span>职位名称</label>
                                      <div class="col-sm-8">
                                          <input type="text" class="form-control" placeholder="职位名称" name="post_name"  value="{{ old('post_name', $demand  ? $demand-> post_name : '') }}">
                                      </div>
                                  </div>
                        
                                 <div class="form-group">
                                      <label class="col-sm-2 control-label">所属部门</label>
                                      <div class="col-sm-8">
                                          <input type="text" class="form-control"  placeholder="所属部门" name="attach_department"
			value="{{ old('attach_department', $demand  ? $demand-> attach_department : '') }}">
                                      </div>
                                  </div>

                                 <div class="form-group">
                                      <label class="col-sm-2 control-label"><span style="color: red">*</span>职能</label>
                                        <div class="col-sm-8" col-sm-offset-3>
                                       
                                             <input type="text" class="form-control" placeholder="职能"  id="demand_type_label_1" name="demand_type_label_1"			  
			value="{{ old('demand_type_label_1', $demand  ? $demand-> demand_type_label_1 : '') }}" />
                                           
                                          </div>
                                  </div>

                                      <div class="form-group">
                                      <label class="col-sm-2 control-label"><span style="color: red">*</span>工作地点</label>
                                        <div class="col-sm-8" col-sm-offset-3>
                                       
                                       <input type="text" class="form-control"  placeholder="工作地点"  id="work_location" name="work_location"
			value="{{ old('work_location', $demand  ? $demand-> work_location : '') }}" />
			
<!--                                               <select class="form-control m-bot15"> -->
<!--                                                   <option>北京</option> -->
<!--                                                   <option>上海</option> -->
<!--                                                   <option>深圳</option> -->
<!--                                               </select> -->
                                           
                                          </div>
                                  </div>

                                    <div class="form-group">
                                      <label class="col-sm-2 control-label"><span style="color: red">*</span>工作时间下限</label>
                                      <div class="col-sm-8">
                                          <input type="text" id="work_year_requirement"
			name="work_year_requirement" placeholder="工作时间下限" min="0" step="0.01"
			class="form-control"
			value="{{ old('work_year_requirement', $demand  ? $demand-> work_year_requirement : '') }}" />
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-sm-2 control-label"><span style="color: red">*</span>工作时间上限</label>
                                      <div class="col-sm-8">
                                          <input type="text" id="demand_type_parameter_1"
			name="demand_type_parameter_1" placeholder="工作时间上限" min="0"
			step="0.01" class="form-control"
			value="{{ old('demand_type_parameter_1', $demand  ? $demand-> demand_type_parameter_1 : '') }}" />
                                      </div>
                                  </div>



                                <div class="form-group">
                                      <label class="col-sm-2 control-label">汇报对象</label>
                                      <div class="col-sm-8">
                                          <input type="text" class="form-control" placeholder="汇报对象"  id="report_object" name="report_object"
			value="{{ old('report_object', $demand  ? $demand-> report_object : '') }}">
                                      </div>
                                  </div>


                                          <div class="form-group">
                                      <label class="col-sm-2 control-label">管理人数</label>
                                        <div class="col-md-8" col-sm-offset-3>
                                       
<!--                                               <select class="form-control m-bot15"> -->
<!--                                                   <option>未知</option> -->
<!--                                                   <option>0</option> -->
<!--                                                   <option>1-5</option> -->
<!--                                                   <option>5-10</option> -->
<!--                                                   <option>大于10</option> -->
<!--                                               </select> -->
                                           		<input type="text" id="subordinate_person_numbers"
			name="subordinate_person_numbers" placeholder="下属人数" min="0"
			step="0.01" class="form-control"
			value="{{ old('subordinate_person_numbers', $demand  ? $demand-> subordinate_person_numbers : '') }}" />
                                          </div>
                                       </div>



                                <div class="form-group">
                                      <label class="col-sm-2 control-label">税前年薪下限（万元RMB)</label>
                                      <div class="col-sm-8">
                                          <input type="text" id="pretax_annual_salary"
			name="pretax_annual_salary" placeholder="税前年薪" min="0" step="0.01"
			class="form-control"
			value="{{ old('pretax_annual_salary', $demand  ? $demand-> pretax_annual_salary : '') }}" />
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">税前年薪上限（万元RMB)</label>
                                      <div class="col-sm-8">
                                    <input type="text" id="demand_type_parameter_2"
			name="demand_type_parameter_2" placeholder="税前年薪上限（万元RMB)" min="0"
			step="0.01" class="form-control"
			value="{{ old('demand_type_parameter_2', $demand  ? $demand-> demand_type_parameter_2 : '') }}" />
                                      </div>
                                  </div>


                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">福利待遇</label>
                                        <div class="col-md-8" col-sm-offset-3>
                                       
<!--                                               <select class="form-control m-bot15"> -->
<!--                                                   <option>未知</option> -->
<!--                                                   <option>无五险一金</option> -->
<!--                                                   <option>有五险一金</option> -->
<!--                                                   <option>五险一金+额外补助</option> -->
<!--                                                   <option>其他</option> -->
<!--                                               </select> -->
                             <input type="text" id="welfare" name="welfare" placeholder="福利待遇"
			class="form-control"
			value="{{ old('welfare', $demand  ? $demand-> welfare : '') }}" />              
                                          </div>
                                       </div>


                                         <div class="form-group">
                                      <label class="col-sm-2 control-label">招聘周期</label>
                                        <div class="col-md-8" col-sm-offset-3>
                                       
<!--                                               <select class="form-control m-bot15"> -->
<!--                                                   <option>未知</option> -->
<!--                                                   <option>2周内</option> -->
<!--                                                   <option>1个月内</option> -->
<!--                                                   <option>2个月内</option> -->
<!--                                                   <option>3个月内</option> -->
<!--                                                   <option>其他</option> -->
<!--                                               </select> -->
                                           
                                           <input type="text" id="recruit_period" name="recruit_period"
			placeholder="招聘周期" min="0" step="0.01" class="form-control"
			value="{{ old('recruit_period', $demand  ? $demand-> recruit_period : '') }}" />
                                           
                                          </div>
                                       </div>


                                  


                                         


                                          <div class="form-group">
                                      <label class="col-sm-2 control-label"><span style="color: red">*</span>最低学历要求</label>
                                        <div class="col-md-4" col-sm-offset-3>
                                       
                                  <?php  $constant = App\Models\Constant::where('en', 'education_requirement')->orderBy('k')->get();?>
 
		<select id="education_requirement" name="education_requirement"
			class="form-control m-bot15">
			<option ></option> @foreach($constant as $c)
			<option value="{{ $c->k }}" @if($demand && $demand->education_requirement
				== $c->k ) selected @endif >{{ $c->v }}</option> @endforeach
		</select>
	         
                                          </div>
                                       </div>


                                          <div class="form-group">
                                      <label class="col-sm-2 control-label">性别要求</label>
                                        <div class="col-md-4" col-sm-offset-3>
                                       

                                           	<?php  $constant = App\Models\Constant::where('en', 'sex_requirement')->orderBy('k')->get();?>
 
                                		<select id="sex_requirement" name="sex_requirement"
                                			class="form-control m-bot15">
                                			<option value="-1"></option> @foreach($constant as $c)
                                			<option value="{{ $c->k }}" @if($demand && $demand->sex_requirement
                                				== $c->k ) selected @endif >{{ $c->v }}</option> @endforeach
                                		</select>
	 
                                          </div>
                                       </div>

                                         <div class="form-group">
                                      <label class="col-sm-2 control-label">年龄下限</label>
                                      <div class="col-sm-8">
                                          <input type="text" class="form-control"  placeholder="年龄下限" name="age_requirement"
			value="{{ old('age_requirement', $demand  ? $demand-> age_requirement : '') }}" />
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">年龄上限</label>
                                      <div class="col-sm-8">
                                          <input type="text" class="form-control"  placeholder="年龄上限" name="occupation_parameter_1"
			value="{{ old('occupation_parameter_1', $demand  ? $demand-> occupation_parameter_1 : '') }}" />
                                      </div>
                                  </div>



                                         <div class="form-group">
                                                  <label class="control-label col-sm-2"><span style="color: red">*</span>职位描述</label>
                                                  <div class="col-sm-8">
                                                      <textarea class="form-control ckeditor" placeholder="职位描述"  name="position_description" rows="6">{{ old('position_description', $demand  ? $demand-> position_description : '') }}</textarea>
                                                  </div>
                                              </div>


                                              <div class="form-group">
                                                  <label class="control-label col-sm-2">补充信息</label>
                                                  <div class="col-sm-8">
                                                      <textarea class="form-control ckeditor"  placeholder="补充信息" name="additional_specification" rows="10">{{ old('additional_specification', $demand  ? $demand-> additional_specification : '') }}</textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                          <div class="col-lg-offset-4 col-lg-8">
                                              <button class="btn btn-primary" type="submit">保存</button>
                                             <button class="btn btn-warning"  role="button" onclick="{{ url('/front/demand/' )}}">返回</button><br>

                                          </div>
                                          </div>




							<input type="hidden" name="referer"
								value="{{ Request::header('referer') }}" />

                     
                                  </div>
                              </form>
                          </div>
                      </section>

                      </div>  <!-- col end-->


            
                    </div>  <!-- row end-->




              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
@endsection