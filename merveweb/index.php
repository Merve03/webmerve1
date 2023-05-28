<?php
    ob_start();
    $user='b211210554@sakarya.edu.tr';
    $pass='b211210554';

    if(isset($_POST['submit']))
    {
        $username=$_POST['eposta'];
        $password=$_POST['sifre'];

        if ($username==$user && $password==$pass)
        {
            header('location:index.html');
            
            exit();
        }
        else 
        {
            echo "E-Posta veya şifre hatalı";
            header('index.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login-MERVE KARTAL</title>
    
</head>
<body>
    
        <div class="form-box" style="margin: auto;">
            <h3><span class="ilk-harf" style="margin-left: 590px; margin-top:40px;">SİTEME GİRİŞ </span></h3>
            <form id="form" class="input-group" method="POST" style="margin: auto;">
                <input type="email" class="input-field" id="eposta" name="eposta" placeholder="b211210554@sakarya.edu.tr" required style="margin-left:550px; margin-top:200px; border-radius:5px; width:200px"></br>
                <input type="password" class="input-field" id="pass" name="sifre" id="password" placeholder="b211210554" required style="margin-left:550px; margin-top:180pxpx; border-radius:5px; width:200px; "></br>
                <button type="submit" name="submit" class="submit-btn" style="margin-left:610px;border-radius: 5px;margin-top:10px; background-color:brown;">Giriş Yap</button>
            </form>
        </div>
    
</body>
</html>
