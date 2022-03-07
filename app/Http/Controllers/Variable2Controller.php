<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Variable2Controller extends Controller
{
    public function index(){
        $a=3;
        $b=7;
        $c=11;
        $jumlah=10;
        $selisih=$b-$a;
        //dd(deret);
        for($i=1; $i <= $jumlah; $i++){
            $deret[$i]=$a+($i-1)*$selisih;
            
        }
        return view('latihanphp2', compact('deret'));
    }
}
