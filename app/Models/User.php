<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    /**
     * The storage format of the model's date columns.
     *
     * @var  string
     */
    protected $dateFormat = 'Y-m-d H:i:s';
    
    /**
     * The database table used by the model.
     *
     * @var  string
     */
    protected $table = 'user';

    protected $fillable = ['id','user_name','really_name','corporation','mobile_number','id_card_number','location','email','qq','webchat','email_2','mobile_2','sex','password','role','group_1','group_2','group_parameter','read_write_privilege_parameter_1','read_write_privilege_parameter_2','read_write_privilege_parameter_3','read_write_privilege_parameter_4','read_write_privilege_parameter_5','read_write_privilege_parameter_6','read_write_privilege_parameter_7','read_write_privilege_parameter_8','read_write_privilege_parameter_9','read_write_privilege_parameter_10','search_privilege_parameter_1','search_privilege_parameter_2','search_privilege_parameter_3','search_privilege_parameter_4','search_privilege_parameter_5','additional_parameter_1','additional_parameter_2','additional_parameter_3','additional_parameter_4','additional_parameter_5','filter_privilege_parameter_1','filter_privilege_parameter_2','filter_privilege_parameter_3','filter_privilege_parameter_4','filter_privilege_parameter_5','filter_privilege_parameter_6','filter_privilege_parameter_7','filter_privilege_parameter_8','filter_privilege_parameter_9','filter_privilege_parameter_10','register_bank_1','register_bank_2','bank_account_1','bank_account_2','alipay','pay_mode_parameter_1','pay_mode_parameter_2','display_privilege_parameter_1','display_privilege_parameter_2','display_privilege_parameter_3','display_privilege_parameter_4','display_privilege_parameter_5','display_privilege_parameter_6','display_privilege_parameter_7','display_privilege_parameter_8','display_privilege_parameter_9','display_privilege_parameter_10','publish_demand_count','publish_demand_parameter_1','publish_demand_parameter_2','publish_demand_parameter_3','publish_demand_parameter_4','talent_upload_count','talent_upload_parameter_1','talent_upload_parameter_2','talent_upload_parameter_3','talent_upload_parameter_4','operation_log_record_parameter_1','operation_log_record_parameter_2','operation_log_record_parameter_3','operation_log_record_parameter_4','operation_log_record_parameter_5','operation_log_record_parameter_6','operation_log_record_parameter_7','operation_log_record_parameter_8','operation_log_record_parameter_9','operation_log_record_parameter_10','score_parameter_1','score_parameter_2','score_parameter_3','score_parameter_4','score_parameter_5','credit_parameter_1','credit_parameter_2','credit_parameter_3','credit_parameter_4','credit_parameter_5','friends_set','acquaintance_set'];
    
    
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    
}

