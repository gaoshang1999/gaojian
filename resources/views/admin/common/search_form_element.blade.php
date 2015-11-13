<div class="form-group">

 
	  <label class="col-sm-1" for="field1"> 文本项目 </label>      

      <?php  $column = App\Models\Column::where('table_id',$table->id)->whereIn('type', ['string', 'text'])->orderBy(DB::raw('CONVERT( cn USING gbk )'))->get();?>  

      <select class="col-sm-1" id="field1" name="field1"  tabindex="1"> 
            <?php $field = isset($field1) ? $field1 : ""; ?>
               @foreach($column as $c)
                  <option value="{{ $c->en }}" {{ $field== $c->en ?	'selected' : '' }}>{{ $c->cn }}</option>
                @endforeach
	   </select> 

	   <select class="col-sm-1" id="op" name="op"  tabindex="2">  
			<?php $op = isset($op) ? $op : ""; ?>			
		   <option value="like" {{ $op== "like" ? 'selected' : '' }}> 包含 </option>		
		   <option value="=" {{ $op== "=" ? 'selected' : '' }}> 等于 </option>   
		</select> 

	  <input class="col-sm-1"  type="text" placeholder="" name="q1" value="{{ isset($q1) ? $q1 : "" }}" tabindex="2" /> 
 
	  <label class="col-sm-1" for=""> 量化项目 </label>  
      <?php $column = App\Models\Column::where('table_id',$table->id)->whereIn('type', ['integer', 'float'])->orderBy(DB::raw('CONVERT( cn USING gbk )'))->get();?>       

      <select class="col-sm-1" id="field2" name="field2"  tabindex="1">
      <?php $field = isset($field2) ? $field2 : ""; ?>      
               @foreach($column as $c)
                  <option value="{{ $c->en }}" {{ $field== $c->en ?'selected' : '' }}>{{ $c->cn }}</option> 
               @endforeach
		</select> 

		<input class="col-sm-1"  type="number" placeholder="" name="q2_start" 	step="1" value="{{ isset($q2_start) ? $q2_start : "" }}" tabindex="2" /> 
		<input class="col-sm-1"  type="number" placeholder="" name="q2_end" 	step="1" value="{{ isset($q2_end) ? $q2_end : "" }}" tabindex="2" />
</div>
<div class="form-group">
	  <label class="col-sm-1" for=""> 日期项目 </label>      
      <?php $column = App\Models\Column::where('table_id',$table->id)->whereIn('type', ['date'])->orderBy(DB::raw('CONVERT( cn USING gbk )'))->get();?>  

      <select class="col-sm-1" id="field3" name="field3"  tabindex="1"> 
      <?php $field = isset($field3) ? $field3 : ""; ?>
               @foreach($column as $c)
                  <option value="{{ $c->en }}" {{ $field== $c->en ?'selected' : '' }}>{{ $c->cn }}</option>
               @endforeach
	   </select>

		<div class="col-sm-2 input-group" >
			<input class="form-control date-picker " id="q3_start" name="q3_start" type="text" data-date-format="yyyy-mm-dd" value="{{ isset($q3_start) ? $q3_start : "" }}" /> 
				<span	class="input-group-addon"> 
				   <i class="icon-calendar bigger-100"></i>
			    </span>
			
			 <input class="form-control date-picker "	id="q3_end" name="q3_end" type="text" data-date-format="yyyy-mm-dd" value="{{ isset($q3_end) ? $q3_end : "" }}" /> 
				<span class="input-group-addon">
				 <i class="icon-calendar bigger-100"></i>
			    </span>

		</div>

        <input type="hidden" name="ids" id="ids"/>
        <input type="hidden" name="query_where" id="query_where" value="{{ isset($query_where) ? $query_where : "" }}"/>
        <input type="hidden" name="query_bindings" id="query_bindings" value="{{ isset($query_bindings) ? $query_bindings : "" }}"/>
 
		 <div class="col-sm-6 "> <?php $search_scope = isset($search_scope) ? $search_scope : ""; ?>
    		<label class="col-sm-2 radio-inline"><input type="radio" name="search_scope" value="0" {{ $search_scope== "0" || $search_scope== "" ? 'checked' : '' }}> 全库</label>
            <label class="col-sm-2 radio-inline"><input type="radio" name="search_scope" value="1" {{ $search_scope== "1" ? 'checked' : '' }}> 搜索结果</label>
            <label class="col-sm-2 radio-inline"><input type="radio" name="search_scope" value="2" {{ $search_scope== "2" ? 'checked' : '' }}> 选中项</label>
          </div>
</div>	
<div class="form-group col-sm-12">
	<button class="btn btn-xs btn-success" type="submit"
		tabindex="3">
		<i class="icon-search icon-on-right bigger-160">搜索&nbsp;</i>
	</button>
</div>
