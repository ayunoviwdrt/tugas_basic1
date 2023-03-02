<?php
class luas
{

    public function segitiga($alas, $tinggi)
    {
        return $alas * $tinggi / 2;
    }
}

$luas = new Luas();

$alas = 6;
$tinggi = 15;
echo $luas->segitiga($alas, $tinggi);
