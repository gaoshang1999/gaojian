<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class GenController extends Controller
{
    
   
    public function db(Request $request, $id)
    {   
        $table = Table::where('id', $id)->first();        
        $data = ['table' => $table];

        return view('admin.gen.db', $data);
    }    

    public function web(Request $request, $id)
    {         
        $table = Table::where('id', $id)->first();
        $data = ['table' => $table];
    
        return view('admin.gen.web', $data);
    }
    
    
    public function gen(Request $request, $method, $id)
    {
        $table = Table::where('id', $id)->first();
        $data = ['table' => $table];
    
        return view('admin.gen.'.$method, $data);
    }
}