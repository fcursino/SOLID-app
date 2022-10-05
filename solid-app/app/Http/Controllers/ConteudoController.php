<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Video;
use App\Models\Pdf;

class ConteudoController extends BaseController
{
    public function entregarLinkVideo() {
        return (new Video("video"))->retornarLink();
    }

    public function entregarLinkPdf() {
        return (new Pdf("pdf"))->retornarLink();
    }
}
