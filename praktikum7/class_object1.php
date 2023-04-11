<?php 
class Mamalia
{
    // properti
    public $namaHewan;
    public $warna;
    public $habitat;
    public $makanan;
    
    function bisaMenyusui()
    {
        return "$this->namaHewan ini bisa menyusui !";
    }

    function bisaBerjalan()
    {
        return "$this->namaHewan ini bisa berjalan !";
    }
}

$objek = new Mamalia;
$objek->namaHewan = "Monyet";
$objek->warna = "Coklat";
$objek->habitat = "Hutan";
$objek->makanan = "Pisang/buah-buahan";
echo $objek->bisaMenyusui();

