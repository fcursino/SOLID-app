<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Acai;
use App\Models\Refrigerante;
use App\Models\BatataFrita;

class ConsumoLanchesController extends BaseController
{
    public function consumirLanches() {
        return Acai::consumirAcai()."///".Refrigerante::consumirRefrigerante()."///".BatataFrita::consumirBatataFrita();
    }
}
