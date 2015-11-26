
<div class="row">

                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">

             @include('front.widget.profile')
          
             <?php   //查询当前用户上传的人才,  收到的推荐
              $user_id = Auth::user()->id;
              $query = App\Models\Recommend::query()->whereExists(function ($query)  use ($user_id){
                     $query->select(DB::raw(1))
                    ->from('talent')
                    ->where('talent.user_id',  $user_id)
                    ->whereRaw('gj_talent.id = gj_recommend.talent_id')   ;
             });
             ?>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-comments fa-2x"> </i><br>
											  
											  待联系的人才：{{ $query -> whereIn('recommend_flow_parameter_1', [1,  2,  4,  5,  6])->count() }}
                                          </li>
										   
                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-bell fa-2x"> </i><br>
											  
											  待反馈的人才：{{ $query -> whereIn('recommend_flow_parameter_1', [8,  9,  10,  11,  12,  13])->count() }}
                                          </li>
										   
                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-tachometer fa-2x"> </i><br>
											  
											  Offer阶段的人才:{{ $query -> whereIn('recommend_flow_parameter_1', [16,  17,  18])->count() }}
                                          </li>
										   
                                      </ul>
                            </div>
                          </div>
                    </div>
                </div>
              </div>