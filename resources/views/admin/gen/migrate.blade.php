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
     Schema::create('{{$table->en}}', function (Blueprint $table) {   @foreach($table->columns as $v)            
@if($v->type == 'string' &&  $v->length)            $table->{{ $v->type }}('{{ $v->en }}', {{ $v->length }})  ->nullable(); 
@elseif($v->en == 'id' )            $table->increments('{{ $v->en }}')  ->nullable();  
@elseif($v->type == 'enum' )            $table->integer('{{ $v->en }}')  ->nullable(); 
@else            $table->{{ $v->type }}('{{ $v->en }}')  ->nullable();
@endif  @endforeach
            $table->timestamps(); 
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