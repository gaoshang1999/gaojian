@extends('admin/admin') 

@section('styles') 
	<link rel="stylesheet" href="/assets/jstree/themes/default/style.min.css" />
	<style>
		html, body { background:#ebebeb; font-size:10px; font-family:Verdana; margin:0; padding:0; }
		#container { min-width:320px; margin:0px auto 0 auto; background:white; border-radius:0px; padding:0px; overflow:hidden; }
		#tree { float:left; min-width:319px; border-right:1px solid silver; overflow:auto; padding:0px 0; }
		#data { margin-left:320px; }
/* 		#data textarea { margin:0; padding:0; height:100%; width:100%; border:0; background:white; display:block; line-height:18px; resize:none; } */
/* 		#data, #code { font: normal normal normal 12px/18px 'Consolas', monospace !important; } */

		#tree .folder { background:url('/assets/jstree/themes/default/file_sprite.png') right bottom no-repeat; }
		#tree .file { background:url('/assets/jstree/themes/default/file_sprite.png') 0 0 no-repeat; }
		#tree .file-pdf { background-position: -32px 0 }
		#tree .file-as { background-position: -36px 0 }
		#tree .file-c { background-position: -72px -0px }
		#tree .file-iso { background-position: -108px -0px }
		#tree .file-htm, #tree .file-html, #tree .file-xml, #tree .file-xsl { background-position: -126px -0px }
		#tree .file-cf { background-position: -162px -0px }
		#tree .file-cpp { background-position: -216px -0px }
		#tree .file-cs { background-position: -236px -0px }
		#tree .file-sql { background-position: -272px -0px }
		#tree .file-xls, #tree .file-xlsx { background-position: -362px -0px }
		#tree .file-h { background-position: -488px -0px }
		#tree .file-crt, #tree .file-pem, #tree .file-cer { background-position: -452px -18px }
		#tree .file-php { background-position: -108px -18px }
		#tree .file-jpg, #tree .file-jpeg, #tree .file-png, #tree .file-gif, #tree .file-bmp { background-position: -126px -18px }
		#tree .file-ppt, #tree .file-pptx { background-position: -144px -18px }
		#tree .file-rb { background-position: -180px -18px }
		#tree .file-text, #tree .file-txt, #tree .file-md, #tree .file-log, #tree .file-htaccess { background-position: -254px -18px }
		#tree .file-doc, #tree .file-docx { background-position: -362px -18px }
		#tree .file-zip, #tree .file-gz, #tree .file-tar, #tree .file-rar { background-position: -416px -18px }
		#tree .file-js { background-position: -434px -18px }
		#tree .file-css { background-position: -144px -0px }
		#tree .file-fla { background-position: -398px -0px }
 </style>
	
@endsection	

@section('subTitle') 行业参数管理  @stop
@section('content') 

    <div class="page-content">
     
			<h3 class="header smaller lighter blue">行业列表 </h3>
		
			<div id="container" role="main">
			<div id="tree"></div>
			<div id="data" class="" >
								 
    <form id="save-form" class="form-horizontal"  role="form" method="post"  action="{{url('/admin/industry/save')}}">
			    <input type="hidden" name="_token" value="{{ csrf_token() }}">
				
              <label class="col-sm-2  control-label no-padding-right" for="id"> ID </label> 
             
				<div class="col-sm-10 "> 
						<input type="text" id="id" name="id" placeholder="id" 
							class=" col-sm-5" value=" " readonly="true"/>  
				</div>
	
			   &nbsp;&nbsp; <br/>
				<label class="col-sm-2  control-label no-padding-right" for="name"> 名称 </label> 
             
				<div class="col-sm-10 "> 
						<input type="text" id="name" name="name" placeholder="名称" 
							class=" col-sm-5" value=" "/>  
				</div> 
				
				&nbsp;&nbsp; <br/>
				<label class="col-sm-2  control-label no-padding-right" for="number"> 编号 </label> 
             
				<div class="col-sm-10 "> 
						<input type="text" id="number" name="number" placeholder="编号" 
							class=" col-sm-5" value=" " />  
				</div> 
						
				&nbsp;&nbsp; <br/>
	 
					<label class="col-sm-2 control-label no-padding-right" for="remark"> 描述 </label> 
             
					<div class="col-sm-10"> 
						<textarea type="text/plain" id="remark"  name="remark" rows="5" class=" col-sm-5 autosize-transition"></textarea> 
					</div> 	
					
              &nbsp;&nbsp; <br/>
					<label class="col-sm-2 control-label no-padding-right" for="level"> 级别 </label> 
             
					<div class="col-sm-10"> 
						<input type="number" id="level" name="level" placeholder="级别" min="0" step="1"
							class=" col-sm-5" value=" " disabled="true"/>  
					</div> 				
		
				&nbsp;&nbsp; <br/>
	 
<!-- 					<label class="col-sm-2 control-label no-padding-right" for="parent_id"> 上级id </label>  -->
             
<!-- 					<div class="col-sm-10">  -->
<!-- 						<input type="number" id="parent_id" name="parent_id" placeholder="上级id" min="0" step="1" -->
<!-- 							class=" col-sm-5" value=" " disabled="true"/>   -->
<!-- 					</div> 				 -->
		
				&nbsp;&nbsp; <br/>
			   
				 
				<div class="col-sm-offset-3 col-sm-9">
							<button class="btn btn-info" type="submit">
								<i class="icon-ok bigger-110"></i>
								保存
							</button>

							     
				</div>
				 
				<input type="hidden"  name="referer" value="{{ Request::header('referer') }}" />
			</form>	

				
 
			</div>
		</div>
			
    </div><!-- /.page-content -->
@endsection	

@section('scripts') 
<!--     https://www.jstree.com/demo_filebrowser/index.php -->
	<script src="/assets/jstree/jstree.min.js"></script>
	
	<script type="text/javascript">
	$(function () {
		$(window).resize(function () {
			var h = Math.max($(window).height() - 0, 420);
			$('#container, #data, #tree, #data .content').height(h).filter('.default').css('lineHeight', h + 'px');
		}).resize();

		$('#tree')
			.jstree({
				'core' : {
					'data' : {
						'url' : '{{url("/admin/industry/children")}}',
						'data' : function (node) {
							alert(node.name);
							return { 'id' : node.id };
						}
					},
					'check_callback' : function(o, n, p, i, m) {
						if(m && m.dnd && m.pos !== 'i') { return false; }
						if(o === "move_node" || o === "copy_node") {
							if(this.get_node(n).parent === this.get_node(p).id) { return false; }
						}
						return true;
					},
					'themes' : {
						'responsive' : false,
						'variant' : 'small',
						'stripes' : true
					}
				},
				'sort' : function(a, b) {
					return this.get_type(a) === this.get_type(b) ? (this.get_text(a) > this.get_text(b) ? 1 : -1) : (this.get_type(a) >= this.get_type(b) ? 1 : -1);
				},
				'contextmenu' : {
					'items' : function(node) {
						var tmp = $.jstree.defaults.contextmenu.items();
						delete tmp.create.action;
						tmp.create.label = "新增子节点";
						tmp.create.action = function (data) {
        							var inst = $.jstree.reference(data.reference),
        							obj = inst.get_node(data.reference);
        						inst.create_node(obj, { type : "default" }, "last", function (new_node) {
        							setTimeout(function () { inst.edit(new_node); },0);
        						});
        					};

						if(this.get_type(node) === "file") {
							delete tmp.create;
						}
						tmp.remove.label = "删除";
						tmp.rename.label = "重命名";
						delete tmp.ccp;
						return tmp;
					}
				},
				'types' : {
					'default' : { 'icon' : 'folder' },
					'file' : { 'valid_children' : [], 'icon' : 'file' }
				},
				'unique' : {
					'duplicate' : function (name, counter) {
						return name + ' ' + counter;
					}
				},
				'plugins' : ['state','dnd','sort','types','contextmenu','unique']
			})
			.on('delete_node.jstree', function (e, data) {
				if(deleleConfirm()==true){
    				$.post('{{url("/admin/industry/delete")}}', { 'id' : data.node.id, '_token' : '{{ csrf_token() }}'  })
    					.fail(function () {
    						data.instance.refresh();
    					});
				}
			})
			.on('create_node.jstree', function (e, data) {
				$.post('{{url("/admin/industry/add")}}', { 'type' : data.node.type, 'id' : data.node.parent, 'text' : data.node.text , '_token' : '{{ csrf_token() }}' })
					.done(function (d) {
						data.instance.set_id(data.node, d.id);
					})
					.fail(function () {
						data.instance.refresh();
					});
			})
			.on('rename_node.jstree', function (e, data) {
				$.post('{{url("/admin/industry/edit")}}', { 'id' : data.node.id, 'text' : data.text, '_token' : '{{ csrf_token() }}' })
					.done(function (d) {
						data.instance.set_id(data.node, d.id);
					})
					.fail(function () {
						data.instance.refresh();
					});
			})
			.on('move_node.jstree', function (e, data) {
				$.post('{{url("/admin/industry/move")}}', { 'id' : data.node.id, 'parent' : data.parent, '_token' : '{{ csrf_token() }}' })
					.done(function (d) {
						//data.instance.load_node(data.parent);
						data.instance.refresh();
					})
					.fail(function () {
						data.instance.refresh();
					});
			})
// 			.on('copy_node.jstree', function (e, data) {
// 				$.get('?operation=copy_node', { 'id' : data.original.id, 'parent' : data.parent })
// 					.done(function (d) {
// 						//data.instance.load_node(data.parent);
// 						data.instance.refresh();
// 					})
// 					.fail(function () {
// 						data.instance.refresh();
// 					});
// 			})
			.on('changed.jstree', function (e, data) {
				if(data && data.selected && data.selected.length) {
					$.get('{{url("/admin/industry/query")}}?id=' + data.selected.join(':'), function (d) {
                        $('#id').val(d.id);
						$('#name').val(d.name);
						$('#number').val(d.number);
						$('#remark').val(d.remark);
						$('#level').val(d.level);
						$('#parent_id').val(d.parent_id);
					});
				}
			});
	});

	$('#save-form').submit(function (ev) { 	
		   $.ajax({
	           type: $(this).attr('method'),
	           url: $(this).attr('action'),
	           data:$(this).serialize(),
	           dataType: "json",
	           success: function (data) {
    	           	var ret = eval(data);            	
    	            alert(ret.message);		            
	           },
	           error: function(){
	        	   alert("保存失败，请重试!");
	           }
	       });

		   ev.preventDefault();
	   });

	</script>
@endsection	