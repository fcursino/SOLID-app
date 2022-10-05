<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\ComestivelInterface;

class BatataFrita extends Model implements ComestivelInterface
{

    public function consumirBatataFrita() {
        $batata = new BatataFrita();
        return $batata->comer();
    }

    public function comer() {
        return "Você pode comer a batata frita";
    }
}