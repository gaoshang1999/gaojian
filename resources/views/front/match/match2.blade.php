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

<form class=" " method="post" action="{{ url("/front/match/match2/{$demand->id}") }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" name="industry_1" value="{{ Request::input('industry_1') }}">                                
 <div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        

                     


                      </div>





                    <div class="col-md-8">
                        
                                  
                        
                   <h4>匹配策略选择</h4>   

                      <div class="radios">
                                              <label class="label_radio" for="radio-01">
                                                  <input  id="radio-01" value="1" type="radio"  name="basic_match_strategy" @if(old('basic_match_strategy', $demand  ? $demand-> basic_match_strategy : '')== 1 ) checked @endif /> 顶级人才匹配  
                                              </label>

                                               <h5>说明：匹配公司，行业，教育，职业生涯背景处于行业顶级的人才，适用对人才极为挑剔的公司岗位。</h5>   

                                              <label class="label_radio" for="radio-02">
                                                  <input  id="radio-02" value="2" type="radio" name="basic_match_strategy" @if(old('basic_match_strategy', $demand  ? $demand-> basic_match_strategy : '')== 2 ) checked @endif /> 优秀人才匹配 
                                              </label>
                                               <h5>说明：匹配公司，行业，教育，职业生涯背景都优秀的人才，适用公司预算较为宽裕，发展扩张期间骨干人才的招聘。</h5>   



                                              <label class="label_radio" for="radio-03">
                                                  <input  id="radio-03" value="3" type="radio" name="basic_match_strategy" @if(old('basic_match_strategy', $demand  ? $demand-> basic_match_strategy : '')== 3 ) checked @endif /> 优良人才匹配 
                                              </label>

                                                                 <h5>说明：匹配公司，行业，教育，职业生涯综合评价优良的人才，适用于各类公司对于高级人才的招聘。</h5>   


                                              <label class="label_radio" for="radio-04">
                                                  <input  id="radio-03" value="4" type="radio" name="basic_match_strategy" @if(old('basic_match_strategy', $demand  ? $demand-> basic_match_strategy : '')== 4 ) checked @endif /> 合适人才匹配
                                                  
                                              </label>

                                                                 <h5>说明：人才水平较好的匹配公司目前所在行业和实力，人才的稳定性强。</h5>   


                                              <label class="label_radio" for="radio-05">
                                                  <input  id="radio-03" value="5" type="radio" name="basic_match_strategy" @if(old('basic_match_strategy', $demand  ? $demand-> basic_match_strategy : '')== 5 ) checked @endif /> 实用人才匹配

                                              </label>

                                                                 <h5> 说明：人才的产品经验，和技能完全满足公司要求的情况下，背景较为普通，有很好的培养潜力。</h5>   


                                              <label class="label_radio" for="radio-06">
                                                  <input  id="radio-03" value="6" type="radio" name="basic_match_strategy" @if(old('basic_match_strategy', $demand  ? $demand-> basic_match_strategy : '')== 6 ) checked @endif /> 经济人才匹配
                                             

                                              </label>

                                                                 <h5>说明：人才的产品经验，和技能合格的情况下，背景较为普通，有很好的性价比，适用于预算有限的公司。</h5>   

                                          </div>     


                      </div>




                           

           

                                          </div>






                                          <div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        

                     


                      </div>





                    <div class="col-md-4">
                        
                                  
                        
                   <h4>教育背景匹配策略</h4>   

                      <div class="radios">
                                              <label class="label_radio" for="radio-01">
                                                  <input  id="radio-01" value="1" type="radio" name="additional_match_strategy_1" @if(old('additional_match_strategy_1', $demand  ? $demand-> additional_match_strategy_1 : '')== 1 ) checked @endif /> 教育背景要求优秀
                                              </label>


                                              <label class="label_radio" for="radio-02">
                                                  <input  id="radio-02" value="2" type="radio" name="additional_match_strategy_1" @if(old('additional_match_strategy_1', $demand  ? $demand-> additional_match_strategy_1 : '')== 2 ) checked @endif /> 教育背景要求优良
                                              </label>



                                              <label class="label_radio" for="radio-03">
                                                  <input  id="radio-03" value="3" type="radio" name="additional_match_strategy_1"  @if(old('additional_match_strategy_1', $demand  ? $demand-> additional_match_strategy_1 : '')== 3 ) checked @endif /> 优秀人才，教育背景可放宽
                                              </label>



                                              <label class="label_radio" for="radio-04">
                                                  <input  id="radio-03" value="4" type="radio" name="additional_match_strategy_1" @if(old('additional_match_strategy_1', $demand  ? $demand-> additional_match_strategy_1 : '')== 4 ) checked @endif /> 无特殊要求
                                                  
                                              </label>


                                          </div>     


                      </div>




                           

           

                                          </div>






                                          </div>






                                          <div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        

                     


                      </div>





                    <div class="col-md-4">
                        
                                  
                        
                   <h4>职业素质匹配策略</h4>   

                      <div class="radios">
                                              <label class="label_radio" for="radio-01">
                                                  <input  id="radio-01" value="1" type="radio" name="additional_match_strategy_2" @if(old('additional_match_strategy_2', $demand  ? $demand-> additional_match_strategy_2 : '')== 1 ) checked @endif/> 职业素质要求优秀
                                              </label>


                                              <label class="label_radio" for="radio-02">
                                                  <input  id="radio-02" value="2" type="radio" name="additional_match_strategy_2" @if(old('additional_match_strategy_2', $demand  ? $demand-> additional_match_strategy_2 : '')== 2 ) checked @endif/> 职业素质要求优良
                                              </label>



                                              <label class="label_radio" for="radio-03">
                                                  <input  id="radio-03" value="3" type="radio" name="additional_match_strategy_2" @if(old('additional_match_strategy_2', $demand  ? $demand-> additional_match_strategy_2 : '')== 3 ) checked @endif/> 优秀人才，职业素质可放宽
                                              </label>



                                              <label class="label_radio" for="radio-04">
                                                  <input  id="radio-03" value="4" type="radio" name="additional_match_strategy_2" @if(old('additional_match_strategy_2', $demand  ? $demand-> additional_match_strategy_2 : '')== 4 ) checked @endif/> 无特殊要求
                                                  
                                              </label>


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
                        

                                  <button class="btn btn-warning"  role="button" type="submit">保存设置</button><br><br>

                      </div>

                      <div class="col-md-2" col-sm-offset-3>
                        

                               <a class="btn btn-warning" href="{{ url("/front/match/match3/{$demand->id}") }}" role="button">查看匹配</a><br><br>

                      </div>

                     

             </div>


</form>






			<!-- project team & activity end -->

		</section>
	</section>
	<!--main content end-->
</section>
<!-- container section start -->


@endsection