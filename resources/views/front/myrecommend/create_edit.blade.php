@extends('front/front')

{{-- Content --}}
@section('content')

       <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-sm-12">
					<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_documents_alt"></i>Pages</li>
						<li><i class="fa fa-user-md"></i>Profile</li>
					</ol>
				</div>
			</div>
              <div class="row">
                <!-- profile-widget -->
                <div class="col-sm-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-sm-2 col-sm-2">
                              <h4>王丽</h4>               
                              <div class="follow-ava">
                                  <img src="img/profile-widget-avatar.jpg" alt="">
                              </div>
                              <h6>百度 搜索算法工程师</h6>
                            </div>
                            <div class="col-sm-4 col-sm-4 follow-info">
                                <p>性别：女   工作经验：5年   学历：研究生</p>
                                <p>推荐人：高荐 tracy </p>
								<p><i class="fa fa-twitter">联系方式：010-51627732</i></p>
                                <h6>
                                
                                    <span><i class="icon_pin_alt"></i>地点：北京</span>
                                </h6>
                            </div>
                            <div class="col-sm-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-comments fa-2x"> </i><br>
											  
											  人才备注：


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
                                          候选人简历预览
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          推荐操作
                                      </a>
                                  </li>
                               
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="recent-activity" class="tab-pane active">
                                      <div class="profile-activity">  

              <!-- add-->

                                        <h1>人才信息</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>性别 </span>: 女</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>地点 </span>: 上海</p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>年龄</span>: 27 A</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>公司 </span>: 百度</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>职位 </span>: 算法开发工程师</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Email </span>:jenifer@mailname.com</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Mobile </span>: (+6283) 456 789</p>
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
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">王丽</a> 简历全文</p>
                                                      <p>手机：13917415013
女    28岁(1986年6月)    3年工作经验    硕士    未婚

身份证：320684198606150267
手机：13917415013
E-mail：yingsgu@126.com 

求职意向                                                               
期望工作地区：
上海
期望月薪：
10001-15000元/月
目前状况：
我目前在职，正考虑换个新环境（如有合适的工作机会，到岗时间一个月左右）
期望工作性质：
全职
期望从事职业：
风险管理/控制/稽查、融资经理/主管、法务经理/主管、企业律师/合规顾问、投资银行业务
期望从事行业：
基金/证券/期货/投资、专业服务/咨询(财会/法律/人力资源等)
自我评价                                                               
毕业至今一直工作于上海知名律师事务所从事证券业务的团队，主要工作为向拟上市公司、上市公司、私募基金等金融机构提供法律服务。 
工作经历                                                               
2011.03 - 至今  上海市锦天城律师事务所  （3年8个月） 
律师/律师助理 | 8001-10000元/月 
专业服务/咨询(财会/法律/人力资源等) | 企业性质：其它 | 规模：500-999人 
工作描述：
2011.3-至今 上海市锦天城律师事务所 律师助理 

毕业至今一直工作于锦天城律所从事非诉业务的团队，具体的工作内容如下：
1、对拟在境内外首发上市的企业进行法律尽职调查，提供改制重组方案，帮助企业进行规范运作，出具法律意见书、律师工作报告，提供其他首发上市所需进行的法律工作；
2、为私募股权基金的设立及运行提供各类法律服务，起草、审核及修订合伙协议、投资协议等，并对私募股权基金的投资计划进行法律风险评估、出具法律论证方案等；
3、为公司股权并购、业务重组进行法律尽职调查，设计并购重组方案，评估并购重组风险；
4、为上市公司再融资提供各类法律服务，包括定向增发、债转股等；
5、为证券公司、公募基金子公司设立资产管理计划提供法律服务；
6、起草、审核及修改企业各类日常合同，包括业务合同、股权合同、债权债务合同等。 
教育经历                                                              
2009.09 - 2011.01  英国莱斯特大学  国际经济法  硕士 
2005.09 - 2009.06  苏州大学  法学  本科 
培训经历                                                              
2009.09 - 2010.04  维也纳Willem C杯国际商事仲裁模拟法庭辩论比赛 
培训机构：
英国莱斯特大学
培训地点：
英国
所获证书：
荣誉证书 
培训描述：
2009.9-2010.4于英国就读期间参加维也纳Willem C杯国际商事仲裁模拟法庭辩论比赛并获荣誉证书，在假设商事案例背景下与英国小组成员共同制作仲裁申请书和答辩书,同时长期接受莱斯特大学LLM课程主管案例分析指导、仲裁申请书和答辩书书写指导以及模拟仲裁庭口语训练。 

2008.07 - 2008.08  中美欧法律暑期学院 
培训机构：
苏州大学、美国康奈尔大学、德国布索瑞斯法学院
所获证书：
毕业证书 
培训描述：
2008.7-2008.8于大学本科期间参加中美欧法律暑期学院并获毕业证书（由苏州大学、美国康奈尔大学、德国布索瑞斯法学院主办），在数例假设商事案例背景下与跨国小组团队进行商事谈判、小组研讨、董事会陈述、争端处理以及模拟法庭辩论。 
证书                                                                   
2012.11  国家司法考试证书

2006.09  大学英语六级

2010.04  维也纳Willem C杯国际商事仲裁模拟法庭辩论比赛荣誉证书

2008.09  中美欧法律暑期学院毕业证书

2006.09  全国计算机等级一级

2009.04  驾驶执照
语言能力                                                               
英语：读写能力熟练 | 听说能力熟练 
</p>
                                                  </div>
                                              </div>
                                          </div>


                                            <div class="row">   

                                       

                                        <div class="col-sm-offset-4 col-sm-8">
                                             <a class="btn btn-warning" href="index-myrencai.html" role="button">返回编辑人才</a>

                                             <a class="btn btn-warning" href="index.html" role="button">转发报告</a>
                                             <a class="btn btn-warning" href="index.html" role="button">下载报告</a><br>

                                          </div>
                                          </div>


                                         

                                      </div>

                                                  
                                  </div>


                                  <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                   

                                
                            <div class="row">   

                            <br><br>

                                  <label class="col-sm-2 control-label col-sm-offset-1">推荐公司</label>

                                      <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15">
                                               <option>默认</option>

                                                  <option>IBM</option>
                                                  <option>中国银行</option>
                                                  <option>百度</option>
                                              </select>
                                           
                                          </div>


                                      



                                </div>


                                   <div class="row">   

                             <label class="col-sm-2 control-label col-sm-offset-1">推荐岗位</label>

                                      <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15">
                                               <option>java开发</option>

                                                  <option>测试工程师</option>
                                                  <option>高级产品经理</option>
                                                 
                                              </select>
                                           
                                          </div>
                         
                           </div>


                            <div class="row">   
                            <br><br>
                                       

                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button class="btn btn-primary " data-toggle="modal" data-target="#myModal">
                                            推荐
                                                </button>
                                             <a class="btn btn-warning" href="index-myrencai.html" role="button">返回</a><br>


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

                                          </div>
                                          </div>
                             

                       </div>



                                    


                                  <!-- edit-profile -->
                                  <div id="edit-profile" class="tab-pane">
                                    <section class="panel">                                          
                                      <section>                     <!-- ckbox Start-->

                                  <div class="row">   



                                     <div class="col-sm-3">
                                      <section class="panel">
                                          <header class="panel-heading">
                                              人才简历评估
                                          </header>
                                          <div class="panel-body">
                                              <form action="#" method="get" accept-charset="utf-8">

                                                  <div class="radios">
                                                      <label class="label_radio" for="radio-01">
                                                          <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> 未评估；
                                                      </label>
                                                      <label class="label_radio" for="radio-02">
                                                          <input name="sample-radio" id="radio-02" value="1" type="radio" /> 优秀精准；
                                                      </label>
                                                      <label class="label_radio" for="radio-03">
                                                          <input name="sample-radio" id="radio-03" value="1" type="radio" /> 良好；
                                                      </label>

                                                      <label class="label_radio" for="radio-03">
                                                          <input name="sample-radio" id="radio-03" value="1" type="radio" /> 合格；
                                                      </label>

                                                      <label class="label_radio" for="radio-04">
                                                          <input name="sample-radio" id="radio-04" value="1" type="radio" /> 信息缺失，不全；
                                                      </label>


                                                      <label class="label_radio" for="radio-05">
                                                          <input name="sample-radio" id="radio-05" value="1" type="radio" /> 信息失实，错误；
                                                      </label>

                                                      <label class="label_radio" for="radio-06">
                                                          <input name="sample-radio" id="radio-06" value="1" type="radio" /> 其他；
                                                      </label>


                                                  </div>
                                              </form>
                                          </div>

                                      </section>
                                  </div>

                                  <div class="col-sm-3">
                                      <section class="panel">
                                          <header class="panel-heading">
                                           高荐顾问服务评价
                                       </header>
                                       <div class="panel-body">
                                          <form action="#" method="get" accept-charset="utf-8">

                                              <div class="radios">
                                                  <label class="label_radio" for="radio-07">
                                                      <input name="sample-radio" id="radio-07" value="1" type="radio" checked /> 未评价
                                                  </label>
                                                  <label class="label_radio" for="radio-08">
                                                      <input name="sample-radio" id="radio-08" value="1" type="radio" /> 优良
                                                  </label>

                                                  <label class="label_radio" for="radio-09">
                                                      <input name="sample-radio" id="radio-09" value="1" type="radio" /> 合格
                                                  </label>


                                                  <label class="label_radio" for="radio-10">

                                                      <input name="sample-radio" id="radio-10" value="1" type="radio" /> 较差
                                                  </label>

                                                  <label class="label_radio" for="radio-11">
                                                      <input name="sample-radio" id="radio-11" value="1" type="radio" /> 很差，投诉
                                                  </label>


                                           



                                              </label>
                                          </div>
                                      </form>
                                  </div>

                              </section>
                          </div>

                          <div class="col-sm-3">
                              <section class="panel">
                                  <header class="panel-heading">
                                      猎头服务评价
                                  </header>
                                  <div class="panel-body">
                                      <form action="#" method="get" accept-charset="utf-8">

                                          <div class="radios">
                                              <label class="label_radio" for="radio-15">
                                                  <input name="sample-radio" id="radio-15" value="1" type="radio" checked /> 未评价
                                              </label>
                                              <label class="label_radio" for="radio-16">
                                                  <input name="sample-radio" id="radio-16" value="1" type="radio" /> 优良
                                              </label>
                                              <label class="label_radio" for="radio-17">
                                                  <input name="sample-radio" id="radio-17" value="1" type="radio" /> 合格
                                              </label>

                                              <label class="label_radio" for="radio-18">
                                                  <input name="sample-radio" id="radio-18" value="1" type="radio" /> 较差
                                              </label>

                                              <label class="label_radio" for="radio-19">
                                                  <input name="sample-radio" id="radio-19" value="1" type="radio" /> 很差
                                              </label>

                                               
                                          </div>
                                      </form>
                                  </div>
                                  </section>


                              </div>
                             
                             






                          </div>
                      </section> <!-- ckbox end-->


                                   <div class="row">   

                                     <div class="col-sm-6">
                                         <div class="form-group">
                                          <label class="sr-only" for="exampleInputEmail2">投诉和建议</label>
                                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="投诉和建议">
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
                        
                                  
                                      <button type="submit" class="btn btn-warning">发送反馈消息</button>


                      </div>

                         
                           </div>



                                        <div class="row">   

                                       

                                        <div class="col-sm-offset-4 col-sm-8">
                                             <a class="btn btn-warning" href="index.html" role="button">保存并返回</a>
                                             <a class="btn btn-warning" href="index.html" role="button">不保存返回</a><br>

                                          </div>
                                          </div>







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

				 $action = $('#submit-action-form');
				 
				 $action.prop('disabled', true);	
				 
				 $('#action-comment').keyup(function(){
					 if($(this).val().length ==0){
						 $action.prop('disabled', true);	
					 }else if($(this).val().length >0){
						 $action.prop('disabled', false);	
					 }
				 });
				 
				 $('#action-form').submit(function (ev) { 
					  
		             $action.prop('disabled', true);	
					 $.ajax({
				           type: $(this).attr('method'),
				           url: $(this).attr('action'),
				           data: $(this).serialize(),
				           dataType: "json",
				           success: function (data) {
    				        	$('#action-form-hint').html("行动设置成功");
      				            $('#action-form-hint').show();  	
      				            $action.prop('disabled', false);
// 					            location.reload();	
				           },
				           error: function(){
					        	$('#action-form-hint').html("行动设置失败，请重试");
	  				            $('#action-form-hint').show();
				        	    $action.prop('disabled', false);	
				           }
				       });
					   ev.preventDefault();					 
				 });

				 

				 $feedback = $('#submit-feedback-form');
				 
				 $feedback.prop('disabled', true);	
				 
				 $('#feedback-comment').keyup(function(){
					 if($(this).val().length ==0){
						 $feedback.prop('disabled', true);	
					 }else if($(this).val().length >0){
						 $feedback.prop('disabled', false);	
					 }
				 });
				 
				 $('#feedback-form').submit(function (ev) { 
					  
		             $feedback.prop('disabled', true);	
					 $.ajax({
				           type: $(this).attr('method'),
				           url: $(this).attr('action'),
				           data: $(this).serialize(),
				           dataType: "json",
				           success: function (data) {
    				        	$('#feedback-form-hint').html("发送反馈成功");
      				            $('#feedback-form-hint').show();
  				                $feedback.prop('disabled', false);	
//   				                location.reload();
				           },
				           error: function(){
				        	    $('#feedback-form-hint').html("发送反馈失败，请重试");
	  				            $('#feedback-form-hint').show();
				        	    $feedback.prop('disabled', false);	
				           }
				       });
					   ev.preventDefault();					 
				 });

				 
			});
	</script>
 @endsection