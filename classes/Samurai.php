<?php

class Samurai extends Character implements AttackInterface{

    public function attack():void{
        echo "The samurai attacks quickly.\n";
    }
}

?>