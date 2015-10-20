<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDemandTableChangeType extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demand', function ($table) {
            
            $table->text('demand_type_label_2')
                ->nullable()
                ->change();
            
            $table->text('demand_label_3')
                ->nullable()
                ->change();
            
            $table->text('demand_label_4')
                ->nullable()
                ->change();
            
            $table->text('demand_label_5')
                ->nullable()
                ->change();
            
            $table->text('occupation_requirement')
                ->nullable()
                ->change();
            
            $table->text('corporation_requirement')
                ->nullable()
                ->change();
            
            $table->text('product_requirement')
                ->nullable()
                ->change();
            
            $table->text('certification_requirement')
                ->nullable()
                ->change();
            
            $table->text('occupation_extension_requirement_1')
                ->nullable()
                ->change();
            
            $table->text('corporation_extension_requirement_1')
                ->nullable()
                ->change();
            
            $table->text('corporation_extension_requirement_2')
                ->nullable()
                ->change();
            
            $table->text('product_extension_requirement_1')
                ->nullable()
                ->change();
            
            $table->text('certification_requirement_1')
                ->nullable()
                ->change();
            
            $table->text('tool_extension_requirement_1')
                ->nullable()
                ->change();
            
            $table->text('recruit_corporation_label_1')
                ->nullable()
                ->change();
            
            $table->text('recruit_corporation_label_2')
                ->nullable()
                ->change();
            
            $table->text('background_label_1')
                ->nullable()
                ->change();
            
            $table->text('background_label_2')
                ->nullable()
                ->change();
            
            $table->text('reward_label_1')
                ->nullable()
                ->change();
            
            $table->text('reward_label_2')
                ->nullable()
                ->change();
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
