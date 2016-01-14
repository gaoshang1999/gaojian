<?php $Table = ucfirst($table->en) ;?>

<pre>
&lt;?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add{{$Table}}Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
     @foreach($table->columns as $v)    @if($v->updated_at >= '2015-12-24') 
        if (!Schema::hasColumn('{{$table->en}}', '{{ $v->en }}')) {
            Schema::table('{{$table->en}}', function ($table) {
                @if($v->type == 'string' &&  $v->length)            $table->{{ $v->type }}('{{ $v->en }}', {{ $v->length }})  ->nullable() ; 
@elseif($v->en == 'id' )            $table->increments('{{ $v->en }}')  ->nullable() ;  
@elseif($v->type == 'enum' )            $table->integer('{{ $v->en }}')  ->nullable(); 
@elseif($v->type == 'integer' )            $table->integer('{{ $v->en }}')  ->nullable(); 
@else            $table->{{ $v->type }}('{{ $v->en }}')  ->nullable() ;
@endif 
            });
        }
 @endif    @endforeach
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