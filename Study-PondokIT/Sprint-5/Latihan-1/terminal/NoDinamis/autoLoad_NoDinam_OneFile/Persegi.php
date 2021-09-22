<?php
class Persegi
{
    public function getPersegi($panjang, $tinggi)
    {
        $hasil = $panjang*$tinggi;
        echo "luas Persegi = ".$hasil."\n";
        if ($panjang < 0) {
            $hasil = $panjang* $lebar;
            return $hasil;

        }
    }
    public function Persegi()
    {  
        $panjang =3;
        $lebar = 2;
        Persegi::getPersegi($panjang, $lebar)."\n";
        return;
    }
}

