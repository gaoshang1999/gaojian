
        Schema::create('{{$table->en}}', function (Blueprint $table) { <br/> 
            @foreach($table->columns as $v)            
            @if($v->type == 'string' &&  $v->length) 
            &nbsp;&nbsp;$table->{{ $v->type }}('{{ $v->en }}', {{ $v->length }})  ->nullable(); <br/> 
            @elseif($v->en == 'id' ) 
            &nbsp;&nbsp;$table->increments('{{ $v->en }}')  ->nullable(); <br/> 
            @elseif($v->type == 'enum' ) 
            &nbsp;&nbsp;$table->integer('{{ $v->en }}')  ->nullable(); <br/> 
            @else
            &nbsp;&nbsp;$table->{{ $v->type }}('{{ $v->en }}')  ->nullable(); <br/> 
            @endif
        @endforeach

            $table->timestamps(); <br/> 
        });<br/> 
        
        <br/> 
        @foreach($table->columns as $k => $v)           
          @if($k>0),@endif'{{$v->en}}'
        @endforeach
 
         
        