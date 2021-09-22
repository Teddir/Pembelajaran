<?php
class Trafesium
{
    public function __construct($sisi1, $sisi2, $tinggi)
    {
        $hasil = 1/2 * ($sisi1+$sisi2) * $tinggi;
        echo "Luas trafesium = ".$hasil;
    }
}

