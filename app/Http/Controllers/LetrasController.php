<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class LetrasController extends Controller
{
    /*
    var words = ['IDEA, EXPLORA     ', 'EL EVENTO DE   ', 'MAS GRANDE    '],
   words2 = [  'DEL SURESTE.  '],
    */
    private $palabras=array(
        0=>array(
            0=>'IDEA, EXPLORA  ',
            1=>'EL EVENTO DE   ',
            2=>'MÁS GRANDE     '
        ),
        1=>array(
            0=>'EMPRENDE.      ',
            1=>'EMPRENDIMIENTO ',
            2=>'DEL SURESTE.   '
        )
    );
    public function lettras($tamanio,$subindice){
        
        //dd(strlen($this->palabras[0][$subindice]));
        $texto1=substr($this->palabras[0][$subindice],0,$tamanio);
        $texto2=substr($this->palabras[1][$subindice],0,$tamanio);
        return response()->json(['text1'=>$texto1,'text2'=>$texto2],200);
    }
}