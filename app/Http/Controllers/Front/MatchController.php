<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use DB;
use App\Models\Talent;
use App\Models\TalentView;
class MatchController extends DemandController
{   
    public function getViewPath()
    {        
        return  'front.match.';
    }
    
    public function getHttpPath()
    {
        return  '/front/match';
    }
    public function match1(Request $request, $id)
    {
        $demand = Demand::myDemand()-> where('id', $id)->first();
    
        if ($request->isMethod('post')) {
//             $this->validate($request,  $this->rules(), [],  $this->customAttributes());
        
            $input = $request->all();
            $demand->fill($input);
            $demand->update();
        
            return redirect('/front/match/match1/'.$id);
        }
        else {
            return view('front.match.match1', ['demand' => $demand] );
        }
    }
    
    public function match2(Request $request, $id)
    {
        $demand = Demand::myDemand()-> where('id', $id)->first();
    
        if ($request->isMethod('post')) {
            //             $this->validate($request,  $this->rules(), [],  $this->customAttributes());
    
            $input = $request->all();
            $demand->fill($input);
           
            $demand->update();
    
            return redirect('/front/match/match2/'.$id);
        }
        else {
            return view('front.match.match2', ['demand' => $demand] );
        }
    }
    
    public function match3(Request $request, $id)
    {
        $demand = Demand::myDemand()-> where('id', $id)->first();
        
        //->select(DB::raw('count(*) as count, last_corporation'))->groupBy('last_corporation')
        $talent = TalentView::quantifyTalent($demand)->get()->all();
        $result = [];
        foreach ($talent as $k=>$v){
            $count = isset($result[$v->last_corporation])?$result[$v->last_corporation]:0;
            $count+=1;
            $result[$v->last_corporation]=$count;
        }
        
        //->select(DB::raw('count(*) as count, highest_education'))->groupBy('highest_education')
        $talent2 = TalentView::quantifyTalent($demand)->get()->all();
        $result2 = [];
        foreach ($talent2 as $k=>$v){
            $count =  isset($result2[$v->highest_education])?$result2[$v->highest_education]:0;
            $count+=1;
            $result2[$v->highest_education]=$count;
        }
        return view('front.match.match3', ['demand' => $demand,  'talent' => $result,  'talent2' => $result2] );
         
    }
    
    public function match4(Request $request, $id)
    {
        $demand = Demand::myDemand()-> where('id', $id)->first();
    
        $talent = TalentView::quantifyTalent($demand)->get();
    
        return view('front.match.match4',  ['demand' => $demand,  'talent' => $talent] );
         
    }
}