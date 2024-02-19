<?php
 $koneksi = mysqli_connect("localhost", "root", "", "galleryfotorpl3");
 if(isset($_GET["submit"])){
 $foto=$_GET["fNo"];
 $keterangan=$_GET["ffoto kegiatan"];
 $tanggal=$_GET["fjudul kegiatan"];
 $userid=$_GET["ftanggal"];
 $action=$_GET["action"];
 $query="INSERT INTO album VALUES('','$nama','$deskripsi','$tanggal','$userid')";
 mysqli_query($koneksi,$query);
 }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tambah.php" method="get">
    <table>
        <tr>
            <td>foto</td>
            <td>:</td>
            <td><input type="text" name="ffoto" id="" ></td>
        <tr>
        <tr>
            <td>keterangan</td>
            <td>:</td>
            <td><input type="text" name="fketerangan" id="" ></td>
         <tr>
        <tr>
            <td>tanggal</td>
            <td>:</td>
            <td><input type="date" name="ftanggal" id="" ></td>
        <tr>   
      </tr>
  <td></td> 
    <td></td>
       <input type="submit" name="sumbit" id="" ></td>
     </td>
        </tr>
    </table>
</body>
</html>