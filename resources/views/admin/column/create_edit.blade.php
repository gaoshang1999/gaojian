@extends('admin/admin')

@section('subTitle') Column管理 @stop 
{{-- Content--}} 

@section('content')

<div class="page-content"> @include('errors.list')
	<div class="row">   
		<div class="col-xs-12">
		<h3 class="header smaller lighter blue"> {{ $column ? '编辑' : '新建' }}Column </h3>
			<form class="form-horizontal" role="form" method="post"  action="{{ url('/admin/column/' . ($column ? 'edit/'.$column->id : 'add')) }}">
			    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			    <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="table_id"> <span style="color: red">*</span>所属表 </label>

					<div class="col-sm-9">
						<select id="table_id" name="table_id" class="col-xs-10 col-sm-5">
						<option value="" ></option>
						@foreach ($table->all() as $v)
						 <option value="{{ $v->id}}" @if($column && $column->table->id == $v->id) selected @endif>{{$v->cn}}</option>
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
    					   <option value="string" @if($column && $column->type =="string") selected @endif>string</option>
    					   <option value="text" @if($column && $column->type =="text") selected @endif>text</option>
    					   <option value="integer" @if($column && $column->type =="integer") selected @endif>integer</option>
    					   <option value="float" @if($column && $column->type =="float") selected @endif>float</option>
    					   <option value="date" @if($column && $column->type =="date") selected @endif>date</option>
    					   <option value="datetime" @if($column && $column->type =="datetime") selected @endif>datetime</option>
    					   <option value="enum" @if($column && $column->type =="enum") selected @endif>enum</option>
    					   <option value="boolean" @if($column && $column->type =="boolean") selected @endif>boolean</option>
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
                    <?php $constant = App\Models\Constant::select('cn', 'en')->distinct()->get();?>
					<div class="col-sm-9">						
					    <select id="value_range" name="value_range" class="col-xs-10 col-sm-5">
					    <option value="" ></option>
					    @foreach($constant as $v)
					        	<option value="{{$v->en}}" @if($column && $column->value_range ==$v->en) selected @endif>{{$v->cn}}</option>
					    @endforeach
    					</select>	
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
							class="col-xs-10 col-sm-5" value="{{ old('cn_segment', $column ? $column->cn_segment : '') }}" disabled/>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="en"> 英文名称  </label>

					<div class="col-sm-9">
						<input type="text" id="en" name="en" placeholder="英文名称"
							class="col-xs-10 col-sm-5" value="{{ old('en', $column ? $column->en : '') }}"  disabled/>
					</div>
				</div>	
				

				
				
			   <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"
						for="desc"> 描述  </label>

					<div class="col-sm-9">
							<textarea class="col-xs-10 col-sm-5" name="desc" rows="6">{{ old('desc', $column ? $column->desc : '') }}</textarea>
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