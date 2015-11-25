@extends('front/front')

{{-- Content --}}
@section('content')

  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
				      @include('errors.list')
              <!-- page start-->
   
                 <div class="row"><!-- row start-->
                  <div class="col-lg-8"><!-- col start-->
                      <section class="panel">
                          <header class="panel-heading">
                             人才{{ $talent ? '编辑' : '新增' }}
                          </header>
                        <div class="panel-body">
                              <form class="form-horizontal " method="post" action="{{ url('/front/talent/' . ($talent ? 'edit/'.$talent->id : 'add')) }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                  <div class="form-group">
                                      <label class="col-sm-2 control-label"><span style="color: red">*</span>姓名</label>
                                      <div class="col-sm-8">
                                          <input type="text" class="form-control"  name="name" value="{{ old('name', $talent  ? $talent-> name : '') }}">
                                      </div>
                                  </div>
                        
                                 <div class="form-group">
                                      <label class="col-sm-2 control-label"><span style="color: red">*</span>手机号码</label>
                                      <div class="col-sm-8">
                                          <input type="tel" class="form-control" name="mobile"  value="{{ old('mobile', $talent  ? $talent-> mobile : '') }}">
                                      </div>
                                  </div>

                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">E-mail</label>
                                      <div class="col-sm-8">
                                          <input type="email" class="form-control" name="occupation_parameter_4"  value="{{ old('occupation_parameter_4', $talent  ? $talent-> occupation_parameter_4 : '') }}"> 
                                      </div>
                                  </div>

                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">最近所在公司</label>
                                      <div class="col-sm-8">
                                          <input type="text" class="form-control" name="last_corporation"  value="{{ old('last_corporation', $talent  ? $talent-> last_corporation : '') }}">
                                      </div>
                                  </div>

                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">最近担任职务</label>
                                      <div class="col-sm-8">
                                          <input type="text" class="form-control" name="job_level_1"  value="{{ old('job_level_1', $talent  ? $talent-> job_level_1 : '') }}">
                                      </div>
                                  </div>

                             

                                      <div class="form-group">
                                      <label class="col-sm-2 control-label">所在地点</label>
                                        <div class="col-md-4" col-sm-offset-3>
                                       
                                            <input type="text" class="form-control" name="location"  value="{{ old('location', $talent  ? $talent-> location : '') }}">
                                           
                                          </div>
                                  </div>

                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">工作经验（年）</label>
                                      <div class="col-sm-8">
                                          <input type="number" class="form-control" name="work_year"  value="{{ old('work_year', $talent  ? $talent-> work_year : '') }}">
                                      </div>
                                  </div>

                           



                                <div class="form-group">
                                      <label class="col-sm-2 control-label">税前年薪备注（万元RMB)</label>
                                      <div class="col-sm-8">
                                          <input type="number" class="form-control" name="current_pretax_annual_salary"  value="{{ old('current_pretax_annual_salary', $talent  ? $talent-> current_pretax_annual_salary : '') }}">
                                      </div>
                                  </div>

                                          <div class="form-group">
                                      <label class="col-sm-2 control-label">学历</label>
                                      <?php  $constant = App\Models\Constant::where('en', 'highest_education')->orderBy('k')->get();?>
                                        <div class="col-md-4" col-sm-offset-3>
                                       
                                              <select class="form-control m-bot15">
                                                  <option value="-1"></option> @foreach($constant as $c)
                                        			<option value="{{ $c->k }}" @if($talent && $talent->highest_education
                                        				== $c->k ) selected @endif >{{ $c->v }}</option> @endforeach

                                              </select>
                                           
                                          </div>
                                       </div>


                                          <div class="form-group">
                                      <label class="col-sm-2 control-label">性别</label>
                                        <div class="col-md-4" col-sm-offset-3>
                                       <?php  $constant = App\Models\Constant::where('en', 'sex')->orderBy('k')->get();?>
                                              <select class="form-control m-bot15">
                                                 <option value="-1"></option> @foreach($constant as $c)
                                    			<option value="{{ $c->k }}" @if($talent && $talent->sex ==
                                    				$c->k ) selected @endif >{{ $c->v }}</option> @endforeach
                                                 
                                              </select>
                                           
                                          </div>
                                       </div>


                                         <div class="form-group">
                                      <label class="col-sm-2 control-label">年龄</label>
                                      <div class="col-sm-8">
                                          <input type="number" class="form-control" name="age"  value="{{ old('age', $talent  ? $talent-> age : '') }}">
                                      </div>
                                  </div>

                             


                                         <div class="form-group">
                                                  <label class="control-label col-sm-2">简历详情（直接粘贴，编辑文本）</label>
                                                  <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor"  rows="10" name="resume">{{ old('resume', $talent  ? $talent-> resume : '') }}</textarea>
                                                  </div>
                                              </div>


                                              <div class="form-group">
                                                  <label class="control-label col-sm-2">人才备注信息</label>
                                                  <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor"   rows="5"  name="expect_label_2"   >{{ old('expect_label_2', $talent  ? $talent-> expect_label_2 : '') }}</textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                          <div class="col-lg-offset-4 col-lg-8">
                                              <button class="btn btn-primary" type="submit">保存</button>
                                             <a class="btn btn-warning" href="{{ url('/front/talent/' )}}" role="button">返回</a><br>

                                          </div>
                                          </div>


							<input type="hidden" name="referer"
								value="{{ Request::header('referer') }}" />


                             </form>
                            </div>
                                              
                      </section>
         </div>
    </div>

              <!-- page end-->
          </section>
    </section>
      <!--main content end-->
@endsection