                            <div class="col-lg-2 col-sm-2">
                              <h4>{{Auth::user()->user_name}}</h4>               
                              <div class="follow-ava">
                                  <img src="/front/img/profile-widget-avatar.jpg" alt="">
                              </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>欢迎！{{Auth::user()->user_name}},{{Auth::user()->corporation}} </p>
                                <p>{{Auth::user()->email}}</p>
                                <h6>
                                    <span><i class="icon_clock_alt"></i>{{date("H:i:s")}}</span>
                                    <span><i class="icon_calendar"></i>{{date("Y-m-d")}}</span>
                                    <span><i class="icon_pin_alt"></i>{{Auth::user()->location}} </span>
                                </h6>
                            </div>