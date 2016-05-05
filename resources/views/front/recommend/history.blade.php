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
 


<!-- I空行-->
                  <div class="row">
                                        <div class="col-md-12">
                                        <hr>
                                          </div>
              </div>
              
<!-- Inline搜索 form-->
                               

<!-- advanced表格 table-->



			    <div class="row">
        <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  {{$talent->name}}推荐历史
              </header>
<div class="table-responsive">
              <table class="table table-striped table-advance table-hover">
               <tbody>
           
 <tr>
                    <th><i class="icon_profile"></i> 推荐公司</th>
                     <th><i class="icon_profile"></i> 推荐岗位</th>
                     <th><i class="icon_pin_alt"></i> 推荐时间</th>
                     <th><i class="icon_pin_alt"></i> 推荐人</th>                     
                     
 
                     <th><i class="icon_pin_alt"></i> 招聘负责人</th>
                     <th><i class="icon_pin_alt"></i> 人才姓名</th>
                     <th><i class="icon_pin_alt"></i> 所在公司</th>
                     <th><i class="icon_pin_alt"></i> 职能</th>

                     <th><i class="icon_mobile"></i> 最新状态</th>
      
                    <th><i class="icon_mobile"></i> 最新反馈</th>

<?php $constant = App\Models\Constant::getInstance(); ?>    
                     
                 </tr>
        @foreach ($recommend->all() as $v)
                 <tr>
                     <td>{{ $v->demand->recruit_corporation }}</td>
                     <td>{{ $v->demand->post_name }}</td>
                     <td>{{ $v->created_at }} </td>
                     <td>{{ $v->user->user_name }} </td>
          
                     <td>{{ $v->host->user_name }}</td>
                     <td>{{ $v->talent?$v->talent->name:'' }}</td>
                     <td>{{ $v->talent?$v->talent->last_corporation:'' }}</td>
                     <td>{{ $v->demand->demand_type_label_1 }}</td>
                     <td>{{ array_get($constant, 'recommend_flow_parameter_1.'.$v->recommend_flow_parameter_1, '') }}</td>
 
                      <?php  $feedback = $v->comments()->where('comment_type', 'feedback') ->orderBy('created_at', 'desc') ->get(); ?>
                     <td>  
                          @foreach($feedback as $f)
                             {{ $f->comment }}  {{ $f->created_at }} <br/>
                          @endforeach
                     
                     </td>
                     
              </tr>
         @endforeach
    </tbody>
    </table>
</div>    
    </section>
    </div>
    </div>

      <div class="row">
        <div class="col-sm-12">

         <div>
                  <ul class="pagination pagination-sm pull-right">
                     {!! $recommend->render() !!} 
                  </ul>
         </div>

       </div>
    </div>
			<!-- project team & activity end -->

		</section>
	</section>
<!--main content end-->    
@endsection

