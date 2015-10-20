<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTableChangeType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function ($table) {
            $table->text('search_privilege_parameter_4')  ->nullable() ->change();      
                    
            $table->text('search_privilege_parameter_5')  ->nullable() ->change(); 
              
            $table->text('display_privilege_parameter_4')  ->nullable() ->change();            
              
            $table->text('display_privilege_parameter_5')  ->nullable() ->change();
      
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
