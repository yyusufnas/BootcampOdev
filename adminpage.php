<?php
$user = 'siber';
$pass = 'yavuzlar';
if(isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];

if($username == $user && $password == $pass){
 echo "Giriş yapıldı";
 header('Location: panel.php');
}
else {
    echo 'Hata,Kullanıcı adı veya şifre yanlış';
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sayfası</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ccc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 320px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .login-form {
            display: flex;
            flex-direction: column;
        }

        .login-form label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 16px;
        }

        .login-form button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Giriş Yap </h2>
        <p>(siber/yavuzlar)</p>
        <form class="login-form" method="POST" action="adminpage.php">
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" id="username" name="username" placeholder="Kullanıcı adınızı girin" required>

            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" placeholder="Şifrenizi girin" required>

            <button type="submit">Giriş Yap</button>
        </form>
    </div>
</body>
</html>
