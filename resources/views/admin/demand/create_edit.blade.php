@extends('admin/admin')

@section('subTitle') 需求管理 @stop 
{{-- Content--}} 

@section('content')

<div class="page-content"> @include('errors.list')
	<div class="row">
		<div class="col-xs-12">
		<h3 class="header smaller lighter blue"> {{ $demand ? '编辑' : '新建' }}需求 </h3>
			
			<div class="tabbable ">
				<ul class="nav nav-tabs" id="myTab3">
					<li class="active"><a data-toggle="tab" href="#basic"> <i
							class="pink icon-dashboard bigger-110"></i> 基本信息
					</a></li>

					<li><a data-toggle="tab" href="#detail"> <i
							class="green icon-book bigger-110"></i> 详细信息
					</a></li>

					
					
					<li><a data-toggle="tab" href="#other"> <i
							class="red icon-user bigger-110"></i> 其他信息
					</a></li>

					<li><a data-toggle="tab" href="#quantify"> <i
							class="red icon-user bigger-110"></i> 量化信息
					</a></li>
					
				</ul>

				<div class="tab-content">
					<div id="basic" class="tab-pane in active">


						<form class="form-horizontal" role="form" method="post"
							action="{{ url('/admin/demand/' . ($demand ? 'edit/'.$demand->id : 'add')) }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							@include('admin.demand.basic_form_element')



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


					<div id="detail" class="tab-pane in ">


						<form class="form-horizontal" role="form" method="post"
							action="{{ url('/admin/demand/' . ($demand ? 'edit/'.$demand->id : 'add')) }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							@include('admin.demand.detail_form_element')



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
					
					
					<div id="other" class="tab-pane in ">


						<form class="form-horizontal" role="form" method="post"
							action="{{ url('/admin/demand/' . ($demand ? 'edit/'.$demand->id : 'add')) }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							@include('admin.demand.other_form_element')



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
					
				<div id="quantify" class="tab-pane in ">


						<form class="form-horizontal" role="form" method="post"
							action="{{ url('/admin/demand/' . ($demand ? 'edit/'.$demand->id : 'add')) }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							@include('admin.demand.quantify_form_element')



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
				</div> <!-- tab-content -->

			</div> <!-- tabbable -->
		</div> <!-- /.row -->
		
	</div>
</div>	<!-- /.page-content -->
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