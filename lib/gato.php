<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lib;

use Lib\Animal;
use Lib\Comunicable;
/**
 * Description of gato
 *
 * @author linux
 */
class Gato extends Animal implements Comunicable{
    private $nombre;
    function __construct(string $especie, int $npatas, string $color = null) {
        parent::__construct("gato", $npatas, $color);
    }

    public function comunicar() {
        echo 'MIAUUUUU'.'<br>';
    }

}
