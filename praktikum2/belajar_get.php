<?php
$nama = $_GET['nama'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$hobi = $_GET['hobi'];
$nim = $_GET['nim'];
$prodi = $_GET['prodi'];

echo "<h2>From Pendaftaran</h2><br>";
echo "Nama :" . $nama . "<br>";
echo "Jenis Kelamin : " . $jenis_kelamin . "<br>";
echo "Hobi : " . $hobi . "<br>";
echo "NIM : " . $nim . "<br>";
echo "Program Studi : " . $prodi;