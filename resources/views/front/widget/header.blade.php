  		<header class="header dark-bg">
  			<div class="toggle-nav">
  				<div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
  			</div>

  			<!--logo start-->
  			<a href="{{ url('/front/demand/') }}" class="logo">高荐 <span class="lite"> </span></a>
  			<!--logo end-->



  			<div class="top-nav notification-row">                
  				<!-- notificatoin dropdown start-->
  				<ul class="nav pull-right top-menu">

  					<!-- task notificatoin start -->
  					<li id="task_notificatoin_bar" class="dropdown">
   						<?php  $comments = App\Models\RecommendComment::comments()->orderBy('id', 'desc')->get(); ?>	
 
                       <a data-toggle="dropdown" class="dropdown-toggle" href="#">
  							<i class="icon-bell-l"></i>
  								<span class="badge bg-important">{{ $comments->count() }}</span>
  							</a>
  							<ul class="dropdown-menu extended tasks-bar">
  								<div class="notify-arrow notify-arrow-blue"></div>
  								<li>
  									<p class="blue">你有{{ $comments->count() }}个提醒</p>
  								</li>
						
  								@foreach ($comments->take(5)->all() as $v)
  								<li class="normal">
  									<a href="{{ url('/front/comment/view/'.$v->id) }}">
  										<div class="task-info">
  											<div class="desc">{{ $v->user->user_name }} : {{ $v->created_at }} {{ $v->comment }}  </div>
  										</div>
  	  								</a>
  								</li>
  								@endforeach


  								<li class="external">
  									<a href="#">查看所有提醒</a>
  								</li>
  							</ul>
  						</li>
  						<!-- task notificatoin end -->
  						<!-- inbox notificatoin start-->
<!--   						<li id="mail_notificatoin_bar" class="dropdown"> -->
<!--   							<a data-toggle="dropdown" class="dropdown-toggle" href="#"> -->
<!--   								<i class="icon-envelope-l"></i> -->
<!--   								<span class="badge bg-important">5</span> -->
<!--   							</a> -->
<!--   							<ul class="dropdown-menu extended inbox"> -->
<!--   								<div class="notify-arrow notify-arrow-blue"></div> -->
<!--   								<li> -->
<!--   									<p class="blue">You have 5 new messages</p> -->
<!--   								</li> -->
<!--   								<li> -->
<!--   									<a href="#"> -->
<!--   										<span class="photo"><img alt="avatar" src="/font/img/avatar-mini.jpg"></span> -->
<!--   										<span class="subject"> -->
<!--   											<span class="from">Greg  Martin</span> -->
<!--   											<span class="time">1 min</span> -->
<!--   										</span> -->
<!--   										<span class="message"> -->
<!--   											I really like this admin panel. -->
<!--   										</span> -->
<!--   									</a> -->
<!--   								</li> -->
<!--   								<li> -->
<!--   									<a href="#"> -->
<!--   										<span class="photo"><img alt="avatar" src="/font/img/avatar-mini2.jpg"></span> -->
<!--   										<span class="subject"> -->
<!--   											<span class="from">Bob   Mckenzie</span> -->
<!--   											<span class="time">5 mins</span> -->
<!--   										</span> -->
<!--   										<span class="message"> -->
<!--   											Hi, What is next project plan? -->
<!--   										</span> -->
<!--   									</a> -->
<!--   								</li> -->
<!--   								<li> -->
<!--   									<a href="#"> -->
<!--   										<span class="photo"><img alt="avatar" src="/font/img/avatar-mini3.jpg"></span> -->
<!--   										<span class="subject"> -->
<!--   											<span class="from">Phillip   Park</span> -->
<!--   											<span class="time">2 hrs</span> -->
<!--   										</span> -->
<!--   										<span class="message"> -->
<!--   											I am like to buy this Admin Template. -->
<!--   										</span> -->
<!--   									</a> -->
<!--   								</li> -->
<!--   								<li> -->
<!--   									<a href="#"> -->
<!--   										<span class="photo"><img alt="avatar" src="/font/img/avatar-mini4.jpg"></span> -->
<!--   										<span class="subject"> -->
<!--   											<span class="from">Ray   Munoz</span> -->
<!--   											<span class="time">1 day</span> -->
<!--   										</span> -->
<!--   										<span class="message"> -->
<!--   											Icon fonts are great. -->
<!--   										</span> -->
<!--   									</a> -->
<!--   								</li> -->
<!--   								<li> -->
<!--   									<a href="#">See all messages</a> -->
<!--   								</li> -->
<!--   							</ul> -->
<!--   						</li> -->
  						<!-- inbox notificatoin end -->
  						<!-- alert notification start-->
<!--   						<li id="alert_notificatoin_bar" class="dropdown"> -->
<!--   							<a data-toggle="dropdown" class="dropdown-toggle" href="#"> -->

<!--   								<i class="icon-bell-l"></i> -->
<!--   								<span class="badge bg-important">7</span> -->
<!--   							</a> -->
<!--   							<ul class="dropdown-menu extended notification"> -->
<!--   								<div class="notify-arrow notify-arrow-blue"></div> -->
<!--   								<li> -->
<!--   									<p class="blue">You have 4 new notifications</p> -->
<!--   								</li> -->
<!--   								<li> -->
<!--   									<a href="#"> -->
<!--   										<span class="label label-primary"><i class="icon_profile"></i></span>  -->
<!--   										Friend Request -->
<!--   										<span class="small italic pull-right">5 mins</span> -->
<!--   									</a> -->
<!--   								</li> -->
<!--   								<li> -->
<!--   									<a href="#"> -->
<!--   										<span class="label label-warning"><i class="icon_pin"></i></span>   -->
<!--   										John location. -->
<!--   										<span class="small italic pull-right">50 mins</span> -->
<!--   									</a> -->
<!--   								</li> -->
<!--   								<li> -->
<!--   									<a href="#"> -->
<!--   										<span class="label label-danger"><i class="icon_book_alt"></i></span>  -->
<!--   										Project 3 Completed. -->
<!--   										<span class="small italic pull-right">1 hr</span> -->
<!--   									</a> -->
<!--   								</li> -->
<!--   								<li> -->
<!--   									<a href="#"> -->
<!--   										<span class="label label-success"><i class="icon_like"></i></span>  -->
<!--   										Mick appreciated your work. -->
<!--   										<span class="small italic pull-right"> Today</span> -->
<!--   									</a> -->
<!--   								</li>                             -->
<!--   								<li> -->
<!--   									<a href="#">See all notifications</a> -->
<!--   								</li> -->
<!--   							</ul> -->
<!--   						</li> -->
  						<!-- alert notification end-->
  						<!-- user login dropdown start-->
  						<li class="dropdown">
  							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
  								<span class="profile-ava">
  									<img alt="" src="/front/img/avatar1_small.jpg">
  								</span>
  								<span class="username">{{Auth::user()->user_name}}</span>
  								<b class="caret"></b>
  							</a>
  							<ul class="dropdown-menu extended logout">
  								<div class="log-arrow-up"></div>
<!--   								<li class="eborder-top"> -->
<!--   									<a href="#"><i class="icon_profile"></i> My Profile</a> -->
<!--   								</li> -->
<!--   								<li> -->
<!--   									<a href="#"><i class="icon_mail_alt"></i> My Inbox</a> -->
<!--   								</li> -->
<!--   								<li> -->
<!--   									<a href="#"><i class="icon_clock_alt"></i> Timeline</a> -->
<!--   								</li> -->
<!--   								<li> -->
<!--   									<a href="#"><i class="icon_chat_alt"></i> Chats</a> -->
<!--   								</li> -->
  								<li class="eborder-top">
  									<a href="{{ url('auth/logout') }}"><i class="icon_key_alt"></i> Log Out</a>
  								</li>
<!--   								<li> -->
<!--   									<a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a> -->
<!--   								</li> -->
<!--   								<li> -->
<!--   									<a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a> -->
<!--   								</li> -->
  							</ul>
  						</li>
  						<!-- user login dropdown end -->
  					</ul>
  					<!-- notificatoin dropdown end-->
  				</div>
  			</header>      
  			<!--header end-->
                             
                             
                            <!-- Modal -->
                              <div class="modal fade" id="remind-Modal" tabindex="-1" role="dialog" aria-labelledby="remind-Modalabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">提醒</h4>
                                          </div>
                                          <form class="form-horizontal "  id="remind-Modal-form" method="post" action="{{ url('/front/comment/edit') }}">
                                          <div class="modal-body"  id="remind-Modal-body">

                                          </div>
                                          <div class="modal-footer">
                                                <button type="button" class="btn btn-success" id="remind-Modal-form-button-1">30分钟后再提醒  </button>
                                                <button type="button" class="btn btn-default"  id="remind-Modal-form-button-2" >不再提醒 </button>                                             
                                          </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                              <!-- modal -->