@extends('admin/admin')

@section('subTitle') 常量管理 @stop 
{{-- Content--}} 

@section('content')

<div class="page-content"> @include('errors.list')
	<div class="row">
		<div class="col-xs-12">
		<h3 class="header smaller lighter blue"> {{ $constant ? '编辑' : '新建' }}常量 </h3>
			<form class="form-horizontal" role="form" method="post"  action="{{ url('/admin/constant/' . ($constant ? 'edit/'.$constant->id : 'add')) }}">
			    <input type="hidden" name="_token" value="{{ csrf_token() }}">
				
				
				 <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="en"><span style="color: red">*</span> 常量名 </label>

					<div class="col-sm-9">
						<input type="text" id="en" name="en" placeholder="常量名"
							class="col-xs-10 col-sm-5" value="{{ old('en', $constant ? $constant->en : '') }}"/>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="cn"> 中文说明 </label>

					<div class="col-sm-9">
						<input type="text" id="cn" name="cn" placeholder="中文说明"
							class="col-xs-10 col-sm-5" value="{{ old('cn', $constant ? $constant->cn : '') }}"/>
					</div>
				</div>
				
			   <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="k"><span style="color: red">*</span> KEY  </label>

					<div class="col-sm-9">
						<input type="text" id="k" name="k" placeholder="KEY"
							class="col-xs-10 col-sm-5" value="{{ old('k', $constant ? $constant->k : '') }}"/>
					</div>
				</div>
				
							   <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="v"><span style="color: red">*</span> VALUE  </label>

					<div class="col-sm-9">
						<input type="text" id="v" name="v" placeholder="VALUE"
							class="col-xs-10 col-sm-5" value="{{ old('v', $constant ? $constant->v : '') }}"/>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="desc"> 描述 </label>

					<div class="col-sm-9">
						<input type="text" id="desc" name="desc" placeholder="中文说明"
							class="col-xs-10 col-sm-5" value="{{ old('desc', $constant ? $constant->desc : '') }}"/>
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