<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Talent;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
class TalentController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['talent' => Talent::orderBy('id', 'desc')->paginate(20) ];

        return view('admin.talent.list', $data);
    }
    
    public function search(Request $request)
    {
        $q = $request['q'];
        $field = $request['field'];
        
        $q2_start = $request['q2_start'];
        $q2_end = $request['q2_end'];
        $field2 = $request['field2'];
        
        $q3_start = $request['q3_start'];
        $q3_end = $request['q3_end'];
        $field3 = $request['field3'];
        
         
        $query = Talent::query();
        
        if($q){
            $query = $query->where($field, 'like', '%'.$q.'%');
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
            
                 
        $talent = $query -> orderBy('id', 'desc')-> paginate(20) ;
        $talent ->appends(['q' => $request['q']]);
        $talent ->appends(['field' => $field]);
        $talent ->appends(['q2_start' => $request['q2_start']]);
        $talent ->appends(['q2_end' => $request['q2_end']]);
        $talent ->appends(['field2' => $field2]);
        $talent ->appends(['q3_start' => $request['q3_start']]);
        $talent ->appends(['q3_end' => $request['q3_end']]);
        $talent ->appends(['field3' => $field3]);
    
        $data = ['talent' => $talent, 'q' => $request['q'], 'field' => $field,  
            'q2_start' => $q2_start, 'q2_end' => $q2_end, 'field2' => $field2,  
            'q3_start' => $q3_start, 'q3_end' => $q3_end, 'field3' => $field3 ];
        return view('admin.talent.list', $data);
    }
    
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
//             $this->validate($request, [
//                 'name' => 'required|max:255',
//                  'mobile' => 'required|max:255|unique:talent',        
//             ]);

            $input = $request->all();
            $talent = Talent::create($input);
                        
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
        $input = $request->all();
         
        $file = array_get($input, 'file');
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
               $content = file_get_contents($path);
               $content = iconv("GBK","UTF-8",  $content);
               $data = ['resume'=> $content];
               
               $talent = Talent::create($data);
               $talent->save();
               $count = 1;
           }else{
               $zip = zip_open($path);
               $array = [];
               if ($zip)      {
                   while ($zip_entry = zip_read($zip))  {                   
                       if (zip_entry_open($zip, $zip_entry)) {                          
                           $content = zip_entry_read($zip_entry); 
                           if($content){ //文件内容不为空判断，可以去除文件夹和空文件
                               $content = iconv("GBK","UTF-8", $content );
                               zip_entry_close($zip_entry);
                               $data = ['resume'=> $content];
                               $talent = Talent::create($data);
                               $array []= $talent;
                           }
                       }
                  }               
                  zip_close($zip);               
               }
               foreach($array as $a){
                   $a->save();
               }
               $count = count($array);
          }
          return new JsonResponse(['success'=>true, 'message' => '上传成功，共导入'.$count.'份简历']);
        }
              
            return new JsonResponse(['success'=>false, 'message' => '上传失败,请重试']);
//           return redirect('/admin/talent');
    }
    
    public function batchUpdate(Request $request)
    {
        if ($request->isMethod('post')) {
            echo "暂未实现  TODO";
        }else{
            return view('admin.talent.batch_update');
        }
    }
    
}