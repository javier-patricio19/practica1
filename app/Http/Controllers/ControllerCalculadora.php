<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCalculadora extends Controller
{
    public function calcular(Request $request){
        $validados = $request->validate([
            'num1' => 'required',
            'num2' => 'required'
        ]);
        $op = $request -> input('operacion');
        $num1 = $request -> input('num1');
        $num2 = $request -> input('num2');

        switch($op){
            case 'suma':
                return view('index', [
                    'num1' => $num1,
                    'num2' => $num2,
                    'op' => '+',
                    'resultado' => $num1+$num2
                ]);
            case 'resta':
                return view('index', [
                    'num1' => $num1,
                    'num2' => $num2,
                    'op' => '-',
                    'resultado' => $num1-$num2
                ]);
            case 'multi':
                return view('index', [
                    'num1' => $num1,
                    'num2' => $num2,
                    'op' => 'x',
                    'resultado' => $num1*$num2
                ]);
            case 'division':
                return view('index', [
                    'num1' => $num1,
                    'num2' => $num2,
                    'op' => '/',
                    'resultado' => $num1/$num2
                ]);
        }
    }
}
