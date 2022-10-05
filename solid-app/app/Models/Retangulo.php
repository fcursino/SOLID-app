<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\AreaCalculavelInterface;

class Retangulo extends Model implements AreaCalculavelInterface
{

    private float $altura;
    private float $largura;

    public function __construct($altura, $largura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->altura * $this->largura;
    }
}