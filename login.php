<?php
    if(isset($_GET["submit"])){
        $foto=$_GET["fLogin"];
        
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
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="wrap-card">
        <h1>Log In</h1>
        <?php  if(isset($error)){ ?>
               <p style="color: red;">username atau password salah</p> 
        <?php } ?>
        <form action="login.php" method="post">
            <div class="card-name">
                <label for="email">usernama</label>
                <input type="text" name="fusername" id="email">
            </div>
            <div class="card-name">
                <label for="password">password</label>
                <input type="password" name="fpassword" id="password">
            </div>
            <div class="card-name">
                <button type="submit" name="submit">Log In</button>
            </div>
        </form>
        <span>buat akun <a href="registrasi.php">di sini</a></span>
    </div>
</body>
</html>