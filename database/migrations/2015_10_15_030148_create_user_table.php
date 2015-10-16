<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
     Schema::create('user', function (Blueprint $table) {               
            $table->increments('id')  ->nullable();  
              
            $table->string('user_name', 30)  ->nullable(); 
              
            $table->string('really_name', 30)  ->nullable(); 
              
            $table->string('corporation', 30)  ->nullable(); 
              
            $table->string('mobile_number')  ->nullable();
              
            $table->string('id_card_number')  ->nullable();
              
            $table->string('location', 30)  ->nullable(); 
              
            $table->string('email', 30)  ->nullable(); 
              
            $table->string('qq', 30)  ->nullable(); 
              
            $table->string('webchat', 30)  ->nullable(); 
              
            $table->string('email_2', 30)  ->nullable(); 
              
            $table->string('mobile_2')  ->nullable();
              
            $table->integer('sex')  ->nullable(); 
              
            $table->string('password')  ->nullable();
              
            $table->integer('role')  ->nullable(); 
              
            $table->string('group_1', 30)  ->nullable(); 
              
            $table->string('group_2', 30)  ->nullable(); 
              
            $table->float('group_parameter')  ->nullable();
              
            $table->float('read_write_privilege_parameter_1')  ->nullable();
              
            $table->float('read_write_privilege_parameter_2')  ->nullable();
              
            $table->string('read_write_privilege_parameter_3')  ->nullable();
              
            $table->string('read_write_privilege_parameter_4')  ->nullable();
              
            $table->string('read_write_privilege_parameter_5')  ->nullable();
              
            $table->float('read_write_privilege_parameter_6')  ->nullable();
              
            $table->float('read_write_privilege_parameter_7')  ->nullable();
              
            $table->float('read_write_privilege_parameter_8')  ->nullable();
              
            $table->float('read_write_privilege_parameter_9')  ->nullable();
              
            $table->float('read_write_privilege_parameter_10')  ->nullable();
              
            $table->float('search_privilege_parameter_1')  ->nullable();
              
            $table->string('search_privilege_parameter_2')  ->nullable();
              
            $table->string('search_privilege_parameter_3')  ->nullable();
              
            $table->string('search_privilege_parameter_4')  ->nullable();
              
            $table->string('search_privilege_parameter_5')  ->nullable();
              
            $table->float('additional_parameter_1')  ->nullable();
              
            $table->float('additional_parameter_2')  ->nullable();
              
            $table->float('additional_parameter_3')  ->nullable();
              
            $table->float('additional_parameter_4')  ->nullable();
              
            $table->float('additional_parameter_5')  ->nullable();
              
            $table->float('filter_privilege_parameter_1')  ->nullable();
              
            $table->string('filter_privilege_parameter_2')  ->nullable();
              
            $table->string('filter_privilege_parameter_3')  ->nullable();
              
            $table->string('filter_privilege_parameter_4')  ->nullable();
              
            $table->string('filter_privilege_parameter_5')  ->nullable();
              
            $table->float('filter_privilege_parameter_6')  ->nullable();
              
            $table->float('filter_privilege_parameter_7')  ->nullable();
              
            $table->float('filter_privilege_parameter_8')  ->nullable();
              
            $table->float('filter_privilege_parameter_9')  ->nullable();
              
            $table->float('filter_privilege_parameter_10')  ->nullable();
              
            $table->string('register_bank_1', 50)  ->nullable(); 
              
            $table->string('register_bank_2')  ->nullable();
              
            $table->string('bank_account_1')  ->nullable();
              
            $table->string('bank_account_2')  ->nullable();
              
            $table->string('alipay')  ->nullable();
              
            $table->string('pay_mode_parameter_1')  ->nullable();
              
            $table->string('pay_mode_parameter_2')  ->nullable();
              
            $table->string('display_privilege_parameter_1', 30)  ->nullable(); 
              
            $table->string('display_privilege_parameter_2')  ->nullable();
              
            $table->string('display_privilege_parameter_3')  ->nullable();
              
            $table->string('display_privilege_parameter_4')  ->nullable();
              
            $table->string('display_privilege_parameter_5')  ->nullable();
              
            $table->float('display_privilege_parameter_6')  ->nullable();
              
            $table->float('display_privilege_parameter_7')  ->nullable();
              
            $table->float('display_privilege_parameter_8')  ->nullable();
              
            $table->float('display_privilege_parameter_9')  ->nullable();
              
            $table->float('display_privilege_parameter_10')  ->nullable();
              
            $table->float('publish_demand_count')  ->nullable();
              
            $table->float('publish_demand_parameter_1')  ->nullable();
              
            $table->float('publish_demand_parameter_2')  ->nullable();
              
            $table->float('publish_demand_parameter_3')  ->nullable();
              
            $table->float('publish_demand_parameter_4')  ->nullable();
              
            $table->float('talent_upload_count')  ->nullable();
              
            $table->float('talent_upload_parameter_1')  ->nullable();
              
            $table->float('talent_upload_parameter_2')  ->nullable();
              
            $table->float('talent_upload_parameter_3')  ->nullable();
              
            $table->float('talent_upload_parameter_4')  ->nullable();
              
            $table->float('operation_log_record_parameter_1')  ->nullable();
              
            $table->float('operation_log_record_parameter_2')  ->nullable();
              
            $table->float('operation_log_record_parameter_3')  ->nullable();
              
            $table->float('operation_log_record_parameter_4')  ->nullable();
              
            $table->float('operation_log_record_parameter_5')  ->nullable();
              
            $table->float('operation_log_record_parameter_6')  ->nullable();
              
            $table->float('operation_log_record_parameter_7')  ->nullable();
              
            $table->float('operation_log_record_parameter_8')  ->nullable();
              
            $table->float('operation_log_record_parameter_9')  ->nullable();
              
            $table->float('operation_log_record_parameter_10')  ->nullable();
              
            $table->float('score_parameter_1')  ->nullable();
              
            $table->float('score_parameter_2')  ->nullable();
              
            $table->float('score_parameter_3')  ->nullable();
              
            $table->float('score_parameter_4')  ->nullable();
              
            $table->float('score_parameter_5')  ->nullable();
              
            $table->float('credit_parameter_1')  ->nullable();
              
            $table->float('credit_parameter_2')  ->nullable();
              
            $table->float('credit_parameter_3')  ->nullable();
              
            $table->float('credit_parameter_4')  ->nullable();
              
            $table->float('credit_parameter_5')  ->nullable();
              
            $table->text('friends_set')  ->nullable();
              
            $table->text('acquaintance_set')  ->nullable();
            
            $table->rememberToken();            
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        //
    }
}

