<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function result($first_value, $sign, $second_value){
        switch($sign){
            case 'addition':
                $result = $first_value + $second_value; 
                break;
            case 'subtraction':
                $result = $first_value - $second_value;
                break;
            case 'multiplication':
                $result = $first_value * $second_value;
                break;
            case 'division':
                $result = $first_value / $second_value;
                break;
        }
        
        return view("calculation.calcs",["result"=> $result]);
    }
}
