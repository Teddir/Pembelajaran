<?php
function __autoload($class)
{
    require_once($class.".php");
}


$oo2 = new Persegi();
$oo2 = new Lingkaran();
$oo2 = new Trafesium();

?>