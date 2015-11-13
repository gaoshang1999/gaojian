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

@include('front.widget.profile')


<!-- I空行-->

                  <div class="row">
                                        <div class="col-md-12">
                                        <hr>


                                                      </div>


              </div>




 <form class="" role="form" method="get" id="search-form" action="{{ url('/front/demand/search') }}">
<!-- Inline搜索 form-->
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
                                          <input type="text" class="form-control"  name="position_description" placeholder="关键字" value="{{$position_description}}">
                                      </div>
                                      


                      </div>


                                     <div class="col-md-2">
                        
                                     
                                      <div class="checkbox">
                                          <label>
                                              <input type="checkbox"> 特殊要求
                                          </label>
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
           	<?php  $d1= App\Models\Demand::select('post_name')->whereNotNull('post_name')->where('recruit_user', Auth::user()->id)->distinct() ->get();?>                            
                                        <select class="form-control m-bot15" name="post_name_2" >
                                                      <option value=0>所有岗位</option> <?php $post_name_2 = isset($post_name_2) ? $post_name_2 : null; ?>
                                           @foreach ($d1->all() as $v)
                                                  <option value="{{ $v->post_name }}" {{ $post_name_2== $v->post_name?	'selected' : '' }}>{{ $v->post_name }}</option>
                                             @endforeach
                                              </select>
                                           
                                          </div>

           <div class="col-md-2" col-sm-offset-3>
           <?php  $d2= App\Models\Demand::select('demand_type_label_1')->whereNotNull('demand_type_label_1')->where('recruit_user', Auth::user()->id)->distinct() ->get();?>
                                           
                                              <select class="form-control m-bot15" name="demand_type_label_1">
                                                  <option value=0>所有职级</option>  <?php $demand_type_label_1 = isset($demand_type_label_1) ? $demand_type_label_1 : null; ?>
                                           @foreach ($d2->all() as $v)
                                                  <option value="{{ $v->demand_type_label_1}}" {{ $demand_type_label_1== $v->demand_type_label_1?	'selected' : '' }}>{{ $v->demand_type_label_1 }}</option>
                                             @endforeach
                                              </select>
                                           
                                          </div>
             <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15"  name="recommend_flow_status_label_3">  <?php $recommend_flow_status_label_3 = isset($recommend_flow_status_label_3) ? $recommend_flow_status_label_3 : ""; ?>
                                                  <option value="0">所有状态</option>
                                                  <option value="offer进度中">offer进度中</option>
                                                  <option value="面试进度中">面试进度中</option>
                                                  <option value="面试前评审进度中">面试前评审进度中</option>
                                                  <option value="无推荐流程候选人">无推荐流程候选人</option>
                                                  <option value="其他">其他</option>

                                              </select>
                                           
                                          </div>

              <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15" name="updated_at">  <?php $updated_at = isset($updated_at) ? $updated_at : ""; ?>
                                                  <option value="0" >全部发布时间</option>
                                                  <option value="-3 day"  {{ $updated_at== "-3 day" ?	'selected' : '' }}>3天内</option>
                                                  <option value="-7 day"  {{ $updated_at== "-7 day" ?	'selected' : '' }}>1周内</option>
                                                  <option value="-14 day"  {{ $updated_at== "-14 day" ?	'selected' : '' }}>2周内</option>
                                                  <option value="-1 month" {{ $updated_at== "-1 month" ?	'selected' : '' }}>1月内</option>
                                              </select>
                                           
                                          </div>











   </div>
</form>




 <div class="row">
            

                           <div class="col-md-2" col-sm-offset-3>
                        

                               <a class="btn btn-warning" href="{{ url('/front/demand/add') }}" role="button">新增岗位</a><br><br>

                      </div>

             </div>



<!-- advanced表格 table-->



			    <div class="row">
        <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  岗位管理
              </header>

              <table class="table table-striped table-advance table-hover">
               <tbody>
                  <tr>
                     <th><i class="icon_profile"></i> 岗位</th>
                     <th><i class="icon_calendar"></i> 发布时间</th>
                     <th><i class="icon_pin_alt"></i> 部门</th>
                     <th><i class="icon_pin_alt"></i> 推荐流程中人数</th>
                     <th><i class="icon_pin_alt"></i> 已面试人数</th>

                     <th><i class="icon_mobile"></i> 优先级</th>
                     <th><i class="icon_cogs"></i> 操作（编辑-删除）</th>
                 </tr>
                 @foreach ($demand->all() as $v)
                 <tr>
                     <td>{{$v-> post_name }} </td>
                     <td>{{ $v->created_at }}</td>
                     <td>{{$v-> attach_department }} </td>
                     <td>3</td>
                     <td>10</td>
                     <td>默认</td>
                     <td>
                      <div class="btn-group">
<!--                            <a class="btn btn-warning" href="#"><i class="icon_plus_alt2"></i></a> -->
                      <a class="btn btn-warning" href="{{ url("/front/demand/edit/{$v->id}") }}"><i class="icon_check_alt2"></i></a>
                      <form action='{{ url("/front/demand/delete/{$v->id}") }}' method="post" class="pull-right">
    							 <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    									<button class="btn btn-warning" onclick="return deleleConfirm();">																	
    										<i class="icon_close_alt2"></i>
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

			<!-- project team & activity end -->

		</section>
	</section>
<!--main content end-->    
@endsection