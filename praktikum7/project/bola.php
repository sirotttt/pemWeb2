<?php
class Bola
{
    public $phi, $jari2;

    public function __construct ($p, $j)
    {
        $this->phi = $p;
        $this->jari2 = $j;
    }

    public function getLuas()
    {
        $ab = 4 * ($this->phi * $this->jari2 * $this->jari2);
        $aa = ($this->phi * $this->jari2 * $this->jari2);
        $ac = $this->phi;
        $ad = $this->jari2;
        return "2. Anton memiliki sebuah bola baru dan dia ingin mengetahui luas dan volume dari bula tersebut <br>
                kemudian dia mengetahui bahwa jari jari bola tersebut $ad.<br>
                marih kita bantu anton untuk mencari tahu luas dan volume dari bola tersebut! <br><br>
                
                Rumus mencari luas bola<br>
                luas bola = 4 * phi * jari-jari <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                = 4 * ($this->phi * $this->jari2 * $this->jari2) <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                = 4 * $aa <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                = $ab<br><br>
                Jadi luas bola anton adalah $ab
                ";
    }

    public function getVolume()
    {
        $ba = 4/3 * ($this->phi * $this->jari2 * $this->jari2 * $this->jari2);
        $bb = ($this->phi * $this->jari2 * $this->jari2 * $this-> jari2);
       
        return "Rumus mencari volume bola<br>
                volume = 4/3 * phi * jari-jari^3 <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                = 4/3 * ($this->phi * $this->jari2 * $this->jari2 * $this->jari2) <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                = 4/3 * $bb <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                = $ba<br><br>
                Jadi volume bola tersebut adalah $ba
                ";
    }
}

$objekBola = new Bola(13, 17, );
echo $objekBola->getLuas();
echo "<br> <br><br>";
echo $objekBola->getVolume();


?>