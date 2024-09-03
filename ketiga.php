<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;
    
    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }

    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

$nasi_tumpeng = new Kerucut();
$nasi_tumpeng->jari_jari = 4;
$nasi_tumpeng->tinggi = 10;
echo "Volume dari nasi tumpeng : " . $nasi_tumpeng->volume();

$helipad = new Lingkaran();
$helipad->jari_jari = 30;
echo "\nLuas helipad : " . $helipad->luas();
echo "\nKeliling helipad : " . $helipad->keliling();

$bola_sepak = new Bola();
$bola_sepak->jari_jari = 8;
echo "\nVolume bola sepak : " . $bola_sepak->volume();

$tangki = new Tabung();
$tangki->jari_jari = 21;
$tangki->tinggi = 120;
echo "\nVolume tangki : " . $tangki->volume();