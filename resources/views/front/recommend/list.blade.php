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
              
<!-- Inline搜索 form-->
 <form class="" role="form" method="get" id="search-form" action="{{ url('/front/recommend/search') }}">         
 <input type="hidden" name="demand_id" value="{{ Request::input('demand_id') }}" >			
 <input type="hidden" name="recommend_flow_parameter" value="{{ Request::input('recommend_flow_parameter') }}" >			     
                  <div class="row">

                  <div class="col-md-2">
                  </div>
                        <div class="col-md-2">
                        
                                      
                                      <div class="form-group">  
                                          <label class="sr-only" for="user_name">岗位名称关键字</label>
                                          <input type="text" class="form-control" name="post_name" placeholder="岗位名称关键字"  value="{{ Request::input('post_name') }}">
                                      </div>

                      </div>
                  
                      <div class="col-md-2">
                        
                                      <div class="form-group">  
                                          <label class="sr-only" for="name">人才名称关键字</label>
                                          <input type="text" class="form-control" name="name" placeholder="人才名称关键字"  value="{{ Request::input('name') }}">
                                      </div>
                                      


                      </div>




                                     <div class="col-md-2">
                        
                                     
                                      <div class="checkbox">
                                          <label>
                                              <input type="checkbox"> 特殊要求
                                          </label>
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
           	<?php  $d1= App\Models\Demand::demandForMyTalent()->select('recruit_corporation')->whereNotNull('recruit_corporation')->distinct() ->orderBy('recruit_corporation')->get();?>                            
                                        <select class="form-control m-bot15" name="recruit_corporation" >
                                                      <option value=0>所有公司</option>  
                                           @foreach ($d1->all() as $v)
                                                  <option value="{{ $v->recruit_corporation }}" {{  Request::input('recruit_corporation') == $v->recruit_corporation?	'selected' : '' }}>{{ $v->recruit_corporation }}</option>
                                             @endforeach
                                              </select>
                                           
           </div>

           <div class="col-md-2" col-sm-offset-3>
           <?php  $d2=App\Models\Demand::myDemand()->select('demand_type_label_1')->whereNotNull('demand_type_label_1')->distinct() ->orderBy('demand_type_label_1')->get();?>
                                           
                                              <select class="form-control m-bot15" name="demand_type_label_1">
                                                  <option value=0>所有职能</option>   
                                           @foreach ($d2->all() as $v)
                                                  <option value="{{ $v->demand_type_label_1}}" {{ Request::input('demand_type_label_1') == $v->demand_type_label_1?	'selected' : '' }}>{{ $v->demand_type_label_1 }}</option>
                                             @endforeach
                                              </select>
                                           
              </div>
             <div class="col-md-2" col-sm-offset-3>
                                       
                                       
                                              <select class="form-control m-bot15"  name="recommend_flow_status_label_3">  <?php $recommend_flow_status_label_3 = Request::input('recommend_flow_status_label_3'); ?>
                                                  <option value="不含流程外候选人">有效进度中所有</option>
                                                  <option value="offer进度中" {{ $recommend_flow_status_label_3== "offer进度中" ?	'selected' : '' }}>offer进度中</option>
                                                  <option value="面试进度中" {{ $recommend_flow_status_label_3== "面试进度中" ?	'selected' : '' }}>面试进度中</option>
                                                  <option value="面试前评审进度中" {{ $recommend_flow_status_label_3== "面试前评审进度中" ?	'selected' : '' }}>面试前评审进度中</option>
                                                  <option value="流程外候选人" {{ $recommend_flow_status_label_3== "流程外候选人" ?	'selected' : '' }}>流程外候选人</option>                                                  
                                              </select>
                                           
           </div>

              <div class="col-md-2" col-sm-offset-3>
                                       <?php  $constant = App\Models\Constant::where('en', 'recommend_flow_parameter_2')->orderBy('k')->get();?>
                                              <select class="form-control m-bot15" name="recommend_flow_parameter_2">  
                                                  <option value="0" >所有提醒时间</option>
                                                   @foreach($constant as $c)
			                                         <option value="{{ $c->k }}" @if(Request::input('recommend_flow_parameter_2')  ==$c->k ) selected @endif >{{ $c->v }}</option> 
			                                        @endforeach

                                              </select>
                                           
            </div>

             <div class="col-md-2" col-sm-offset-3>
                                       <?php  $constant = App\Models\Constant::where('en', 'recommend_flow_parameter_1')->orderBy('k')->get();?>
                                              <select class="form-control m-bot15" name="recommend_flow_parameter_1">
                                                 <option value="0">所有状态</option>
                                                  @foreach($constant as $c)
                                        			<option value="{{ $c->k }}" @if(Request::input('recommend_flow_parameter_1') ==$c->k ) selected @endif >{{ $c->v }}</option>
                                        		  @endforeach
                                                                                                                                                                           
                                              </select>
                                           
             </div>


           </div>

</form>
                                          

<!-- advanced表格 table-->



			    <div class="row">
        <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  招聘流程
              </header>
<div class="table-responsive">
              <table class="table table-striped table-advance table-hover">
               <tbody>
           
 <tr>
                    <th><i class="icon_profile"></i> 推荐公司</th>
                     <th><i class="icon_profile"></i> 推荐岗位</th>
                     <th><i class="icon_pin_alt"></i> 推荐号</th>
                     <th><i class="icon_pin_alt"></i> 推荐HR</th>                     
                     <th><i class="icon_pin_alt"></i> 人才来源</th>

                     <th><i class="icon_calendar"></i> 推荐时间</th>
                     <th><i class="icon_pin_alt"></i> 招聘负责人</th>
                     <th><i class="icon_pin_alt"></i> 人才姓名</th>
                     <th><i class="icon_pin_alt"></i> 所在公司</th>
                     <th><i class="icon_pin_alt"></i> 职能</th>

                     <th><i class="icon_mobile"></i> 最新状态</th>
                    <th><i class="icon_mobile"></i> 提醒时间</th>
                    <th><i class="icon_mobile"></i> 最新反馈</th>

<?php $constant = App\Models\Constant::getInstance(); ?>    
                     <th><i class="icon_cogs"></i> 操作</th>
                 </tr>
        @foreach ($recommend->all() as $v)
                 <tr>
                     <td>{{ $v->demand->recruit_corporation }}</td>
                     <td>{{ $v->demand->post_name }}</td>
                     <td>{{ $v->id }} </td>
                     <td>{{ $v->recommend_parameter_2 == 1?'是':'否' }} </td>
                     <td>{{ $v->user->corporation }}-{{ $v->user->user_name }}</td>
                     <td>{{ $v->created_at }}</td>
                     <td>{{ $v->host->user_name }}</td>
                     <td>{{ $v->talent?$v->talent->name:'' }}</td>
                     <td>{{ $v->talent?$v->talent->last_corporation:'' }}</td>
                     <td>{{ $v->demand->demand_type_label_1 }}</td>
                     <td>{{ array_get($constant, 'recommend_flow_parameter_1.'.$v->recommend_flow_parameter_1, '') }}</td>
                     <?php  $action = $v->comments()->where('comment_type', 'action') ->orderBy('created_at', 'desc') ->first(); ?>
                     <td>{{ $action? array_get($constant, 'recommend_flow_parameter_2.'.$action->remind_type, '') :'' }}</td>
                      <?php  $feedback = $v->comments()->where('comment_type', 'feedback') ->orderBy('created_at', 'desc') ->first(); ?>
                     <td> {{ $feedback?$feedback->comment:''  }} </td>
                     <td>
                      <div class="btn-group">
                      
                          <a class="btn btn-warning" href="{{ url("/front/recommend/edit/{$v->id}") }}" target="_blank" role="button">详细</a>
                          <a class="btn btn-warning" href="{{ url("/front/recommend/history/{$v->id}?talent_id={$v->talent_id}") }}" target="_blank" role="button">推荐历史</a>
                          <a class="btn btn-warning" href="{{ url("/front/recommend/recommend?talent_id={$v->talent_id}") }}" role="button">转推荐</a>
 
                          <form action='{{ url("/front/recommend/delete/{$v->id}") }}' method="post" class="pull-right">
							 <input type="hidden" name="_token" value="{{ csrf_token() }}" >							 
									<button class="btn btn-warning" onclick="return deleleConfirm();">																	
										删除
									</button>
							</form>           
						 @if($v->recommend_parameter_2 == 1)
						   <a class="btn btn-success" href="#" role="button" class="pull-right">已推荐HR</a>
						 @else
                         <form name="recommend-hr-form" action='{{ url("/front/recommend/recommendHR?id={$v->id}") }}' method="post" class="pull-right">
    							 <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    							 <input type="hidden" name="type" value="2" >
    									<button class="btn btn-success" onclick="">																	
    										推荐HR
    									</button>
    							</form>
                         @endif
<!--                            <a class="btn btn-warning" href="profile-process.html"><i class="icon_plus_alt2"></i></a> -->
<!--                       <a class="btn btn-warning" href="{{ url("/front/recommend/edit/{$v->id}") }}"><i class="icon_check_alt2"></i></a> -->

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

      <div class="row">
        <div class="col-sm-12">

         <div>
                  <ul class="pagination pagination-sm pull-right">
                     {!! $recommend->render() !!} 
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

  $("form[name='recommend-hr-form']").submit(function (ev) { 					
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
       	     alert("推荐HR失败，请重试");
          }
      });

	   ev.preventDefault();
  });
  
</script>
@endsection