<meta charset="utf-8" />
 
<!--         @foreach($table->columns as $v)             -->
<!--                 &lt;th>{{ $v->cn}}&lt;/th>  <br/> -->
             
<!--         @endforeach -->
 
         
<!--         @foreach($table->columns as $v)  -->
<!--             @if($v->type == "enum") -->
<!--                 &lt;td> @{{ array_get($constant, '{!! $v->en!!}.'.$v-> {!! $v->en!!}, '') }} &lt;/td> <br/>             -->
<!--             @else -->
<!--                 &lt;td> @{{$v->  {!! $v->en!!}  }} &lt;/td> <br/>      -->
<!--             @endif          -->
<!--         @endforeach -->
 
         @foreach($table->columns as $v)    @if($v->en != "id")          
        &lt;div class="form-group"> <br/> 
					&lt;label class="col-sm-3 control-label no-padding-right" <br/> 
						for="{{$v->en }}"> {{ $v->cn }} &lt;/label> <br/> 
             
			 @if($v->type == "date")
				 &lt;div class="input-group col-sm-4"> <br/> 
					&lt;input class="form-control date-picker col-xs-10 col-sm-5" id="{{$v->en }}" name="{{$v->en }}" type="text" data-date-format="yyyy-mm-dd" value="@{{ old('{!! $v->en!!}', $talent  ? $talent-> {!! $v->en!!} : '') }}"/> <br/> 
					&lt;span class="input-group-addon"> <br/> 
						&lt;i class="icon-calendar bigger-100">&lt;/i> <br/> 
					&lt;/span> <br/> 
				&lt;/div>		 <br/> 
						
				@elseif($v->type == "string")
					&lt;div class="col-sm-9"> <br/> 
						&lt;input type="text" id="{{$v->en }}" name="{{$v->en }}" placeholder="{{$v->cn}}" <br/> 
							class="col-xs-10 col-sm-5" value="@{{ old('{!! $v->en!!}', $talent  ? $talent-> {!! $v->en!!} : '') }}"/>  <br/> 
					&lt;/div> <br/> 
						
				@elseif($v->type == "text")
					&lt;div class="col-sm-9"> <br/> 
						&lt;textarea type="text/plain" id="{{$v->en }}"  name="{{$v->en }}" rows="5" class="col-xs-10 col-sm-5 autosize-transition">
						@{{ old('{!! $v->en!!}', $talent  ? $talent-> {!! $v->en!!} : '') }}&lt;/textarea> <br/> 
					&lt;/div> <br/> 	
					
			    @elseif($v->type == "integer")
					&lt;div class="col-sm-9"> <br/> 
						&lt;input type="number" id="{{$v->en }}" name="{{$v->en }}" placeholder="{{$v->cn}}" min="0" step="1"<br/> 
							class="col-xs-10 col-sm-5" value="@{{ old('{!! $v->en!!}', $talent  ? $talent-> {!! $v->en!!} : '') }}"/>  <br/> 
					&lt;/div> <br/> 				
		
		       @elseif($v->type == "float")
					&lt;div class="col-sm-9"> <br/> 
						&lt;input type="number" id="{{$v->en }}" name="{{$v->en }}" placeholder="{{$v->cn}}" min="0" step="0.01"<br/> 
							class="col-xs-10 col-sm-5" value="@{{ old('{!! $v->en!!}', $talent  ? $talent-> {!! $v->en!!} : '') }}"/>  <br/> 
					&lt;/div> <br/> 
			  
			  	@elseif($v->type == "enum")
					
					&lt?php  $constant = App\Models\Constant::where('en', '{!! $v->en !!}')->orderBy('k')->get();?>  <br/> 
					&lt;div class="col-sm-9">						<br/> 
					    &lt;select id="{{$v->en }}" name="{{$v->en }}" class="col-xs-10 col-sm-5"> <br/> 
					    &lt;option value="-1" >&lt;/option> <br/> 
					     <?php echo "@foreach"; ?>($constant as $c)  <br/> 
					        	&lt;option value="@{{ $c->k }}" <?php echo "@if"; ?>($talent && $talent->{!! $v->en!!} == $c->k ) selected <?php echo "@endif"; ?>  >@{{ $c->v }}&lt;/option> <br/> 
					     <?php echo "@endforeach"; ?>  <br/> 
    					&lt;/select>	<br/> 
					&lt;/div>		<br/> 
							

		
				@endif
				
		&lt;/div> <br/> 	
		@endif  	
				<br/> 
	   @endforeach