<?php
class Balok
{
  public $panjang, $lebar, $tinggi;

  public function __construct($p, $l, $t )
  {
    $this->panjang = $p;
    $this->lebar =$l;
    $this->tinggi =$t;
  }

  public function getLuas() 
  {
    $z = (($this->panjang * $this->lebar) + 2 *($this->lebar * $this->tinggi) + 2 * ($this->panjang * $this->tinggi));
    $y = $this->panjang * $this->lebar;
    $x = 2 *($this->lebar * $this->tinggi);
    $o = 2 * ($this->panjang * $this->tinggi);

    echo "1. Hitunglah volume dan luah sebuah balok dengan panjang $this->panjang lebar $this->lebar dan tinggi $this->tinggi? <br> <br>
          dik ! <br>: panjang = $this->panjang<br>
              : lebar = $this->lebar<br>
              : tinggi = $this->tinggi<br><BR>
          MEMCARI LUAS BALOK <BR>
          &nbsp; = PL X 2(LT) X 2(PT) <br>
          &nbsp; =(($this->panjang * $this->lebar) + 2 *($this->lebar * $this->tinggi) + 2 * ($this->panjang * $this->tinggi)) <br>
          &nbsp; = $y + $x  + $o                 <br>
          &nbsp; = $z <br> <br>
          Jadi luas balok diatas yaitu = $z";
      
    echo "<br><br><br>";
  }

  public function getVolume() {
    $aa = $this->panjang*$this->lebar*$this->tinggi;

    echo "MENCARI VOLUME BALOK<br>
    &nbsp;= P X L X T <br>
    &nbsp;= $this->panjang*$this->lebar*$this->tinggi <br>
    &nbsp;= $aa<br> <br>
    
    Jadi volume balok adalah $aa";
  }
}

// contoh penggunaan
$objekBalok = new Balok(10, 7, 11);
$objekBalok->getLuas();
$objekBalok->getVolume();
