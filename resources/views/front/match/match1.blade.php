@extends('front/front')

{{-- Content --}}
@section('content')

      <!--main content start-->
  			<section id="main-content">
  				<section class="wrapper">  
  				    @include('errors.list')
  					<!--overview start-->

<!-- I空行-->

                  <div class="row">
                                        <div class="col-md-12">
                                        <br><br>                 
                                                                   

                                                      </div>


              </div>




<!-- Inline搜索 form-->
                     

               



<!-- 筛选 form-->

<form class=" " method="post" action="{{ url("/front/match/match1/{$demand->id}") }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        
                   <h5>行业设置</h5>        


                      </div>





              <div class="col-md-2" >
              <?php  $industrys1= App\Models\Industry::where('parent_id', 0)->get();  $parent_id = $industrys1->count()?$industrys1->first()->id:-1;            ?>
                                           <select class="form-control m-bot15" name="quantify_occupation_1"  id="quantify_occupation_1" >
                                                  @foreach ($industrys1->all() as $v)
                                                  <option data-id="{{$v->id}}" value="{{$v->number}}"  @if(old('quantify_occupation_1', $demand  ? $demand-> quantify_occupation_1 : '')== $v->number ) selected <?php $parent_id=$v->id; ?> @endif >{{$v->name}}</option>
                                                   @endforeach    
                                              </select>
                                          
                                           
                                          </div>

           <div class="col-md-2" >
               <?php  $industrys2= App\Models\Industry::where('parent_id', $parent_id)->get();   $parent_id = $industrys2->count()?$industrys2->first()->id:-1;?>
                                              <select class="form-control m-bot15" name="quantify_occupation_2" id="quantify_occupation_2" >
                                                  @foreach ($industrys2->all() as $v)
                                                  <option  data-id="{{$v->id}}"  value="{{$v->number}}"  @if(old('quantify_occupation_2', $demand  ? $demand-> quantify_occupation_2 : '')== $v->number ) selected <?php $parent_id=$v->id; ?> @endif >{{$v->name}}</option>
                                                  @endforeach                                                      
                                              </select>
                                           
                                          </div>

           <div class="col-md-2" >
            <?php  $industrys3= App\Models\Industry::where('parent_id', $parent_id)->get();   $parent_id = $industrys3->count()?$industrys3->first()->id:-1;?>                           
                                              <select class="form-control m-bot15" name="quantify_occupation_3" id="quantify_occupation_3" >
                                              @foreach ($industrys3->all() as $v)
                                                   <option data-id="{{$v->id}}"  value="{{$v->number}}"  @if(old('quantify_occupation_3', $demand  ? $demand-> quantify_occupation_3 : '')== $v->number ) selected <?php $parent_id=$v->id; ?> @endif >{{$v->name}}</option>
                                                  @endforeach        
                                              </select>

                                           
                                          </div>
             <div class="col-md-2" >
                  <?php  $industrys4= App\Models\Industry::where('parent_id', $parent_id)->get(); ?>                                                
                                              <select class="form-control m-bot15"  name="quantify_occupation_4"  id="quantify_occupation_4" >                                                  
                                                @foreach ($industrys4->all() as $v)
                                                   <option data-id="{{$v->id}}"  value="{{$v->number}}"  @if(old('quantify_occupation_4', $demand  ? $demand-> quantify_occupation_4 : '')== $v->number ) selected @endif >{{$v->name}}</option>
                                                  @endforeach    
                                              </select>
                                           
                                          </div>




                                          </div>







 <div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        
                   <h5>Cpev值设置</h5>        


                      </div>




                    <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Cpev1</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Cpev1" name="quantify_occupation_value_1"  value="{{ old('quantify_occupation_value_1', $demand  ? $demand-> quantify_occupation_value_1 : '') }}">
                                      </div>

                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Cpev2</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Cpev2" name="quantify_occupation_value_2"  value="{{ old('quantify_occupation_value_2', $demand  ? $demand-> quantify_occupation_value_2 : '') }}">
                                      </div>

                                       </div>

                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Cpev3</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Cpev3" name="quantify_occupation_value_3"  value="{{ old('quantify_occupation_value_3', $demand  ? $demand-> quantify_occupation_value_3 : '') }}">
                                      </div>

                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Cpev4</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Cpev4" name="quantify_occupation_value_4"  value="{{ old('quantify_occupation_value_4', $demand  ? $demand-> quantify_occupation_value_4 : '') }}">
                                      </div>

                                       </div>



          


                                          </div>


   <div class="row">

                    <div class="col-md-2">
                        
                                  
                        
                   <h5>量化关联Cpt</h5>        


                      </div>


           <div class="col-md-2" >
               <?php  $industrys1= App\Models\Industry::where('parent_id', 35)->get();  $parent = $industrys1->count()?$industrys1->first()->id:-1;  ?>                   
                                              <select class="form-control m-bot15" name="quantify_duty"  id="quantify_duty">
                                                   @foreach($industrys1 as $v)                                                  
                                                  <option data-id="{{ $v->id }}" value="{{ $v-> number }}" @if(old('quantify_duty', $demand  ? $demand-> quantify_duty : '')== $v->number ) selected <?php $parent=$v->id; ?> @endif >{{ $v->name }}</option>
                                                  @endforeach
                                              </select>
                                           
                                          </div>

           <div class="col-md-2" >
               <?php  
                      $industrys2= App\Models\Industry::where('parent_id', $parent)->get();
               ?>                            
                                              <select class="form-control m-bot15"  name="quantify_position" id="quantify_position">
                                                  @foreach($industrys2 as $v)                                                  
                                                  <option data-id="{{ $v->id }}" value="{{ $v->number }}" @if(old('quantify_position', $demand  ? $demand-> quantify_position : '')== $v->number ) selected @endif >{{ $v->name }}</option>
                                                  @endforeach
                                              </select>
                                           
                                          </div>
                                      



                           <div class="col-md-2">
                        
                                  
                                      <button type="submit" class="btn btn-warning">关联</button>


                      </div>




                  </div>








 <div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        
                   <h5>关联Cp设置</h5>        


                      </div>




              <div class="col-md-2" >
                           <?php  $industrys1= App\Models\Industry::where('parent_id', 0)->get();  $parent_id = $industrys1->count()?$industrys1->first()->id:-1;            ?>
                                           <select class="form-control m-bot15" name="additional_quantify_occupation_1"  id="additional_quantify_occupation_1" >
                                                  @foreach ($industrys1->all() as $v)
                                                  <option data-id="{{$v->id}}" value="{{$v->number}}"  @if(old('additional_quantify_occupation_1', $demand  ? $demand-> additional_quantify_occupation_1 : '')== $v->number ) selected <?php $parent_id=$v->id; ?> @endif >{{$v->name}}</option>
                                                   @endforeach    
                                              </select>                                     
                                           
                                          </div>

           <div class="col-md-2" >
                        <?php  $industrys2= App\Models\Industry::where('parent_id', $parent_id)->get();   $parent_id = $industrys2->count()?$industrys2->first()->id:-1;?>
                                              <select class="form-control m-bot15" name="additional_quantify_occupation_2" id="additional_quantify_occupation_2" >
                                                  @foreach ($industrys2->all() as $v)
                                                  <option  data-id="{{$v->id}}"  value="{{$v->number}}"  @if(old('additional_quantify_occupation_2', $demand  ? $demand-> additional_quantify_occupation_2 : '')== $v->number ) selected <?php $parent_id=$v->id; ?> @endif >{{$v->name}}</option>
                                                  @endforeach                                                      
                                              </select>
                                           
                                          </div>

           <div class="col-md-2" >
                        <?php  $industrys3= App\Models\Industry::where('parent_id', $parent_id)->get();   $parent_id = $industrys3->count()?$industrys3->first()->id:-1;?>                           
                                              <select class="form-control m-bot15" name="additional_quantify_occupation_3" id="additional_quantify_occupation_3" >
                                              @foreach ($industrys3->all() as $v)
                                                   <option data-id="{{$v->id}}"  value="{{$v->number}}"  @if(old('additional_quantify_occupation_3', $demand  ? $demand-> additional_quantify_occupation_3 : '')== $v->number ) selected <?php $parent_id=$v->id; ?> @endif >{{$v->name}}</option>
                                                  @endforeach        
                                              </select>

                                          </div>
             <div class="col-md-2" >
                   <?php  $industrys4= App\Models\Industry::where('parent_id', $parent_id)->get(); ?>                                                
                                              <select class="form-control m-bot15"  name="additional_quantify_occupation_4"  id="additional_quantify_occupation_4" >                                                  
                                                @foreach ($industrys4->all() as $v)
                                                   <option data-id="{{$v->id}}"  value="{{$v->number}}"  @if(old('additional_quantify_occupation_4', $demand  ? $demand-> additional_quantify_occupation_4 : '')== $v->number ) selected @endif >{{$v->name}}</option>
                                                  @endforeach    
                                              </select>                                      

                                           
                                          </div>




                                          </div>







 <div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        
                   <h5>关联Cpev值设置</h5>        


                      </div>




                    <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Cpev1</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Cpev1" name="additional_quantify_occupation_value_1"  value="{{ old('additional_quantify_occupation_value_1', $demand  ? $demand-> additional_quantify_occupation_value_1 : '') }}">
                                      </div>

                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Cpev2</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Cpev2" name="additional_quantify_occupation_value_2"  value="{{ old('additional_quantify_occupation_value_2', $demand  ? $demand-> additional_quantify_occupation_value_2 : '') }}">
                                      </div>

                                       </div>

                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Cpev3</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Cpev3" name="additional_quantify_occupation_value_3"  value="{{ old('additional_quantify_occupation_value_3', $demand  ? $demand-> additional_quantify_occupation_value_3 : '') }}">
                                      </div>

                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Cpev4</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Cpev4" name="additional_quantify_occupation_value_4"  value="{{ old('additional_quantify_occupation_value_4', $demand  ? $demand-> additional_quantify_occupation_value_4 : '') }}">
                                      </div>

                                       </div>



          


                                          </div>





<div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        
                   <h5>匹配深度Cpo设置设置</h5>        


                      </div>




                                  <div class="col-md-2">
                        
                                      
                                       <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" {{ old('background_parameter_1', $demand  ? $demand-> background_parameter_1 : '')==1?'checked':'' }} name="background_parameter_1" >1级行业
                                              </label>
                                          </div>

                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                      <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" {{ old('background_parameter_2', $demand  ? $demand-> background_parameter_2 : '')==1?'checked':'' }} name="background_parameter_2">2级行业
                                              </label>
                                          </div>

                                       </div>

                                         <div class="col-md-2">
                        
                                      
                                      <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" {{ old('background_parameter_3', $demand  ? $demand-> background_parameter_3 : '')==1?'checked':'' }} name="background_parameter_3">3级行业
                                              </label>
                                          </div>

                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                     <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="1" {{ old('background_parameter_4', $demand  ? $demand-> background_parameter_4 : '')==1?'checked':'' }} name="background_parameter_4">4级行业
                                              </label>
                                          </div>

                                       </div>



          


                                          </div>




                                          <div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        
                   <h5>匹配深度Mpdep值设置</h5>        


                      </div>




                    <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Mpdep1</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Mpdep1" name="quantify_occupation_depth_1"  value="{{ old('quantify_occupation_depth_1', $demand  ? $demand-> quantify_occupation_depth_1 : '') }}">
                                      </div>

                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Mpdep2</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Mpdep2" name="quantify_occupation_depth_2"  value="{{ old('quantify_occupation_depth_2', $demand  ? $demand-> quantify_occupation_depth_2 : '') }}">
                                      </div>

                                       </div>

                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Mpdep3</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Mpdep3" name="quantify_occupation_depth_3"  value="{{ old('quantify_occupation_depth_3', $demand  ? $demand-> quantify_occupation_depth_3 : '') }}">
                                      </div>

                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Mpdep4</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Mpdep4" name="quantify_occupation_depth_4"  value="{{ old('quantify_occupation_depth_4', $demand  ? $demand-> quantify_occupation_depth_4 : '') }}">
                                      </div>

                                       </div>



          


                                          </div>







<div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        
                   <h5>关联深度Cpo设置</h5>        


                      </div>




                                  <div class="col-md-2">
                        
                                      
                                       <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" >1级行业
                                              </label>
                                          </div>

                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                      <div class="checkbox">
                                              <label>
                                                  <input type="checkbox">2级行业
                                              </label>
                                          </div>

                                       </div>

                                         <div class="col-md-2">
                        
                                      
                                      <div class="checkbox">
                                              <label>
                                                  <input type="checkbox">3级行业
                                              </label>
                                          </div>

                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                     <div class="checkbox">
                                              <label>
                                                  <input type="checkbox">4级行业
                                              </label>
                                          </div>

                                       </div>



          


                                          </div>




                                          <div class="row">
    


                    <div class="col-md-2">
                        
                                  
                        
                   <h5>关联深度Mpdep值设置</h5>        


                      </div>




                    <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Mpdep1</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Mpdep1" name="additional_quantify_occupation_depth_1"  value="{{ old('additional_quantify_occupation_depth_1', $demand  ? $demand-> additional_quantify_occupation_depth_1 : '') }}">
                                      </div>

                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Mpdep2</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Mpdep2" name="additional_quantify_occupation_depth_2"  value="{{ old('additional_quantify_occupation_depth_2', $demand  ? $demand-> additional_quantify_occupation_depth_2 : '') }}">
                                      </div>

                                       </div>

                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Mpdep3</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Mpdep3" name="additional_quantify_occupation_depth_3"  value="{{ old('additional_quantify_occupation_depth_3', $demand  ? $demand-> additional_quantify_occupation_depth_3 : '') }}">
                                      </div>

                                       </div>


                                         <div class="col-md-2">
                        
                                      
                                      <div class="form-group">
                                          <label class="sr-only" for="exampleInputtext2">Mpdep4</label>
                                          <input type="number" class="form-control" id="exampleInputtext2" placeholder="Mpdep4" name="additional_quantify_occupation_depth_4"  value="{{ old('additional_quantify_occupation_depth_4', $demand  ? $demand-> additional_quantify_occupation_depth_4 : '') }}">
                                      </div>

                                       </div>



          


                                          </div>





<div class="row">

 <div class="col-md-2" col-sm-offset-3>
                        

                               <a class="btn btn-primary"  role="button">默认参数</a><br><br>

                      </div>
            

                           <div class="col-md-2" col-sm-offset-3>
                        

                               <button class="btn btn-warning"  role="button" type="submit">保存设置</button><br><br>

                      </div>

                      <div class="col-md-2" col-sm-offset-3>
                        

                               <a class="btn btn-warning" href="{{ url("/front/match/match2/{$demand->id}") }}" role="button">匹配策略</a><br><br>

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

@section('scripts')
<script type="text/javascript">
var  changeFunction = function(next){
	  var selected = $(this).find('option:selected');
	  var id = selected.data('id');
	  if(!id) {return;}
	  $.ajax({
        type: 'get',
        url: "{{ url('/front/industry/queryChildren/') }}/" + id,
        dataType: "json",
        success: function (data) {
     	    var lists = eval(data);
     	    var html = '';
         	 $(lists).each(function() {
         	   html += '<option data-id="'+this.id+'"  value="'+this.number+'">'+this.name+'</option>';           	 
         	});
//           	if($(lists).length() == 0) {
//           		 html += '<option data-id="-1"  value="0"></option>';           	 
//           	}
         	$('#'+next).html(html);
         	$('#'+next).change();
        },
        error: function(){
     	    alert('查询行业参数失败!');
        }
    });
 }

// $('#quantify_occupation_1').change(changeFunction('quantify_occupation_2'));
                                                
 $('#quantify_occupation_1').change(function(){
	  var selected = $(this).find('option:selected');
	  var id = selected.data('id');
	  if(!id) {return;}
	  $.ajax({
        type: 'get',
        url: "{{ url('/front/industry/queryChildren/') }}/" + id,
        dataType: "json",
        success: function (data) {
     	    var lists = eval(data);
     	    var html = '';
         	 $(lists).each(function() {
         	   html += '<option data-id="'+this.id+'"  value="'+this.number+'">'+this.name+'</option>';           	 
         	});
             if($(lists).length == 0) {
          		 html += '<option data-id="-1"  value="0"></option>';           	 
          	}
         	$('#quantify_occupation_2').html(html);
         	$('#quantify_occupation_2').change();
        },
        error: function(){
     	    alert('查询行业参数失败!');
        }
    });
 });

 $('#quantify_occupation_2').change(function(){
	  var selected = $(this).find('option:selected');
	  var id = selected.data('id');
	  if(!id) {return;}
	  $.ajax({
       type: 'get',
       url: "{{ url('/front/industry/queryChildren/') }}/" + id,
       dataType: "json",
       success: function (data) {
    	    var lists = eval(data);
    	    var html = '';
        	 $(lists).each(function() {
        	   html += '<option data-id="'+this.id+'"  value="'+this.number+'">'+this.name+'</option>';           	 
        	});
        	 if($(lists).length == 0) {
          		 html += '<option data-id="-1"  value="0"></option>';           	 
          	}
        	$('#quantify_occupation_3').html(html);
        	$('#quantify_occupation_3').change();
       },
       error: function(){
    	    alert('查询行业参数失败!');
       }
   });
});

 $('#quantify_occupation_3').change(function(){
	  var selected = $(this).find('option:selected');
	  var id = selected.data('id');
	  if(!id) {return;}
	  $.ajax({
      type: 'get',
      url: "{{ url('/front/industry/queryChildren/') }}/" + id,
      dataType: "json",
      success: function (data) {
   	    var lists = eval(data);
   	    var html = '';
       	 $(lists).each(function() {
       	   html += '<option data-id="'+this.id+'"  value="'+this.number+'">'+this.name+'</option>';           	 
       	});
         if($(lists).length == 0) {
      		 html += '<option data-id="-1"  value="0"></option>';           	 
      	}        	
       	$('#quantify_occupation_4').html(html);
       	$('#quantify_occupation_4').change();
      },
      error: function(){
   	    alert('查询行业参数失败!');
      }
  });
});

 $('#quantify_duty').change(function(){
	  var selected = $(this).find('option:selected');
	  var id = selected.data('id');
	  if(!id) {return;}
	  $.ajax({
     type: 'get',
     url: "{{ url('/front/industry/queryDuty/') }}/" + id,
     dataType: "json",
     success: function (data) {
  	    var lists = eval(data);
  	    var html = '';
      	 $(lists).each(function() {
      	   html += '<option  data-id="'+this.id+'"  value="'+this.number+'">'+this.name+'</option>';           	 
      	});
      	$('#quantify_position').html(html);
      	$('#quantify_position').change();
     },
     error: function(){
  	    alert('查询职能岗位参数失败!');
     }
 });
});

 $('#additional_quantify_occupation_1').change(function(){
	  var selected = $(this).find('option:selected');
	  var id = selected.data('id');
	  if(!id) {return;}
	  $.ajax({
       type: 'get',
       url: "{{ url('/front/industry/queryChildren/') }}/" + id,
       dataType: "json",
       success: function (data) {
    	    var lists = eval(data);
    	    var html = '';
        	 $(lists).each(function() {
        	   html += '<option data-id="'+this.id+'"  value="'+this.number+'">'+this.name+'</option>';           	 
        	});
             if($(lists).length == 0) {
          		 html += '<option data-id="-1"  value="0"></option>';           	 
          	}
        	$('#additional_quantify_occupation_2').html(html);
        	$('#additional_quantify_occupation_2').change();
       },
       error: function(){
    	    alert('查询行业参数失败!');
       }
   });
});

$('#additional_quantify_occupation_2').change(function(){
	  var selected = $(this).find('option:selected');
	  var id = selected.data('id');
	  if(!id) {return;}
	  $.ajax({
      type: 'get',
      url: "{{ url('/front/industry/queryChildren/') }}/" + id,
      dataType: "json",
      success: function (data) {
   	    var lists = eval(data);
   	    var html = '';
       	 $(lists).each(function() {
       	   html += '<option data-id="'+this.id+'"  value="'+this.number+'">'+this.name+'</option>';           	 
       	});
         if($(lists).length == 0) {
      		 html += '<option data-id="-1"  value="0"></option>';           	 
      	}
       	$('#additional_quantify_occupation_3').html(html);
       	$('#additional_quantify_occupation_3').change();
      },
      error: function(){
   	    alert('查询行业参数失败!');
      }
  });
});

$('#additional_quantify_occupation_3').change(function(){
	  var selected = $(this).find('option:selected');
	  var id = selected.data('id');
	  if(!id) {return;}
	  $.ajax({
     type: 'get',
     url: "{{ url('/front/industry/queryChildren/') }}/" + id,
     dataType: "json",
     success: function (data) {
  	    var lists = eval(data);
  	    var html = '';
      	 $(lists).each(function() {
      	   html += '<option data-id="'+this.id+'"  value="'+this.number+'">'+this.name+'</option>';           	 
      	});
         if($(lists).length == 0) {
      		 html += '<option data-id="-1"  value="0"></option>';           	 
      	}
      	$('#additional_quantify_occupation_4').html(html);
      	$('#additional_quantify_occupation_4').change();
     },
     error: function(){
  	    alert('查询行业参数失败!');
     }
 });
});
</script>
@endsection	    