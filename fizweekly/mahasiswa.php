<!DOCTYPE .php>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="D:\faiz\coding\webti\assets\css\style.css">
</head>
<body>
    <h1 align="center">WEB TI UNIMUS 2026</h1>
    
    <table border="1" align="center" cellspacing="0" cellpadding="10">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profil.php">Profil</a></td>
            <td><a href="sosmed.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data mahasiswa</a></td>
        </tr>
    </table>
    
    <h2>Data Mahasiswa</h2>
    
    <a href="tambahdata.php">
        <button>Tambah Data</button>
    </a>


    <table border="1" cellpadding="5">
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">NIM</th>
            <th rowspan="2">Foto</th>
            <th rowspan="2">Jurusan</th>
            <th rowspan="2">Email</th>
            <th rowspan="2">No HP</th>
            <th rowspan="2">Aksi</th>
        </tr>
        <tr>

        </tr>
        <tr>
            <td align="center">1</td>
            <td>Niki Lauda</td>
            <td>13242520018</td>
            <td><img src="assets/images/foto.jpg" width="70" alt="Foto Niki"></td>
            <td align="center">Teknologi Informasi</td>
            <td align="center">faiz@example.com</td>
            <td align="center">0812345678</td>
            <td>
                <a href="editdata.php"><button>Edit</button></a>
                <a href="deletedata.php"><button>Hapus</button></a>
            </td>
        </tr>
        <tr>
            <td align="center">2</td>
            <td>Niki Lauda</td>
            <td>13242520018</td>
            <td><img src="assets/images/foto.jpg" width="70" alt="Foto Niki"></td>
            <td align="center">50</td>
            <td align="center">90</td>
            <td align="center">60</td>
        </tr>
    </table>
    
    <hr/>
    
    <table border="1" cellspacing="5" cellpadding="10">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td colspan="2" rowspan="2" align="center">?</td>
            <td>2,4</td>
        </tr>
        <tr>
            <td>3,1</td>
            <td>3,4</td>
        </tr>
        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
        </tr>
    </table>

</body>
</.php>