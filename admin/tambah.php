<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/index-admin.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="bagian-header ignielGradient">
        <h2>Selamat Datang</h2>
        <div class="menu">
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="#">Tentang</a></li>
            </ul>
        </div>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
   
    <div style="padding: 40px; background-color: white;">
        <form action="config-tambah.php" method="post" style="width: 800px;">
         
            <table>
            <h2 style="">TAMBAH DATA MAHASISWA</h2>            
                <tr>
                    <td>NIM</td>
                    
                    <td><input style="box-sizing: border-box; width: 500px; padding: 5px;" type="text" name="nim" required autocomplete='off'></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    
                    <td><input style="box-sizing: border-box; width: 500px; padding: 5px;" type="text" name="nama" required autocomplete='off'></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select name="jenis_kelamin" id="" style="box-sizing: border-box; width: 500px; padding: 5px;">
                            <option value="">--------------------------------------------------- Pilih --------------------------------------------------- </option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    
                    <td><input style="box-sizing: border-box; width: 500px; padding: 5px;" type="text" name="prodi" required autocomplete='off'></td>
                </tr>
                <tr>
                <tr>
                    <td>Alamat</td>
                    
                    <td><input style="box-sizing: border-box; width: 500px; padding: 5px;" type="text" name="alamat" required autocomplete='off'></td>
                </tr>
                <tr>
                <td>Nomor telepon</td>
                
                <td><input style="box-sizing: border-box; width: 500px; padding: 5px;" type="text" name="telpon" required autocomplete='off'></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td> </td>
                    <td><input style="box-sizing: border-box; width: 500px; padding: 10px; background-color: crimson; color: white; cursor: pointer; border: none;" type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </div>


    </body>
</html>

