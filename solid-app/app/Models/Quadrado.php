<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\AreaCalculavelInterface;

class Quadrado extends Model implements AreaCalculavelInterface
{

    private float $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}