<?php
class Trafesium
{
    public function getTrafesium($sisi1, $sisi2, $tinggi)
    {
        $hasil2 = 1/2*($sisi1+$sisi2)*$tinggi;
        echo "Hasilnya = ".$hasil2."\n";
    }

    public function Trafesium()
    {  
        echo " ==================== "."\n";
        echo " |     TRAFESIUM    | "."\n";
        echo " ==================== "."\n";
        echo "Sisi Sejajar A :";
        $sisi1 =(int) trim(fgets(STDIN));
        echo "Sisi Sejajar B :";
        $sisi2 = (int) trim(fgets(STDIN));
        echo "Tinggi :";
        $tinggi = (int) trim(fgets(STDIN));
        Trafesium::getTrafesium($sisi1, $sisi2, $tinggi)."\n";
        return;
    }
}

