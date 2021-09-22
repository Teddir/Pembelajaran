<?php
class Lingkaran
{
    public function getLingkaran($diameter)
    {
        $jari = $diameter/2;
        $hasil1 = 3.14*($jari*$jari);
        echo "Luas lingkaran = ".$hasil1."\n";
    }
    public function Lingkaran()
    {  
        $diameter =12;
        Lingkaran::getLingkaran($diameter)."\n"; 
        return;
    }
}
