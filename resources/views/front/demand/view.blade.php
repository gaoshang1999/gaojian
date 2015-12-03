@extends('front/front')

{{-- Content --}}
@section('content')

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">

			</div>
              <div class="row">
                <!-- profile-widget -->
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h4>{{ $demand->post_name }}</h4>               
                              <div class="follow-ava">
                                  <img src="/front/img/profile-widget-avatar.jpg" alt="">
                              </div>
                              <h6>{{ $demand->recruit_corporation }}</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>招聘人数：{{ $demand->demand_person_numbers }} </p>
                                   <p> 截止时间：{{ $demand->end_time }}</p>
                                <p>发布人：{{ $demand->user->user_name }} </p>   
                                <p>发布单位：{{ $demand->recruit_corporation }}</p>
                                <h6>
                                  
                                    <span><i class="icon_pin_alt"></i>地点：{{ $demand->work_location }}</span>
                                </h6>
                            </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-comments fa-2x"> </i><br>
                                              
                                              推荐流程中人数：8
                                          </li>
                                           
                                      </ul>
                            </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-bell fa-2x"> </i><br>
                                              
                                              面试总人数：9
                                          </li>
                                           
                                      </ul>
                            </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-tachometer fa-2x"> </i><br>
                                              
                                              推荐总人数:22
                                          </li>
                                           
                                      </ul>
                            </div>
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-sm-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#recent-activity">
                                          <i class="icon-user"></i>
                                         职位详情
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                    公司介绍  
                                                   </a>
                                  </li>
                               
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="recent-activity" class="tab-pane active">
                                      <div class="profile-activity">  

              <!-- add-->
<?php $constant = App\Models\Constant::getInstance(); ?>    
                                          <div class="row">
                                          <br><br><br>
                                              <div class="bio-row">
                                                  <p><span>招聘公司</span>: {{ $demand->recruit_corporation }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>地点 </span>: {{ $demand->work_location }}</p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>职位名称</span>: {{ $demand->post_name }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>所属部门</span>: {{ $demand->attach_department }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>职能</span>: {{ $demand->demand_type_label_1 }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>工作年限</span>:{{ $demand->work_year_requirement }}年</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>学历</span>: {{ array_get($constant, 'education_requirement.'.$demand->education_requirement, '') }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>汇报对象</span>: {{ $demand->report_object }}</p>
                                             
                                               </div>
                                                 <div class="bio-row">
                                                  <p><span>管理人数</span>: {{ $demand->subordinate_person_numbers }}</p>
                                             
                                               </div>
                                                 <div class="bio-row">
                                                  <p><span>税前年薪</span>: {{ $demand->pretax_annual_salary }}</p>
                                             
                                               </div>

                                                <div class="bio-row">
                                                  <p><span>福利待遇</span>: {{ $demand->welfare }}</p>
                                             
                                               </div>

                                            </div>

                                                        <!-- add end-->


                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="/front/img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">职位描述</a> </p>
                                                      <pre class="pre-scrollable">
                                                        {{ $demand->position_description }}
                                                      </pre>
                                                  </div>
                                              </div>
                                          </div>

                                                                        <!-- chachong start-->

                       <div class="row">
                                                       <br><br><br><br>


                                      <label class="col-sm-2 control-label">人才姓名</label>
                                      <div class="col-sm-2">
                                          <input type="text" class="form-control">
                                  </div>
                                 </div>


                                   <div class="row">

                                      <label class="col-sm-2 control-label">人才手机</label>
                                      <div class="col-sm-2">
                                          <input type="text" class="form-control">
                                  </div>
                                 </div>
                              
                                <br><br>


                                <div class="form-group">
                                          <div class="col-lg-offset-4 col-sm-8">
                                              <button class="btn btn-primary" data-toggle="modal" href="#myModal">推荐查重</button>



                                                 <!-- Modal -->
                              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">查重结果</h4>
                                          </div>
                                          <div class="modal-body">

                                             对不起，人才已经被推荐到该岗位，下次快点哦！

                                          </div>
                                          <div class="modal-footer">
                                              <button class="btn btn-success" type="button">OK</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- modal -->

                                          </div>

                                      </div>



                                                                        <!-- chachong end-->


                                            <div class="row">   

                                                                       <br><br>


                                        <div class="col-sm-offset-4 col-sm-8">
                                          <a class="btn btn-warning" href="addzhiwei.html" role="button">关联hr职位</a>

                                             <a class="btn btn-warning" href="{{ url("/front/demand/edit/{$demand->id}") }}" role="button">编辑职位</a>

                                             <a class="btn btn-warning" href="kuaisutuijian.html" role="button">快速推荐</a>

                                             <a class="btn btn-warning" href="{{ url("/front/demand") }}" role="button">返回</a><br>

                                          </div>
                                          </div>


                                         
                                  </div>


                                                  
                                  </div>


                                  <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                   

<div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="/front/img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">公司介绍</a> </p>
                                                      <pre class="pre-scrollable">
                                                        {{ $demand->corporation_synopsis }}
                                                      </pre>
                                                  </div>
                                              </div>
                                          </div>
                                


                                <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="/front/img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">公司亮点</a> </p>
                                                      <pre class="pre-scrollable">
                                                        {{ $demand->highlight }}
                                                      </pre>
                                                  </div>
                                              </div>
                                          </div>
                                
                            
                          
                                        
                             

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
<script type="text/javascript">
                   
</script>
@endsection