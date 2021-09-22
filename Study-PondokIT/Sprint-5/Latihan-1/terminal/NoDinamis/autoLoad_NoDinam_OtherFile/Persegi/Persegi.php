<?php
class Persegi
{
    public function getPersegi($panjang, $tinggi)
    {
        $hasil = $panjang*$tinggi;
        echo "Luas Persegi = ".$hasil."\n";
        if ($panjang < 0) {
            throw new Exception("Error  broo makanya seriusssss");
            $hasil = $panjang* $lebar;
            return $hasil;

        }
    }
    public function Persegi()
    {  
        $panjang = 12;
        $lebar = 6;
        Persegi::getPersegi($panjang, $lebar)."\n";
    }
}

