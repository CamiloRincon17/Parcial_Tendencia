<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index()
    {
        return view('calculadora');
    }

    public function calcular(Request $request)
    {
        $num1      = $request->input('numero1');
        $num2      = $request->input('numero2');
        $operacion = $request->input('operacion');

        $resultado = match ($operacion) {
            'Suma'           => $num1 + $num2,
            'Resta'          => $num1 - $num2,
            'Multiplicación' => $num1 * $num2,
            'División'       => $num2 != 0 ? $num1 / $num2 : 'Error: División por cero',
            default          => 'Operación no válida',
        };

        return view('calculadora', compact('num1', 'num2', 'operacion', 'resultado'));
    }
}
