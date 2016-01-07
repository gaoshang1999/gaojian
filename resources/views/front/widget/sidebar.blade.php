  			<!--sidebar start-->
  			<aside>
  				<div id="sidebar"  class="nav-collapse ">
  					<!-- sidebar menu start-->
  					<ul class="sidebar-menu">                
  					
  			@if(Auth::user()->isOperator())
  					<li class="active">
  							<a class="" href="{{ url('/front/match/') }}">
  								<i class="icon_house_alt"></i>
  								<span>量化匹配</span>
  							</a>
  						</li>

                <li>
                <a class="" href="index.html">
                  <i class="icon_genius"></i>
                  <span>行业评估</span>
                </a>
              </li>


           
               <li>
                <a class="" href="index.html">
                  <i class="icon_table"></i>
                  <span>公司评估</span>
                </a>
              </li>


            

              	<li>                     
					<a class="" href="index.html">
						<i class="icon_piechart"></i>
						<span>人才评估</span>
					</a>
  				</li>



  			<li>
                <a class="" href="index.html">
                  <i class="icon_desktop"></i>
                  <span>量化策略设置</span>
                </a>
              </li>
  					
  			@else		
					<li class="active">
						<a class="" href="{{ url('/front/demand/') }}">
							<i class="icon_house_alt"></i>
							<span>职位管理</span>
						</a>
					</li>

                    <li>
                    <a class="" href="{{ url('/front/recommend/') }}">
                      <i class="icon_genius"></i>
                      <span>招聘管理</span>
                    </a>
                  </li>


           
                   <li>
                    <a class="" href="{{ url('/front/mytalent/') }}">
                      <i class="icon_table"></i>
                      <span>我的人才</span>
                    </a>
                  </li>


                   <li>
                    <a class="" href="{{ url('/front/myrecommend/') }}"">
                      <i class="icon_desktop"></i>
                      <span>我的推荐</span>
                    </a>
                  </li>
        @endif
                   <li>
                    <a class="" href='{{ url("/front/profile/edit/".Auth::user()->id ) }} '>
                      <i class="icon_document_alt"></i>
                      <span>个人中心</span>
                    </a>
                  </li>




  					</ul>
  					<!-- sidebar menu end-->
  				</div>
  			</aside>
  			<!--sidebar end-->