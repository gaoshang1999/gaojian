

<div class="form-group">
	<label class="col-sm-1 control-label no-padding-right" for="resume">
		简历全文 </label>

	<div class="col-sm-11">
		<textarea type="text/plain" id="resume" name="resume" rows="5"
			class="col-xs-11 col-sm-11 autosize-transition">{{ old('resume', $talent  ? $talent-> resume : '') }}</textarea>
	</div>


</div>



