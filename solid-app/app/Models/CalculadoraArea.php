<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\AreaCalculavelInterface;

class CalculadoraArea extends Model
{

    public function area($figura) {
        if ($figura instanceof AreaCalculavelInterface){
            return $figura->calcularArea();
        } else {
            return 'Figura não tem função de cálculo de área.';
        };
    }
}