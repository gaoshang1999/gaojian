<?php
namespace  App\Providers\Translate;

use App\Models\Dict;
use App\Models\Table;

class TranslateService
{
    private $dict = [];
    
    
    
    public function __construct()
    {
        $dict = Dict::orderBy('cn')->get()->all();
        foreach ($dict as $k => $v){
            $new_array = explode(",", $v->cn);
            foreach ($new_array as $nv){
              $value = ['cn'=>$nv, 'en'=>$v->en, 'abbr'=>$v->abbr];
              $nd = new Dict();
              $nd->fill($value);
              $this->dict[]= $nd;
            }
        }  
                
        usort($this->dict, function ($a, $b)
        {
            if ($a->cn == $b->cn) return 0;
            return ($a->cn < $b->cn) ? -1 : 1;
        });
    }
    
    public function translate($attr)
    {
        $segment = $this->segment($attr);
        
        $new_array = $segment ? explode(",", $segment) : [];
        $en_segment = [];
        foreach ($new_array as $nv){
            if($this->isLetterOrDigit($nv)){
                $en_segment[]= strtolower($nv);
            }else{
                $index = $this->binarySearch($nv);
                $dict =  $this->dict[$index];
                $en_segment[]= strtolower($dict->en);
            }
        }
        
        return ['cn_segment' => $segment, 'en' => join("_", $en_segment)];
    }
    


    public function segment($attr, $start = 0)
    {
        if($start >  mb_strlen($attr) + 1){
            return "";
        }
        $lpart="";  $rpart = "";
        $result = "";
        for($i =  mb_strlen($attr)-1 ; $i>= $start ; $i--){
            $lpart = mb_substr($attr, $start, $i +1 - $start);

            if($this->isLetterOrDigit($lpart) || $this->binarySearch($lpart) <> -1){
                $rpart = $this->segment($attr, $i + 1);           
            
                if($rpart <> ""){
                   $result = $lpart .",". $rpart; 
                   return $result; 
                }else if($i >= mb_strlen($attr)-1){
                    return $lpart;
                }    
            }        
        }        
    }
    
    
    

//     Function splitAttributes(ByVal attr As String, dict() As String, ByVal start As Integer) 
//         If start > Len(attr) Then 
//             splitAttributes = "" 
//             Exit Function 
//         End If 
//         Dim lpart, rpart As String 
//         result = "" 
//         For i = Len(attr) To start Step -1 
//             lpart = Mid(attr, start, i + 1 - start) 
//             If (binarySearch(dict, lpart) <> -1) Then 
//                 rpart = splitAttributes(attr, dict, i + 1) 
//                 If (rpart <> "") Then 
//                     splitAttributes = lpart & "," & rpart 
//                     Exit Function 
//                 ElseIf i >= Len(attr) Then 
//                     splitAttributes = lpart 
//                     Exit Function 
//                 End If 
//             End If 
//         Next i 
//         splitAttributes = "" 
//     End Function 
    
    
    function bs ($a,$val,$low,$high){
        if ($high < $low){
            return -1;
        }
        $mid= $low + intval(($high-$low)/2);
        if ($a[$mid]->cn > $val){
            return  $this->bs ($a,$val,$low,$mid-1);
        }else if  ($a[$mid] ->cn < $val){
            return  $this->bs ($a,$val,$mid+1,$high);
        }else{
            return $mid;
        }
    }
    
    public function binarySearch ($val){
        $a = $this->dict;
        return $this->bs($a,$val, 0, count($a)-1);
    }
    
    
    public function  isLetterOrDigit($string){
       return preg_match('~^[0-9a-z]+$~i', $string) > 0;
    }
}

?>