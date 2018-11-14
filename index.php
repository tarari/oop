<?php
    ini_set('display_errors','On');
    // autoload conversión namespace a file
    spl_autoload_register(function($class){
        require strtolower(str_replace('\\', '/',$class).'.php');
    });
    use Lib\Zoo;
    use Lib\Gato;
    use Lib\Comunicable;
    
    class Index{
        private $zoo;
        
        function __construct() {
            $this->zoo=new Zoo();
            
        }
        function setZoo($name){
            $this->zoo=$name;
        }
        function getZoo(){
            return $this->zoo;
        }
    }
    
    $i=new Index();
    //$i->setZoo("Zoo BCN");
    $zoo=$i->getZoo();
    $zoo->addAnimal("Lib\Gato",4);
    $zoo->getAnimal(0)->comunicar();
    $zoo->getAnimal(2)->comunicar();
    $zoo->printZoo();
    
    