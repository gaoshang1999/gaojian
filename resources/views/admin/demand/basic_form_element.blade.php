<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="recruit_corporation"> 招聘公司 </label>

	<div class="col-sm-9">
		<input type="text" id="recruit_corporation" name="recruit_corporation"
			placeholder="招聘公司" class="col-xs-10 col-sm-5"
			value="{{ old('recruit_corporation', $demand  ? $demand-> recruit_corporation : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="recruit_user"> 招聘用户 </label>

	<div class="col-sm-9">
		<input type="text" id="recruit_user" name="recruit_user"
			placeholder="招聘用户" class="col-xs-10 col-sm-5"
			value="{{ old('recruit_user', $demand  ? $demand-> recruit_user : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="publish_time"> 发布时间 </label>

	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="publish_time" name="publish_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('publish_time', $demand  ? $demand-> publish_time : '') }}" />
		<span class="input-group-addon"> <i
			class="icon-calendar bigger-100"></i>
		</span>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="recruit_period"> 招聘周期 </label>

	<div class="col-sm-9">
		<input type="number" id="recruit_period" name="recruit_period"
			placeholder="招聘周期" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('recruit_period', $demand  ? $demand-> recruit_period : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="end_time">
		截止时间 </label>

	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="end_time" name="end_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('end_time', $demand  ? $demand-> end_time : '') }}" />
		<span class="input-group-addon"> <i
			class="icon-calendar bigger-100"></i>
		</span>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_person_numbers"> 需求人数 </label>

	<div class="col-sm-9">
		<input type="number" id="demand_person_numbers"
			name="demand_person_numbers" placeholder="需求人数" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('demand_person_numbers', $demand  ? $demand-> demand_person_numbers : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_type_label_1"> 需求类型标签1 </label>

	<div class="col-sm-9">
		<input type="text" id="demand_type_label_1" name="demand_type_label_1"
			placeholder="需求类型标签1" class="col-xs-10 col-sm-5"
			value="{{ old('demand_type_label_1', $demand  ? $demand-> demand_type_label_1 : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_type_label_2"> 需求类型标签2 </label>

	<div class="col-sm-9">
		<textarea type="text/plain" id="demand_type_label_2"
			name="demand_type_label_2" rows="5"
			class="col-xs-10 col-sm-5 autosize-transition">{{ old('demand_type_label_2', $demand  ? $demand-> demand_type_label_2 : '') }}</textarea>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_type_parameter_1"> 需求类型参数1 </label>

	<div class="col-sm-9">
		<input type="number" id="demand_type_parameter_1"
			name="demand_type_parameter_1" placeholder="需求类型参数1" min="0"
			step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('demand_type_parameter_1', $demand  ? $demand-> demand_type_parameter_1 : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_type_parameter_2"> 需求类型参数2 </label>

	<div class="col-sm-9">
		<input type="number" id="demand_type_parameter_2"
			name="demand_type_parameter_2" placeholder="需求类型参数2" min="0"
			step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('demand_type_parameter_2', $demand  ? $demand-> demand_type_parameter_2 : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="post_name">
		岗位名称 </label>

	<div class="col-sm-9">
		<input type="text" id="post_name" name="post_name" placeholder="岗位名称"
			class="col-xs-10 col-sm-5"
			value="{{ old('post_name', $demand  ? $demand-> post_name : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="work_location"> 工作地点 </label>

	<div class="col-sm-9">
		<input type="text" id="work_location" name="work_location"
			placeholder="工作地点" class="col-xs-10 col-sm-5"
			value="{{ old('work_location', $demand  ? $demand-> work_location : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="attach_department"> 所属部门 </label>

	<div class="col-sm-9">
		<input type="text" id="attach_department" name="attach_department"
			placeholder="所属部门" class="col-xs-10 col-sm-5"
			value="{{ old('attach_department', $demand  ? $demand-> attach_department : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="report_object"> 汇报对象 </label>

	<div class="col-sm-9">
		<input type="text" id="report_object" name="report_object"
			placeholder="汇报对象" class="col-xs-10 col-sm-5"
			value="{{ old('report_object', $demand  ? $demand-> report_object : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="subordinate_person_numbers"> 下属人数 </label>

	<div class="col-sm-9">
		<input type="number" id="subordinate_person_numbers"
			name="subordinate_person_numbers" placeholder="下属人数" min="0"
			step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('subordinate_person_numbers', $demand  ? $demand-> subordinate_person_numbers : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="pretax_annual_salary"> 税前年薪 </label>

	<div class="col-sm-9">
		<input type="number" id="pretax_annual_salary"
			name="pretax_annual_salary" placeholder="税前年薪" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('pretax_annual_salary', $demand  ? $demand-> pretax_annual_salary : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="pretax_salary"> 税前月薪 </label>

	<div class="col-sm-9">
		<input type="number" id="pretax_salary" name="pretax_salary"
			placeholder="税前月薪" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('pretax_salary', $demand  ? $demand-> pretax_salary : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="social_insurance"> 社保 </label>

	<div class="col-sm-9">
		<input type="text" id="social_insurance" name="social_insurance"
			placeholder="社保" class="col-xs-10 col-sm-5"
			value="{{ old('social_insurance', $demand  ? $demand-> social_insurance : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="bonus">
		奖金 </label>

	<div class="col-sm-9">
		<input type="text" id="bonus" name="bonus" placeholder="奖金"
			class="col-xs-10 col-sm-5"
			value="{{ old('bonus', $demand  ? $demand-> bonus : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="welfare">
		福利 </label>

	<div class="col-sm-9">
		<input type="text" id="welfare" name="welfare" placeholder="福利"
			class="col-xs-10 col-sm-5"
			value="{{ old('welfare', $demand  ? $demand-> welfare : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="work_city">
		工作城市 </label>

	<div class="col-sm-9">
		<input type="text" id="work_city" name="work_city" placeholder="工作城市"
			class="col-xs-10 col-sm-5"
			value="{{ old('work_city', $demand  ? $demand-> work_city : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="interview_flow"> 面试流程 </label>

	<div class="col-sm-9">
		<input type="text" id="interview_flow" name="interview_flow"
			placeholder="面试流程" class="col-xs-10 col-sm-5"
			value="{{ old('interview_flow', $demand  ? $demand-> interview_flow : '') }}" />
	</div>


</div>