@extends('front/front')

{{-- Content --}}
@section('content')

  			<!--main content start-->
  			<section id="main-content">
  				<section class="wrapper">            



<div class="row">





                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h4>Jenifer Smith</h4>               
                              <div class="follow-ava">
                                  <img src="img/profile-widget-avatar.jpg" alt="">
                              </div>
                              <h6>Administrator</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>HR登陆：欢迎！Tracy **公司招聘经理 </p>
                                <p>@jenifersmith</p>
								<p><i class="fa fa-twitter">jenifertweet</i></p>
                                <h6>
                                    <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                    <span><i class="icon_calendar"></i>25.10.13</span>
                                    <span><i class="icon_pin_alt"></i>北京</span>
                                </h6>
                            </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-comments fa-2x"> </i><br>
											  
											  待联系的人才：8
                                          </li>
										   
                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-bell fa-2x"> </i><br>
											  
											  待反馈的人才：9
                                          </li>
										   
                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-tachometer fa-2x"> </i><br>
											  
											  Offer阶段的人才:12
                                          </li>
										   
                                      </ul>
                            </div>
                          </div>
                    </div>
                </div>
              </div>


<!-- I空行-->

            




<!-- Inline搜索 form-->
                  <div class="row">

                  <!-- 修改-->

                  <br><br><br>

                  <!-- 修改-->

                  <div class="col-md-2">
                  </div>

                      <div class="col-md-2">
                        
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputEmail2">岗位名称关键字</label>  <!-- 修改-->
                                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="岗位名称关键字">
                                      </div>
                                      


                      </div>

                                     <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputPassword2">人才姓名</label>  <!-- 修改-->
                                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="人才姓名">
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


                                          <!-- 修改-->

           <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15">
                                                  <option>所有公司</option>
                                                  <option>IBM</option>
                                                  <option>阿里巴巴</option>
                                              </select>
                                           
                                          </div>

                                          <!-- 修改end-->

           <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15">
                                                  <option>所有职能</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                           
                                          </div>
             <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15">
                                                  <option>所有状态</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                           
                                          </div>

              <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15">
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                           
                                          </div>

             <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15">
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                           
                                          </div>










                                          </div>



<!-- advanced表格 table-->



			    <div class="row">
        <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  我的推荐
              </header>

              <table class="table table-striped table-advance table-hover">
               <tbody>
           
 <tr>
                     <th><i class="icon_profile"></i> 推荐公司</th>  <!-- 修改-->
                     <th><i class="icon_profile"></i> 推荐岗位</th>
                     <th><i class="icon_pin_alt"></i> 推荐号</th>

                     <th><i class="icon_calendar"></i> 推荐时间</th>
                     <th><i class="icon_pin_alt"></i> 姓名</th>
                     <th><i class="icon_pin_alt"></i> 人才编号</th>
                     <th><i class="icon_pin_alt"></i> 有效期</th>

                     <th><i class="icon_mobile"></i> 最新状态</th>
                  


                     <th><i class="icon_cogs"></i> 操作（增加-编辑-删除）</th>
                 </tr>
                 <tr>
                     <td>腾讯</td>
                     <td>开发工程师</td>
                     <td>98997</td>
                     <td>2004-07-06</td>
                     <td>王丽</td>
                     <td>987765</td>
                     <td>2016-09-09</td>
                     <td>准备二面</td>
                   
                     <td>
                      <div class="btn-group">
                           <a class="btn btn-warning" href="profile-process.html"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-warning" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-warning" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                  </td>
              </tr>

    </tbody>
    </table>
    </section>
    </div>
    </div>

    <!-- advanced table-->

			<!-- project team & activity end -->

		</section>
	</section>
	<!--main content end-->
@endsection