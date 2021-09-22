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

        echo " ==================== "."\n";
        echo " |     LINGKARAN    | "."\n";
        echo " ==================== "."\n";
        echo "Jari-Jari :";
        $diameter =(int) trim(fgets(STDIN));
        Lingkaran::getLingkaran($diameter)."\n"; 
        return;
    }
}
