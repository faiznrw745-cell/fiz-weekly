<!DOCTYPE .php>

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
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="file" id="foto" name="foto"/></td>
            </tr>
            <tr>
                <td><label for="uts">UTS</label></td>
                <td>:</td>
                <td><input type="number" id="uts" name="uts"/></td>
            </tr>
            <tr>
                <td><label for="uas">UAS</label></td>
                <td>:</td>
                <td><input type="number" id="uas" name="uas"/></td>
            </tr>
            <tr>
                <td><label for="tugas">Tugas</label></td>
                <td>:</td>
                <td><input type="number" id="tugas" name="tugas"/></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="submit">Tambah Data</button>
                </td>
            </tr>

        </table>
    </form>
    <br>
    <hr>
    <form>
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
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="text" id="password" name="password" required/></td>
                
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" id="email" name="email"/></td>
                
            </tr>
            <tr>
                <td><label for="hp">No Hp</label></td>
                <td>:</td>
                <td><input type="tel" id="hp" name="hp"/></td>
                
            </tr>
            <tr>
                <td><label for="web">Web Pribadi</label></td>
                <td>:</td>
                <td><input type="url" id="web" name="web"/></td>
                
            </tr>
            <tr>
                <td><label for="tgl">Tanggal Lahir</label></td>
                <td>:</td>
                <td><input type="date" id="tgl" name="tgl"/></td>
                
            </tr>
            <tr>
                <td><label for="warna">Warna Favorit</label></td>
                <td>:</td>
                <td><input type="color" id="warna" name="warna"/></td>
                
            </tr>
            <tr>
                <td><label for="kepuasan">Tingkat Kepuasan</label></td>
                <td>:</td>
                <td><input type="range" id="kepuasan" name="kepuasan"/></td>
                
            </tr>
           <tr>
            <td><label>Jenis kelamin</label></td>
            <td>:</td>
            <td>
            <input type="radio" name="kelamin" value="laki-laki"> Laki-laki <br>
            <input type="radio" name="kelamin" value="perempuan"> Perempuan
            </td>
            </tr>
             <tr>
                <td><label for="hobi">Hobi</label></td>
                <td>:</td>
                <td><input type="checkbox" name="hobi" value="baca buku">Baca Buku<br>
                <input type="checkbox" name="hobi" value="badminton">Badminton<br>
                <input type="checkbox" name="hobi" value="nonton film">Nonton Film
                </td>
             </tr>
                
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="file" id="foto" name="foto"/></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td>:</td>
                <td><input type="text" id="alamat" name="alamat"/></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                    <td>:</td>
                    <td><select name="jurusan" id="jurusan">
                    <option value="TI">TI</option>
                    <option value="IF">IF</option>
                    <option value="BI">BI</option>
                </select>
                </td>
            </tr>
            
            <tr>
                <td colspan="3">
                    <button type="submit" name="submit">Submit</button>
                </td>
            </tr>
    </form>
</body>