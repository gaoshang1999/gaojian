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
    public function test(Request $request)
    {

        $sphinx = new SphinxSearch();
        $sphinx =  $sphinx ->setMatchMode(\Sphinx\SphinxClient::SPH_MATCH_EXTENDED);
        $results = $sphinx->search('@resume  证券 算法', 'talent_index')       
//         ->setSelect('id, title, content ') 
//         ->range('grade', 1, 10)
//         ->range('publish_date', strtotime('2015-12-23'),  strtotime('2015-12-25'))
        ->setGroupBy('last_corporation', \Sphinx\SphinxClient::SPH_GROUPBY_ATTR, '@count desc')
//         ->setGroupDistinct('type')
        ->limit(1000,0,1000,0)
        ->query();
        dump($results);
        print_r($results);
    }
 
}