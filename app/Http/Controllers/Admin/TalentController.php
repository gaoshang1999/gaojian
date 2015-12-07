<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use App\Models\Talent;
use App\Models\Recommend;
use App\Models\Flow;
use App\Models\Recom;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use ZipArchive;
use DB;
use Log;
use Exception;
use Auth;

class TalentController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['talent' => Talent::orderBy('id', 'desc')->paginate(20) ];

        return view('admin.talent.list', $data);
    }
    
    
    public function queryBulider(Request $request)
    {
        
        $q1 = $request['q1'];
        $op = $request['op'];
        $field1 = $request['field1'];
        
        $q2_start = $request['q2_start'];
        $q2_end = $request['q2_end'];
        $field2 = $request['field2'];
        
        $q3_start = $request['q3_start'];
        $q3_end = $request['q3_end'];
        $field3 = $request['field3'];

        $search_scope = $request['search_scope'];

        
        if( $search_scope == 0 ) { //全库
            $query = Talent::query();
        }elseif ($search_scope == 1) { //搜索结果
            $query_where = json_decode( $request['query_where'], true );
            $query_bindings = json_decode( $request['query_bindings'], true );
            $query = Talent::query();
            if($query_where){
                $query->getQuery()->wheres = $query_where;
                $query->getQuery()->setBindings($query_bindings);
            }
        }elseif ($search_scope == 2) { //选中项
            $ids = $request['ids'];
            $query = Talent::query()->whereIn('id', explode(",", $ids));            
        }
        
        if($q1){
            if($op == "like"){
                $query = $query->where($field1, $op, '%'.$q1.'%');
            }else{
                $query = $query->where($field1, $op, $q1);
            }
        }
        
        if($q2_start && $q2_end){
            $query = $query->whereBetween($field2, [$q2_start, $q2_end]);
        }elseif($q2_start){
            $query = $query->where($field2, '>=' , $q2_start);
        }elseif($q2_end){
            $query = $query->where($field2, '<=' , $q2_end);
        }
        
        
        if($q3_start && $q3_end){
            $query = $query->whereBetween($field3, [date('Y-m-d', strtotime($q3_start)),  date('Y-m-d', strtotime($q3_end)) ]);
        }elseif($q3_start){
            $query = $query->where($field3, '>=' , date('Y-m-d', strtotime($q3_start)));
        }elseif($q3_end){
            $query = $query->where($field3, '<=' , date('Y-m-d', strtotime($q3_end)));
        }        
                
        return $query;           
    }
    
    public function search(Request $request)
    {
        $query = $this->queryBulider($request);            
                 
        $talent = $query -> orderBy('id', 'desc')-> paginate(20) ;
        $talent ->appends(['q1' => $request['q1']]);
        $talent ->appends(['op' => $request['op']]);
        $talent ->appends(['field1' => $request['field1']]);
        $talent ->appends(['q2_start' => $request['q2_start']]);
        $talent ->appends(['q2_end' => $request['q2_end']]);
        $talent ->appends(['field2' => $request['field2']]);
        $talent ->appends(['q3_start' => $request['q3_start']]);
        $talent ->appends(['q3_end' => $request['q3_end']]);
        $talent ->appends(['field3' => $request['field3']]);
        $talent ->appends(['search_scope' => $request['search_scope']]);
    
        $param = ['q1' => $request['q1'], 'op' => $request['op'], 'field1' => $request['field1'],  
            'q2_start' =>$request['q2_start'] , 'q2_end' =>$request['q2_end'] , 'field2' => $request['field2'],  
            'q3_start' =>$request['q3_start'] , 'q3_end' =>$request['q3_end'] , 'field3' => $request['field3'],
            'search_scope' => $request['search_scope']
        ];
        $wheres = $query->getQuery()->wheres;
        $bindings = $query->getQuery()->getBindings();

        $data = ['talent' => $talent,  'query_where'=> json_encode($wheres? $wheres : ""), 'query_bindings' => json_encode($bindings? $bindings : "")];
        return view('admin.talent.list', array_merge($data, $param));
    }
    
    public function add(Request $request)
    {
        $user = Auth::user();
        if ($request->isMethod('post')) {
//             $this->validate($request, [
//                 'name' => 'required|max:255',
//                  'mobile' => 'required|max:255|unique:talent',        
//             ]);

            $input = $request->all();
            $talent = Talent::create($input);
            
            $talent ->user_id = $user->id;
            $talent->save(); 
       
            return redirect('/admin/talent');
        }
        else {            
            return view('admin.talent.create_edit', ['talent' => null] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        $talent = Talent::where('id', $id)->first();
        if ($request->isMethod('post')) {
//             $this->validate($request, [
//                 'name' => 'required|max:255',
//                 'mobile' => 'required|max:255|unique:talent,mobile,'.$talent->id,

//             ]);
    
            $input = $request->all();
            $talent->fill($input);
    
            $talent->save();
             
           $referer = $input['referer'];
            return redirect(empty($referer)?'/admin/talent':$referer);
        }
        else {
            return view('admin.talent.create_edit', ['talent' => $talent] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        Talent::where('id', $id)->delete();
        return redirect($request->header('referer'));
    }
    
    public function upload(Request $request)
    {
        $user = Auth::user();
        $input = $request->all();             
        $file = array_get($input, 'file');
        try{
            if ($file) {
                $destinationPath = 'upload/';
                $public = 'public/';
                if (!is_dir(base_path($public . $destinationPath))) {
                    mkdir(base_path($public . $destinationPath));
                }
                $extension = $file->getClientOriginalExtension();
                $fileName = uniqid()  . '.' . $extension;
                $upload_success = $file->move($destinationPath, $fileName);
            
                $path = base_path($public .$destinationPath . $fileName);
               
               if(strtolower($extension) == "txt"){
                   $filename = $path;
                   $content = file_get_contents($filename);
                   $content = iconv("GBK","UTF-8",  $content);
                   $data = ['resume'=> $content, 'user_id' => $user->id];
                                      
                   $talent = Talent::create($data);
                   $talent->save();
                   $count = 1;
               }elseif(strtolower($extension) == "zip"){                    
                       $zip = new ZipArchive();                       
                       if ($zip->open($path) == TRUE) {
                           for ($i = 0; $i < $zip->numFiles; $i++) {
                                $filename = $zip->getNameIndex($i);
                                $stream = $zip->getStream($filename); 
                                $content = stream_get_contents($stream); //这里注意获取到的文本编码
                                if($content){
                                   $content = iconv("GBK","UTF-8", $content );
                                   $data = ['resume'=> $content, 'user_id' => $user->id];
                                   $talent = Talent::create($data);
                                   $array []= $talent;
                                }
                           }
                       }
                       $zip->close();
                       
                       foreach($array as $a){
                           $a->save();
                       }
                       $count = count($array);
      
              } //end if                   
              
              return new JsonResponse(['success'=>true, 'message' => '上传成功，共导入'.$count.'份简历']);
            } //end if        
        }catch(Exception $e)
        {
            return new JsonResponse(['success'=>false, 'message' => '上传失败,请重试. 文件名:'.$filename.",错误原因:".$e->getMessage()]);
        }
              
        return new JsonResponse(['success'=>false, 'message' => '上传失败,请重试']);
    }
    
    
    public function batchUpdate(Request $request)
    {
        $query = $this->queryBulider($request);
        
        $update_value1 = $request['update_value1'];
        $update_replace = $request['update_replace'];
        $update_field1 = $request['update_field1'];        
        $update_method = $request['update_method'];        
        
        $update_value2 = $request['update_value2'];
        $update_field2 = $request['update_field2'];
      
        $update_value3 = $request['update_value3'];
        $update_field3 = $request['update_field3'];
        
        $count = 0;
        $update = [];

        if(strlen($update_value1)){
            if($update_method == 0) { //替换            
               $update[$update_field1]=  DB::raw("REPLACE(".$update_field1 .",'".$update_value1."','".$update_replace."')") ;              
            }else if($update_method == 1){ //插入            
               $update[$update_field1]=  DB::raw("IFNULL( CONCAT(".$update_field1 .",'".$update_value1."'), '".$update_value1."')") ;
            }else {
                $update[$update_field1]=  $update_value1 ;
            }
        }
        
        if(strlen($update_value2)){
            $update[$update_field2]= $update_value2;
        }
        
        if(strlen($update_value3)){
            $update[$update_field3]= $update_value3;
        }
        
        $count = $query->update( $update );
        
        return new JsonResponse(['success'=>true, 'message' => '批量修改成功，共修改了'.$count.'份简历']);
    }
    
    public function batchDelete(Request $request)
    {
        $query = $this->queryBulider($request);
        
        $count = $query->delete();
        
        return new JsonResponse(['success'=>true, 'message' => '批量删除成功，共删除了'.$count.'份简历']);
   }
   
   public function parse(Request $request)
   {
       try{
           $query = $this->queryBulider($request);
           $talents = $query->get();

           foreach($talents as $t){
               $data = $this->callParseApi($t, $request['parser']);
               if($data){
                  unset($data['resume']);
                   $t->fill($data);
                   $t->save();
               }else{
                   return new JsonResponse(['success'=>false, 'message' => '量化模型解析失败，调用解析服务出错']);
               }
           }       
       }catch(Exception $e)
       {
           Log::error  ( $e->getMessage());
           return new JsonResponse(['success'=>false, 'message' => '量化模型解析失败.'.$e->getMessage()]);
       }
   
       return new JsonResponse(['success'=>true, 'message' => '量化模型解析成功，共解析了'.count($talents).'份简历']);
   }
   
   public $url = "http://101.200.236.68:8080/222/";
   
   public function callParseApi($talent, $parser){
       $api_url = $this->url . $parser;
       
//        $resume = ['resume'=> $talent -> resume];       
//        $data = ["data" => json_encode($resume)];
       $data = ["data" => json_encode($talent)];
       
//        ini_set('max_execution_time', 0);
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $api_url);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); //timeout on connect
       curl_setopt($ch, CURLOPT_TIMEOUT, 10); //timeout on response
       // post数据
       curl_setopt($ch, CURLOPT_POST, 1);
       // post的变量
//        Log::info  ('TalentController-callParseApi: '. json_encode($data));
//        Log::info  ('TalentController-callParseApi: '. http_build_query($data));
       curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
       $json = curl_exec($ch);
       curl_close($ch);
//        dump($json);
//        Log::info  ('TalentController-callParseApi-return: '. $json);
       return json_decode($json, true);
   }
   
   
    public function testApi(Request $request)
    {
        $url = "http://101.200.236.68:8080/222/hello";
        
        if ($request->isMethod('post')) {
            $resume = ['resume'=> $request['resume']];
            $data = ["data" => json_encode($resume)];
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            // post数据
            curl_setopt($ch, CURLOPT_POST, 1);
            // post的变量
            Log::info  ('TalentController-callParseApi: '. json_encode($data));
            Log::info  ('TalentController-callParseApi: '. http_build_query($data));
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            $json = curl_exec($ch);
            
            echo $json;
            
        }else {
            return view('admin.talent.test');
        }
    }
    
    public function recommend(Request $request)
    {
      try{
            $query = $this->queryBulider($request);             
            $talents = $query->get();
            $user = Auth::user();
            
            $demand_id = $request['demand_id'];
            $demand = Demand::where('id', $demand_id)->first();
            if(! $demand){
                return new JsonResponse(['success'=>false, 'message' => '需求编号不存在，请重新输入.']);
            }             
            foreach($talents as $t){ 
                $flow = Flow::create(['recommend_time'=> date("Y-m-d H:i:s")]);
                
                $data = ['talent_id'=> $t ->id, 'demand_id' => $demand_id, 'user_id'=> $user->id, 'host_id'=>$demand->recruit_user, 'type'=> 1, 'flow_id'=>$flow->id];
                
                $recommend = Recom::create($data);
            }
        }catch(Exception $e)
        {
            return new JsonResponse(['success'=>false, 'message' => '推荐失败.'.$e->getMessage()]);
        }
        
        return new JsonResponse(['success'=>true, 'message' => '推荐成功，共推荐了'.count($talents).'份简历']);
    }
    
    
    public function test(Request $request)
    {
        try{           
            $talents = Talent::orderBy('id', 'desc')->paginate(20);
                
            $ids = [];
            foreach($talents as $t){
                $ids []= $t->id;
            }
            echo  "data=".json_encode(['ids'=>$ids]);
            echo "<p>";
 
        }catch(Exception $e)
        {
            Log::error  ( $e->getMessage());
            echo json_encode(['ids'=>[]]);
        }
         
        
    }
}