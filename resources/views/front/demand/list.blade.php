

@extends('front/front')

{{-- Content --}}
@section('content')

  			<!--main content start-->
  			<section id="main-content">
  				<section class="wrapper">            
  					<!--overview start-->

<!-- 			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					</ol>
				</div>
			</div> -->



			



			<!-- Today status end -->
			
			<!-- 状态面板 -->

             @include('front.widget.my_demand_status')


<!-- I空行-->

                  <div class="row">
                                        <div class="col-md-12">
                                        <hr>
                                          </div>
              </div>




 <form class="" role="form" method="get" id="search-form" action="{{ url('/front/demand/search') }}">
 <input type="hidden" name="open" value="{{Request::input('open')}}">
<!-- Inline搜索 form-->
                  <div class="row">

                  <div class="col-md-2">
                  
                  </div>

                      <div class="col-md-2">
                        
                                      <div class="form-group"> 
                                          <label class="sr-only" for="exampleInputEmail2">职位名称关键字</label>
                                          <input type="text" class="form-control" name="post_name" placeholder="岗位名称关键字"  value="{{Request::input('post_name')}}"">
                                      </div>
                       </div>

                       <div class="col-md-2">
                                                              
                                      <div class="form-group"> 
                                          <label class="sr-only" for="exampleInputPassword2">职位描述关键字</label>
                                          <input type="text" class="form-control"  name="position_description" placeholder="职位描述关键字" value="{{Request::input('position_description')}}"">
                                      </div>
                      
                      </div>

                     <div class="col-md-2">
                        
                                  
                                      <button type="submit" class="btn btn-warning">搜索</button>


                      </div>

                  </div>




<!-- 筛选 form-->


 <div class="row">
           <div class="col-md-2" col-sm-offset-3>                   
                                       
                                         
            </div>
            
           <div class="col-md-2" col-sm-offset-3>
           	<?php  $d1= App\Models\Demand::myDemand()->select('recruit_corporation')->whereNotNull('recruit_corporation')->distinct()->orderBy('recruit_corporation') ->get();?>                            
                                        <select class="form-control m-bot15" name="recruit_corporation"  id="recruit_corporation" ">
                                                      <option value=0>所有公司</option> 
                                           @foreach ($d1->all() as $v)   
                                                  <option value="{{ $v->recruit_corporation }}" {{ Request::input('recruit_corporation') == $v->recruit_corporation?	'selected' : '' }}>{{ $v->recruit_corporation }}</option>
                                             @endforeach
                                              </select>
                                           
           </div>
           
           
           <div class="col-md-2" col-sm-offset-3>
           	<?php  $query= App\Models\Demand::myDemand()->select('post_name')->whereNotNull('post_name');
           	 if(Request::input('recruit_corporation')){
           	     $query->where('recruit_corporation', Request::input('recruit_corporation'));
           	 }
           	 $d1= $query->distinct() ->orderBy('post_name')->get();?>                            
                                        <select class="form-control m-bot15" name="post_name_2"  id="post_name_2" >
                                                      <option value=0>所有岗位</option> 
                                           @foreach ($d1->all() as $v)
                                                  <option value="{{ $v->post_name }}" {{ Request::input('post_name_2')== $v->post_name?	'selected' : '' }}>{{ $v->post_name }}</option>
                                             @endforeach
                                              </select>
                                           
           </div>

           <div class="col-md-2" col-sm-offset-3>
           <?php  $d2= App\Models\Demand::myDemand()->select('demand_type_label_1')->whereNotNull('demand_type_label_1')->distinct()->orderBy('demand_type_label_1') ->get();?>
                                           
                                              <select class="form-control m-bot15" name="demand_type_label_1">
                                                  <option value=0>所有职能</option>  
                                           @foreach ($d2->all() as $v)
                                                  <option value="{{ $v->demand_type_label_1}}" {{Request::input('demand_type_label_1') == $v->demand_type_label_1?	'selected' : '' }}>{{ $v->demand_type_label_1 }}</option>
                                             @endforeach
                                              </select>
                                           
                                          </div>
             <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15"  name="recommend_flow_status_label_3">  <?php $recommend_flow_status_label_3 = isset($recommend_flow_status_label_3) ? $recommend_flow_status_label_3 : ""; ?>
                                                  <option value="0">所有状态</option>
                                                  <option value="offer进度中">offer进度中</option>
                                                  <option value="面试进度中">面试进度中</option>
                                                  <option value="面试前评审进度中">面试前评审进度中</option>
                                                  <option value="无推荐流程候选人">无推荐流程候选人</option>
                                                  <option value="其他">其他</option>

                                              </select>
                                           
            </div>

              <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15" name="updated_at">  <?php $updated_at = Request::input('updated_at'); ?>
                                                  <option value="0" >全部发布时间</option>  
                                                  <option value="-3 day"  {{ $updated_at== "-3 day" ?	'selected' : '' }}>3天内</option>
                                                  <option value="-7 day"  {{ $updated_at== "-7 day" ?	'selected' : '' }}>1周内</option>
                                                  <option value="-14 day"  {{ $updated_at== "-14 day" ?	'selected' : '' }}>2周内</option>
                                                  <option value="-1 month" {{ $updated_at== "-1 month" ?	'selected' : '' }}>1月内</option>
                                              </select>
                                           
          </div>











   </div>
</form>



@if(!Request::has('open')) 
 <div class="row">
            

                    <div class="col-md-2 " col-sm-offset-3>                        

                               <a class="btn btn-warning" href="{{ url('/front/demand/add') }}" role="button">新增职位</a><br><br>
                         </div>
                      <div class="col-md-2" col-sm-offset-3>                       

                               <a class="btn btn-warning" href="{{ url('/front/demand?open=1') }}" role="button">公共职位</a><br><br>

                      </div>

</div>
@endif


<!-- advanced表格 table-->



			    <div class="row">
        <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  岗位管理
              </header>
<div class="table-responsive">
              <table class="table table-striped table-advance table-hover">
               <tbody>
                  <tr>
                     <th><i class=""></i> #需求编号</th>
                     <th><i class="icon_profile"></i> 公司</th>
                     <th><i class="icon_profile"></i> 岗位</th>
                     <th><i class="icon_calendar"></i> 发布时间</th>
                     <th><i class="icon_pin_alt"></i> 部门</th>
                     <th><i class="icon_pin_alt"></i> 推荐流程中人数</th>
                     <th><i class="icon_pin_alt"></i> 已面试人数</th>

                     <th><i class="icon_mobile"></i> 优先级</th>
                    <th><i class="icon_mobile"></i> 开放状态</th>
                     <th><i class="icon_mobile"></i>发布人</th>
                     <th><i class="icon_mobile"></i>发布人所在公司</th>
                     
                     <th><i class="icon_cogs"></i> 操作</th>
                 </tr>
                 @foreach ($demand->all() as $v)
                 <tr>
                    <td>{{$v-> id }} </td>
                    <td>{{$v-> recruit_corporation }} </td>
                     <td>{{$v-> post_name }} </td>
                     <td>{{ $v->created_at }}</td>
                     <td>{{$v-> attach_department }} </td>
                     <td>{{ $v->recommends()->where('recommend_parameter_1', '<>', 2)->whereNotIn('recommend_flow_parameter_1', [3, 7, 14, 15, 16, 17])->count() }}</td>
                     <td>{{ $v->recommends()->where('recommend_parameter_1', '<>', 2)->where('recommend_flow_status_label_3', '面试进度中' )->count() }}</td>
                     <td>{{ $v->recommends()->where('recommend_parameter_1', '<>', 2)->where('recommend_flow_status_label_3', 'offer进度中' )->count() }}</td>
                     <td>{{ $v->demand_parameter_5==1?'已开放':'未开放' }}</td>
                     <td>{{ $v->user->user_name }}</td>
                     <td>{{ $v->user->corporation }}</td>
                     <td>
                      <div class="btn-group">
<!--                            <a class="btn btn-warning" href="#"><i class="icon_plus_alt2"></i></a> -->
                      <a href="{{ url("/front/demand/view/{$v->id}") }}" target="_blank" class="btn btn-warning btn-sm" role="button">
                      职位详细
                      </a>
                      @if(!Request::has('open')) 
                      <a href="{{ url("/front/recommend/search?demand_id={$v->id}") }}" class="btn btn-warning btn-sm" role="button">
                      候选人
                      </a>
                      @endif
                      <a href="{{ url("/front/recommend/recommend?demand_id={$v->id}&recruit_user={$v->recruit_user}&recruit_corporation={$v->recruit_corporation}&post_name={$v->id}") }}" class="btn btn-warning btn-sm" role="button">
                      快速推荐
                      </a>
                      					
 @if(!Request::has('open')) 
                      <form action='{{ url("/front/demand/delete/{$v->id}") }}' method="post"  class="pull-right">
    							 <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    									<button class="btn btn-warning btn-sm" onclick="return deleleConfirm();">																	
    										 删除 
    									</button>
    					</form>
    					
    				 @if($v->demand_parameter_5)
                      <form name="open-form" action='{{ url("/front/demand/open/{$v->id}") }}' method="post"  class="pull-right">
    							 <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    							 <input type="hidden" name="demand_parameter_5" value="0">
    									<button class="btn btn-success btn-sm" onclick="">																	
    										关闭推荐
    									</button>
    					</form>
    				@else
                       <form name="open-form"  action='{{ url("/front/demand/open/{$v->id}") }}' method="post"  class="pull-right">
    							 <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    							 <input type="hidden" name="demand_parameter_5" value="1">
    									<button class="btn btn-success btn-sm" onclick="">																	
    										开放推荐
    									</button>
    					</form>
    				@endif	
@endif
                      </div>
                  </td>
              </tr>
              @endforeach
    </tbody>
    </table>
    </div>
    </section>
    </div>
    </div>

    <!-- advanced table end-->
  <div class="row">
        <div class="col-sm-12">

         <div>
                  <ul class="pagination pagination-sm pull-right">
                     {!! $demand->render() !!} 
                  </ul>
         </div>

       </div>
    </div>

			<!-- project team & activity end -->

		</section>
	</section>
<!--main content end-->    
@endsection

@section('scripts')
<script type="text/javascript">
  $('#recruit_corporation').change(function(){
	  var recruit_corporation = $(this).val(); ;
	  $.ajax({
          type: 'get',
          url: "{{ url('/front/demand/queryPostName') }}",
          data: 'recruit_corporation='+ recruit_corporation,
          contentType: "application/x-www-form-urlencoded; charset=utf-8", 
          dataType: "json",
          success: function (data) {
       	    var lists = eval(data);
       	    var html = '<option value=0>所有岗位</option>';
           	 $(lists).each(function() {
           	   html += '<option value="'+this.post_name+'">'+this.post_name+'</option>';           	 
           	});
           	$('#post_name_2').html(html);
          },
          error: function(){
       	    alert('查询岗位失败!');
          }
      });
        
  });

  $("form[name='open-form']").submit(function (ev) { 	
	   $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: $(this).serialize() ,
        dataType: "json",
        success: function (data) { 
	           	var ret = eval(data); 
	            alert(ret.message);	
	            location.reload();
        },
        error: function(){       	    
     	     alert("操作失败，请重试");
        }
    });

	   ev.preventDefault();
  });                

</script>
@endsection
