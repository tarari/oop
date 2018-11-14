<?php

/**
 * 
 * @package lib Libreria animal
 * @author Toni Jimenez <t.jimenez@escolesnuria.cat> 
 */

namespace Lib;

use Lib\Animal;
use Lib\Comunicable;
/**
 * Description of perro
 *
 * @author linux
 */
class Perro extends Animal implements Comunicable{
    private  $nombre;
    function __construct($npatas,$color,$nombre) {
        parent::__construct("perro",$npatas,$color);
        
        
    }

    public function comunicar() {
        echo 'GUAu GUAu'.'<br>';
    }

}
