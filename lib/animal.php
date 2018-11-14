<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lib;

/**
 * Classe abstracta animal
 *
 * @author linux
 */
abstract class Animal {
    private  $patas;
    private $color;
    private $especie;
    function __construct(string $especie,int $npatas,string $color=null) {
        $this->especie=$especie;
        $this->patas=$npatas;
        $this->color=$color;
    }
    function getEspecie(){
        return $this->especie;
    }
}
