<?php
    $koneksi = mysqli_connect("localhost", "root", "", "galleryfotorpl3");

    $hasil = mysqli_query($koneksi, "SELECT * FROM foto");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <h1>gallery foto</H1>
    <a href="tambah.php">tambah data</a>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>foto kegiatan</th>
                <th>judul kegiatan</th>
                <th>tanggal</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($hasil)): ?>
            <tr>
                <td>1</td>
                <td><img src="gambar/<?= $row["foto"]?>" width=100px alt=""></td>
                <td>bermain disekolah</td>
                <td>12-08-2024</td>
                <td>
                    <a href="">edit</a> | <a href="">hapus</a>
                </td>
            </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</body>
</html>