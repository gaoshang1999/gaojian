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
                                <p>推荐人：高荐 tracy </p>
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
                                  <li>
                                      <a data-toggle="tab" href="#recommend">
                                          <i class="icon-user"></i>
                                          推荐操作
                                      </a>
                                  </li>
                               
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
                                                      <pre class="pre-scrollable">
                                                        {{ $talent->resume }}
                                                      </pre>
                                                  </div>
                                              </div>
                                          </div>


                                            <div class="row">   

                                       

                                        <div class="col-sm-offset-4 col-sm-8">
                                             <a class="btn btn-warning" href="{{ url('/front/talent/') }}" role="button">返回编辑人才</a>

                                             <a class="btn btn-warning" href="#" role="button">转发报告</a>
                                             <a class="btn btn-warning" href="#" role="button">下载报告</a>

                                             <button class="btn btn-warning"  role="button" id="nextStep">下一步</button><br>
                                          </div>
                                          </div>


                                         

                                      </div>

                                                  
                                  </div>


                                  <!-- profile -->
                                  <div id="recommend" class="tab-pane">
             <form class="" role="form" method="get" id="search-form" action="{{ url("front/talent/demandSearch/{$talent->id}") }}">     
                  <div class="row">
                                        <div class="col-md-12">
                                        <hr>
                                          </div>
                </div>
                                
    
             <div class="row">
            
                              <div class="col-md-2">
                              </div>
            

                      <div class="col-md-2">
                        
                                      <div class="form-group"> <?php $post_name = isset($post_name) ? $post_name : ""; ?>
                                          <label class="sr-only" for="exampleInputEmail2">职位名称关键字</label>
                                          <input type="text" class="form-control" name="post_name" placeholder="岗位名称关键字"  value="{{$post_name}}">
                                      </div>
                                      


                      </div>

                                     <div class="col-md-2">
                        
                                      
                                      <div class="form-group"> <?php $position_description = isset($position_description) ? $position_description : ""; ?>
                                          <label class="sr-only" for="exampleInputPassword2">职位描述关键字</label>
                                          <input type="text" class="form-control"  name="position_description" placeholder="职位描述关键字" value="{{$position_description}}">
                                      </div>
                                      


                      </div>


                           <div class="col-md-2">
                        
                                  
                                      <button type="submit" class="btn btn-warning">搜索</button>

                      </div>
     </div>
     </form>
               
   <div class="row">
        <div class="col-sm-12">
          <section class="panel">
              

              <table class="table table-striped table-advance table-hover">
               <tbody>
                  <tr>
                     <th><i class=""></i> #需求编号</th>
                      <th><i class="icon_profile"></i> 公司</th>
                     <th><i class="icon_profile"></i> 岗位</th>                     
                     <th><i class="icon_pin_alt"></i> 部门</th>
                     <th><i class="icon_calendar"></i> 发布时间</th>
                     <th><i class="icon_calendar"></i> 推荐状态</th>
<!--                      <th><i class="icon_pin_alt"></i> 推荐流程中人数</th> -->
<!--                      <th><i class="icon_pin_alt"></i> 已面试人数</th> -->

<!--                      <th><i class="icon_mobile"></i> 优先级</th> -->
                     <th><i class="icon_cogs"></i> 操作（推荐）</th>
                 </tr>
                 @foreach ($demand->all() as $v)
                 <tr>
                    <td>{{$v-> id }} </td>
                    <td>{{$v-> recruit_corporation }} </td>
                     <td>{{$v-> post_name }} </td>                     
                     <td>{{$v-> attach_department }} </td>
                     <td>{{ $v->created_at }}</td> 
                     <?php $recommened = $v->recommends()->where('talent_id', $talent->id ) ->where('user_id', Auth::user()->id) ->count() > 0; ?>
                     <td>{{  $recommened ? "已推荐" : "未推荐"}}</td>
<!--                      <td>{{ $v->recommends()->get()->count() }}</td> -->
<!--                      <td>{{ $v->recommends()->where('recommend_flow_status_label_3', '面试进度中' )->get()->count() }}</td> -->
<!--                      <td>{{ $v->recommends()->where('recommend_flow_status_label_3', 'offer进度中' )->get()->count() }}</td> -->
                     <td>
                      <div class="btn-group">
<!--                            <a class="btn btn-warning" href="#"><i class="icon_plus_alt2"></i></a> -->          
                               
                      <form id="recommend-form" action='{{ url("/front/talent/recommend/{$v->id}") }}' method="post" class="pull-right">
    							 <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    							 <input type="hidden" name="talent_id" value="{{ $talent->id }}" >
    									<button class="btn btn-warning"  type="submit" @if($recommened) disabled="true" @endif>																	
    										<i class="icon_check_alt2"></i>
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

      <div class="row">
                                    <div class="col-sm-offset-4 col-sm-8">
                                             

                                             <button class="btn btn-warning"  role="button" id="prevStep">上一步</button><br>
                                          </div>
    </div>
  
                             

                       </div> <!-- end profile -->


 
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
				$('#nextStep').click(function (ev) { 
				    $("#myTab a[href='#recommend']").tab('show');					
				});

				$('#prevStep').click(function (ev) { 
				    $("#myTab a[href='#profile']").tab('show');					
				});

				var location =  window.location.href; 
				if(location.indexOf('?')>0  ){					
					 $("#myTab a[href='#recommend']").tab('show');		
				} 	      

				 $('#recommend-form').submit(function (ev) { 		 
					 $.ajax({
				           type: $(this).attr('method'),
				           url: $(this).attr('action'),
				           data: $(this).serialize(),
				           dataType: "json",
				           success: function (data) {
				        	   $('#myModal').modal(); 	             
				           },
				           error: function(){
				        	    alert('推荐失败!');
				           }
				       });
					   ev.preventDefault();					 
				 });

				 $('#myModal').on('hidden.bs.modal', function (e) {
// 					 window.location.reload();
					 window.location = window.location.href + "?";
				});

			});
	</script>
 @endsection