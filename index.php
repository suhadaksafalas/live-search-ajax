<?php 

session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>LOGIN</title>
</head>
<body>

   

    <div class="kotak_login ">
        <div class="login">
            <h2>SILAHKAN LOGIN</h2>
            <div class="notiv">
                <?php
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan'] == "gagal"){
                            echo "<script>alert('Gagal Login! Username dan password anda salah!')</script>";
                        }else if($_GET['pesan'] == "logout"){
                            echo "<p style='color: red;'>Berhasil Logout</p>";
                        }else if($_GET['pesan'] == "belum_login"){
                            echo "Login dahulu";
                        }
                    }

                ?>
            </div>
        </div>
       <form class="kotak" action="config-login.php" method="post">
           <div>
               <img src="" alt="">
           </div>
            <input class="inp" type="text" name="username" placeholder="Username" required autocomplete='off'>
            <br>
            <br>
            <input class="inp" type="password" name="password" placeholder="Password" required>
            <br>
            <br>
            <input class="btn" type="submit" value="LOGIN">
       </form>
       <div class="lupa">
            <a href="#">Lupa Password?</a>
       </div>
    </div>

</body>
</html>