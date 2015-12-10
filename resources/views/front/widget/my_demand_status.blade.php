
<div class="row">

                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">

             @include('front.widget.profile')
          
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-comments fa-2x"> </i><br>

											  待联系的人才：<a href="{{ url("/front/recommend/search?recommend_flow_parameter=1")}}">{{ App\Models\Recommend::myHostRecommend() -> whereIn('recommend_flow_parameter_1', [1,  2,  4,  5,  6])->count() }}</a>
                                          </li>
										   
                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-bell fa-2x"> </i><br>
											  
											  待反馈的人才：<a href="{{ url("/front/recommend/search?recommend_flow_parameter=2")}}">{{ App\Models\Recommend::myHostRecommend()-> whereIn('recommend_flow_parameter_1', [8,  9,  10,  11,  12,  13])->count() }} </a>
                                          </li>
										   
                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-tachometer fa-2x"> </i><br>
											  
											  Offer阶段的人才：<a href="{{ url("/front/recommend/search?recommend_flow_parameter=3")}}">{{ App\Models\Recommend::myHostRecommend()-> whereIn('recommend_flow_parameter_1', [16,  17,  18])->count() }}</a>
                                          </li>
										   
                                      </ul>
                            </div>
                          </div>
                    </div>
                </div>
              </div>