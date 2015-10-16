<html lang="en">
	<head>
		<meta charset="utf-8" />
	</head>

	<body>
<pre>
<?php echo "@extends('admin/admin') <br/>";?>

<?php echo "@section('subTitle') ".$table->cn."管理  @stop";?>

<?php echo "@section('content') <br/>";?>

    &lt;div class="page-content">
     
			&lt;h3 class="header smaller lighter blue">{{$table->cn}}列表 &lt;/h3>
		
			&lt;a href="@{{ url('/admin/{!!$table->en!!}/add') }}" class="btn btn-xs btn-info pull-right"  tabindex="4">
				&lt;i class="icon-plus bigger-160">&nbsp;新增&lt;/i>
			&lt;/a>
					
             &lt;form class="form-group   form-inline" role="form" method="get" action="@{{ url('/admin/{!!$table->en!!}/search') }}" >    
                
               	  &lt;select class=" col-xs-1 col-sm-5 pull-left" id="field" name="field" style="width:100px" tabindex="1">  &lt;?php $field = isset($field) ? $field : ""; ?>
              
                  &lt;option value="id" @{{ $field==='id' ? 'selected' : '' }}>ID&lt;/option>              
    
                 &lt;/select>
            
                 &lt;input class=" col-xs-10 col-sm-5 pull-left" style="width:300px" type="text" placeholder="" name ="q" value="{{ isset($q) ? $q : "" }}" tabindex="2"/>  
                 &lt;button class="btn btn-xs btn-success  pull-left" type="submit" tabindex="3">&lt;i class="icon-search icon-on-right bigger-160">搜索&nbsp;&lt;/i>&lt;/button>																	
              &lt;/form>
              
        &lt;div class="row">
        		&lt;div class="col-xs-12">
        		
    			&lt;div class="table-responsive">
    				&lt;table id="main-table" class="table table-striped table-bordered table-hover">
    					&lt;thead>
    						&lt;tr>								
        @foreach($table->columns as $v)            
    							&lt;th>{{ $v->cn}}&lt;/th>               
        @endforeach
    							&lt;th>
    								&lt;i class="icon-time bigger-110 hidden-480">&lt;/i>
    								创建时间
    							&lt;/th>
    							&lt;th>
    								&lt;i class="icon-time bigger-110 hidden-480">&lt;/i>
    								修改时间
    							&lt;/th>
    
    							&lt;th>刪除&lt;/th>
    						&lt;/tr>
    					&lt;/thead>
                 &lt;?php $constant = App\Models\Constant::getInstance(); ?>    
    					&lt;tbody>
    					
    		<?php echo "@foreach ($".$table->en."->all() as \$v)	 <br/>";?>         
                        &lt;tr>     					@foreach($table->columns as $v) 
@if($v->en == "id")    							 &lt;td>&lt;a href='@{{ url("/admin/{!! $table->en !!}/edit/{$v->id}") }}'>@{{ $v->id }}  &lt;/a>&lt;/td>
@elseif($v->type == "enum")    							&lt;td> @{{ array_get($constant, '{!! $v->en!!}.'.$v-> {!! $v->en!!}, '') }} &lt;/td> <br/>            
@else    							&lt;td> @{{$v-> {!! $v->en!!}  }} &lt;/td> <br/>   @endif          @endforeach    							
    							
    							&lt;td>@{{ $v->created_at }}&lt;/td>    
    							&lt;td>@{{ $v->updated_at }}&lt;/td>
    							
    							&lt;td> 
    							&lt;form action='{{ url("/admin/dict/delete/{$v->id}") }}' method="post">
    							 &lt;input type="hidden" name="_token" value="{{ csrf_token() }}" >
    							 &nbsp;&nbsp;
    									&lt;button class="btn btn-xs btn-danger" onclick="return deleleConfirm();">																	
    										&lt;i class="icon-trash bigger-120">&nbsp;刪除&lt;/i>
    									&lt;/button>
    							&lt;/form>
    							&lt;/td>
    						&lt;/tr>
             
             <?php echo "@endforeach		 <br/>";?>
    					&lt;/tbody>												
    				&lt;/table> 
    				&lt;div> {!! <?php echo "$".$table->en;?>->render() !!}  &lt;ul class="pagination pull-left">&lt;li>&lt;span> &lt;strong>@{{${!! $table->en !!}->total()==0?0:${!! $table->en !!}->toArray()['from']}} - @{{${!! $table->en !!}->toArray()['to']}} /@{{${!! $table->en !!}->total()}} &lt;/strong>&lt;/span>&lt;/li> &lt;/ul>&lt;/div>
    			&lt;/div>
    		&lt;/div>
    	&lt;/div>&lt;!-- /.row -->
    &lt;/div>&lt;!-- /.page-content -->
</pre>
</body>		

<?php echo "@endsection		 <br/>";?>