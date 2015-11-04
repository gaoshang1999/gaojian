<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    
    public function lists(Request $request)
    {
        $data = ['job' => Job::orderBy('id', 'desc')->paginate(20) ];

        return view('admin.job.list', $data);
    }
    
    public function search(Request $request)
    {
        $q = $request['q'];
        $field = $request['field'];
                 
        $job = Job::where($field, 'like', '%'.$q.'%')-> paginate(20) ;
        $job ->appends(['q' => $request['q']]);
        $job ->appends(['field' => $field]);
    
        $data = ['job' => $job, 'q' => $request['q'], 'field' => $field];
        return view('admin.job.list', $data);
    }
    
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [                                
            ]);

            $input = $request->all();
            $job = Job::create($input);
                        
            $job->save(); 
       
            return redirect('/admin/job');
        }
        else {            
            return view('admin.job.create_edit', ['job' => null] );
        }
    }
    
    public function edit(Request $request, $id)
    {
        $job = Job::where('id', $id)->first();
        if ($request->isMethod('post')) {
            $this->validate($request, [                
            ]);
    
            $input = $request->all();
            $job->fill($input);
    
            $job->save();
            
            $referer = $input['referer'];
            return redirect(empty($referer)?'/admin/job':$referer);
        }
        else {
            return view('admin.job.create_edit', ['job' => $job] );
        }
    }
    
    public function delete(Request $request, $id)
    {
        Job::where('id', $id)->delete();
        return redirect($request->header('referer'));
    }
}
