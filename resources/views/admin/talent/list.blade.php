@extends('admin/admin')

@section('subTitle') 人才管理 @stop 

{{-- Content --}} 
@section('content')



<div class="page-content">
	<h3 class="header smaller lighter blue">人才列表</h3>

	

    <div class="col-xs-12">
    	<form class="form-group   form-inline" role="form" method="get" id="search-form" action="{{ url('/admin/talent/search') }}">
    	<?php   $table = App\Models\Table::where('cn', '人才')->first(); ?>
    	  
    	@include('admin.common.search_form_element')	  
    
    	</form>
    </div>


	<div class="row">
		<div class="col-xs-12">
		
		<a href="#batch-delete-modal-form" data-toggle="modal" style="margin: 0px 5px;"  
			class="btn btn-xs btn-danger pull-right" tabindex="4"> <i
			class="icon-trash bigger-160">&nbsp;批量删除</i>
		</a>
		
		<a href="#batch-update-modal-form" data-toggle="modal" style="margin: 0px 5px;"  
			class="btn btn-xs btn-warning pull-right" tabindex="4"> <i
			class="icon-edit bigger-160">&nbsp;批量修改</i>
		</a>
		

		
		   <a href="#parse-modal-form" data-toggle="modal" class="btn btn-xs btn-pink pull-right" 
				tabindex="4"> <i class="icon-beaker bigger-160">&nbsp;量化模型解析</i>
			</a>

			<a href="#upload-modal-form" data-toggle="modal" class="btn btn-xs btn-purple pull-right" style="margin: 0px 5px;"
				tabindex="4"> <i class="icon-cloud-upload bigger-160">&nbsp;简历上传</i>
			</a>
			
			<a href="#recommend-modal-form" data-toggle="modal" class="btn btn-xs btn-default pull-right" style="margin: 0px 5px;"
				tabindex="4"> <i class="icon-envelope bigger-160">&nbsp;推荐</i>
<!-- 			</a> -->
			
<!-- 			 <a href="{{ url('/admin/talent/batchUpdate') }}" -->
<!-- 				style="margin: 0px 5px;" class="btn btn-xs btn-success pull-right" -->
<!-- 				tabindex="4"> <i class="icon-edit bigger-160">&nbsp;批量修改</i> -->
<!-- 			</a> -->
			 <a href="{{ url('/admin/talent/add') }}"
				class="btn btn-xs btn-info pull-right" tabindex="4"> <i
				class="icon-plus bigger-160">&nbsp;新增</i>
			</a>



			<div class="table-responsive">
				<table id="main-table"
					class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center"><label> <input type="checkbox"  class="ace" />
									<span class="lbl"></span>
							</label></th>
							<th>人才编号</th>
							<th>姓名</th>
							<th>手机</th>
							<th>最近公司</th>
							<th>性别</th>

							<th>出生日期</th>
							<th>户口所在地点</th>
							<th>所在地点</th>

							<th>产品标签1</th>
							<th>公司标签1</th>							

							<th><i class="icon-time bigger-110 hidden-480"></i> 创建时间</th>
							<th><i class="icon-time bigger-110 hidden-480"></i> 修改时间</th>

							<th>刪除</th>
						</tr>
					</thead>
            <?php $constant = App\Models\Constant::getInstance(); ?>    
    					<tbody>
						@foreach ($talent->all() as $v)
						<tr>
							<td class="center">
    							<label> 
    							        <input type="checkbox" name="id_checkbox[]" class="ace" value="{{ $v->id }}"/>
    									<span class="lbl"></span>
    							</label>
							</td>
							<td><a href='{{ url("/admin/talent/edit/{$v->id}") }}'>{{ $v->id}} </a></td>
							<td>{{$v-> name }}</td>
							<td>{{$v-> mobile }}</td>
							<td>{{$v-> last_corporation }}</td>
							<td>{{ array_get($constant, 'sex.'.$v-> sex, '') }}</td>

							<td>{{$v-> birth_date }}</td>
							<td>{{$v-> permanent_residence }}</td>
							<td>{{$v-> location }}</td>
							
							<td>{{$v-> product_label_1 }}</td>							
							<td>{{$v-> corporation_label_1 }}</td>					
							<td>{{ $v->created_at }}</td>
							<td class="hidden-480">{{ $v->updated_at }}</td>
							<td>
								<form action='{{ url("/admin/talent/delete/{$v->id}") }}'
									method="post">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									&nbsp;&nbsp;
									<button class="btn btn-xs btn-danger"
										onclick="return deleleConfirm();">
										<i class="icon-trash bigger-120">&nbsp;刪除</i>
									</button>
								</form>
							</td>	

						</tr>
						@endforeach
					</tbody>
				</table>
				<div>{!! $talent->render() !!}  <ul class="pagination pull-left"><li><span> <strong>{{$talent->total()==0?0:$talent->toArray()['from']}} - {{$talent->toArray()['to']}} /{{$talent->total()}} </strong></span></li> </ul></div>
			</div>
		</div>
	</div>

	<!-- /.row -->

	<div id="upload-modal-form" class="modal" tabindex="-1">
		<form id="upload-form" role="form" method="post"
			enctype="multipart/form-data"
			action="{{ url('/admin/talent/upload') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="blue bigger">选择要上传的简历文件（只支持txt或zip格式）</h4>
					</div>

					<div class="modal-body overflow-visible">
						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<div class="space"></div>

								<input id="file" name="file" type="file" accept=".zip,.txt" />
							</div>

						</div>
						
<!-- 						 <div id="upload-progress-bar" class="progress progress-striped" data-percent="" hidden> -->
							 <div  class="progress-bar progress-bar-success" style="width: 0%;"></div>
<!-- 						</div> -->
						
					</div>
					
					<div class="modal-footer">
					    <div id="upload-hint"></div>               
					
						<button class="btn btn-sm" data-dismiss="modal">
							<i class="icon-remove"></i> 取消							
						</button>

						<button class="btn btn-sm btn-primary" type="button"
							id="submit-upload-form">
							<i class="icon-ok"></i> 上传
							<span id="upload-progress-bar"  hidden="true">							 
							     <i class="icon-spinner icon-spin red bigger-125" ></i>													 
							</span>
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<!-- upload-modal-form -->

		<div id="batch-update-modal-form" class="modal" tabindex="-1">
		<form id="batch-update-form" role="form" method="post"
			action="{{ url('/admin/talent/batchUpdate') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="blue bigger">批量修改</h4>
					</div>

					<div class="modal-body overflow-visible">
					<div class="row">
        				<div class="form-group">
        
        					<label class=" pull-left" for=""> 文本项目 </label>      
                          <?php $column = App\Models\Column::whereIn('type', ['string', 'text'])->orderBy(DB::raw('CONVERT( cn USING gbk )'))->get();?>  
                          <select class=" col-xs-1 col-sm-5 pull-left" id="update_field1"
                    						name="update_field1" style="width: 120px" tabindex="1"> 
                            @foreach($column as $c)
                                <option value="{{ $c->en }}" >{{ $c->cn }}</option>
        					@endforeach
        					</select> 
        					<input class=" col-xs-10 col-sm-5 pull-left"
        						style="width: 100px;margin-lef:5px" type="text" placeholder="" name="update_value1"
        						value="" tabindex="2" />
        				
        						<input class=" col-xs-10 col-sm-5 pull-left"
        						style="width: 100px;margin-lef:5px" type="text" placeholder="" id="update_replace" name="update_replace"
        						value="" tabindex="2" />
        					
                        		<label class="radio-inline"><input type="radio" name="update_method" value="0" checked> 替换</label>
                                <label class="radio-inline"><input type="radio" name="update_method" value="1" > 插入</label>
                                <label class="radio-inline"><input type="radio" name="update_method" value="2" > 覆盖</label>
        				</div>							 

						</div>
						<div class="row">
            				<div class=" form-group">
            					<label class=" pull-left" for=""> 量化项目 </label>  
                                  <?php $column = App\Models\Column::whereIn('type', ['integer', 'float'])->orderBy(DB::raw('CONVERT( cn USING gbk )'))->get();?>       
                                  <select class=" col-xs-1 col-sm-5 pull-left" id="update_field2"
                        						name="update_field2" style="width: 120px;margin-lef:5px" tabindex="1">  
                                       @foreach($column as $c)
                                            <option value="{{ $c->en }}"  >{{ $c->cn }}</option> 
            							@endforeach
            					</select> 
            					<input class=" col-xs-10 col-sm-5 pull-left"
            						style="width: 100px" type="number" placeholder="" name="update_value2"
            						value="" tabindex="2" /> 
            					
            				</div>							 

						</div>
            			<div class="row">
                        <div class=" form-group">
            					<label class=" pull-left" for=""> 日期项目 </label>      
                              <?php $column = App\Models\Column::whereIn('type', ['date'])->orderBy(DB::raw('CONVERT( cn USING gbk )'))->get();?>  
                              <select class=" col-xs-1 col-sm-5 pull-left" id="update_field3"
            						name="update_field3" style="width: 120px;margin-lef:5px" tabindex="1">  
                                       @foreach($column as $c)
                                          <option value="{{ $c->en }}"  >{{ $c->cn }}</option>
                                        @endforeach
            					</select>
            
            					<div class="input-group " style="width: 120px">
            						<input class="form-control date-picker col-xs-10 col-sm-5"
            							id="update_value3" name="update_value3" type="text"
            							data-date-format="yyyy-mm-dd"
            							value="" /> <span
            							class="input-group-addon"> <i class="icon-calendar bigger-100"></i>
            						</span> 
            
            					</div>
            				</div>							 
            当前搜索到的&nbsp;&nbsp;<strong>{{$talent->total()}}</strong>&nbsp;&nbsp;条记录将会被修改

            			</div>						
						
<!--             			<div id="batch-update-progress-bar" class="progress progress-striped" data-percent="" hidden> -->
							 <div  class="progress-bar progress-bar-success" style="width: 0%;"></div>
<!-- 						</div> -->
						
					</div>
                    <input type="hidden" name="search_scope" value="1" > <!-- 搜索结果 -->
					<div class="modal-footer">
						<button class="btn btn-sm" data-dismiss="modal">
							<i class="icon-remove"></i> 取消
						</button>

						<button class="btn btn-sm btn-primary" type="submit"
							id="submit-batch-update-form">
							<i class="icon-ok"></i> 批量修改
							<span id="batch-update-progress-bar"  hidden="true">							 
							     <i class="icon-spinner icon-spin red bigger-125" ></i>													 
							</span>
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	
	
		<div id="batch-delete-modal-form" class="modal" tabindex="-1">
		<form id="batch-delete-form" role="form" method="post"
			action="{{ url('/admin/talent/batchDelete') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="blue bigger">批量删除确认</h4>
					</div>

					<div class="modal-body overflow-visible">						 
								 
					 <div class="row">
					   <label class="col-sm-10 control-label no-padding-right" > 是否将当前搜索到的&nbsp;&nbsp;<strong>{{$talent->total()}}</strong>&nbsp;&nbsp;条记录删除？</label>
					 

					 </div>
					 
<!-- 					 	 <div id="batch-delete-progress-bar" class="progress progress-striped" data-percent="" hidden> -->
							 <div  class="progress-bar progress-bar-success" style="width: 0%;"></div>
<!-- 						</div> -->
					</div>
                         <input type="hidden" name="search_scope" value="1" > <!-- 搜索结果 -->
					<div class="modal-footer">
						<button class="btn btn-sm" data-dismiss="modal">
							<i class="icon-remove"></i> 取消
						</button>

						<button class="btn btn-sm btn-primary" type="submit"
							id="submit-batch-delete-form">
							<i class="icon-ok"></i> 批量删除
							<span id="batch-delete-progress-bar"  hidden="true">							 
							     <i class="icon-spinner icon-spin red bigger-125" ></i>													 
							</span>
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<!-- batch-delete-modal-form -->
	
 
 
	<!-- batch-update-modal-form -->
	
		<div id="parse-modal-form" class="modal" tabindex="-1">
		<form id="parse-form" role="form" method="post"
			enctype="multipart/form-data"
			action="{{ url('/admin/talent/parse') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="blue bigger">简历解析</h4>
					</div>

					<div class="modal-body overflow-visible">
						 <div class="row">
						 <div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="parser">选择API</label>
							
						<div class="col-sm-9">
		                  <select class="col-xs-10 col-sm-5" id="parser" name="parser" style="width: 150px" tabindex="1">                            
                                <option value="hello"  selected>API-1</option>
                                
                                <option value='jx100001'>jx100001</option>
                                <option value='jx100002'>jx100002</option>
                                <option value='jx100003'>jx100003</option>
                                <option value='jx100004'>jx100004</option>
                                <option value='jx100005'>jx100005</option>
                                <option value='jx100006'>jx100006</option>
                                <option value='jx100007'>jx100007</option>
                                <option value='jx100008'>jx100008</option>
                                <option value='jx100009'>jx100009</option>
                                <option value='jx100010'>jx100010</option>
                                <option value='jx100050'>jx100050</option>
                                <option value='jx100051'>jx100051</option>
                                <option value='jx100052'>jx100052</option>
                                <option value='jx100053'>jx100053</option>
                                <option value='jx100054'>jx100054</option>
                                <option value='jx100055'>jx100055</option>
                                <option value='jx100056'>jx100056</option>
                                <option value='jx100057'>jx100057</option>
                                <option value='jx100058'>jx100058</option>
                                <option value='jx100059'>jx100059</option>
                                <option value='jx100060'>jx100060</option>                                                                        
					      </select>
	                   </div>
						</div>		 
                    </div>
	 
					 <div class="row">
					 <div class="form-group">
                        <label class="radio-inline"><input type="radio" name="search_scope" value="2" checked> 选中项</label>
                        <label class="radio-inline"><input type="radio" name="search_scope" value="1" > 搜索结果</label>
                		<label class="radio-inline"><input type="radio" name="search_scope" value="0" > 全库</label>                                                
                      </div>		 
					</div>
					
<!-- 						<div id="parse-progress-bar" class="progress progress-striped" data-percent="" hidden> -->
							 <div  class="progress-bar progress-bar-success" style="width: 0%;"></div>
<!-- 						</div> -->
					</div>

					<div class="modal-footer">
						<button class="btn btn-sm" data-dismiss="modal">
							<i class="icon-remove"></i> 取消
						</button>

						<button class="btn btn-sm btn-primary" type="submit"
							id="submit-parse-form">
							<i class="icon-ok"></i> 解析
							<span id="parse-progress-bar"  hidden="true">							 
							     <i class="icon-spinner icon-spin red bigger-125" ></i>													 
							</span>
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<!-- parse-modal-form -->

	
		<div id="recommend-modal-form" class="modal" tabindex="-1">
		<form id="recommend-form" role="form" method="post"
			action="{{ url('/admin/talent/recommend') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="blue bigger">推荐设置</h4>
					</div>

					<div class="modal-body overflow-visible">						 
								 
					 <div class="row">
					  <div class="form-group">
					      <label class="col-sm-3 control-label no-padding-right" > 需求编号</label>
    					   <div class="col-sm-9">
    					   <input type="text" id="demand_id" name="demand_id" placeholder="需求编号" 	class="col-xs-10 col-sm-5"	value="" />
    					 </div>
					 </div>
					 </div>
					 
					 <div class="row">
					 <div class="form-group">
					   <label class="col-sm-3 control-label no-padding-right" > 推荐类型</label>
                        <label class="radio-inline"><input type="radio" name="recommend_type" value="1" checked> 正式推荐</label>
                        <label class="radio-inline"><input type="radio" name="recommend_type" value="2" > 预推荐</label>                                           
                      </div>		 
					</div>
					 
					 <div class="row">
					 <div class="form-group">
                        <label class="radio-inline"><input type="radio" name="search_scope" value="2" checked> 选中项</label>
                        <label class="radio-inline"><input type="radio" name="search_scope" value="1" > 搜索结果</label>
                		<label class="radio-inline"><input type="radio" name="search_scope" value="0" > 全库</label>                                                
                      </div>		 
					</div>
					 
					</div>

					<div class="modal-footer">
						<button class="btn btn-sm" data-dismiss="modal">
							<i class="icon-remove"></i> 取消
						</button>

						<button class="btn btn-sm btn-primary" type="submit"
							id="submit-recommend-form">
							<i class="icon-ok"></i> 推荐
							<span id="recommend-progress-bar"  hidden="true">							 
							     <i class="icon-spinner icon-spin red bigger-125" ></i>													 
							</span>
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<!-- recommend-modal-form -->
	
</div>
<!-- /.page-content -->
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
<script src="/assets/js/jquery.form.js"></script>


<!-- inline scripts related to this page -->

<script type="text/javascript">
			jQuery(function($) {

				$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				/////////
				$('#upload-modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose: '拖拽文件到这里或者点击选择文件', //'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				});
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
// 				$('#upload-modal-form').on('shown.bs.modal', function () {
// 					$(this).find('.chosen-container').each(function(){
// 						$(this).find('a:first-child').css('width' , '210px');
// 						$(this).find('.chosen-drop').css('width' , '210px');
// 						$(this).find('.chosen-search input').css('width' , '200px');
// 					});
// 				});

// 				$('#batch-update-modal-form').on('shown.bs.modal', function () {
// 					$(this).find('.chosen-container').each(function(){
// 						$(this).find('a:first-child').css('width' , '210px');
// 						$(this).find('.chosen-drop').css('width' , '210px');
// 						$(this).find('.chosen-search input').css('width' , '200px');
// 					});
// 				});

				$("#main-table").find('tr > td:first-child input:checkbox').change(function(){
					var ids = $("input[name='id_checkbox[]']:checked").map(function(){return this.value; }).get().join(",");
					$("#ids").val(ids);
				});

				$('#main-table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).change();
						$(this).closest('tr').toggleClass('selected');
					});
						
				});



				function mydump(arr,level) {
				    var dumped_text = "";
				    if(!level) level = 0;

				    var level_padding = "";
				    for(var j=0;j<level+1;j++) level_padding += "    ";

				    if(typeof(arr) == 'object') {  
				        for(var item in arr) {
				            var value = arr[item];

				            if(typeof(value) == 'object') { 
				                dumped_text += level_padding + "'" + item + "' ...\n";
				                dumped_text += mydump(value,level+1);
				            } else {
				                dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
				            }
				        }
				    } else { 
				        dumped_text = "===>"+arr+"<===("+typeof(arr)+")";
				    }
				    return dumped_text;
				}


				function changeProgressbar(elem, percent){
                    var width = percent+"%"; 

					elem.data('percent', width);
					elem.children().first().animate({'width': width});
				}
				
				function timer(elem, seconds){			       
			       return setInterval(function(){
			    	        seconds += 1;
			                changeProgressbar(elem, seconds);	
			                if(	seconds == 100 ) {seconds=0};	                  
			            }, 1000);			      
			    }

			    function finishTimer(timmerId, elem){
			    	changeProgressbar(elem, 100) ;
			    	clearInterval( timmerId );			    	
			    }
						
				$("#submit-upload-form").click(function(){  
					if ($("#file").val() == "") {
	                     alert("请选择一个文件，再点击上传。");
	                     return false;
	                 }
	               var $progressbar = $("#upload-progress-bar");
	               $progressbar.toggle();
// 	               var timmerId = timer($progressbar, 0);
	               
				   $(this).prop('disabled', true);
                   $("#upload-form").ajaxSubmit({		   
			           success: function (data) {
// 			        	   finishTimer(timmerId, $progressbar);                           
                           $progressbar.toggle();
	   			           var ret = eval(data);	   			           	            	
	   			           alert(ret.message);  	   			           
   			               location.reload();   			            
	   			       }
	   			   } );  

                });       

				 
				$("input[name='update_method']").change(function(){
				      var v = $("input[name='update_method']:checked").val();
				      v == '0' ? $('#update_replace').show() : $('#update_replace').hide();        
				 });

				 
                         
				
				$('#batch-update-form').submit(function (ev) { 					
	               var $progressbar = $("#batch-update-progress-bar");
                   $progressbar.toggle();
	
	               $('#submit-batch-update-form').prop('disabled', true);	
				   $.ajax({
			           type: $(this).attr('method'),
			           url: $(this).attr('action'),
			           data: $("#search-form").serialize() + "&"+$(this).serialize(),
			           dataType: "json",
			           success: function (data) {
			        	    $progressbar.toggle();
				           	var ret = eval(data); 
				            alert(ret.message);	
				            location.reload();
			           },
			           error: function(){
			        	   $progressbar.toggle();
			        	   alert("批量修改失败，请重试");
			           }
			       });

				   ev.preventDefault();
			   });

				$('#batch-delete-form').submit(function (ev) { 
		               var $progressbar = $("#batch-delete-progress-bar");
		               $progressbar.toggle();

		               $('#submit-batch-delete-form').prop('disabled', true);	
					   $.ajax({
				           type: $(this).attr('method'),
				           url: $(this).attr('action'),
				           data: $("#search-form").serialize() + "&"+$(this).serialize(),
				           dataType: "json",
				           success: function (data) {
				        	   $progressbar.toggle(); 
    				           	var ret = eval(data); 
    				            alert(ret.message);	
    				            location.reload();
				           },
				           error: function(){
				        	   $progressbar.toggle();
				        	   alert("批量删除失败，请重试");
				           }
				       });

					   ev.preventDefault();
				   });




				$('#parse-form').submit(function (ev) { 							
		               var $progressbar = $("#parse-progress-bar");
		               $progressbar.toggle();
// 		               var timmerId = timer($progressbar, 1);	
		               $('#submit-parse-form').prop('disabled', true);
					   $.ajax({
				           type: $(this).attr('method'),
				           url: $(this).attr('action'),
				           data: $("#search-form").serialize() + "&"+$(this).serialize(),
				           dataType: "json",
				           success: function (data) {
//     				        	finishTimer(timmerId, $progressbar); 
                                $progressbar.toggle();
    				           	var ret = eval(data); 
    				            alert(ret.message);	
    				            location.reload();
				           },
				           error: function(){
// 				        	   finishTimer(timmerId, $progressbar);  
				        	   $progressbar.toggle();
				        	   alert("量化模型解析失败，请重试!");				        	   
				           }
				       });

					   ev.preventDefault();
				   });

				$('#recommend-form').submit(function (ev) { 		
		               var $progressbar = $("#recommend-progress-bar");
		               $progressbar.toggle();					
					   $.ajax({
				           type: $(this).attr('method'),
				           url: $(this).attr('action'),
				           data: $("#search-form").serialize() + "&"+$(this).serialize(),
				           dataType: "json",
				           success: function (data) {
				        	$progressbar.toggle();
				           	var ret = eval(data);            	
				            alert(ret.message);	
				            location.reload();
				           },
				           error: function(){
				        	   $progressbar.toggle();
				        	   alert("推荐失败，请重试!");
				           }
				       });

					   ev.preventDefault();
				   });
				
			});
</script>
@endsection
