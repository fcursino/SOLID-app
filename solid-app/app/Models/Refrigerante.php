<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\BebivelInterface;

class Refrigerante extends Model implements BebivelInterface
{

    public function consumirRefrigerante() {
        $refri = new Refrigerante();
        return $refri->beber();
    }

    public function beber() {
        return "Você pode beber o refrigerante";
    }
}