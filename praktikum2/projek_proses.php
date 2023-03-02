<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "123"){
    echo "selamat, kamu berhasil login !";
} else{
    echo "maaf, kamu gagal login, coba lagi !";
}