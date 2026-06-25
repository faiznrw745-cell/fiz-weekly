<?php
require 'fungsi.php';

if(isset($_POST["kirim"]))
{
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $nohp = $_POST["hp"];
    $foto = $_POST["foto"];

    $query = "INSERT INTO mahasiswa
            (nama, nim, jurusan, email, no_hp, foto)
            VALUES
            ('$nama', '$nim', '$jurusan', '$email', '$nohp', '$foto')";

    mysqli_query($koneksi, $query);

    if(mysqli_affected_rows($koneksi) > 0){
        header("Location: mahasiswa.php");
        exit;
    } else {
        echo mysqli_error($koneksi);
    }
}
?>

<form action="" method="post">
<!DOCTYPE .html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | Teknologi Informasi</title>
    <link rel="stylesheet" href="D:\faiz\coding\webti\assets\css\style.css">
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="mahasiswa.php" method="post">
        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama :</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" required/></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="text" id="nim" name="nim"/></td>
                
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan :</label></td>
                <td>:</td>
                <td><input type="text" id="jurusan" name="jurusan" required/></td>
            </tr>
             <tr>
                <td><label for="email">E-mail</label></td>
                <td>:</td>
                <td><input type="email" id="email" name="email"/></td>
                
            </tr>
            <tr>
                <td><label for="hp">No Hp</label></td>
                <td>:</td>
                <td><input type="tel" id="hp" name="hp"/></td>
                
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="text" id="foto" name="foto"/></td>
            </tr>

            <tr>
                <td colspan="3">
                    <button type="submit" name="kirim">Tambah Data</button>
                </td>
            </tr>

        </table>
    </form>
    <br>
    <hr>
   
    </form>
</body>