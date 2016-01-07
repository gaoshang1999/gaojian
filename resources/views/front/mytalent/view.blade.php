@extends('front/front')

{{-- Content --}}
@section('content')

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row"> <?php $constant = App\Models\Constant::getInstance(); ?>    
                <!-- profile-widget -->
                <div class="col-sm-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-sm-2 col-sm-2">
                              <h4>{{ $talent-> name }}</h4>               
                              <div class="follow-ava">
                                  <img src="/front/img/profile-widget-avatar.jpg" alt="">
                              </div>
                              <h6>{{ $talent->last_corporation }}  {{ $talent->job_level_1 }}</h6>
                            </div>
                            <div class="col-sm-4 col-sm-4 follow-info">
                                <p>性别：{{ array_get($constant, 'sex.'.$talent-> sex, '') }}    工作经验：{{ $talent->work_year }}年   学历：{{ array_get($constant, 'highest_education.'.$talent-> highest_education, '') }}</p>
                                
								<p><i class="fa fa-twitter">联系方式：{{ $talent->mobile }} </i></p>
                                <h6>
                                
                                    <span><i class="icon_pin_alt"></i>地点：{{ $talent->location }} </span>
                                </h6>
                            </div>
                            <div class="col-sm-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-comments fa-2x"> </i><br>
											  
											  人才备注：{{ $talent-> expect_label_2 }}


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
                              <ul class="nav nav-tabs" id="myTab">
                                  <li class="active">
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          候选人简历预览
                                      </a>
                                  </li>
<!--                                   <li> -->
<!--                                       <a data-toggle="tab" href="#recommend"> -->
<!--                                           <i class="icon-user"></i> -->
<!--                                           推荐操作 -->
<!--                                       </a> -->
<!--                                   </li> -->
                               
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="profile" class="tab-pane active">
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
                                                  <p><span>职位 </span>: {{ $talent->job_level_1 }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Email </span>:  {{ $talent->occupation_parameter_4 }} </p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Mobile </span>: {{ $talent->mobile }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Phone </span>:  (+021) 956 789123</p>
                                             
                                               </div>

                                            </div>

                                                        <!-- add end-->


                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar"  src="/front/img/chat-avatar.jpg"  alt=""></a>
                                                      <p class="attribution"><a href="#">{{ $talent-> name }}</a> 简历全文</p>
                                                      <pre class="pre-scrollable">{{ $talent->resume }}</pre>
                                                  </div>
                                              </div>
                                          </div>


                                            <div class="row">   

                                       

                                        <div class="col-sm-offset-4 col-sm-8">
                                             <a class="btn btn-warning" href="{{ url("/front/mytalent/edit/{$talent->id}") }}" role="button">返回编辑人才</a>

                                             <a class="btn btn-warning" href="#" role="button">转发报告</a>
                                             <a class="btn btn-warning" href="#" role="button">下载报告</a>
                                            
                                          </div>
                                          </div>


                                         

                                      </div>

                                                  
                                  </div>


                           
 
                              </div>
                          </div>
                      </section>
                 </div>
              </div>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               推荐确认
            </h4>
         </div>
         <div class="modal-body">
            已经成功推荐！
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">确定
            </button>
           
         </div>
      </div><!-- /.modal-content -->
</div><!-- /.modal -->
</div><!-- /.modal -->
              
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
@endsection

@section('scripts')
     <script type="text/javascript">
			jQuery(function($) {
				

			});
	</script>
 @endsection