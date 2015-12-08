@extends('front/front')

{{-- Content --}}
@section('content')

  			<!--main content start-->
  			<section id="main-content">
  				<section class="wrapper">            
  					<!--overview start-->

<!-- 			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					</ol>
				</div>
			</div> -->



			



			<!-- Today status end -->
			
			<!-- 状态面板 -->

             @include('front.widget.my_talent_status')


 <form class="" role="form" method="get" id="search-form" action="{{ url('/front/mytalent/search') }}">
<!-- Inline搜索 form-->
                  <div class="row">
                                                           <br><br><br>

                  <div class="col-md-2">
                  </div>
                      <div class="col-md-2">
                        
                                      <div class="form-group">

                                          <label class="sr-only" for="name">人才姓名</label> 
                                          <input type="text" class="form-control" id="name" placeholder="人才姓名" name="name" value="{{ Request::input('name') }}">
                                      </div>
                                      


                      </div>

                                     <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="mobile">手机号</label> 
                                          <input type="text" class="form-control" id="mobile" placeholder="手机号" name="mobile" value="{{ Request::input('mobile') }}">
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

           <div class="col-md-2" col-sm-offset-3>
              <?php  $recruit_corporations= App\Models\Demand:: demandForMyTalent()->select('recruit_corporation') ->distinct()->orderBy('recruit_corporation')->get();?>                         
                                              <select class="form-control m-bot15" name="recruit_corporation"> 
                                                  <option value="0">所有推荐公司</option>
                                                  @foreach($recruit_corporations as $c)
                                        			<option value="{{ $c->recruit_corporation }}" @if( Request::input('recruit_corporation') ==$c->recruit_corporation ) selected @endif >{{ $c->recruit_corporation }}</option>
                                        		  @endforeach
                                              </select>
                                           
            </div>

        
             <div class="col-md-2" col-sm-offset-3>
                                       <?php  $constant = App\Models\Constant::where('en', 'recommend_flow_parameter_1')->orderBy('k')->get();?>
                                              <select class="form-control m-bot15" name="recommend_flow_parameter_1"> 
                                                  <option value="0">所有状态</option>
                                                @foreach($constant as $c)
                                        			<option value="{{ $c->k }}" @if( Request::input('recommend_flow_parameter_1') ==$c->k ) selected @endif >{{ $c->v }}</option>
                                        		  @endforeach
                                              </select>
                                           
             </div>

              <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15" name="updated_at"> <?php $updated_at = Request::input('updated_at'); ?>
                                                  <option value="0">所有上传时间</option>
                                                  <option value="-7 day" {{ $updated_at== "-7 day" ?	'selected' : '' }}>1周内</option>
                                                  <option value="-14 day"  {{ $updated_at== "-14 day" ?	'selected' : '' }}>2周内</option>
                                                  <option value="-1 month" {{ $updated_at== "-1 month" ?	'selected' : '' }}>1个月内</option>
                                                  <option value="-3 month"{{ $updated_at== "-3 month" ?	'selected' : '' }}>3个月内</option>
                                              </select>
                                           
           </div>
      
 </div>
</form>



             <div class="row">
            

                           <div class="col-md-2" col-sm-offset-3>
                        

                               <a class="btn btn-warning" href="{{ url('/front/mytalent/add') }}"" role="button">新增人才</a><br><br>

                      </div>

             </div>



<!-- advanced表格 table-->



			    <div class="row">
        <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  我的人才储备
              </header>
<div class="table-responsive">
              <table class="table table-striped table-advance table-hover">
               <tbody>
                
 <tr>
                     <th><i class="icon_profile"></i> 姓名</th>
                     <th><i class="icon_profile"></i> 备注来源</th>
                     <th><i class="icon_pin_alt"></i> 最新推荐岗位</th>

                     <th><i class="icon_calendar"></i> 推荐时间</th>
                     <th><i class="icon_pin_alt"></i> 所在公司</th>
                     <th><i class="icon_pin_alt"></i> 职级</th>

                     <th><i class="icon_mobile"></i> 招聘状态</th>
                  


                     <th><i class="icon_cogs"></i> 操作（修改-推荐-删除）</th>
                 </tr> <?php $constant = App\Models\Constant::getInstance(); ?>    
                 @foreach ($talent->all() as $v)
                   <?php  $recommend = $v->recommends()->orderBy('updated_at', 'desc')->first(); ?>
                 <tr>
                     <td>{{  $v-> name }}</td>
                     <td>{{  $v ->user?$v ->user ->user_name:'' }}</td>
                     <td>{{  $recommend ? $recommend ->demand ->post_name : ""  }}</td>
                     <td>{{  $recommend ? $recommend ->created_at : ""  }}</td>
                     <td>{{  $v->last_corporation  }}</td>
                     <td>{{$v-> job_level_1 }}</td>
                     <td>{{  $recommend ? array_get($constant, 'recommend_flow_parameter_1.'.$recommend->recommend_flow_parameter_1, '') : ""  }}</td>
                   
                     <td>
                      <div class="btn-group">                          
                           <a class="btn btn-warning" href="{{ url("/front/mytalent/view/{$v->id}") }}" role="button">查看详细</a>
                           <a class="btn btn-success" href="{{ url("/front/recommend/recommend?talent_id={$v->id}") }}" role="button">快速推荐</a>
                        
<!--                           <a class="btn btn-warning" href="{{ url("/front/mytalent/edit/{$v->id}") }}"><i class="icon_check_alt2"></i></a> -->
<!--                           <a class="btn btn-warning" href="{{ url("/front/mytalent/recommend/{$v->id}") }}"><i class="icon_plus_alt2"></i></a> -->
                          <form action='{{ url("/front/mytalent/delete/{$v->id}") }}' method="post" class="pull-right">
    							 <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    									<button class="btn btn-warning" onclick="return deleleConfirm();">																	
    										删除
    									</button>
    							</form>
                      </div>
                  </td>
              </tr>
               @endforeach

                

    </tbody>
    </table>
</div>
    </section>
    </div>
    </div>

    <!-- advanced table-->

			<!-- project team & activity end -->

		</section>
	</section>
	<!--main content end-->
@endsection