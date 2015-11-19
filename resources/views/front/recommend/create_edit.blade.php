@extends('front/front')

{{-- Content --}}
@section('content')

          <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
<!-- 		  <div class="row"> -->
<!-- 				<div class="col-lg-12"> -->
<!-- 					<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3> -->
<!-- 					<ol class="breadcrumb"> -->
<!-- 						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li> -->
<!-- 						<li><i class="icon_documents_alt"></i>Pages</li> -->
<!-- 						<li><i class="fa fa-user-md"></i>Profile</li> -->
<!-- 					</ol> -->
<!-- 				</div> -->
<!-- 			</div> -->
          <?php $talent =  $recommend->talent ;  $user =  $recommend->user ;?>    
              <div class="row"><?php $constant = App\Models\Constant::getInstance(); ?>    
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h4>{{ $talent->name }}</h4>               
                              <div class="follow-ava">
                                  <img src="/front/img/profile-widget-avatar.jpg" alt="">
                              </div>
                              <h6>{{ $talent->last_corporation }}  {{ $talent->job_level_1 }}</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>性别：{{ array_get($constant, 'sex.'.$talent-> sex, '') }}   工作经验：{{ $talent->work_year }}年   学历： {{ array_get($constant, 'sex.'.$talent-> highest_education, '') }} </p>
                                <p>推荐人：{{ $user->corporation }}-{{ $user->user_name }}</p>
								<p><i class="fa fa-twitter">联系方式：{{ $user->mobile_number }} </i></p>
                                <h6>
                                    <span><i class="icon_clock_alt"></i>推荐时间：{{ date('h:i:s A', strtotime($recommend->created_at)) }}</span>
                                    <span><i class="icon_calendar"></i>推荐日期：{{ date('Y-m-d', strtotime($recommend->created_at)) }}</span>
                                    <span><i class="icon_pin_alt"></i>地点：{{ $talent->location }} </span>
                                </h6>
                            </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-comments fa-2x"> </i><br>		
											  最新反馈：
											  Nancy 2015-11-13 14：30：候选人通过2面；
											  高荐-Tacy 2015-11-11 14：30:安排2面周三下午；
											  Nancy 2015-11-13 10：30：候选人通过一面，安排下周二面；
                                          </li>
										   
                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-bell fa-2x"> </i><br>
											  
											  下一步行动：
											  Nancy 2015-11-13 10：30：需要联系候选人确定面试时间
                                              Nancy 2015-11-11 10：30：推荐经理
                                              Nancy 2015-11-11 10：30：准备文档
                                          </li>
										   
                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-tachometer fa-2x"> </i><br>
											  
											  招聘阶段：面试阶段
                                          </li>
										   
                                      </ul>
                            </div>
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#resume">
                                          <i class="icon-home"></i>
                                          候选人简历
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="tab" href="#flow">
                                          <i class="icon-user"></i>
                                          招聘流程操作
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#evaludate">
                                          <i class="icon-envelope"></i>
                                          评估反馈
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="resume" class="tab-pane active">
                                      <div class="profile-activity">  

              <!-- add-->

                                        <h1>人才信息</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>性别 </span>: {{ array_get($constant, 'sex.'.$talent-> sex, '') }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>地点 </span>: {{ $talent->location }}</p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>年龄</span>: {{ $talent->age }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>公司 </span>: {{ $talent->last_corporation }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>职位 </span>: {{ $talent->job_level_1 }} </p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Email </span>:{{ $talent->occupation_parameter_4 }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Mobile </span>: {{ $talent->mobile }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>学历 </span>:  {{ array_get($constant, 'sex.'.$talent-> highest_education, '') }}</p>
                                             
                                               </div>

                                            </div>

                                                        <!-- add end-->


                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="/front/img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">{{ $talent->name }}</a> 简历全文</p>
                                                      <pre class="pre-scrollable">
                                                      {{ $talent->resume }}
                                                        </pre>
                                                  </div>
                                              </div>
                                          </div>


                                            <div class="row">   

                                       

                                        <div class="col-lg-offset-4 col-lg-8">
                                             <a class="btn btn-warning" href="index.html" role="button">转发报告</a>
                                             <a class="btn btn-warning" href="index.html" role="button">下载报告</a><br>

                                          </div>
                                          </div>


                                         

                                      </div>

                                                  
                                  </div>


                                  <!-- flow -->
                                  <div id="flow" class="tab-pane">
                                    <section class="panel">
                                      <div class="bio-graph-heading">
                                        Hello I’m Jenifer Smith, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
                                    </div>
                                    <div class="panel-body bio-graph-warning">

                                    </div>
                                </section>

                              <form  role="form" method="post"  action="{{ url('/front/recommend/edit/'.$recommend->id ) }}">
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <section> <!-- ckbox Start-->
                                  <div class="row">   

                                     <div class="col-lg-3">
                                      <section class="panel">
                                          <header class="panel-heading">
                                              面试前
                                          </header>
                                          <div class="panel-body">
                                              

                                                  <div class="radios">
                                                      <label class="label_radio" for="radio-01">
                                                          <input name="recommend_flow_parameter_1" id="radio-01" value="1" type="radio"  {{ $recommend->recommend_flow_parameter_1 =="1"?"checked":"" }} /> 未联系
                                                      </label>
                                                      <label class="label_radio" for="radio-02">
                                                          <input name="recommend_flow_parameter_1" id="radio-02" value="2" type="radio" {{ $recommend->recommend_flow_parameter_1 =="2"?"checked":"" }} /> 占线；关机；信号不好；
                                                      </label>
                                                      <label class="label_radio" for="radio-03">
                                                          <input name="recommend_flow_parameter_1" id="radio-03" value="3" type="radio" {{ $recommend->recommend_flow_parameter_1 =="3"?"checked":"" }} /> 空号；错号；
                                                      </label>

                                                      <label class="label_radio" for="radio-03">
                                                          <input name="recommend_flow_parameter_1" id="radio-03" value="4" type="radio" {{ $recommend->recommend_flow_parameter_1 =="4"?"checked":"" }} /> 联系上，需要发资料给对方；
                                                      </label>

                                                      <label class="label_radio" for="radio-04">
                                                          <input name="recommend_flow_parameter_1" id="radio-04" value="5" type="radio" {{ $recommend->recommend_flow_parameter_1 =="5"?"checked":"" }} /> 已发资料，等对方考虑；
                                                      </label>


                                                      <label class="label_radio" for="radio-05">
                                                          <input name="recommend_flow_parameter_1" id="radio-05" value="6" type="radio" {{ $recommend->recommend_flow_parameter_1 =="6"?"checked":"" }} /> 联系上，等待简历；
                                                      </label>

                                                      <label class="label_radio" for="radio-06">
                                                          <input name="recommend_flow_parameter_1" id="radio-06" value="7" type="radio" {{ $recommend->recommend_flow_parameter_1 =="7"?"checked":"" }} /> 联系上，对方拒绝或不合适；
                                                      </label>


                                                  </div>
                                              
                                          </div>

                                      </section>
                                  </div>

                                  <div class="col-lg-3">
                                      <section class="panel">
                                          <header class="panel-heading">
                                           面试阶段
                                       </header>
                                       <div class="panel-body">
                       
                                              <div class="radios">
                                                  <label class="label_radio" for="radio-07">
                                                      <input name="recommend_flow_parameter_1" id="radio-07" value="8" type="radio" {{ $recommend->recommend_flow_parameter_1 =="8"?"checked":"" }} /> 准备一面
                                                  </label>
                                                  <label class="label_radio" for="radio-08">
                                                      <input name="recommend_flow_parameter_1" id="radio-08" value="9" type="radio" {{ $recommend->recommend_flow_parameter_1 =="9"?"checked":"" }} /> 等待一面反馈
                                                  </label>

                                                  <label class="label_radio" for="radio-09">
                                                      <input name="recommend_flow_parameter_1" id="radio-09" value="10" type="radio" {{ $recommend->recommend_flow_parameter_1 =="10"?"checked":"" }} /> 准备二面
                                                  </label>


                                                  <label class="label_radio" for="radio-10">

                                                      <input name="recommend_flow_parameter_1" id="radio-10" value="11" type="radio" {{ $recommend->recommend_flow_parameter_1 =="11"?"checked":"" }} /> 等待二面反馈
                                                  </label>

                                                  <label class="label_radio" for="radio-11">
                                                      <input name="recommend_flow_parameter_1" id="radio-11" value="12" type="radio" {{ $recommend->recommend_flow_parameter_1 =="12"?"checked":"" }} /> 等待三面（及更多）面试
                                                  </label>


                                                  <label class="label_radio" for="radio-12">
                                                      <input name="recommend_flow_parameter_1" id="radio-12" value="13" type="radio" {{ $recommend->recommend_flow_parameter_1 =="13"?"checked":"" }} /> 等待三面（及更多）反馈

                                                  </label>
                                                  <label class="label_radio" for="radio-13">
                                                      <input name="recommend_flow_parameter_1" id="radio-13" value="14" type="radio" {{ $recommend->recommend_flow_parameter_1 =="14"?"checked":"" }} /> 面试未通过
                                                  </label>

                                                  <label class="label_radio" for="radio-14">
                                                      <input name="recommend_flow_parameter_1" id="radio-14" value="15" type="radio" {{ $recommend->recommend_flow_parameter_1 =="15"?"checked":"" }} /> 中途放弃
                                                  </label>
                                          </div>
                            
                                  </div>

                              </section>
                          </div>

                          <div class="col-lg-3">
                              <section class="panel">
                                  <header class="panel-heading">
                                      offer阶段
                                  </header>
                                  <div class="panel-body">
                           
                                          <div class="radios">
                                              <label class="label_radio" for="radio-15">
                                                  <input name="recommend_flow_parameter_1" id="radio-15" value="16"  type="radio" {{ $recommend->recommend_flow_parameter_1 =="16"?"checked":"" }} {{ $recommend->recommend_flow_parameter_1 =="2"?"checked":"" }} /> offer谈判
                                              </label>
                                              <label class="label_radio" for="radio-16">
                                                  <input name="recommend_flow_parameter_1" id="radio-16" value="17" type="radio" {{ $recommend->recommend_flow_parameter_1 =="17"?"checked":"" }} /> 已经发送offer，等待对方确认
                                              </label>
                                              <label class="label_radio" for="radio-17">
                                                  <input name="recommend_flow_parameter_1" id="radio-17" value="18" type="radio" {{ $recommend->recommend_flow_parameter_1 =="18"?"checked":"" }} /> offer已确认，待入职
                                              </label>

                                              <label class="label_radio" for="radio-18">
                                                  <input name="recommend_flow_parameter_1" id="radio-18" value="19" type="radio" {{ $recommend->recommend_flow_parameter_1 =="19"?"checked":"" }} /> 入职
                                              </label>

                                              <label class="label_radio" for="radio-19">
                                                  <input name="recommend_flow_parameter_1" id="radio-19" value="20" type="radio" {{ $recommend->recommend_flow_parameter_1 =="20"?"checked":"" }} /> 谈判失败；未来上班，放弃；
                                              </label>
                                          </div>
                      
                                  </div>
                                  </section>


                              </div>
         
                          </div>
                      </section>  <!-- ckbox end-->

                            <div class="row">   

                                     <div class="col-lg-6">

                                     <div class="form-group">
                                          <label class="sr-only" for="recommend_flow_status_label_2">下一步行动备注</label>
                                          <input id="recommend_flow_status_label_2"  name="recommend_flow_status_label_2"  class="form-control"   value="{{ $recommend->recommend_flow_status_label_2}}"  placeholder="下一步行动备注"/>
                                      </div>
                               </div>

                                      <div class="col-md-2" col-sm-offset-3>
                                       	<?php  $constant = App\Models\Constant::where('en', 'recommend_flow_parameter_2')->orderBy('k')->get();?>
                                              <select class="form-control m-bot15" name="recommend_flow_parameter_2">
                                               <option value="0">不提醒</option>
                                                   @foreach($constant as $c)
			                                         <option value="{{ $c->k }}" @if($recommend->recommend_flow_parameter_2  ==$c->k ) selected @endif >{{ $c->v }}</option> 
			                                        @endforeach
                                              </select>
                                           
                                          </div>


                                           <div class="col-md-2">
                                                <button type="button" class="btn btn-warning">行动设置</button>
                                         </div>
                                </div>


                                   <div class="row">   

                                     <div class="col-lg-6">
                                         <div class="form-group">
                                          <label class="sr-only" for="exampleInputEmail2">交互反馈</label>
                                          <input type="text" class="form-control" id="recommend_feedback_label_1"  name="recommend_feedback_label_1"  placeholder="简单反馈" value="{{ $recommend->recommend_feedback_label_1}}" >
                                      </div>

                                       </div>



                                      <div class="col-md-2">
                                  
                                            <button type="button" class="btn btn-warning">发送反馈</button>
                                       </div>
                         
                           </div>
         

                            <div class="row">   
                                        <div class="col-lg-offset-4 col-lg-8">
                                           <button type="submit" class="btn btn-warning" id="flow-submit">保存并返回</button>                                             
                                             <a class="btn btn-warning" href="{{ url('/front/recommend/') }}" role="button">不保存返回</a><br>

                                          </div>
                          </div>
                          <input type="hidden" name="referer"  value="{{ Request::header('referer') }}" />  
                        </form>
                        
                        @include('errors.list')

                       </div>
                       


                                  <!-- end-flow -->
                                  <div id="evaludate" class="tab-pane">
                                    <section class="panel">        
                        <form  role="form" method="post"  action="{{ url('/front/recommend/edit/'.$recommend->id ) }}">
                      		 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <section>                     <!-- ckbox Start-->
  
                                  <div class="row">   

                                     <div class="col-lg-3">
                                      <section class="panel">
                                          <header class="panel-heading">
                                              人才简历评估
                                          </header>
                                          <div class="panel-body">
                          

                                                  <div class="radios">
                                                      <label class="label_radio" for="radio-01">
                                                          <input name="recommend_feedback_parameter_1" id="radio-01" value="1" type="radio"  {{ $recommend->recommend_feedback_parameter_1 =="1"?"checked":"" }} /> 未评估；
                                                      </label>
                                                      <label class="label_radio" for="radio-02">
                                                          <input name="recommend_feedback_parameter_1" id="radio-02" value="2" type="radio"  {{ $recommend->recommend_feedback_parameter_1 =="2"?"checked":"" }}/> 优秀精准；
                                                      </label>
                                                      <label class="label_radio" for="radio-03">
                                                          <input name="recommend_feedback_parameter_1" id="radio-03" value="3" type="radio"  {{ $recommend->recommend_feedback_parameter_1 =="3"?"checked":"" }}/> 良好；
                                                      </label>

                                                      <label class="label_radio" for="radio-03">
                                                          <input name="recommend_feedback_parameter_1" id="radio-03" value="4" type="radio"  {{ $recommend->recommend_feedback_parameter_1 =="4"?"checked":"" }}/> 合格；
                                                      </label>

                                                      <label class="label_radio" for="radio-04">
                                                          <input name="recommend_feedback_parameter_1" id="radio-04" value="5" type="radio"  {{ $recommend->recommend_feedback_parameter_1 =="5"?"checked":"" }}/> 信息缺失，不全；
                                                      </label>


                                                      <label class="label_radio" for="radio-05">
                                                          <input name="recommend_feedback_parameter_1" id="radio-05" value="6" type="radio"  {{ $recommend->recommend_feedback_parameter_1 =="6"?"checked":"" }}/> 信息失实，错误；
                                                      </label>

                                                      <label class="label_radio" for="radio-06">
                                                          <input name="recommend_feedback_parameter_1" id="radio-06" value="7" type="radio"  {{ $recommend->recommend_feedback_parameter_1 =="7"?"checked":"" }}/> 其他；
                                                      </label>


                                                  </div>
                                          
                                          </div>

                                      </section>
                                  </div>

                                  <div class="col-lg-3">
                                      <section class="panel">
                                          <header class="panel-heading">
                                           高荐顾问服务评价
                                       </header>
                                       <div class="panel-body">
                            

                                              <div class="radios">
                                                  <label class="label_radio" for="radio-07">
                                                      <input name="recommender_evaluate_parameter_1" id="radio-07" value="1" type="radio"  {{ $recommend->recommender_evaluate_parameter_1 =="1"?"checked":"" }} /> 未评价
                                                  </label>
                                                  <label class="label_radio" for="radio-08">
                                                      <input name="recommender_evaluate_parameter_1" id="radio-08" value="2" type="radio"   {{ $recommend->recommender_evaluate_parameter_1 =="2"?"checked":"" }}/> 优良
                                                  </label>

                                                  <label class="label_radio" for="radio-09">
                                                      <input name="recommender_evaluate_parameter_1" id="radio-09" value="3" type="radio"   {{ $recommend->recommender_evaluate_parameter_1 =="3"?"checked":"" }}/> 合格
                                                  </label>


                                                  <label class="label_radio" for="radio-10">

                                                      <input name="recommender_evaluate_parameter_1" id="radio-10" value="4" type="radio"   {{ $recommend->recommender_evaluate_parameter_1 =="4"?"checked":"" }}/> 较差
                                                  </label>

                                                  <label class="label_radio" for="radio-11">
                                                      <input name="recommender_evaluate_parameter_1" id="radio-11" value="5" type="radio"   {{ $recommend->recommender_evaluate_parameter_1 =="5"?"checked":"" }}/> 很差，投诉
                                                  </label>


                                          </div>
                   
                                  </div>

                              </section>
                          </div>

                          <div class="col-lg-3">
                              <section class="panel">
                                  <header class="panel-heading">
                                      猎头服务评价
                                  </header>
                                  <div class="panel-body">

                                          <div class="radios">
                                              <label class="label_radio" for="radio-15">
                                                  <input name="recommender_evaluate_parameter_2" id="radio-15" value="1" type="radio"  {{ $recommend->recommender_evaluate_parameter_2 =="1"?"checked":"" }} /> 未评价
                                              </label>
                                              <label class="label_radio" for="radio-16">
                                                  <input name="recommender_evaluate_parameter_2" id="radio-16" value="2" type="radio"  {{ $recommend->recommender_evaluate_parameter_2 =="2"?"checked":"" }}/> 优良
                                              </label>
                                              <label class="label_radio" for="radio-17">
                                                  <input name="recommender_evaluate_parameter_2" id="radio-17" value="3" type="radio"   {{ $recommend->recommender_evaluate_parameter_2 =="3"?"checked":"" }}/> 合格
                                              </label>

                                              <label class="label_radio" for="radio-18">
                                                  <input name="recommender_evaluate_parameter_2" id="radio-18" value="4" type="radio"   {{ $recommend->recommender_evaluate_parameter_2 =="4"?"checked":"" }}/> 较差
                                              </label>

                                              <label class="label_radio" for="radio-19">
                                                  <input name="recommender_evaluate_parameter_2" id="radio-19" value="5" type="radio"  {{ $recommend->recommender_evaluate_parameter_2 =="5"?"checked":"" }}/> 很差
                                              </label>

                                               
                                          </div>
     
                                  </div>
                                  </section>


                              </div>
                             
                             






                          </div>
                      </section> <!-- ckbox end-->


                                   <div class="row">   

                                     <div class="col-lg-6">
                                         <div class="form-group">
                                          <label class="sr-only" for="exampleInputEmail2">投诉和建议</label>
                                          <input type="text" class="form-control" id="recommend_feedback_label_2" name="recommend_feedback_label_2" placeholder="投诉和建议"  value="{{ $recommend->recommend_feedback_label_2 }}" />
                                      </div>

                                       </div>


                                      <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15">
                                               <option>推荐人</option>

                                                  <option>平台</option>
                                                  <option>其他</option>
                                                  <option>好友</option>
                                                  <option>管理员</option>
                                              </select>
                                           
                                          </div>


                                      <div class="col-md-2">                   
                                                <button type="button" class="btn btn-warning">发送反馈消息</button>
                                    </div>                         
                           </div>



                                        <div class="row">   
                                                <div class="col-lg-offset-4 col-lg-8">
                                                     <button type="submit" class="btn btn-warning" id="flow-submit">保存并返回</button>                                             
                                                     <a class="btn btn-warning" href="{{ url('/front/recommend/') }}" role="button">不保存返回</a><br>
        
                                                  </div>
                                          </div>
                                         <input type="hidden" name="referer"		value="{{ Request::header('referer') }}" />
                        </form>
                         @include('errors.list')
                                      </section>
                                  </div>
                       
                              </div>
                          </div>
                      </section>
                 </div>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

@endsection

@section('scripts')

     <script src="/front/js/jquery.tagsinput.js"></script>


    <!-- custom form component script for this page-->
    <script src="/front/js/form-component.js"></script>

    
     <script type="text/javascript">
			jQuery(function($) {
				 $("#flow-submit").click(function(){
					 	var val=$('input:radio[name="recommend_flow_parameter_1"]:checked').val();
						if(val==null){
							alert("推荐流程状态是必输项，请选择!");
							return false;
						}
						return true;
				 });
			});
	</script>
 @endsection