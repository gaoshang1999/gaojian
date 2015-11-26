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
                              <h4>{{ Auth::user()->really_name }}</h4>               
                              <div class="follow-ava">
                                  <img src="/front/img/profile-widget-avatar.jpg" alt="">
                              </div>
                              <h6>{{ Auth::user()->user_name }}</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>公司：{{ Auth::user()->corporation }} </p>
                                <p>欢迎！ </p>
								<p><i class="fa fa-twitter">用户组：企业用户</i></p>
                                <h6>
                                    <span><i class="icon_calendar"></i>上次登陆日期：15.10.13</span>
                                    <span><i class="icon_pin_alt"></i>地点：{{Auth::user()->location}} </span>
                                </h6>
                            </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-comments fa-2x"> </i><br>
											  
											  最新消息：
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
											  
											  积分：
											  500


                                          </li>
										   
                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-tachometer fa-2x"> </i><br>
											  
											  信用等级：
                                              5
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
                                          <i class="icon-home"></i>
                                          账户信息
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          高级认证和安全
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          我的消息
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="recent-activity" class="tab-pane active">
                                      <div class="profile-activity">  

              <!-- add-->

                                        <h1>基本信息</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>姓名</span>: {{ Auth::user()->really_name }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>用户账号 </span>: {{ Auth::user()->id }}</p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>登陆名</span>: {{ Auth::user()->user_name }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>手机</span>: {{ Auth::user()->mobile_number }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>职位 </span>: 招聘经理</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Email </span>:{{ Auth::user()->email }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>所在公司</span>:{{ Auth::user()->corporation }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>所在部门 </span>:  </p>
                                             
                                               </div>


                                                <div class="bio-row">
                                                  <p><span>积分</span>: 500</p>
                                             
                                               </div>

                                                <div class="bio-row">
                                                  <p><span>信用等级 </span>: 5</p>
                                             
                                               </div>

                                            </div>

                                                        <!-- add end-->



                                            <div class="row">   
                                        <br><br>
                                       

                                        <div class="col-sm-offset-4 col-sm-8">
                                             <a class="btn btn-warning" href="index.html" role="button">查看积分规则</a>
                                             <a class="btn btn-warning" href="index.html" role="button">查看信用规则</a><br>

                                          </div>
                                          </div>


                                         

                                      </div>

                                                  
                                  </div>


                                                                <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                    <section class="panel panel-info">
                                    
                                 <br><br><br>


                                </section>


         

                                   
<form class="form-horizontal " method="post" action="{{ url('/front/profile/' . ($user ? 'edit/'.$user->id : 'add')) }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <div class="row">   
                           <br>

                                     <div class="col-lg-8">
                                         <div class="form-group has-success">
                                         <label class="col-sm-2 control-label">姓名</label>
                                      <div class="col-sm-6">
                                          <input type="text" class="form-control"  name="really_name"  value="{{ old('really_name', $user ? $user-> really_name : '') }}">
                                      </div>
                                      </div>

                                       </div>
                            </div>


                                <div class="row">   
                                <br>

                                     <div class="col-lg-8">
                                         <div class="form-group has-success">
                                         <label class="col-sm-2 control-label">手机</label>
                                      <div class="col-sm-6">
                                          <input type="text" class="form-control"  name="mobile_number"  value="{{ old('mobile_number', $user ? $user-> mobile_number : '') }}"> 
                                      </div>
                                      </div>

                                       </div>
                            </div>



                                                       <div class="row"> 
                                                       <br>  

                                     <div class="col-lg-8">
                                         <div class="form-group has-success">
                                         <label class="col-sm-2 control-label">邮箱</label>
                                      <div class="col-sm-6">
                                          <input type="text" class="form-control"  name="email "  value="{{ old('email ', $user ? $user-> email  : '') }}"> 
                                      </div>
                                      </div>

                                       </div>
                            </div>



                                                       <div class="row">
                                                       <br>   

                                     <div class="col-lg-8">
                                         <div class="form-group  has-success">
                                         <label class="col-sm-2 control-label">公司</label>
                                      <div class="col-sm-6">
                                          <input type="text" class="form-control" name="corporation "  value="{{ old('corporation ', $user ? $user-> corporation  : '') }}"> 
                                      </div>
                                      </div>

                                       </div>
                            </div>



                                                       <div class="row"> 
                                                       <br>  

                                     <div class="col-lg-8">
                                         <div class="form-group has-success">
                                         <label class="col-sm-2 control-label">部门</label>
                                      <div class="col-sm-6">
                                          <input type="text" class="form-control"  > 
                                      </div>
                                      </div>

                                       </div>
                            </div>


                                                       <div class="row">   
                                                       <br>

                                     <div class="col-lg-8">
                                         <div class="form-group has-success">
                                         <label class="col-sm-2 control-label">职务</label>
                                      <div class="col-sm-6">
                                          <input type="text" class="form-control"  > 
                                      </div>
                                      </div>

                                       </div>
                            </div>


                                                       <div class="row">  
                                                       <br> 

                                     <div class="col-lg-8">
                                         <div class="form-group has-success">
                                         <label class="col-sm-2 control-label">登陆名</label>
                                      <div class="col-sm-6">
                                          <input type="text" class="form-control" name="user_name "  value="{{ old('user_name ', $user ? $user-> user_name  : '') }}"> 
                                      </div>
                                      </div>

                                       </div>
                            </div>


                          
							<input type="hidden" name="referer"
								value="{{ Request::header('referer') }}" />


                            <div class="row">   

                                       
                                 <br><br>
                                        <div class="col-lg-offset-2 col-lg-8">
                                             <button class="btn btn-primary"   type="submit"  role="button">更新并返回</button>                                             
                                             <a class="btn btn-primary" href="{{ url("/front/profile/edit/".Auth::user()->id ) }}" role="button">不更新返回</a><br>
                                          </div>
                           </div>
</form>


                           <div class="row">   

                                       
                                 <br><br>
                                        <div class="col-lg-offset-2 col-lg-8">
                                             <a class="btn btn-warning" href="index-mycenter.html" role="button">手机认证</a>
                                             <a class="btn btn-warning" href="index-mycenter.html" role="button">修改登陆密码</a>
                                             <a class="btn btn-warning" href="index-mycenter.html" role="button">公司认证</a><br>

                                          </div>
                                          </div>
                             

                       </div>




                                    


                                  <!-- edit-profile -->
                                  <div id="edit-profile" class="tab-pane">
                                    <section class="panel">         



                                    <div class="row">

                                     <div class="alert alert-success">
   <a href="#" class="alert-link">消息处理</a>
            </div>
            <div class="col-sm-8 portlets">
              <!-- Widget -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">消息历史记录</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                <div class="panel-body">
                  <!-- Widget content -->
                  <div class="padd sscroll">
                    
                    <ul class="chats">

                      <!-- Chat by us. Use the class "by-me". -->
                      <li class="by-me">
                        <!-- Use the class "pull-left" in avatar -->
                        <div class="avatar pull-left">
                          <img src="img/user.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                          <!-- In meta area, first include "name" and then "time" -->
                          <div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
                          Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li> 

                      <!-- Chat by other. Use the class "by-other". -->
                      <li class="by-other">
                        <!-- Use the class "pull-right" in avatar -->
                        <div class="avatar pull-right">
                          <img src="img/user22.png" alt=""/>
                        </div>

                        <div class="chat-content">
                          <!-- In the chat meta, first include "time" then "name" -->
                          <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                          Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li>   

                      <li class="by-me">
                        <div class="avatar pull-left">
                          <img src="img/user.jpg" alt=""/>
                        </div>

                        <div class="chat-content">
                          <div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
                          Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li>  

                      <li class="by-other">
                        <!-- Use the class "pull-right" in avatar -->
                        <div class="avatar pull-right">
                          <img src="img/user22.png" alt=""/>
                        </div>

                        <div class="chat-content">
                          <!-- In the chat meta, first include "time" then "name" -->
                          <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                          Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                          <div class="clearfix"></div>
                        </div>
                      </li>                                                                                  

                    </ul>

                  </div>
                  <!-- Widget footer -->
                  <div class="widget-foot">
                      
                      <form class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Type your message here...">
                        </div>
                        <button type="submit" class="btn btn-info">Send</button>
                      </form>


                  </div>
                </div>


              </div> 
            </div>
             </div>
                                 

                                

                                   <div class="row">   

                                      <div class="col-sm-8">
                                                      <textarea class="form-control ckeditor" name="editor1" rows="5"></textarea>
                                                  </div>



                         
                           </div>



                                                                 <div class="row">   
                                     <br><br>

                                                                          <label class="col-sm-2 control-label col-sm-offset-1"></label>

         


                                      <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15">

                                                  <option>Allice</option>
                                                  <option>Allice2</option>
                                                  <option>tom</option>
                                                  <option>Allice3</option>
                                                  <option>平台客服</option>
                                                  <option>好友群发</option>
                                                  <option>管理员</option>
                                              </select>
                                           
                                          </div>


                                      <div class="col-md-2">
                        
                                  
                                      <button type="submit" class="btn btn-primary">发送消息</button>


                      </div>
                                            </div>






  



                                      <div class="row">   
                                      <br><br><br>
      <div class="alert alert-success">
   <a href="#" class="alert-link">分组编辑</a>
            </div>

                                     <label class="col-sm-2 control-label col-sm-offset-1"></label>

                                      <div class="col-md-2" col-sm-offset-3>                                       
                                              <select class="form-control m-bot15">
                                                  <option>alice</option>
                                                  <option>tom</option>
                                                  <option>lily</option>
                                              </select>
                                           
                                          </div>

                                               <div class="col-md-2">
                        
                                  
                                      <button type="submit" class="btn btn-primary">删除好友</button>


                      </div>
                                           </div>







                                         


                         <div class="row">   
                                                                                 <label class="col-sm-2 control-label col-sm-offset-1"></label>


                                      <div class="col-md-2" col-sm-offset-3>                                       
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputPassword2">好友编号</label>  <!-- 修改-->
                                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="88392">
                                      </div>
                                      


                      </div>

                                                                       <div class="col-md-2">

                                  
                                      <button type="submit" class="btn btn-primary">添加好友</button>


                      </div>

                      </div>






                     





                                        <div class="row">   

                                       

                                        <div class="col-sm-offset-4 col-sm-8">
                                        <br><br>
                                             <a class="btn btn-warning" href="index-mytuijian.html" role="button">返回主页</a><br>

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