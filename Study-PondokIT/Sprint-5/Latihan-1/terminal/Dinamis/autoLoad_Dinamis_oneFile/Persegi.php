<?php
class Persegi
{
    public function getPersegi($panjang, $tinggi)
    {
        $hasil = $panjang*$tinggi;
        echo "luasnya = ".$hasil."\n";
        if ($panjang < 0) {
            throw new Exception("Error  broo makanya seriusssss");
            $hasil = $panjang* $lebar;
            return $hasil;

        }
    }
    public function Persegi()
    {  
        echo " ==================== "."\n";
        echo " |    PERSEGEGI    | "."\n";
        echo " ==================== "."\n";   
        echo "Panjang :";
        $panjang =(int) trim(fgets(STDIN));
        echo "Lebar :";
        $lebar = (int) trim(fgets(STDIN));
        Persegi::getPersegi($panjang, $lebar)."\n";
    }
}

