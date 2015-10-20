

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_label_1"> 需求标签1 </label>

	<div class="col-sm-9">
		<input type="text" id="demand_label_1" name="demand_label_1"
			placeholder="需求标签1" class="col-xs-10 col-sm-5"
			value="{{ old('demand_label_1', $demand  ? $demand-> demand_label_1 : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_label_2"> 需求标签2 </label>

	<div class="col-sm-9">
		<input type="number" id="demand_label_2" name="demand_label_2"
			placeholder="需求标签2" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('demand_label_2', $demand  ? $demand-> demand_label_2 : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_label_3"> 需求标签3 </label>

	<div class="col-sm-9">
		<textarea type="text/plain" id="demand_label_3" name="demand_label_3"
			rows="5" class="col-xs-10 col-sm-5 autosize-transition">{{ old('demand_label_3', $demand  ? $demand-> demand_label_3 : '') }}</textarea>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_label_4"> 需求标签4 </label>

	<div class="col-sm-9">
		<textarea type="text/plain" id="demand_label_4" name="demand_label_4"
			rows="5" class="col-xs-10 col-sm-5 autosize-transition">{{ old('demand_label_4', $demand  ? $demand-> demand_label_4 : '') }}</textarea>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_label_5"> 需求标签5 </label>

	<div class="col-sm-9">
		<textarea type="text/plain" id="demand_label_5" name="demand_label_5"
			rows="5" class="col-xs-10 col-sm-5 autosize-transition">{{ old('demand_label_5', $demand  ? $demand-> demand_label_5 : '') }}</textarea>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_parameter_1"> 需求参数1 </label>

	<div class="col-sm-9">
		<input type="number" id="demand_parameter_1" name="demand_parameter_1"
			placeholder="需求参数1" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('demand_parameter_1', $demand  ? $demand-> demand_parameter_1 : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_parameter_2"> 需求参数2 </label>

	<div class="col-sm-9">
		<input type="number" id="demand_parameter_2" name="demand_parameter_2"
			placeholder="需求参数2" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('demand_parameter_2', $demand  ? $demand-> demand_parameter_2 : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_parameter_3"> 需求参数3 </label>

	<div class="col-sm-9">
		<input type="number" id="demand_parameter_3" name="demand_parameter_3"
			placeholder="需求参数3" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('demand_parameter_3', $demand  ? $demand-> demand_parameter_3 : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_parameter_4"> 需求参数4 </label>

	<div class="col-sm-9">
		<input type="number" id="demand_parameter_4" name="demand_parameter_4"
			placeholder="需求参数4" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('demand_parameter_4', $demand  ? $demand-> demand_parameter_4 : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="demand_parameter_5"> 需求参数5 </label>

	<div class="col-sm-9">
		<input type="number" id="demand_parameter_5" name="demand_parameter_5"
			placeholder="需求参数5" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('demand_parameter_5', $demand  ? $demand-> demand_parameter_5 : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="age_requirement"> 年龄要求 </label>

	<div class="col-sm-9">
		<input type="number" id="age_requirement" name="age_requirement"
			placeholder="年龄要求" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('age_requirement', $demand  ? $demand-> age_requirement : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="sex_requirement"> 性别要求 </label>


	<?php  $constant = App\Models\Constant::where('en', 'sex_requirement')->orderBy('k')->get();?>
	<div class="col-sm-9">
		<select id="sex_requirement" name="sex_requirement"
			class="col-xs-10 col-sm-5">
			<option value="-1"></option> @foreach($constant as $c)
			<option value="{{ $c->k }}" @if($demand && $demand->sex_requirement
				== $c->k ) selected @endif >{{ $c->v }}</option> @endforeach
		</select>
	</div>



</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="major_requirement"> 专业要求 </label>

	<div class="col-sm-9">
		<input type="text" id="major_requirement" name="major_requirement"
			placeholder="专业要求" class="col-xs-10 col-sm-5"
			value="{{ old('major_requirement', $demand  ? $demand-> major_requirement : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="work_year_requirement"> 工作年限要求 </label>

	<div class="col-sm-9">
		<input type="number" id="work_year_requirement"
			name="work_year_requirement" placeholder="工作年限要求" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('work_year_requirement', $demand  ? $demand-> work_year_requirement : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="education_requirement"> 学历要求 </label>


	<?php  $constant = App\Models\Constant::where('en', 'education_requirement')->orderBy('k')->get();?>
	<div class="col-sm-9">
		<select id="education_requirement" name="education_requirement"
			class="col-xs-10 col-sm-5">
			<option value="-1"></option> @foreach($constant as $c)
			<option value="{{ $c->k }}" @if($demand && $demand->education_requirement
				== $c->k ) selected @endif >{{ $c->v }}</option> @endforeach
		</select>
	</div>



</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="language_requirement"> 语言要求 </label>

	<div class="col-sm-9">
		<input type="text" id="language_requirement"
			name="language_requirement" placeholder="语言要求"
			class="col-xs-10 col-sm-5"
			value="{{ old('language_requirement', $demand  ? $demand-> language_requirement : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="occupation_requirement"> 行业要求 </label>

	<div class="col-sm-9">
		<textarea type="text/plain" id="occupation_requirement"
			name="occupation_requirement" rows="5"
			class="col-xs-10 col-sm-5 autosize-transition">{{ old('occupation_requirement', $demand  ? $demand-> occupation_requirement : '') }}</textarea>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="corporation_requirement"> 公司要求 </label>

	<div class="col-sm-9">
		<textarea type="text/plain" id="corporation_requirement"
			name="corporation_requirement" rows="5"
			class="col-xs-10 col-sm-5 autosize-transition">{{ old('corporation_requirement', $demand  ? $demand-> corporation_requirement : '') }}</textarea>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="product_requirement"> 产品要求 </label>

	<div class="col-sm-9">
		<textarea type="text/plain" id="product_requirement"
			name="product_requirement" rows="5"
			class="col-xs-10 col-sm-5 autosize-transition">{{ old('product_requirement', $demand  ? $demand-> product_requirement : '') }}</textarea>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="certification_requirement"> 认证要求 </label>

	<div class="col-sm-9">
		<textarea type="text/plain" id="certification_requirement"
			name="certification_requirement" rows="5"
			class="col-xs-10 col-sm-5 autosize-transition">{{ old('certification_requirement', $demand  ? $demand-> certification_requirement : '') }}</textarea>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="tool_requirement"> 工具要求 </label>

	<div class="col-sm-9">
		<input type="text" id="tool_requirement" name="tool_requirement"
			placeholder="工具要求" class="col-xs-10 col-sm-5"
			value="{{ old('tool_requirement', $demand  ? $demand-> tool_requirement : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="position_description"> 职位描述 </label>

	<div class="col-sm-9">
		<textarea type="text/plain" id="position_description"
			name="position_description" rows="5"
			class="col-xs-10 col-sm-5 autosize-transition">{{ old('position_description', $demand  ? $demand-> position_description : '') }}</textarea>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="additional_specification"> 补充说明 </label>

	<div class="col-sm-9">
		<textarea type="text/plain" id="additional_specification"
			name="additional_specification" rows="5"
			class="col-xs-10 col-sm-5 autosize-transition">{{ old('additional_specification', $demand  ? $demand-> additional_specification : '') }}</textarea>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="corporation_synopsis"> 公司简介 </label>

	<div class="col-sm-9">
		<textarea type="text/plain" id="corporation_synopsis"
			name="corporation_synopsis" rows="5"
			class="col-xs-10 col-sm-5 autosize-transition">{{ old('corporation_synopsis', $demand  ? $demand-> corporation_synopsis : '') }}</textarea>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="position_qualification"> 任职资质 </label>

	<div class="col-sm-9">
		<textarea type="text/plain" id="position_qualification"
			name="position_qualification" rows="5"
			class="col-xs-10 col-sm-5 autosize-transition">{{ old('position_qualification', $demand  ? $demand-> position_qualification : '') }}</textarea>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="whole_jd">
		整体JD </label>

	<div class="col-sm-9">
		<textarea type="text/plain" id="whole_jd" name="whole_jd" rows="5"
			class="col-xs-10 col-sm-5 autosize-transition">{{ old('whole_jd', $demand  ? $demand-> whole_jd : '') }}</textarea>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="highlight">
		亮点 </label>

	<div class="col-sm-9">
		<textarea type="text/plain" id="highlight" name="highlight" rows="5"
			class="col-xs-10 col-sm-5 autosize-transition">{{ old('highlight', $demand  ? $demand-> highlight : '') }}</textarea>
	</div>


</div>