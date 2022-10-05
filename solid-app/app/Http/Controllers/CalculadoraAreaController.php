<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Quadrado;
use App\Models\Retangulo;
use App\Models\CalculadoraArea;

class CalculadoraAreaController extends BaseController
{
    public function calcularAreaQuadrado(Request $request) {
        $quadrado = new Quadrado($request->lado);
        return (new CalculadoraArea())->area($quadrado);
    }

    public function calcularAreaRetangulo(Request $request) {
        $retangulo = new Retangulo($request->altura, $request->largura);
        return (new CalculadoraArea())->area($retangulo);
    }
}
