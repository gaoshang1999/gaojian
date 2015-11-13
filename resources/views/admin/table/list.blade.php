@extends('admin/admin')

@section('subTitle') Table管理  @stop

{{-- Content --}}
@section('content')



    <div class="page-content">

			<h3 class="header smaller lighter blue">Table列表 </h3>
		
			<a href="{{ url('/admin/table/add') }}" class="btn btn-xs btn-info pull-right"  tabindex="4">
				<i class="icon-plus bigger-160">&nbsp;新增</i>
			</a>
					
             <form class="form-group   form-inline" role="form" method="get" action="{{ url('/admin/table/search') }}" >    
                
               	  <select class=" col-xs-1 col-sm-5 pull-left" id="field" name="field" style="width:100px" tabindex="1"> <?php $field = isset($field) ? $field : ""; ?>
                  
                  <option value="cn" {{ $field==='cn' ? 'selected' : '' }}>中文名</option>
                  <option value="en" {{ $field==='en' ? 'selected' : '' }}>英文名</option>
                  <option value="desc" {{ $field==='desc' ? 'selected' : '' }}>描述</option>     
                  <option value="id" {{ $field==='id' ? 'selected' : '' }}>ID</option>
                 </select>
            
                 <input class=" col-xs-10 col-sm-5 pull-left" style="width:300px" type="text" placeholder="" name ="q" value="{{ isset($q) ? $q : "" }}" tabindex="2"/>  
                 <button class="btn btn-xs btn-success  pull-left" type="submit" tabindex="3"><i class="icon-search icon-on-right bigger-160">搜索&nbsp;</i></button>																	
              </form>
     <div class="row">
		<div class="col-xs-12">
    			<div class="table-responsive">
    				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
    					<thead>
    						<tr>
                                <th>#</th>
    							<th>中文名称</th>
    							<th>中文分词</th>
    							<th>英文名称</th>
    							<th>描述</th>									
    
    							<th>
    								<i class="icon-time bigger-110 hidden-480"></i>
    								创建时间
    							</th>
    							<th>
    								<i class="icon-time bigger-110 hidden-480"></i>
    								修改时间
    							</th>
    
    							<th>刪除</th>
    						</tr>
    					</thead>
    
    					<tbody>
    		@foreach ($table->all() as $v)
    						<tr>
    	                        <td><a href='{{ url("/admin/table/edit/{$v->id}") }}'>{{ $v->id }}  </a></td>
    							<td>{{ $v->cn }}</td>
    							<td>{{ $v->cn_segment }}</td>
    							<td>{{ $v->en }}</td>
    							<td class="hidden-480">{{ $v->desc }}</td>
    							<td>{{ $v->created_at }}</td>
    
    							<td class="hidden-480">
    								{{ $v->updated_at }}
    							</td>
    							
    							<td> 
    							<form action='{{ url("/admin/table/delete/{$v->id}") }}' method="post">
    							 <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    							 &nbsp;&nbsp;
    									<button class="btn btn-xs btn-danger" onclick="return deleleConfirm();">																	
    										<i class="icon-trash bigger-120">&nbsp;刪除</i>
    									</button>
    							</form>
    							
    							<form action='{{ url("/admin/table/translate/{$v->id}") }}' method="post" name="translate">
    							 <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    							 &nbsp;&nbsp;
    									<button class="btn btn-xs btn-info">																	
    										<i class="icon-info bigger-120">&nbsp;翻译</i>
    									</button>
    							</form>
    							</td>
    						</tr>
            @endforeach
    					</tbody>												
    				</table> 
    				<div> {!! $table->render() !!} </div>
    			</div>
    		</div>
    	</div><!-- /.row -->
    </div><!-- /.page-content -->
@endsection		

@section('scripts')
<script type="text/javascript">
   $('form[name="translate"]').submit(function (ev) { 
	   $.ajax({
           type: $(this).attr('method'),
           url: $(this).attr('action'),
           data: $(this).serialize(),
           dataType: "json",
           success: function (data) {

           	var ret = eval(data);            	
               if(ret.success ){
            	    alert(ret.message);
                   	location.reload();
               }else{
            	   alert(ret.message);
               }
           },
           error: function(){
        	   alert("翻译失败, 请重试");
           }
       });

	   ev.preventDefault();
   });
</script>
@endsection	