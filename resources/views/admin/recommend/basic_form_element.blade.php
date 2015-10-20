<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="user_id">
		推荐人编号 </label>

	<div class="col-sm-9">
		<input type="number" id="user_id" name="user_id" placeholder="推荐人编号"
			min="0" step="1" class="col-xs-10 col-sm-5"
			value="{{ old('user_id', $recommend  ? $recommend-> user_id : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="talent_id">
		人才编号 </label>

	<div class="col-sm-9">
		<input type="number" id="talent_id" name="talent_id"
			placeholder="人才编号" min="0" step="1" class="col-xs-10 col-sm-5"
			value="{{ old('talent_id', $recommend  ? $recommend-> talent_id : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="demand_id">
		需求编号 </label>

	<div class="col-sm-9">
		<input type="number" id="demand_id" name="demand_id"
			placeholder="需求编号" min="0" step="1" class="col-xs-10 col-sm-5"
			value="{{ old('demand_id', $recommend  ? $recommend-> demand_id : '') }}" />
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="recommend_time"> 推荐时间 </label>

	<div class="input-group col-sm-4">
		<input class="form-control date-picker col-xs-10 col-sm-5"
			id="recommend_time" name="recommend_time" type="text"
			data-date-format="yyyy-mm-dd"
			value="{{ old('recommend_time', $recommend  ? $recommend-> recommend_time : '') }}" />
		<span class="input-group-addon"> <i
			class="icon-calendar bigger-100"></i>
		</span>
	</div>


</div>


<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right"
		for="recommend_type"> 推荐类型 </label>


	<?php  $constant = App\Models\Constant::where('en', 'recommend_type')->orderBy('k')->get();?>
	<div class="col-sm-9">
		<select id="recommend_type" name="recommend_type"
			class="col-xs-10 col-sm-5">
			<option value="-1"></option> @foreach($constant as $c)
			<option value="{{ $c->k }}" @if($recommend && $recommend->recommend_type
				== $c->k ) selected @endif >{{ $c->v }}</option> @endforeach
		</select>
	</div>



</div>