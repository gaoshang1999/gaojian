@extends('admin/admin')

@section('subTitle') 列-维护 @stop 
{{-- Content--}} 

@section('content')

<div class="page-content"> @include('errors.list')
	<div class="row">   
		<div class="col-xs-12">
		<h3 class="header smaller lighter blue"> {{ $column ? '编辑' : '新建' }}列 </h3>
			<form class="form-horizontal" role="form" method="post"  action="{{ url('/admin/column/' . ($column ? 'edit/'.$column->id : 'add')) }}">
			    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			    <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="table_id"> <span style="color: red">*</span>所属表 </label>

					<div class="col-sm-9">
						<select id="table_id" name="table_id" class="col-xs-10 col-sm-5">
						<option value="" ></option>
						@foreach ($table->all() as $v)
						 <option value="{{ $v->id}}" @if($column->table->id == $v->id) selected @endif>{{$v->cn}}</option>
						@endforeach
						</select>	
					</div>
				</div>	
			    
			    
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="cn"> <span style="color: red">*</span>中文名称 </label>

					<div class="col-sm-9">
						<input type="text" id="cn" name="cn" placeholder="中文名称"
							class="col-xs-10 col-sm-5" value="{{ old('name', $column ? $column->cn : '') }}"/>
					</div>
				</div>	
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="type"> <span style="color: red">*</span>字段类型  </label>

					<div class="col-sm-9">					
    					<select id="type" name="type" class="col-xs-10 col-sm-5">
    					   <option value="string" >string</option>
    					   <option value="text" >text</option>
    					   <option value="integer" >integer</option>
    					   <option value="float" >float</option>
    					   <option value="date" >date</option>
    					   <option value="boolean" >boolean</option>
    					</select>	
					</div>
				</div>	
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="length"> 长度  </label>

					<div class="col-sm-9">
						<input type="text" id="length" name="length" placeholder="长度"
							class="col-xs-10 col-sm-5" value="{{ old('length', $column ? $column->length : '') }}"/>
					</div>
				</div>	

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="value_range"> 取值范围  </label>

					<div class="col-sm-9">
						<input type="text" id="value_range" name="value_range" placeholder="取值范围"
							class="col-xs-10 col-sm-5" value="{{ old('value_range', $column ? $column->value_range : '') }}"/>
					</div>
				</div>	

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="default"> 默认取值  </label>

					<div class="col-sm-9">
						<input type="text" id="default" name="default" placeholder="默认取值"
							class="col-xs-10 col-sm-5" value="{{ old('default', $column ? $column->default : '') }}"/>
					</div>
				</div>	
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="rank"> 顺序  </label>

					<div class="col-sm-9">
						<input type="number" id="rank" name="rank" placeholder="顺序 " min="1" step="1"
							class="col-xs-10 col-sm-5" value="{{ old('rank', $column ? $column->rank : '') }}"/>
					</div>
				</div>	
			   
			   <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="cn_segment"> 中文分词  </label>

					<div class="col-sm-9">
						<input type="text" id="cn_segment" name="cn_segment" placeholder="中文分词"
							class="col-xs-10 col-sm-5" value="{{ old('cn_segment', $column ? $column->cn_segment : '') }}"/>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="en"> 英文名称  </label>

					<div class="col-sm-9">
						<input type="text" id="en" name="en" placeholder="英文名称"
							class="col-xs-10 col-sm-5" value="{{ old('en', $column ? $column->en : '') }}"/>
					</div>
				</div>	
				

				
				
			   <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="abbr"> 描述  </label>

					<div class="col-sm-9">
						<input type="text" id="abbr" name="abbr" placeholder="描述"
							class="col-xs-10 col-sm-5" value="{{ old('abbr', $column ? $column->abbr : '') }}"/>
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
			</form>
		</div> <!-- /.row -->
		
	</div>
</div>	<!-- /.page-content -->
@endsection