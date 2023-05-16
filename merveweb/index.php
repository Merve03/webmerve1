<?php
    ob_start();
    $user='b211210557@sakarya.edu.tr';
    $pass='b211210557';

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
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-MERVE KARTAL</title>
    
</head>
<body>
    <div class="main">
        <div class="form-box">
            <h3><span class="ilk-harf">B</span>akü'den bir genç</h3>
            <form id="form" class="input-group" method="POST">
                <input type="email" class="input-field" name="eposta" placeholder="Kullanıcı adınızı giriniz" required>
                <input type="password" class="input-field" name="sifre" id="password" placeholder="Şifrenizi giriniz" required>
                <button type="submit" name="submit" class="submit-btn">Giriş Yap</button>
            </form>
        </div>
    </div>
</body>
</html>
