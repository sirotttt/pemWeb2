<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handlin</title>
</head>
<body>
    <h1>From Pendaftaran Mahasiswa</h1>
    <form action="belajar_post.php"  method="POST">
        <!-- tipe teks -->
        <label for="">Nama Mahasiswa </label> <br>
        <input type="text" name="nama"> <br> <br>
        <!-- /tipe radio -->
        <label for="">Jenis Kelamin</label> <br>
        <input type="radio" name="jenis_kelamin" value="Laki-Laki">
            <label for="">Laki-Laki</label>
        <input type="radio" name="jenis_kelamin" value="Perempuan">
            <label for="">Perempuan</label> <br> <br>
        <!-- tipe checkbox -->
        <label for="">Hobi</label> <br>
        <input type="checkbox" name="hobi" value="sepak bola"> 
            <label for="">Sepak Bola</label>
        <input type="checkbox" name="hobi" value="congklak"> 
            <label for="">Congklak</label>
        <input type="checkbox" name="hobi" value="Game Online">
            <label for="">Game Online</label>
        <input type="checkbox" name="hobi" value="basket">
            <label for="">Basket</label> <br> <br>
        <!-- tipe number -->
        <label for="">NIM</label>
        <input type="number" name="nim"> <br> <br>
        <!-- select -->
        <label for="">Prodi</label> <br>
        <select name="prodi">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select> <br><br>
        <!-- button -->
        <button type="submit">Kirim !</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>