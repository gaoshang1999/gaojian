@extends('front/front')

{{-- Content --}}
@section('content')

<!-- Inline搜索 form-->
                  <div class="row">

                  <div class="col-md-2">
                  </div>

                      <div class="col-md-2">
                        
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputEmail2">岗位名称关键字</label>
                                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="岗位名称关键字">
                                      </div>
                                      


                      </div>

                                     <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputPassword2">关键字</label>
                                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="关键字">
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
                                       
                                              <select class="form-control m-bot15">
                                                  <option>所有岗位</option>
                                                  <option>算法开发工程师</option>
                                                  <option>开发经理</option>
                                              </select>
                                           
                                          </div>

           <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15">
                                                  <option>所有职级</option>
                                                  <option>开发工程师</option>
                                                  <option>开发经理</option>
                                              </select>
                                           
                                          </div>
             <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15">
                                                  <option>所有状态</option>
                                                  <option>offer进度中</option>
                                                  <option>面试进度中</option>
                                                  <option>面试前评审进度中</option>
                                                  <option>无推荐流程候选人</option>
                                                  <option>其他</option>

                                              </select>
                                           
                                          </div>

              <div class="col-md-2" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15">
                                                  <option>全部发布时间</option>
                                                  <option>3天内</option>
                                                  <option>1周内</option>
                                                  <option>2周内</option>
                                                  <option>1月内</option>
                                              </select>
                                           
                                          </div>











                                          </div>





 <div class="row">
            

                           <div class="col-md-2" col-sm-offset-3>
                        

                               <a class="btn btn-warning" href="addzhiwei.html" role="button">新增岗位</a><br><br>

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
                     <th><i class="icon_cogs"></i> 操作（增加-编辑-删除）</th>
                 </tr>
                 <tr>
                     <td>算法开发工程师</td>
                     <td>2004-07-06</td>
                     <td>默认</td>
                     <td>3</td>
                     <td>10</td>
                     <td>默认</td>
                     <td>
                      <div class="btn-group">
                           <a class="btn btn-warning" href="#"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-warning" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-warning" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                  </td>
              </tr>
              
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
                                      <li><a href="#">«</a></li>
                                      <li><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li><a href="#">»</a></li>
                                  </ul>
                              </div>

                               </div>
    </div>

@endsection