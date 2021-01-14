<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calcul;

class ActionController extends Controller
{
    public function calcul(Request $request){

        $number1 = intval($request->numberOne);
        $number2 = intval($request->numberTwo);
        $operator = $request->operator;

        if ($operator == '+'){
            $result = $number1 + $number2;
        } elseif ($operator == '-'){
            $result = $number1 - $number2;
        } elseif($operator == '*'){
            $result = $number1 * $number2;
        } elseif($operator == '/'){
            $result = $number1 / $number2;
        }
        return view('welcome',['result' => $result]);
    }
}
