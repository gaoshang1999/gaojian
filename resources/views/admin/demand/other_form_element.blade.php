
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="occupation_extension_requirement_1"> 行业扩展要求1 </label>
	<div class="col-sm-9">
		<input type="text" id="occupation_extension_requirement_1"
			name="occupation_extension_requirement_1" placeholder="行业扩展要求1"
			class="col-xs-10 col-sm-5"
			value="{{ old('occupation_extension_requirement_1', $demand ? $demand-> occupation_extension_requirement_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="occupation_extension_requirement_2"> 行业扩展要求2 </label>
	<div class="col-sm-9">
		<input type="text" id="occupation_extension_requirement_2"
			name="occupation_extension_requirement_2" placeholder="行业扩展要求2"
			class="col-xs-10 col-sm-5"
			value="{{ old('occupation_extension_requirement_2', $demand ? $demand-> occupation_extension_requirement_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="occupation_extension_requirement_3"> 行业扩展要求3 </label>
	<div class="col-sm-9">
		<input type="text" id="occupation_extension_requirement_3"
			name="occupation_extension_requirement_3" placeholder="行业扩展要求3"
			class="col-xs-10 col-sm-5"
			value="{{ old('occupation_extension_requirement_3', $demand ? $demand-> occupation_extension_requirement_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="occupation_parameter_1"> 行业参数1 </label>
	<div class="col-sm-9">
		<input type="number" id="occupation_parameter_1"
			name="occupation_parameter_1" placeholder="行业参数1" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('occupation_parameter_1', $demand ? $demand-> occupation_parameter_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="occupation_parameter_2"> 行业参数2 </label>
	<div class="col-sm-9">
		<input type="number" id="occupation_parameter_2"
			name="occupation_parameter_2" placeholder="行业参数2" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('occupation_parameter_2', $demand ? $demand-> occupation_parameter_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="occupation_parameter_3"> 行业参数3 </label>
	<div class="col-sm-9">
		<input type="number" id="occupation_parameter_3"
			name="occupation_parameter_3" placeholder="行业参数3" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('occupation_parameter_3', $demand ? $demand-> occupation_parameter_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="corporation_extension_requirement_1"> 公司扩展要求1 </label>
	<div class="col-sm-9">
		<input type="text" id="corporation_extension_requirement_1"
			name="corporation_extension_requirement_1" placeholder="公司扩展要求1"
			class="col-xs-10 col-sm-5"
			value="{{ old('corporation_extension_requirement_1', $demand ? $demand-> corporation_extension_requirement_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="corporation_extension_requirement_2"> 公司扩展要求2 </label>
	<div class="col-sm-9">
		<input type="text" id="corporation_extension_requirement_2"
			name="corporation_extension_requirement_2" placeholder="公司扩展要求2"
			class="col-xs-10 col-sm-5"
			value="{{ old('corporation_extension_requirement_2', $demand ? $demand-> corporation_extension_requirement_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="corporation_extension_requirement_3"> 公司扩展要求3 </label>
	<div class="col-sm-9">
		<input type="text" id="corporation_extension_requirement_3"
			name="corporation_extension_requirement_3" placeholder="公司扩展要求3"
			class="col-xs-10 col-sm-5"
			value="{{ old('corporation_extension_requirement_3', $demand ? $demand-> corporation_extension_requirement_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="corporation_parameter_1"> 公司参数1 </label>
	<div class="col-sm-9">
		<input type="number" id="corporation_parameter_1"
			name="corporation_parameter_1" placeholder="公司参数1" min="0"
			step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('corporation_parameter_1', $demand ? $demand-> corporation_parameter_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="corporation_parameter_2"> 公司参数2 </label>
	<div class="col-sm-9">
		<input type="number" id="corporation_parameter_2"
			name="corporation_parameter_2" placeholder="公司参数2" min="0"
			step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('corporation_parameter_2', $demand ? $demand-> corporation_parameter_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="corporation_parameter_3"> 公司参数3 </label>
	<div class="col-sm-9">
		<input type="number" id="corporation_parameter_3"
			name="corporation_parameter_3" placeholder="公司参数3" min="0"
			step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('corporation_parameter_3', $demand ? $demand-> corporation_parameter_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="product_extension_requirement_1"> 产品扩展要求1 </label>
	<div class="col-sm-9">
		<input type="text" id="product_extension_requirement_1"
			name="product_extension_requirement_1" placeholder="产品扩展要求1"
			class="col-xs-10 col-sm-5"
			value="{{ old('product_extension_requirement_1', $demand ? $demand-> product_extension_requirement_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="product_extension_requirement_2"> 产品扩展要求2 </label>
	<div class="col-sm-9">
		<input type="text" id="product_extension_requirement_2"
			name="product_extension_requirement_2" placeholder="产品扩展要求2"
			class="col-xs-10 col-sm-5"
			value="{{ old('product_extension_requirement_2', $demand ? $demand-> product_extension_requirement_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="product_extension_requirement_3"> 产品扩展要求3 </label>
	<div class="col-sm-9">
		<input type="text" id="product_extension_requirement_3"
			name="product_extension_requirement_3" placeholder="产品扩展要求3"
			class="col-xs-10 col-sm-5"
			value="{{ old('product_extension_requirement_3', $demand ? $demand-> product_extension_requirement_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="product_parameter_1"> 产品参数1 </label>
	<div class="col-sm-9">
		<input type="number" id="product_parameter_1"
			name="product_parameter_1" placeholder="产品参数1" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('product_parameter_1', $demand ? $demand-> product_parameter_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="product_parameter_2"> 产品参数2 </label>
	<div class="col-sm-9">
		<input type="number" id="product_parameter_2"
			name="product_parameter_2" placeholder="产品参数2" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('product_parameter_2', $demand ? $demand-> product_parameter_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="product_parameter_3"> 产品参数3 </label>
	<div class="col-sm-9">
		<input type="number" id="product_parameter_3"
			name="product_parameter_3" placeholder="产品参数3" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('product_parameter_3', $demand ? $demand-> product_parameter_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="certification_requirement_1"> 认证要求1 </label>
	<div class="col-sm-9">
		<input type="text" id="certification_requirement_1"
			name="certification_requirement_1" placeholder="认证要求1"
			class="col-xs-10 col-sm-5"
			value="{{ old('certification_requirement_1', $demand ? $demand-> certification_requirement_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="certification_requirement_2"> 认证要求2 </label>
	<div class="col-sm-9">
		<input type="text" id="certification_requirement_2"
			name="certification_requirement_2" placeholder="认证要求2"
			class="col-xs-10 col-sm-5"
			value="{{ old('certification_requirement_2', $demand ? $demand-> certification_requirement_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="certification_requirement_3"> 认证要求3 </label>
	<div class="col-sm-9">
		<input type="text" id="certification_requirement_3"
			name="certification_requirement_3" placeholder="认证要求3"
			class="col-xs-10 col-sm-5"
			value="{{ old('certification_requirement_3', $demand ? $demand-> certification_requirement_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="certification_parameter_1"> 认证参数1 </label>
	<div class="col-sm-9">
		<input type="number" id="certification_parameter_1"
			name="certification_parameter_1" placeholder="认证参数1" min="0"
			step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('certification_parameter_1', $demand ? $demand-> certification_parameter_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="certification_parameter_2"> 认证参数2 </label>
	<div class="col-sm-9">
		<input type="number" id="certification_parameter_2"
			name="certification_parameter_2" placeholder="认证参数2" min="0"
			step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('certification_parameter_2', $demand ? $demand-> certification_parameter_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="certification_parameter_3"> 认证参数3 </label>
	<div class="col-sm-9">
		<input type="number" id="certification_parameter_3"
			name="certification_parameter_3" placeholder="认证参数3" min="0"
			step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('certification_parameter_3', $demand ? $demand-> certification_parameter_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="tool_extension_requirement_1"> 工具扩展要求1 </label>
	<div class="col-sm-9">
		<input type="text" id="tool_extension_requirement_1"
			name="tool_extension_requirement_1" placeholder="工具扩展要求1"
			class="col-xs-10 col-sm-5"
			value="{{ old('tool_extension_requirement_1', $demand ? $demand-> tool_extension_requirement_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="tool_extension_requirement_2"> 工具扩展要求2 </label>
	<div class="col-sm-9">
		<input type="text" id="tool_extension_requirement_2"
			name="tool_extension_requirement_2" placeholder="工具扩展要求2"
			class="col-xs-10 col-sm-5"
			value="{{ old('tool_extension_requirement_2', $demand ? $demand-> tool_extension_requirement_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="tool_extension_requirement_3"> 工具扩展要求3 </label>
	<div class="col-sm-9">
		<input type="text" id="tool_extension_requirement_3"
			name="tool_extension_requirement_3" placeholder="工具扩展要求3"
			class="col-xs-10 col-sm-5"
			value="{{ old('tool_extension_requirement_3', $demand ? $demand-> tool_extension_requirement_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="tool_parameter_1"> 工具参数1 </label>
	<div class="col-sm-9">
		<input type="number" id="tool_parameter_1" name="tool_parameter_1"
			placeholder="工具参数1" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('tool_parameter_1', $demand ? $demand-> tool_parameter_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="tool_parameter_2"> 工具参数2 </label>
	<div class="col-sm-9">
		<input type="number" id="tool_parameter_2" name="tool_parameter_2"
			placeholder="工具参数2" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('tool_parameter_2', $demand ? $demand-> tool_parameter_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="tool_parameter_3"> 工具参数3 </label>
	<div class="col-sm-9">
		<input type="number" id="tool_parameter_3" name="tool_parameter_3"
			placeholder="工具参数3" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('tool_parameter_3', $demand ? $demand-> tool_parameter_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="recruit_corporation_label_1"> 招聘公司标签1 </label>
	<div class="col-sm-9">
		<input type="text" id="recruit_corporation_label_1"
			name="recruit_corporation_label_1" placeholder="招聘公司标签1"
			class="col-xs-10 col-sm-5"
			value="{{ old('recruit_corporation_label_1', $demand ? $demand-> recruit_corporation_label_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="recruit_corporation_label_2"> 招聘公司标签2 </label>
	<div class="col-sm-9">
		<input type="text" id="recruit_corporation_label_2"
			name="recruit_corporation_label_2" placeholder="招聘公司标签2"
			class="col-xs-10 col-sm-5"
			value="{{ old('recruit_corporation_label_2', $demand ? $demand-> recruit_corporation_label_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="recruit_corporation_label_3"> 招聘公司标签3 </label>
	<div class="col-sm-9">
		<input type="text" id="recruit_corporation_label_3"
			name="recruit_corporation_label_3" placeholder="招聘公司标签3"
			class="col-xs-10 col-sm-5"
			value="{{ old('recruit_corporation_label_3', $demand ? $demand-> recruit_corporation_label_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="recruit_corporation_label_4"> 招聘公司标签4 </label>
	<div class="col-sm-9">
		<input type="text" id="recruit_corporation_label_4"
			name="recruit_corporation_label_4" placeholder="招聘公司标签4"
			class="col-xs-10 col-sm-5"
			value="{{ old('recruit_corporation_label_4', $demand ? $demand-> recruit_corporation_label_4 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="recruit_corporation_parameter_1"> 招聘公司参数1 </label>
	<div class="col-sm-9">
		<input type="number" id="recruit_corporation_parameter_1"
			name="recruit_corporation_parameter_1" placeholder="招聘公司参数1" min="0"
			step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('recruit_corporation_parameter_1', $demand ? $demand-> recruit_corporation_parameter_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="recruit_corporation_parameter_2"> 招聘公司参数2 </label>
	<div class="col-sm-9">
		<input type="number" id="recruit_corporation_parameter_2"
			name="recruit_corporation_parameter_2" placeholder="招聘公司参数2" min="0"
			step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('recruit_corporation_parameter_2', $demand ? $demand-> recruit_corporation_parameter_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="recruit_corporation_parameter_3"> 招聘公司参数3 </label>
	<div class="col-sm-9">
		<input type="number" id="recruit_corporation_parameter_3"
			name="recruit_corporation_parameter_3" placeholder="招聘公司参数3" min="0"
			step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('recruit_corporation_parameter_3', $demand ? $demand-> recruit_corporation_parameter_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="recruit_corporation_parameter_4"> 招聘公司参数4 </label>
	<div class="col-sm-9">
		<input type="number" id="recruit_corporation_parameter_4"
			name="recruit_corporation_parameter_4" placeholder="招聘公司参数4" min="0"
			step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('recruit_corporation_parameter_4', $demand ? $demand-> recruit_corporation_parameter_4 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="background_label_1"> 背景标签1 </label>
	<div class="col-sm-9">
		<input type="text" id="background_label_1" name="background_label_1"
			placeholder="背景标签1" class="col-xs-10 col-sm-5"
			value="{{ old('background_label_1', $demand ? $demand-> background_label_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="background_label_2"> 背景标签2 </label>
	<div class="col-sm-9">
		<input type="text" id="background_label_2" name="background_label_2"
			placeholder="背景标签2" class="col-xs-10 col-sm-5"
			value="{{ old('background_label_2', $demand ? $demand-> background_label_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="background_label_3"> 背景标签3 </label>
	<div class="col-sm-9">
		<input type="text" id="background_label_3" name="background_label_3"
			placeholder="背景标签3" class="col-xs-10 col-sm-5"
			value="{{ old('background_label_3', $demand ? $demand-> background_label_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="background_label_4"> 背景标签4 </label>
	<div class="col-sm-9">
		<input type="text" id="background_label_4" name="background_label_4"
			placeholder="背景标签4" class="col-xs-10 col-sm-5"
			value="{{ old('background_label_4', $demand ? $demand-> background_label_4 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="background_label_5"> 背景标签5 </label>
	<div class="col-sm-9">
		<input type="text" id="background_label_5" name="background_label_5"
			placeholder="背景标签5" class="col-xs-10 col-sm-5"
			value="{{ old('background_label_5', $demand ? $demand-> background_label_5 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="background_label_6"> 背景标签6 </label>
	<div class="col-sm-9">
		<input type="text" id="background_label_6" name="background_label_6"
			placeholder="背景标签6" class="col-xs-10 col-sm-5"
			value="{{ old('background_label_6', $demand ? $demand-> background_label_6 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="background_parameter_1"> 背景参数1 </label>
	<div class="col-sm-9">
		<input type="number" id="background_parameter_1"
			name="background_parameter_1" placeholder="背景参数1" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('background_parameter_1', $demand ? $demand-> background_parameter_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="background_parameter_2"> 背景参数2 </label>
	<div class="col-sm-9">
		<input type="number" id="background_parameter_2"
			name="background_parameter_2" placeholder="背景参数2" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('background_parameter_2', $demand ? $demand-> background_parameter_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="background_parameter_3"> 背景参数3 </label>
	<div class="col-sm-9">
		<input type="number" id="background_parameter_3"
			name="background_parameter_3" placeholder="背景参数3" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('background_parameter_3', $demand ? $demand-> background_parameter_3 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="background_parameter_4"> 背景参数4 </label>
	<div class="col-sm-9">
		<input type="number" id="background_parameter_4"
			name="background_parameter_4" placeholder="背景参数4" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('background_parameter_4', $demand ? $demand-> background_parameter_4 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="background_parameter_5"> 背景参数5 </label>
	<div class="col-sm-9">
		<input type="number" id="background_parameter_5"
			name="background_parameter_5" placeholder="背景参数5" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('background_parameter_5', $demand ? $demand-> background_parameter_5 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="background_parameter_6"> 背景参数6 </label>
	<div class="col-sm-9">
		<input type="number" id="background_parameter_6"
			name="background_parameter_6" placeholder="背景参数6" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('background_parameter_6', $demand ? $demand-> background_parameter_6 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="reward_amount"> 悬赏金额 </label>
	<div class="col-sm-9">
		<input type="number" id="reward_amount" name="reward_amount"
			placeholder="悬赏金额" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('reward_amount', $demand ? $demand-> reward_amount : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="lowest_reward_amount"> 最低悬赏金额 </label>
	<div class="col-sm-9">
		<input type="number" id="lowest_reward_amount"
			name="lowest_reward_amount" placeholder="最低悬赏金额" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('lowest_reward_amount', $demand ? $demand-> lowest_reward_amount : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="highest_reward_amount"> 最高悬赏金额 </label>
	<div class="col-sm-9">
		<input type="number" id="highest_reward_amount"
			name="highest_reward_amount" placeholder="最高悬赏金额" min="0" step="0.01"
			class="col-xs-10 col-sm-5"
			value="{{ old('highest_reward_amount', $demand ? $demand-> highest_reward_amount : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="reward_time"> 悬赏时间 </label>
	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="reward_time" name="reward_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('reward_time', $demand ? $demand-> reward_time : '') }}" />
		<span class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
		</span>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="reward_time_label_1"> 悬赏时间标签1 </label>
	<div class="col-sm-9">
		<input type="text" id="reward_time_label_1" name="reward_time_label_1"
			placeholder="悬赏时间标签1" class="col-xs-10 col-sm-5"
			value="{{ old('reward_time_label_1', $demand ? $demand-> reward_time_label_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="reward_time_label_2"> 悬赏时间标签2 </label>
	<div class="col-sm-9">
		<input type="text" id="reward_time_label_2" name="reward_time_label_2"
			placeholder="悬赏时间标签2" class="col-xs-10 col-sm-5"
			value="{{ old('reward_time_label_2', $demand ? $demand-> reward_time_label_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="reward_label_1"> 悬赏标签1 </label>
	<div class="col-sm-9">
		<input type="text" id="reward_label_1" name="reward_label_1"
			placeholder="悬赏标签1" class="col-xs-10 col-sm-5"
			value="{{ old('reward_label_1', $demand ? $demand-> reward_label_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="reward_label_2"> 悬赏标签2 </label>
	<div class="col-sm-9">
		<input type="text" id="reward_label_2" name="reward_label_2"
			placeholder="悬赏标签2" class="col-xs-10 col-sm-5"
			value="{{ old('reward_label_2', $demand ? $demand-> reward_label_2 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="reward_parameter_1"> 悬赏参数1 </label>
	<div class="col-sm-9">
		<input type="number" id="reward_parameter_1" name="reward_parameter_1"
			placeholder="悬赏参数1" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('reward_parameter_1', $demand ? $demand-> reward_parameter_1 : '') }}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="reward_parameter_2"> 悬赏参数2 </label>
	<div class="col-sm-9">
		<input type="number" id="reward_parameter_2" name="reward_parameter_2"
			placeholder="悬赏参数2" min="0" step="0.01" class="col-xs-10 col-sm-5"
			value="{{ old('reward_parameter_2', $demand ? $demand-> reward_parameter_2 : '') }}" />
	</div>
</div>
