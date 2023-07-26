<?php
if(isset($_POST['button'])){
    echo "Talebiniz iletildi ";
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$db= new PDO('sqlite:veritaban/veritabanım.db');
$db->exec("INSERT INTO contact (name, email, subject,message) VALUES ('$name','$email','$subject','$message');");

}
?>