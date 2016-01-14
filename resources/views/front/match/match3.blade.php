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
			
			

<!-- I空行-->

                  <div class="row">
                                        <div class="col-md-12">
                                        <br><br>                 
                                                                   

                                                      </div>


              </div>




<!-- Inline搜索 form-->
                     

               



<!-- 筛选 form-->


 <div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        

                     


                      </div>





                    <div class="col-md-8">
                       
                        
                   <h4>人才公司分布</h4>   

                      <div class="radios">

@foreach ($talent as $k=>$v)

                                               <h5>{{ $k }}   匹配人才：{{ $v }}</h5>   
@endforeach
                                              
<!--                                                <h5>百度   匹配人才：133</h5>    -->


                                          </div>     


                      </div>




                           

           

                                          </div>




 <div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        

                     


                      </div>





                    <div class="col-md-8">
                        
                                  
                        
                   <h4>人才学历分布</h4>   

                      <div class="radios">
<?php $constant = App\Models\Constant::getInstance(); ?>                                                 
@foreach ($talent2 as $k=>$v)

                                               <h5> {{ array_get($constant, 'highest_education.'.$k, '') }}   学历人才：{{ $v }}</h5>   
@endforeach



                                          </div>     


                      </div>




                           

           

                                          </div>






<div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        
                   <h5>量化推荐设置</h5>        


                      </div>




                                  <div class="col-md-2">
                        
                                      
                                      <h5>推荐周期Tpr（天）</h5>   


                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                        <h5>每批最大数量Tban</h5>   


                                       </div>

                                         <div class="col-md-2">
                        
                                      
                                        <h5>停止推荐数量Tcsp</h5>   


                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                        <h5>推荐附件参数Tcatt</h5>   


                                       </div>



          


                                          </div>





                           

            <div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        
                   <h5>量化推荐设置</h5>        


                      </div>




                    <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputPassword2">Cpev1</label>
                                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Tbr">
                                      </div>

                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputPassword2">Cpev2</label>
                                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Tban">
                                      </div>

                                       </div>

                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputPassword2">Cpev3</label>
                                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Tcsp">
                                      </div>

                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputPassword2">Cpev4</label>
                                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Tcatt">
                                      </div>

                                       </div>



          


                                          </div>








           











<div class="row">

 <div class="col-md-2">
                        
                </div>

 <div class="col-md-2" col-sm-offset-3>
                        

                               <a class="btn btn-primary"  role="button">默认参数</a><br><br>

                      </div>
            

                           <div class="col-md-2" col-sm-offset-3>
                        

                               <a class="btn btn-warning"  role="button">保存设置</a><br><br>

                      </div>

                      <div class="col-md-2" col-sm-offset-3>
                        

                               <a class="btn btn-warning" href="{{ url("/front/match/match4/{$demand->id}") }}" role="button">查看人才详情</a><br><br>

                      </div>

                     

             </div>









			<!-- project team & activity end -->

		</section>
	</section>
	<!--main content end-->
</section>
<!-- container section start -->

@endsection