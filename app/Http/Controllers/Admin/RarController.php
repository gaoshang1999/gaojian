<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ZipArchive;
use DB;
use Log;
use Exception;
use RarArchive;



class RarController extends Controller
{    
    /* http://php.chinaunix.net/manual/zh/function.glob.php */
    public function scandir_through($dir)
    {
        $items = glob($dir . '/*');
    
        for ($i = 0; $i < count($items); $i++) {
            if (is_dir($items[$i])) {
                $add = glob($items[$i] . '/*');
                $items = array_merge($items, $add);
            }
        }    
        return $items;
    }
    
    public function test(Request $request)
    {
        $dir = '/ziliao/careerinter-cv';
        echo $dir;
        
//         $entries = $this->scandir_through($dir);

        $entries =[
//             '/ziliao/careerinter-cv/1.4/51job_陈光明(73012753).mht',
//             '/ziliao/careerinter-cv/1.4/连新宇 13 一份已删除.zip',
            '/ziliao/careerinter-cv/1.4/winni 1有1份没有.rar'
            
        ];
        
        foreach ( $entries as $k=>$filename){
            echo "<p>$filename";
            if(is_file($filename)){
                if(preg_match('/html$/', $filename) || preg_match('/mht$/', $filename)){
                    $content =  file_get_contents($filename);
                    echo "<p>".$content;
                }else if(preg_match('/zip$/', $filename)){
                    $zip = new ZipArchive();
                    if ($zip->open($filename) == TRUE) {
                           for ($i = 0; $i < $zip->numFiles; $i++) {
                                $filename = $zip->getNameIndex($i);
                                $stream = $zip->getStream($filename); 
                                $content = stream_get_contents($stream); //这里注意获取到的文本编码
                                if($content){                                   
                                    echo "<p>".$content;
                                }
                           }
                       }
                       $zip->close();
                }else if(preg_match('/rar$/', $filename)){
                    $zip = RarArchive::open($filename);
                    if ($zip == TRUE) {
                        $entries = $zip->getEntries();
                         foreach ($entries as $k=>$v){
                               dump($k);
                               dump($v);
                                $content = stream_get_contents($v->getStream()); //这里注意获取到的文本编码
                                if($content){                                   
                                    echo "<p>".$content;
                                }
                           }
                       }
                       $zip->close();
                }
                
            }
        }
        

        
//         $rar_file = RarArchive::open($dir) or die("Failed to open Rar archive");
//         /*example.rar换成其他档桉即可*/
//         $entries_list = rar_list($rar_file);
//         print_r($entries_list);
        
//         $arch = RarArchive::open($dir);
//         if ($arch === FALSE)
//             die("Cannot open example.rar");
        
   
        
//         $entries = $arch->getEntries();
//         if ($entries === FALSE)
//             die("Cannot retrieve entries");
        
//         $ret =RarArchive::extractTo('/ziliao/careerinter-cv', $entries);
//         echo $ret;echo '<p>';
        
//         foreach ($entries as $k=>$v){
//             $filename = $v->getName();
//             echo $filename;
//             $fp = $v->getStream();
//             if(preg_match('/html$/', $filename)){
//                 $content =  stream_get_contents($fp);
//                 echo $content;
//             }else if(preg_match('/zip$/', $filename)){
//                 $zip = new ZipArchive();
//                 $content =  stream_get_contents($fp);
//                 echo $content;
//             }
//             echo '<p>';
//         }
//         print_r($entries);
        
    }
 
}