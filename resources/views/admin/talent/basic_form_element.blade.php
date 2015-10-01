
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="name"> 姓名 </label>
	<div class="col-sm-9">
		<input type="text" id="name" name="name" placeholder="姓名"
			class="col-xs-10 col-sm-5"
			value="{{ old('name', $talent ? $talent-> name : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="mobile"> 手机
	</label>
	<div class="col-sm-9">
		<input type="text" id="mobile" name="mobile" placeholder="手机"
			class="col-xs-10 col-sm-5"
			value="{{ old('mobile', $talent ? $talent-> mobile : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="last_corporation"> 最近公司 </label>
	<div class="col-sm-9">
		<input type="text" id="last_corporation" name="last_corporation"
			placeholder="最近公司" class="col-xs-10 col-sm-5"
			value="{{ old('last_corporation', $talent ? $talent-> last_corporation : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="sex"> 性别 </label> 
<?php $constant = App\Models\Constant::where('en', 'sex')->orderBy('k')->get();?> 
<div class="col-sm-9">
		<select id="sex" name="sex" class="col-xs-10 col-sm-5">
			<option value="-1"></option> @foreach($constant as $c)
			<option value="{{ $c->k }}" @if($talent && $talent->sex == $c->k )
				selected @endif >{{ $c->v }}</option> @endforeach
		</select>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="id_card">
		身份证 </label>
	<div class="col-sm-9">
		<input type="text" id="id_card" name="id_card" placeholder="身份证"
			class="col-xs-10 col-sm-5"
			value="{{ old('id_card', $talent ? $talent-> id_card : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="birth_date">
		出生日期 </label>
	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="birth_date" name="birth_date" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('birth_date', $talent ? $talent-> birth_date : '') }}" />
		<span class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for=" permanent_residence"> 户口所在地点 </label>
	<div class="col-sm-9">
		<input type="text" id=" permanent_residence"
			name=" permanent_residence" placeholder="户口所在地点"
			class="col-xs-10 col-sm-5"
			value="{{ old(' permanent_residence', $talent ? $talent-> permanent_residence : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="location">
		所在地点 </label>
	<div class="col-sm-9">
		<input type="text" id="location" name="location" placeholder="所在地点"
			class="col-xs-10 col-sm-5"
			value="{{ old('location', $talent ? $talent-> location : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="basic_extension_info_1"> 基本扩展信息1 </label>
	<div class="col-sm-9">
		<input type="text" id="basic_extension_info_1"
			name="basic_extension_info_1" placeholder="基本扩展信息1"
			class="col-xs-10 col-sm-5"
			value="{{ old('basic_extension_info_1', $talent ? $talent-> basic_extension_info_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="basic_extension_info_2"> 基本扩展信息2 </label>
	<div class="col-sm-9">
		<input type="text" id="basic_extension_info_2"
			name="basic_extension_info_2" placeholder="基本扩展信息2"
			class="col-xs-10 col-sm-5"
			value="{{ old('basic_extension_info_2', $talent ? $talent-> basic_extension_info_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="basic_extension_info_3"> 基本扩展信息3 </label>
	<div class="col-sm-9">
		<input type="text" id="basic_extension_info_3"
			name="basic_extension_info_3" placeholder="基本扩展信息3"
			class="col-xs-10 col-sm-5"
			value="{{ old('basic_extension_info_3', $talent ? $talent-> basic_extension_info_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="basic_extension_info_4"> 基本扩展信息4 </label>
	<div class="col-sm-9">
		<input type="text" id="basic_extension_info_4"
			name="basic_extension_info_4" placeholder="基本扩展信息4"
			class="col-xs-10 col-sm-5"
			value="{{ old('basic_extension_info_4', $talent ? $talent-> basic_extension_info_4 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="basic_extension_info_5"> 基本扩展信息5 </label>
	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="basic_extension_info_5" name="basic_extension_info_5" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('basic_extension_info_5', $talent ? $talent-> basic_extension_info_5 : '') }}" />
		<span class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="english_level"> 英文水平 </label> 
<?php $constant = App\Models\Constant::where('en', 'english_level')->orderBy('k')->get();?> 
<div class="col-sm-9">
		<select id="english_level" name="english_level"
			class="col-xs-10 col-sm-5">
			<option value="-1"></option> @foreach($constant as $c)
			<option value="{{ $c->k }}" @if($talent && $talent->english_level ==
				$c->k ) selected @endif >{{ $c->v }}</option> @endforeach
		</select>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="other_language_level"> 其他语言水平 </label>
	<div class="col-sm-9">
		<input type="text" id="other_language_level"
			name="other_language_level" placeholder="其他语言水平"
			class="col-xs-10 col-sm-5"
			value="{{ old('other_language_level', $talent ? $talent-> other_language_level : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="expect_parameter_1"> 期望参数1 </label>
	<div class="col-sm-9">
		<input type="text" id="expect_parameter_1" name="expect_parameter_1"
			placeholder="期望参数1" class="col-xs-10 col-sm-5"
			value="{{ old('expect_parameter_1', $talent ? $talent-> expect_parameter_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="expect_parameter_2"> 期望参数2 </label>
	<div class="col-sm-9">
		<input type="text" id="expect_parameter_2" name="expect_parameter_2"
			placeholder="期望参数2" class="col-xs-10 col-sm-5"
			value="{{ old('expect_parameter_2', $talent ? $talent-> expect_parameter_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="expect_parameter_3"> 期望参数3 </label>
	<div class="col-sm-9">
		<input type="text" id="expect_parameter_3" name="expect_parameter_3"
			placeholder="期望参数3" class="col-xs-10 col-sm-5"
			value="{{ old('expect_parameter_3', $talent ? $talent-> expect_parameter_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="expect_label_1"> 期望标签1 </label>
	<div class="col-sm-9">
		<input type="text" id="expect_label_1" name="expect_label_1"
			placeholder="期望标签1" class="col-xs-10 col-sm-5"
			value="{{ old('expect_label_1', $talent ? $talent-> expect_label_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="expect_label_2"> 期望标签2 </label>
	<div class="col-sm-9">
		<input type="text" id="expect_label_2" name="expect_label_2"
			placeholder="期望标签2" class="col-xs-10 col-sm-5"
			value="{{ old('expect_label_2', $talent ? $talent-> expect_label_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="expect_label_3"> 期望标签3 </label>
	<div class="col-sm-9">
		<input type="text" id="expect_label_3" name="expect_label_3"
			placeholder="期望标签3" class="col-xs-10 col-sm-5"
			value="{{ old('expect_label_3', $talent ? $talent-> expect_label_3 : '') }}" />
	</div>
</div>
