<?php

require_once("classes/Character.php");
require_once("classes/AttackInterface.php");
require_once("classes/Ghost.php");
require_once("classes/Samurai.php");

function doMove(Character $character)
{
    $character->move();
}

function doAtack(AttackInterface $samurai)
{
    $samurai->attack();
}

$enemy = new Ghost();
doMove($enemy); 

$hero = new Samurai();
doAtack($hero);

?>