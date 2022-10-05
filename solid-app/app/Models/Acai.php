<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\ComestivelInterface;
use App\Interfaces\BebivelInterface;

class Acai extends Model implements BebivelInterface, ComestivelInterface
{
    public function consumirAcai() {
        $acai = new Acai();
        return $acai->comer()." e ".$acai->beber();
    }

    public function comer() {
        return "Você pode comer o açaí";
    }

    public function beber() {
        return "Você pode beber o açaí";
    }
}