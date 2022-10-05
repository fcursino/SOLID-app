<?php

namespace App\Models;

use App\Models\Conteudo;

class Pdf extends Conteudo
{

    private string $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function retornarLink() {
        return "https://".$this->url.".pdf";
    }    
}