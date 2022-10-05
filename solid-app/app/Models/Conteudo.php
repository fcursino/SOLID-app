<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class Conteudo extends Model
{
    private string $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function retornarLink() {
        return "https://".$this->url;
    }
}