<html lang="en">
	<head>
		<meta charset="utf-8" />
	</head>

	<body>
<pre>
<?php echo "@extends('admin/admin') <br/>";?>

<?php echo "@section('subTitle') ".$table->cn."管理  @stop";?>

<?php echo "@section('content') <br/>";?>



&lt;div class="page-content"> @include('errors.list')
	&lt;div class="row">
		&lt;div class="col-xs-12">
		&lt;h3 class="header smaller lighter blue"> @{{ ${!!$table->en!!} ? '编辑' : '新建' }} {{$table->cn}} &lt;/h3>
			&lt;form class="form-horizontal" role="form" method="post"  action="@{{ url('/admin/{!!$table->en!!}/' . (${!!$table->en!!} ? 'edit/'.${!!$table->en!!}->id : 'add')) }}">
			    &lt;input type="hidden" name="_token" value="@{{ csrf_token() }}">
				
@foreach($table->columns as $v)    @if($v->en != "id")          
			   &lt;div class="form-group"> 
					&lt;label class="col-sm-3 control-label no-padding-right" for="{{$v->en }}"> {{ $v->cn }} &lt;/label> 
             
@if($v->type == "date")
				&lt;div class="input-group col-sm-4"> 
					&lt;input class="form-control date-picker col-xs-10 col-sm-5" id="{{$v->en }}" name="{{$v->en }}" type="text" data-date-format="yyyy-mm-dd" value="@{{ old('{!! $v->en!!}', ${!! $table->en!!}  ? ${!! $table->en!!}-> {!! $v->en!!} : '') }}"/> 
					&lt;span class="input-group-addon"> 
						&lt;i class="icon-calendar bigger-100">&lt;/i> 
					&lt;/span> 
				&lt;/div>		 
						
@elseif($v->type == "string")
				&lt;div class="col-sm-9"> 
						&lt;input type="text" id="{{$v->en }}" name="{{$v->en }}" placeholder="{{$v->cn}}" 
							class="col-xs-10 col-sm-5" value="@{{ old('{!! $v->en!!}', ${!! $table->en!!}  ? ${!! $table->en!!}-> {!! $v->en!!} : '') }}"/>  
				&lt;/div> 
						
@elseif($v->type == "text")
					&lt;div class="col-sm-9"> 
						&lt;textarea type="text/plain" id="{{$v->en }}"  name="{{$v->en }}" rows="5" class="col-xs-10 col-sm-5 autosize-transition">
						@{{ old('{!! $v->en!!}', ${!! $table->en!!}  ? ${!! $table->en!!}-> {!! $v->en!!} : '') }}&lt;/textarea> 
					&lt;/div> 	
					
@elseif($v->type == "integer")
					&lt;div class="col-sm-9"> 
						&lt;input type="number" id="{{$v->en }}" name="{{$v->en }}" placeholder="{{$v->cn}}" min="0" step="1"
							class="col-xs-10 col-sm-5" value="@{{ old('{!! $v->en!!}', ${!! $table->en!!}  ? ${!! $table->en!!}-> {!! $v->en!!} : '') }}"/>  
					&lt;/div> 				
		
@elseif($v->type == "float")
					&lt;div class="col-sm-9"> 
						&lt;input type="number" id="{{$v->en }}" name="{{$v->en }}" placeholder="{{$v->cn}}" min="0" step="0.01"
							class="col-xs-10 col-sm-5" value="@{{ old('{!! $v->en!!}', ${!! $table->en!!}  ? ${!! $table->en!!}-> {!! $v->en!!} : '') }}"/>  
					&lt;/div> 
			  
@elseif($v->type == "enum")
					
					&lt?php  $constant = App\Models\Constant::where('en', '{!! $v->en !!}')->orderBy('k')->get();?>  
					&lt;div class="col-sm-9">						
					    &lt;select id="{{$v->en }}" name="{{$v->en }}" class="col-xs-10 col-sm-5"> 
					    &lt;option value="-1" >&lt;/option> 
					     <?php echo "@foreach"; ?>($constant as $c)  
					        	&lt;option value="@{{ $c->k }}" <?php echo "@if"; ?>(${!! $table->en!!} && ${!! $table->en!!}->{!! $v->en!!} == $c->k ) selected <?php echo "@endif"; ?>  >@{{ $c->v }}&lt;/option> 
					     <?php echo "@endforeach"; ?>  
    					&lt;/select>	
					&lt;/div>								

		
@endif
				
			   &lt;/div> 	
@endif	
@endforeach				
				
				
				&lt;div class=" form-group">
						&lt;div class="col-md-offset-3 col-md-9">
							&lt;button class="btn btn-info" type="submit">
								&lt;i class="icon-ok bigger-110">&lt;/i>
								保存
							&lt;/button>

							&nbsp; &nbsp; &nbsp;
							&lt;button class="btn" type="button" onclick="javascript:history.back(-1)">
								&lt;i class="icon-undo bigger-110">&lt;/i>
								返回
							&lt;/button>
						&lt;/div>
				&lt;/div>
				&lt;input type="hidden"  name="referer" value="@{{ Request::header('referer') }}" />
			&lt;/form>
		&lt;/div> &lt;!-- /.row -->
		
	&lt;/div>
&lt;/div>	&lt;!-- /.page-content -->


</pre>
</body>		

<?php echo "@endsection		 <br/>";?>