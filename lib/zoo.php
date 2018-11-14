<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lib;

/**
 * ArrayObject
 *
 * @author linux
 */
class Zoo {
    private $animals;
    private $name;
    function __construct() {
        echo 'NEW ZOO________'.'<br>';
        $this->animals=new \ArrayObject();
        $this->animals[]=new Perro(4,"Blanco","Tobby");
        $this->animals[]=new Perro(3,"Negro","Todd");
    }
    function addAnimal(string $bicho,int $npatas){
        $this->animals[]=new $bicho($bicho,$npatas);
    }
    
    function getAnimal(int $i):Object{
        if($i<count($this->animals)){
            return $this->animals[$i];
        }
    }
    
    function printZoo(){
        foreach ($this->animals as $animal) {
            echo $animal->getEspecie().'<br>';
        }
    }
}
