<pre><?php $Table = ucfirst($table->en) ;?>

&lt;?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class {{$Table}} extends Model
{

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = '{{$table->en}}';

    protected $fillable = [@foreach($table->columns as $k => $v)@if($k>0),@endif'{{$v->en}}'@endforeach];
    
    
}


</pre>