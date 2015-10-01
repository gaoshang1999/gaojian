

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="work_year">
		工作年限 </label>
	<div class="col-sm-9">
		<input type="number" id="work_year" name="work_year"
			placeholder="工作年限" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('work_year', $talent ? $talent-> work_year : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="start_work_time"> 开始工作时间 </label>
	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="start_work_time" name="start_work_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('start_work_time', $talent ? $talent-> start_work_time : '') }}" />
		<span class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="highest_education"> 最高学历 </label> 
<?php $constant = App\Models\Constant::where('en', 'highest_education')->orderBy('k')->get();?> 
<div class="col-sm-9">
		<select id="highest_education" name="highest_education"
			class="col-xs-10 col-sm-5">
			<option value="-1"></option> @foreach($constant as $c)
			<option value="{{ $c->k }}" @if($talent && $talent->highest_education
				== $c->k ) selected @endif >{{ $c->v }}</option> @endforeach
		</select>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="initial_education"> 起步学历 </label> 
<?php $constant = App\Models\Constant::where('en', 'initial_education')->orderBy('k')->get();?> 
<div class="col-sm-9">
		<select id="initial_education" name="initial_education"
			class="col-xs-10 col-sm-5">
			<option value="-1"></option> @foreach($constant as $c)
			<option value="{{ $c->k }}" @if($talent && $talent->initial_education
				== $c->k ) selected @endif >{{ $c->v }}</option> @endforeach
		</select>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="highest_education_school"> 最高学历学校 </label>
	<div class="col-sm-9">
		<input type="text" id="highest_education_school"
			name="highest_education_school" placeholder="最高学历学校"
			class="col-xs-10 col-sm-5"
			value="{{ old('highest_education_school', $talent ? $talent-> highest_education_school : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="worst_school"> 最差学校 </label>
	<div class="col-sm-9">
		<input type="text" id="worst_school" name="worst_school"
			placeholder="最差学校" class="col-xs-10 col-sm-5"
			value="{{ old('worst_school', $talent ? $talent-> worst_school : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="college_grade"> 本科评级 </label>
	<div class="col-sm-9">
		<input type="number" id="college_grade" name="college_grade"
			placeholder="本科评级" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('college_grade', $talent ? $talent-> college_grade : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="master_grade"> 硕士评级 </label>
	<div class="col-sm-9">
		<input type="number" id="master_grade" name="master_grade"
			placeholder="硕士评级" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('master_grade', $talent ? $talent-> master_grade : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="mba_grade">
		MBA评级 </label>
	<div class="col-sm-9">
		<input type="number" id="mba_grade" name="mba_grade"
			placeholder="MBA评级" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('mba_grade', $talent ? $talent-> mba_grade : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="school_comprehensive_grade"> 学校综合评级 </label>
	<div class="col-sm-9">
		<input type="number" id="school_comprehensive_grade"
			name="school_comprehensive_grade" placeholder="学校综合评级" min="0"
			step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('school_comprehensive_grade', $talent ? $talent-> school_comprehensive_grade : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="college_major"> 本科专业 </label>
	<div class="col-sm-9">
		<input type="text" id="college_major" name="college_major"
			placeholder="本科专业" class="col-xs-10 col-sm-5"
			value="{{ old('college_major', $talent ? $talent-> college_major : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="college_school"> 本科学校 </label>
	<div class="col-sm-9">
		<input type="text" id="college_school" name="college_school"
			placeholder="本科学校" class="col-xs-10 col-sm-5"
			value="{{ old('college_school', $talent ? $talent-> college_school : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="college_start_time"> 本科开始时间 </label>
	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="college_start_time" name="college_start_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('college_start_time', $talent ? $talent-> college_start_time : '') }}" />
		<span class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="college_over_time"> 本科结束时间 </label>
	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="college_over_time" name="college_over_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('college_over_time', $talent ? $talent-> college_over_time : '') }}" />
		<span class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="master_major"> 硕士专业 </label>
	<div class="col-sm-9">
		<input type="text" id="master_major" name="master_major"
			placeholder="硕士专业" class="col-xs-10 col-sm-5"
			value="{{ old('master_major', $talent ? $talent-> master_major : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="master_school"> 硕士学校 </label>
	<div class="col-sm-9">
		<input type="text" id="master_school" name="master_school"
			placeholder="硕士学校" class="col-xs-10 col-sm-5"
			value="{{ old('master_school', $talent ? $talent-> master_school : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="master_start_time"> 硕士开始时间 </label>
	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="master_start_time" name="master_start_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('master_start_time', $talent ? $talent-> master_start_time : '') }}" />
		<span class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="master_over_time"> 硕士结束时间 </label>
	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="master_over_time" name="master_over_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('master_over_time', $talent ? $talent-> master_over_time : '') }}" />
		<span class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="doctor_major"> 博士专业 </label>
	<div class="col-sm-9">
		<input type="text" id="doctor_major" name="doctor_major"
			placeholder="博士专业" class="col-xs-10 col-sm-5"
			value="{{ old('doctor_major', $talent ? $talent-> doctor_major : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="doctor_school"> 博士学校 </label>
	<div class="col-sm-9">
		<input type="text" id="doctor_school" name="doctor_school"
			placeholder="博士学校" class="col-xs-10 col-sm-5"
			value="{{ old('doctor_school', $talent ? $talent-> doctor_school : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="doctor_start_time"> 博士开始时间 </label>
	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="doctor_start_time" name="doctor_start_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('doctor_start_time', $talent ? $talent-> doctor_start_time : '') }}" />
		<span class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="doctor_over_time"> 博士结束时间 </label>
	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="doctor_over_time" name="doctor_over_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('doctor_over_time', $talent ? $talent-> doctor_over_time : '') }}" />
		<span class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="mba_school">
		mba学校 </label>
	<div class="col-sm-9">
		<input type="text" id="mba_school" name="mba_school"
			placeholder="mba学校" class="col-xs-10 col-sm-5"
			value="{{ old('mba_school', $talent ? $talent-> mba_school : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="mba_start_time"> mba开始时间 </label>
	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="mba_start_time" name="mba_start_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('mba_start_time', $talent ? $talent-> mba_start_time : '') }}" />
		<span class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="mba_over_time"> mba结束时间 </label>
	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="mba_over_time" name="mba_over_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('mba_over_time', $talent ? $talent-> mba_over_time : '') }}" />
		<span class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="additional_education"> 附加学历 </label>
	<div class="col-sm-9">
		<input type="text" id="additional_education"
			name="additional_education" placeholder="附加学历"
			class="col-xs-10 col-sm-5"
			value="{{ old('additional_education', $talent ? $talent-> additional_education : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="additional_education_school"> 附加学历学校 </label>
	<div class="col-sm-9">
		<input type="text" id="additional_education_school"
			name="additional_education_school" placeholder="附加学历学校"
			class="col-xs-10 col-sm-5"
			value="{{ old('additional_education_school', $talent ? $talent-> additional_education_school : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="additional_start_time"> 附加开始时间 </label>
	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="additional_start_time" name="additional_start_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('additional_start_time', $talent ? $talent-> additional_start_time : '') }}" />
		<span class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="additional_over_time"> 附加结束时间 </label>
	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="additional_over_time" name="additional_over_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('additional_over_time', $talent ? $talent-> additional_over_time : '') }}" />
		<span class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="education_experience"> 教育经历 </label>
	<div class="col-sm-9">
		<textarea type="text/plain" id="education_experience"
			name="education_experience" rows="5"
			class="col-xs-10 col-sm-5 autosize-transition"> {{ old('education_experience', $talent ? $talent-> education_experience : '') }}</textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="education_parameter_1"> 教育参数1 </label>
	<div class="col-sm-9">
		<input type="number" id="education_parameter_1"
			name="education_parameter_1" placeholder="教育参数1" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('education_parameter_1', $talent ? $talent-> education_parameter_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="education_parameter_2"> 教育参数2 </label>
	<div class="col-sm-9">
		<input type="number" id="education_parameter_2"
			name="education_parameter_2" placeholder="教育参数2" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('education_parameter_2', $talent ? $talent-> education_parameter_2 : '') }}" />
	</div>
</div>
