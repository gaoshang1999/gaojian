                            <div class="col-lg-2 col-sm-2">
                              <h4>{{Auth::user()->user_name}}</h4>               
                              <div class="follow-ava">
                                  <img src="/front/img/profile-widget-avatar.jpg" alt="">
                              </div>
                              <h6>Administrator</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>HR登陆：欢迎！{{Auth::user()->user_name}},{{Auth::user()->corporation}} </p>
                                <p>{{Auth::user()->email}}</p>
								<p><i class="fa fa-twitter">jenifertweet</i></p>
                                <h6>
                                    <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                    <span><i class="icon_calendar"></i>25.10.13</span>
                                    <span><i class="icon_pin_alt"></i>{{Auth::user()->location}} </span>
                                </h6>
                            </div>