<?php
class Trafesium
{
    public function getTrafesium($sisi1, $sisi2, $tinggi)
    {
        $hasil2 = 1/2*($sisi1+$sisi2)*$tinggi;
        echo "Luas trafesium = ".$hasil2."\n";
    }

    public function Trafesium()
    {  
        $sisi1 =12;
        $sisi2 = 7;
        $tinggi = 9;
        Trafesium::getTrafesium($sisi1, $sisi2, $tinggi)."\n";
        return;
    }
}

