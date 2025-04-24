<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function tinhtich($a, $b){ 
         return $a*$b;
    }
    public function tinhtong($a, $b){ 
        return $a+$b;
    }   
    public function cong2so($a , $b){
       return View('cong2so',['kq'=> $a +$b]);
    }
     
}
