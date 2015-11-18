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

@include('front.widget.profile')


<!-- I空行-->
                  <div class="row">
                                        <div class="col-md-12">
                                        <hr>
                                          </div>
              </div>
              
<!-- Inline搜索 form-->
 <form class="" role="form" method="get" id="search-form" action="{{ url('/front/recommend/search') }}">              
                  <div class="row">

                  <div class="col-md-2">
                  </div>

                      <div class="col-md-2">
                        
                                      <div class="form-group"> <?php $name = isset($name) ? $name : ""; ?>
                                          <label class="sr-only" for="name">人才名称关键字</label>
                                          <input type="text" class="form-control" name="name" placeholder="人才名称关键字"  value="{{$name}}">
                                      </div>
                                      


                      </div>

                                     <div class="col-md-2">
                        
                                      
                                      <div class="form-group"> <?php $user_name = isset($user_name) ? $user_name : ""; ?>
                                          <label class="sr-only" for="user_name">推荐人关键字</label>
                                          <input type="text" class="form-control" name="user_name" placeholder="推荐人关键字"  value="{{$user_name}}">
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
           	<?php  $d1= App\Models\Demand::select('post_name')->whereNotNull('post_name')->where('recruit_user', Auth::user()->id) ->where('demand_parameter_1', '<>',  2)->distinct() ->get();?>                            
                                        <select class="form-control m-bot15" name="post_name_2" >
                                                      <option value=0>所有岗位</option> <?php $post_name_2 = isset($post_name_2) ? $post_name_2 : null; ?>
                                           @foreach ($d1->all() as $v)
                                                  <option value="{{ $v->post_name }}" {{ !is_null($post_name_2) && $post_name_2== $v->post_name?	'selected' : '' }}>{{ $v->post_name }}</option>
                                             @endforeach
                                              </select>
                                           
           </div>

           <div class="col-md-2" col-sm-offset-3>
           <?php  $d2= App\Models\Demand::select('demand_type_label_1')->whereNotNull('demand_type_label_1')->where('recruit_user', Auth::user()->id)->where('demand_parameter_1', '<>',  2)->distinct() ->get();?>
                                           
                                              <select class="form-control m-bot15" name="demand_type_label_1">
                                                  <option value=0>所有职能</option>  <?php $demand_type_label_1 = isset($demand_type_label_1) ? $demand_type_label_1 : null; ?>
                                           @foreach ($d2->all() as $v)
                                                  <option value="{{ $v->demand_type_label_1}}" {{ !is_null($demand_type_label_1) &&$demand_type_label_1== $v->demand_type_label_1?	'selected' : '' }}>{{ $v->demand_type_label_1 }}</option>
                                             @endforeach
                                              </select>
                                           
              </div>
             <div class="col-md-2" col-sm-offset-3>
                                       
                                       
                                              <select class="form-control m-bot15"  name="recommend_flow_status_label_3">  <?php $recommend_flow_status_label_3 = isset($recommend_flow_status_label_3) ? $recommend_flow_status_label_3 : ""; ?>
                                                  <option value="0">所有状态</option>
                                                  <option value="offer进度中" {{ $recommend_flow_status_label_3== "offer进度中" ?	'selected' : '' }}>offer进度中</option>
                                                  <option value="面试进度中" {{ $recommend_flow_status_label_3== "面试进度中" ?	'selected' : '' }}>面试进度中</option>
                                                  <option value="面试前评审进度中" {{ $recommend_flow_status_label_3== "面试前评审进度中" ?	'selected' : '' }}>面试前评审进度中</option>
                                              </select>
                                           
           </div>

              <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15" name="remind_time">  <?php $remind_time = isset($remind_time) ? $remind_time : ""; ?>
                                                  <option value="0" >所有提醒时间</option>
                                                  <option value="-2 hour"  {{ $remind_time== "-2 hour" ?	'selected' : '' }}>2小时内</option>
                                                  <option value="-1 day"  {{ $remind_time== "-1 day" ?	'selected' : '' }}>1天内</option>
                                                  <option value="-2 day"  {{ $remind_time== "-2 day" ?	'selected' : '' }}>2天内</option>                                                  
                                                  <option value="-7 day"  {{ $remind_time== "-7 day" ?	'selected' : '' }}>1周内</option>
                                                  <option value="-14 day"  {{ $remind_time== "-14 day" ?	'selected' : '' }}>2周内</option>
                                                  <option value="-15 day" {{ $remind_time== "-1 month" ?	'selected' : '' }}>大于2周</option>
                                              </select>
                                           
            </div>

             <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15" name="recommend_flow_parameter_1"> <?php $recommend_flow_parameter_1 = isset($recommend_flow_parameter_1) ? $recommend_flow_parameter_1 : ""; ?>
                                                 <option value="0">所有状态</option>
                                                <option value='1' {{$recommend_flow_parameter_1== '1' ?	'selected' : ''}} >未联系</option>
                                                <option value='2' {{$recommend_flow_parameter_1== '2' ?	'selected' : ''}} >占线关机信号不好</option>
                                                <option value='3' {{$recommend_flow_parameter_1== '3' ?	'selected' : ''}} >空号错号</option>
                                                <option value='4' {{$recommend_flow_parameter_1== '4' ?	'selected' : ''}} >联系上，需要发资料给对方</option>
                                                <option value='5' {{$recommend_flow_parameter_1== '5' ?	'selected' : ''}} >已发资料，等对方考虑</option>
                                                <option value='6' {{$recommend_flow_parameter_1== '6' ?	'selected' : ''}} >联系上，等待简历</option>
                                                <option value='7' {{$recommend_flow_parameter_1== '7' ?	'selected' : ''}} >联系上，对方拒绝或不合适</option>
                                                <option value='8' {{$recommend_flow_parameter_1== '8' ?	'selected' : ''}} >准备一面</option>
                                                <option value='9' {{$recommend_flow_parameter_1== '9' ?	'selected' : ''}} >等待一面反馈</option>
                                                <option value='10' {{$recommend_flow_parameter_1== '10' ?	'selected' : ''}} >准备二面</option>
                                                <option value='11' {{$recommend_flow_parameter_1== '11' ?	'selected' : ''}} >等待二面反馈</option>
                                                <option value='12' {{$recommend_flow_parameter_1== '12' ?	'selected' : ''}} >等待三面（及更多）面试</option>
                                                <option value='13' {{$recommend_flow_parameter_1== '13' ?	'selected' : ''}} >等待三面（及更多）反馈</option>
                                                <option value='14' {{$recommend_flow_parameter_1== '14' ?	'selected' : ''}} >面试未通过</option>
                                                <option value='15' {{$recommend_flow_parameter_1== '15' ?	'selected' : ''}} >中途放弃</option>
                                                <option value='16' {{$recommend_flow_parameter_1== '16' ?	'selected' : ''}} >offer谈判</option>
                                                <option value='17' {{$recommend_flow_parameter_1== '17' ?	'selected' : ''}} >已经发送offer，等待对方确认</option>
                                                <option value='18' {{$recommend_flow_parameter_1== '18' ?	'selected' : ''}} >offer已确认，待入职</option>
                                                <option value='19' {{$recommend_flow_parameter_1== '19' ?	'selected' : ''}} >入职</option>
                                                <option value='20' {{$recommend_flow_parameter_1== '20' ?	'selected' : ''}} >谈判失败未来上班，放弃</option>
                                                                                                                                                                                    
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

              <table class="table table-striped table-advance table-hover">
               <tbody>
           
 <tr>
                     <th><i class="icon_profile"></i> 推荐岗位</th>
                     <th><i class="icon_pin_alt"></i> 推荐号</th>
                     <th><i class="icon_pin_alt"></i> 推荐人</th>

                     <th><i class="icon_calendar"></i> 推荐时间</th>
                     <th><i class="icon_pin_alt"></i> 姓名</th>
                     <th><i class="icon_pin_alt"></i> 所在公司</th>
                     <th><i class="icon_pin_alt"></i> 职能</th>

                     <th><i class="icon_mobile"></i> 最新状态</th>
                    <th><i class="icon_mobile"></i> 提醒时间</th>
                    <th><i class="icon_mobile"></i> 行动备忘</th>


                     <th><i class="icon_cogs"></i> 操作（编辑-删除）</th>
                 </tr>
        @foreach ($recommend->all() as $v)
                 <tr>
                     <td>{{ $v->demand->post_name }}</td>
                     <td>{{ $v->id }} </td>
                     <td>{{ $v->user->corporation }}-{{ $v->user->user_name }}</td>
                     <td>{{ $v->created_at }}</td>
                     <td>{{ $v->talent->name }}</td>
                     <td>{{ $v->demand->recruit_corporation }}</td>
                     <td>{{ $v->demand->demand_type_label_1 }}</td>
                     <td>准备二面</td>
                     <td>{{ $v->remind_time }}</td>
                     <td>确认二面地点</td>
                     <td>
                      <div class="btn-group">
<!--                            <a class="btn btn-warning" href="profile-process.html"><i class="icon_plus_alt2"></i></a> -->
                      <a class="btn btn-warning" href="{{ url("/front/recommend/edit/{$v->id}") }}"><i class="icon_check_alt2"></i></a>
                      <form action='{{ url("/front/recommend/delete/{$v->id}") }}' method="post" class="pull-right">
    							 <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    									<button class="btn btn-warning" onclick="return deleleConfirm();">																	
    										<i class="icon_close_alt2"></i>
    									</button>
    							</form>
                      </div>
                  </td>
              </tr>
         @endforeach
    </tbody>
    </table>
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