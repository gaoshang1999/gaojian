@extends('admin/admin') @section('subTitle') 人才管理 @stop {{-- Content--}}

@section('styles')
<link rel="stylesheet"
	href="/assets/css/jquery-ui-1.10.3.custom.min.css" />
<link rel="stylesheet" href="/assets/css/chosen.css" />
<link rel="stylesheet" href="/assets/css/datepicker.css" />
<link rel="stylesheet" href="/assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="/assets/css/daterangepicker.css" />
<link rel="stylesheet" href="/assets/css/colorpicker.css" />
@endsection @section('content')

<div class="page-content">
	@include('errors.list')
	<div class="row">
		<div class="col-xs-12">
			<h3 class="header smaller lighter blue">批量修改</h3>
			<form class="form-horizontal" role="form" method="post"
				action="{{ url('/admin/talent/batchUpdate') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">

					<label class=" pull-left" for=""> 文本项目 </label>      
                  <?php $column = App\Models\Column::whereIn('type', ['string', 'text'])->orderBy('cn')->get();?>  
                  <select class=" col-xs-1 col-sm-5 pull-left" id="field"
            						name="field" style="width: 150px" tabindex="1"> <?php $field = isset($field) ? $field : ""; ?>
                    @foreach($column as $c)
                        <option value="{{ $c->en }}" {{ $field== $c->en ?	'selected' : '' }}>{{ $c->cn }}</option>
					@endforeach
					</select> 
					<input class=" col-xs-10 col-sm-5 pull-left"
						style="width: 200px" type="text" placeholder="" name="q"
						value="{{ isset($q) ? $q : " " }}" tabindex="2" />
				</div>

				<div class=" form-group">
					<label class=" pull-left" for=""> 量化项目 </label>  
                      <?php $column = App\Models\Column::whereIn('type', ['integer', 'float'])->orderBy('cn')->get();?>       
                      <select class=" col-xs-1 col-sm-5 pull-left" id="field2"
            						name="field2" style="width: 150px" tabindex="1"> <?php $field = isset($field2) ? $field2 : ""; ?>
                           @foreach($column as $c)
                                <option value="{{ $c->en }}" {{ $field== $c->en ?	'selected' : '' }}>{{ $c->cn }}</option> 
							@endforeach
					</select> 
					<input class=" col-xs-10 col-sm-5 pull-left"
						style="width: 100px" type="number" placeholder="" name="q2_start"
						value="{{ isset($q2_start) ? $q2_start : " " }}" tabindex="2" /> 
					<input
						class=" col-xs-10 col-sm-5 pull-left" style="width: 100px"
						type="number" placeholder="" name="q2_end"
						value="{{ isset($q2_end) ? $q2_end : " " }}" tabindex="2" />
				</div>

				<div class=" form-group">
					<label class=" pull-left" for=""> 日期项目 </label>      
                  <?php $column = App\Models\Column::whereIn('type', ['date'])->orderBy('cn')->get();?>  
                  <select class=" col-xs-1 col-sm-5 pull-left" id="field3"
						name="field3" style="width: 150px" tabindex="1"> <?php $field = isset($field3) ? $field3 : ""; ?>
                           @foreach($column as $c)
                              <option value="{{ $c->en }}" {{ $field== $c->en ?			'selected' : '' }}>{{ $c->cn }}</option>
                            @endforeach
					</select>

					<div class="input-group " style="width: 240px">
						<input class="form-control date-picker col-xs-10 col-sm-5"
							id="q3_start" name="q3_start" type="text"
							data-date-format="yyyy-mm-dd"
							value="{{ isset($q3_start) ? $q3_start : " " }}" /> <span
							class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
						</span> <input class="form-control date-picker col-xs-10 col-sm-5"
							id="q3_end" name="q3_end" type="text"
							data-date-format="yyyy-mm-dd"
							value="{{ isset($q3_end) ? $q3_end : " " }}" /> <span
							class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
						</span>

					</div>
				</div>

				<hr />
				
	<label class=" "
		for=""> 批量修改为 </label>
		<br /><br />
				
				<div class="form-group">

					<label class=" pull-left" for=""> 文本项目 </label>      
                  <?php $column = App\Models\Column::whereIn('type', ['string', 'text'])->orderBy('cn')->get();?>  
                  <select class=" col-xs-1 col-sm-5 pull-left" id="field"
            						name="field" style="width: 150px" tabindex="1"> <?php $field = isset($field) ? $field : ""; ?>
                    @foreach($column as $c)
                        <option value="{{ $c->en }}" {{ $field== $c->en ?	'selected' : '' }}>{{ $c->cn }}</option>
					@endforeach
					</select> 
					<input class=" col-xs-10 col-sm-5 pull-left"
						style="width: 200px" type="text" placeholder="" name="q"
						value="{{ isset($q) ? $q : " " }}" tabindex="2" />
				</div>

				<div class=" form-group">
					<label class=" pull-left" for=""> 量化项目 </label>  
                      <?php $column = App\Models\Column::whereIn('type', ['integer', 'float'])->orderBy('cn')->get();?>       
                      <select class=" col-xs-1 col-sm-5 pull-left" id="field2"
            						name="field2" style="width: 150px" tabindex="1"> <?php $field = isset($field2) ? $field2 : ""; ?>
                           @foreach($column as $c)
                                <option value="{{ $c->en }}" {{ $field== $c->en ?	'selected' : '' }}>{{ $c->cn }}</option> 
							@endforeach
					</select> 
					<input class=" col-xs-10 col-sm-5 pull-left"
						style="width: 100px" type="number" placeholder="" name="q2_start"
						value="{{ isset($q2_start) ? $q2_start : " " }}" tabindex="2" /> 
					
				</div>

				<div class=" form-group">
					<label class=" pull-left" for=""> 日期项目 </label>      
                  <?php $column = App\Models\Column::whereIn('type', ['date'])->orderBy('cn')->get();?>  
                  <select class=" col-xs-1 col-sm-5 pull-left" id="field3"
						name="field3" style="width: 150px" tabindex="1"> <?php $field = isset($field3) ? $field3 : ""; ?>
                           @foreach($column as $c)
                              <option value="{{ $c->en }}" {{ $field== $c->en ?			'selected' : '' }}>{{ $c->cn }}</option>
                            @endforeach
					</select>

					<div class="input-group " style="width: 120px">
						<input class="form-control date-picker col-xs-10 col-sm-5"
							id="q3_start" name="q3_start" type="text"
							data-date-format="yyyy-mm-dd"
							value="{{ isset($q3_start) ? $q3_start : " " }}" /> <span
							class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
						</span> 

					</div>
				</div>


				<div class=" form-group">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn btn-info" type="submit">
							<i class="icon-ok bigger-110"></i> 保存
						</button>

						&nbsp; &nbsp; &nbsp;
						<button class="btn" type="button"
							onclick="javascript:history.back(-1)">
							<i class="icon-undo bigger-110"></i> 返回
						</button>
					</div>
				</div>
				<input type="hidden" name="referer"
					value="{{ Request::header('referer') }}" />
			</form>
		</div>
		<!-- /.row -->
	</div>
	@include('errors.list')
</div>
<!-- /.page-content -->
@endsection @section('scripts')


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



<script type="text/javascript">
			jQuery(function($) {
				 
			
 
				$('textarea[class*=autosize]').autosize({append: "\n"});

			
				
				$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
	
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			});
		</script>
@endsection
