<?php
function hitungUmur($tahunlahir){
    $hitungUmur = 2023 - $tahunlahir;
    echo $hitungUmur;
}

hitungUmur(2001);
echo "<br>";
hitungUmur(2000);
echo "<br>";
hitungUmur(1998);