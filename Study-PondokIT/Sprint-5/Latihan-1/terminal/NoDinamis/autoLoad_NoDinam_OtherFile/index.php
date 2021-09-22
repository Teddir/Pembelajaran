<?php
function autoloadLingkaran($class)
{
    $file = "Lingkaran/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}

function autoloadPersegi($class)
{
    $file = "Persegi/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}

function autoloadTrafesium($class)
{
    $file = "Trafesium/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}

spl_autoload_register("autoloadLingkaran");
$oo2 = new Lingkaran();
// $oo2->Lingkaran(); ->bisa juga diisi

spl_autoload_register("autoloadPersegi");
$oo2 = new Persegi();
// $oo2->Persegi(); ->bisa juga diisi

spl_autoload_register("autoloadTrafesium");
$oo2 = new Trafesium();
// $oo2->Trafesium(); ->bisa juga diisi

?>