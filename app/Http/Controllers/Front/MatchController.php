<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use DB;
use App\Models\Talent;
use App\Models\Recom;
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
        return view('front.match.match3', ['demand' => $demand] );
         
    }
}