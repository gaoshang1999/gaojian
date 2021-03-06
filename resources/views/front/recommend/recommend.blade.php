@extends('front/front')

{{-- Content --}}
@section('content')

       <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		
              <!-- page start-->
   
                 <div class="row"><!-- row start-->
                  <div class="col-lg-8"><!-- col start-->
                      <section class="panel">
                          <header class="panel-heading">
                             快速推荐 {{Request::input('recruit_user')}}
                          </header>
                        <div class="panel-body">
         <form id="" class="form-horizontal "  method="get"  action="{{ url('/front/recommend/queryTalent') }}">
         <input type="hidden" name="demand_id" value="{{Request::input('demand_id')}}" >
	<?php  $users= App\Models\User::others()->whereNotNull('user_name')->orderBy('user_name')->get();?>                    
                                 <div class="form-group">
                                      <label class="col-sm-2 control-label">发布人</label>
                                        <div class="col-md-4" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15" id="recruit_user" name="recruit_user"> <?php $user_id= Auth::user()->id;?>
                                                <option value="{{ Auth::user()->id}}" {{ Request::input('recruit_user')== Auth::user()->id  ?	'selected' : '' }}>本人（默认）</option>
                                                   @foreach ($users->all() as $v)
                                                  <option value="{{ $v->id}}" {{ Request::input('recruit_user')== $v->id ?	'selected' : '' }}>{{ $v->user_name }}</option>
                                                  <?php if(Request::input('recruit_user')== $v->id){ $user_id= $v->id;} ?>
                                                    @endforeach
                                                 
                                              </select>
                                           
                                          </div>
                             </div>

 	<?php   	
 	    $demands= App\Models\Demand::demand()->select('recruit_corporation')->where('recruit_user', $user_id) ->distinct()  ->orderBy('recruit_corporation')->get();
 	?>                                                

                                      <div class="form-group">
                                      <label class="col-sm-2 control-label">推荐目标公司</label>
                                        <div class="col-md-4" col-sm-offset-3>
                                       <?php $demand_recruit_corporation= $demands->first()->recruit_corporation;?>
                                              <select class="form-control m-bot15" id="recruit_corporation" name="recruit_corporation">
                                                    @foreach ($demands->all() as $v)
                                                  <option value="{{ $v->recruit_corporation }}" {{ Request::input('recruit_corporation')== $v->recruit_corporation  ?	'selected' : '' }}>{{ $v->recruit_corporation }}</option>
                                                  <?php if(Request::input('recruit_corporation')== $v->recruit_corporation){ $demand_recruit_corporation= $v->recruit_corporation;} ?>
                                                    @endforeach
                                              </select>
                                           
                                          </div>

                                </div>
 	<?php   	
 	    $demands= App\Models\Demand::demand()->select('id','post_name')->where('recruit_user', $user_id) ->where('recruit_corporation', $demand_recruit_corporation) ->distinct()  ->orderBy('post_name')->get();
 	?>   
                                

                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">推荐目标职位</label>
                                        <div class="col-md-4" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15" id="post_name" name="post_name">
                                                    @foreach ($demands->all() as $v)
                                                  <option value="{{ $v->id}}" {{ Request::input('post_name')== $v->id ?	'selected' : '' }}>{{ $v->post_name }}</option>
                                                    @endforeach    
                                              </select>
                                           
                                          </div>
                                       </div>


                                       
 
                              <div class="form-group">
                                      <label class="col-sm-2 control-label">人才姓名搜索</label>
                                      <div class="col-sm-8">
                                          <input type="text" class="form-control"  name="name" value="{{Request::input('name')}}">
                                      </div>
                                  </div>

                                  
                                   <div class="form-group">
                                      <label class="col-sm-2 control-label">人才手机搜索</label>
                                      <div class="col-sm-8">
                                          <input type="text" class="form-control"  name="mobile" value="{{Request::input('mobile')}}">
                                      </div>
                                  </div>

                                  
                                   <div class="form-group">
                                      <label class="col-sm-2 control-label">所在公司搜索</label>
                                      <div class="col-sm-8">
                                          <input type="text" class="form-control"  name="last_corporation" value="{{Request::input('last_corporation')}}">
                                      </div>
                                  </div>


                             
                                <div class="form-group">
                                          <div class="col-lg-offset-4 col-lg-8">
                                              <button class="btn btn-primary" type="submit">搜索</button>

                                          </div>
                                </div>
        </form>



<!-- advanced表格 table-->



                <div class="row">
        <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  我的人才储备
              </header>
<div class="table-responsive">
              <table class="table table-striped table-advance table-hover">
               <tbody>
                
 <tr>
                     <th><i class="icon_profile"></i> 姓名</th>
                     <th><i class="icon_profile"></i> 职级</th>

                     <th><i class="icon_pin_alt"></i> 所在公司</th>
                     <th><i class="icon_pin_alt"></i> 手机</th>

                  


                     <th><i class="icon_cogs"></i> 操作</th>
                 </tr> 
       @if(isset($talent))
        @foreach ($talent->all() as $v)
                 <tr>
                     <td>{{ $v->name }}</td>
                     <td>{{ $v->job_level_1 }}</td>
                     <td>{{ $v->last_corporation }}</td>
                     <td>{{ $v->mobile }}</td>
                   
                     <td>
                      <div class="btn-group">


                      <form name="recommend-1-form" action='{{ url("/front/recommend/recommend?talent_id={$v->id}") }}' method="post" class="pull-right">
    							 <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    							 <input type="hidden" name="type" value="1" >
    									<button class="btn btn-primary btn-sm" onclick="">																	
    										 预推荐
    									</button>
    				 </form>
                      <form name="recommend-hr-form" action='{{ url("/front/recommend/recommendHR?talent_id={$v->id}") }}' method="post" class="pull-right">
    							 <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    							 <input type="hidden" name="type" value="2" >
    									<button class="btn btn-primary btn-sm" onclick="">																	
    										直接推荐HR
    									</button>
    				 </form>
                       
                      </div>
                  </td>
              </tr>
         @endforeach
@endif 
   
    </tbody>
    </table>
</div>    
    </section>
    </div>
    </div>

    <!-- advanced table-->
 @if(isset($talent))
  <div class="row">
        <div class="col-sm-12">

         <div>
                  <ul class="pagination pagination-sm pull-right">
                     {!! $talent->render() !!} 
                  </ul>
         </div>

       </div>
    </div>
@endif 





                                              <div class="form-group">
                                          <div class="col-lg-offset-4 col-lg-8">
                                             <a class="btn btn-warning" href="javascript:history.back()" role="button">返回</a><br>

                                          </div>
                                          </div>






                     
                                  </div>
                              </form>
                          </div>
                      </section>

                      </div>  <!-- col end-->


            
                    </div>  <!-- row end-->




              <!-- page end-->
          </section>
 
      <!--main content end-->
      

@endsection

@section('scripts')
<script type="text/javascript">
 $('#recruit_user').change(function(){
	  var recruit_user = $(this).val();
	  $.ajax({
        type: 'get',
        url: "{{ url('/front/demand/queryMyDemand') }}",
        data: 'recruit_user='+ recruit_user,
        dataType: "json",
        success: function (data) {
     	    var lists = eval(data);
     	    var html = '';
         	 $(lists).each(function() {
         	   html += '<option value="'+this.recruit_corporation+'">'+this.recruit_corporation+'</option>';           	 
         	});
         	$('#recruit_corporation').html(html);
         	$('#recruit_corporation').change();
        },
        error: function(){
     	    alert('查询岗位失败!');
        }
    });
      
});
                                                    
  $('#recruit_corporation').change(function(){
	  var recruit_user = $('#recruit_user').val();
	  var recruit_corporation = $('#recruit_corporation').val(); ;
	  $.ajax({
          type: 'get',
          url: "{{ url('/front/demand/queryMyDemand') }}",
          data: 'recruit_corporation='+ recruit_corporation +'&recruit_user='+ recruit_user,
          contentType: "application/x-www-form-urlencoded; charset=utf-8", 
          dataType: "json",
          success: function (data) {
       	    var lists = eval(data);
       	    var html = '';
           	 $(lists).each(function() {
           	   html += '<option value="'+this.id+'">'+this.post_name+'</option>';           	 
           	});
           	$('#post_name').html(html);
          },
          error: function(){
       	    alert('查询岗位失败!');
          }
      });
        
  });

  $("form[name='recommend-1-form']").submit(function (ev) { 					
	    var demand_id = $('#post_name').val();
	   $.ajax({
          type: $(this).attr('method'),
          url: $(this).attr('action'),
          data: $(this).serialize() + "&demand_id="+demand_id,
          dataType: "json",
          success: function (data) { 
	           	var ret = eval(data); 
	            alert(ret.message);	
// 	            location.reload();
          },
          error: function(){       	    
       	     alert("预推荐失败，请重试");
          }
      });

	   ev.preventDefault();
  });

  $("form[name='recommend-hr-form']").submit(function (ev) { 					
	  var demand_id = $('#post_name').val();
	   $.ajax({
         type: $(this).attr('method'),
         url: $(this).attr('action'),
         data: $(this).serialize() + "&demand_id="+demand_id,
         dataType: "json",
         success: function (data) { 
	           	var ret = eval(data); 
	            alert(ret.message);	
         },
         error: function(){       	    
      	     alert("推荐HR失败，请重试");
         }
     });

	   ev.preventDefault();
 });
  
</script>
@endsection