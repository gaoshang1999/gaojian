<?php $Table = ucfirst($table->en) ;?>

<pre>
&lt;?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create{{$Table}}Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::table('{{$table->en}}', function ($table) {   @foreach($table->columns as $v)   
     @if($v->updated_at >= '2015-10-19') 
                   
@if($v->type == 'string' &&  $v->length)            $table->{{ $v->type }}('{{ $v->en }}', {{ $v->length }})  ->nullable() ->change(); 
@elseif($v->en == 'id' )            $table->increments('{{ $v->en }}')  ->nullable() ->change();  
@elseif($v->type == 'enum' )            $table->integer('{{ $v->en }}')  ->nullable() ->change(); 
@else            $table->{{ $v->type }}('{{ $v->en }}')  ->nullable() ->change();
@endif  @endif @endforeach
         });
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}


</pre>