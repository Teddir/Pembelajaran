<?php
class Lingkaran
{
    public function getLingkaran($diameter)
    {
        $jari = $diameter/2;
        $hasil1 = 3.14*($jari*$jari);
        echo "Luas Lingkaran = ".$hasil1."\n";
    }
    public function Lingkaran()
    {  
        $diameter =10;
        Lingkaran::getLingkaran($diameter)."\n"; 
        return;
    }
}
