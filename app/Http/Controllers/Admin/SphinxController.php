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
use Illuminate\Support\Facades\Auth;
use sngrl\SphinxSearch\SphinxSearch;


class SphinxController extends Controller
{    
    public function search(Request $request)
    {
        $q = $request->get('q', '');

        $sphinx = new SphinxSearch();
        $sphinx =  $sphinx ->setMatchMode(\Sphinx\SphinxClient::SPH_MATCH_EXTENDED);
        $talent = $sphinx->search('@resume '.$q, 'talent_index')       
//         ->setSelect('id, title, content ') 
//         ->range('grade', 1, 10)
//         ->range('publish_date', strtotime('2015-12-23'),  strtotime('2015-12-25'))
//         ->setGroupBy('last_corporation', \Sphinx\SphinxClient::SPH_GROUPBY_ATTR, '@count desc')
//         ->setGroupDistinct('type')
        ->limit(1000,0,1000,0)
        ->query();
        
        
        $total = $talent['total_found'];
        
//         dump($talent);
        
        $ids = array_keys(array_has($talent, 'matches')&&$talent['matches']?$talent['matches']:[0]);
        
        $query = Talent::query();
        $query = $query->whereIn('id',$ids)->orderBy(DB::raw('FIELD(id, '.join(',',$ids).')'));
        
        $talent = $query ->paginate(20);
        
//         dump($talent);
        $data = [];
        foreach($talent->all() as $v){
            $p['id']=$v->id;
            $p['resume']= mb_substr($v->resume, 0, 50);
            
            $data[]= $p;             
        }
//         dump($data);
        echo json_encode(['data'=>$data, 'count'=>$total]);
    }
 
    
    public function detail(Request $request)
    {
        $id = $request->get('id', '');
        
        $talent = Talent::where('id', $id)->first();
        
//         echo $talent->resume;

        return view('admin.talent.resume', ["talent"=>$talent]);
    }
}