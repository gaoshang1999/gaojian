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

  




<!-- Inline搜索 form-->
              




<!-- advanced表格 table-->



			    <div class="row">
        <div class="col-sm-12">
          <section class="panel">
              <header class="panel-heading">
                  量化匹配人才详细
              </header>

              <table class="table table-striped table-advance table-hover">
               <tbody>

 <tr>
                    <th><i class="icon_profile"></i> 人才编号</th>
                     <th><i class="icon_profile"></i> 姓名</th>
                     <th><i class="icon_profile"></i> 备注来源</th>
               
                     <th><i class="icon_pin_alt"></i> 所在公司</th>
                     <th><i class="icon_pin_alt"></i> 职级</th>

                  


                     <th><i class="icon_cogs"></i> 操作</th>
                 </tr>           
 @foreach ($talent->all() as $v)
<?php  $recommend = $v->recommends()->where('recommend_parameter_1', '<>', 2)->orderBy('updated_at', 'desc')->first(); ?>
             
                 <tr>
                    <td> {{ $v->id }}</td>
                     <td>{{ $v->name }}</td>
                     <td>{{  $recommend ? $recommend ->demand ->post_name : ""  }}</td>
                     <td>{{ $v->last_corporation }}</td>
                     <td>{{ $v->job_level_1 }}</td>
                   
                     <td>
                      <div class="btn-group">
                             <a class="btn btn-warning" href="{{ url("/front/mytalent/view/{$v->id}") }}" role="button">查看详细</a>
                            <a class="btn btn-warning" href="{{ url("/front/recommend/recommend?talent_id={$v->id}") }}" role="button">快速推荐</a>
                      </div>
                  </td>
              </tr>
@endforeach        

                 

    </tbody>
    </table>
    </section>
    </div>
    </div>

    <!-- advanced table-->
  <div class="row">
        <div class="col-sm-12">

         <div>
                  <ul class="pagination pagination-sm pull-right">
                     
                  </ul>
         </div>

       </div>
    </div>

             <div class="row">

             <div class="col-md-2" col-sm-offset-3>
                        


                      </div>
            

                           <div class="col-md-2" col-sm-offset-3>
                        

                               <a class="btn btn-primary" role="button">量化推荐</a><br><br>

                      </div>

                      <div class="col-md-2" col-sm-offset-3>
                        

                               <a class="btn btn-warning" role="button"  href="{{ url("/front/match/match1/{$demand->id}") }}">返回设置页</a><br><br>

                      </div>

             </div>




            


			<!-- project team & activity end -->

		</section>
	</section>
	<!--main content end-->

@endsection