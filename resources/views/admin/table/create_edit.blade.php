@extends('admin/admin')

@section('subTitle') Table管理 @stop 
{{-- Content--}} 

@section('content')

<div class="page-content"> @include('errors.list')
	<div class="row">   
		<div class="col-xs-12">
		<h3 class="header smaller lighter blue"> {{ $table ? '编辑' : '新建' }}Table </h3>
			<form class="form-horizontal" role="form" method="post"  action="{{ url('/admin/table/' . ($table ? 'edit/'.$table->id : 'add')) }}">
			    <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="cn"> <span style="color: red">*</span>中文名称 </label>

					<div class="col-sm-9">
						<input type="text" id="cn" name="cn" placeholder="中文名称"
							class="col-xs-10 col-sm-5" value="{{ old('name', $table ? $table->cn : '') }}"/>
					</div>
				</div>				
			   
			   <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="cn_segment"> 中文分词  </label>

					<div class="col-sm-9">
						<input type="text" id="cn_segment" name="cn_segment" placeholder="中文分词"
							class="col-xs-10 col-sm-5" value="{{ old('cn_segment', $table ? $table->cn_segment : '') }}"/>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="en"> 英文名称  </label>

					<div class="col-sm-9">
						<input type="text" id="en" name="en" placeholder="英文名称"
							class="col-xs-10 col-sm-5" value="{{ old('en', $table ? $table->en : '') }}"/>
					</div>
				</div>	
				
			   <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="abbr"> 描述  </label>

					<div class="col-sm-9">
						<input type="text" id="abbr" name="abbr" placeholder="描述"
							class="col-xs-10 col-sm-5" value="{{ old('abbr', $table ? $table->abbr : '') }}"/>
					</div>
				</div>
				
				<div class=" form-group">
						<div class="col-md-offset-3 col-md-9">
							<button class="btn btn-info" type="submit">
								<i class="icon-ok bigger-110"></i>
								保存
							</button>

							&nbsp; &nbsp; &nbsp;
							<button class="btn" type="button" onclick="javascript:history.back(-1)">
								<i class="icon-undo bigger-110"></i>
								返回
							</button>
						</div>
				</div>
				<input type="hidden"  name="referer" value="{{ Request::header('referer') }}" />
			</form>
		</div> <!-- /.row -->
		
	</div>
</div>	<!-- /.page-content -->
@endsection