<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTalentTableChangeType extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('talent', function ($table) {
            $table->text('basic_extension_info_3')
                ->nullable()
                ->change();
            
            $table->text('basic_extension_info_4')
                ->nullable()
                ->change();
            
            $table->text('expect_label_1')
                ->nullable()
                ->change();
            
            $table->text('expect_label_2')
                ->nullable()
                ->change();
            
            $table->text('occupation_label_3')
                ->nullable()
                ->change();
            
            $table->text('occupation_label_4')
                ->nullable()
                ->change();
            
            $table->text('occupation_label_5')
                ->nullable()
                ->change();
            
            $table->text('product_label_8')
                ->nullable()
                ->change();
            
            $table->text('product_label_9')
                ->nullable()
                ->change();
            
            $table->text('product_label_10')
                ->nullable()
                ->change();
            
            $table->text('corporation_label_8')
                ->nullable()
                ->change();
            
            $table->text('corporation_label_9')
                ->nullable()
                ->change();
            
            $table->text('corporation_label_10')
                ->nullable()
                ->change();
            
            $table->text('tool_label_3')
                ->nullable()
                ->change();
            
            $table->text('certification_label_3')
                ->nullable()
                ->change();
            
            $table->text('grab_status_3')
                ->nullable()
                ->change();
            
            $table->integer('age')
                ->nullable()
                ;
            
            $table->integer('user_id')
                ->nullable()
                ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public 

    function down()
    {
        //
    }
}
