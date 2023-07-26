<?php
if(isset($_POST['yukle'])){
    
$baslik=$_POST['baslik'];
$aciklama=$_POST['aciklama'];
$dosya=$_FILES['dosya'];

$data = addslashes(file_get_contents($dosya['tmp_name']));

$db= new PDO('sqlite:veritaban/veritabanım.db');

$post = $db->prepare("INSERT INTO post (baslik, aciklama, dosya) VALUES (?,?,?);");
$post->bindParam(1, $baslik);
$post->bindParam(2, $aciklama);
$post->bindParam(3, $data);
$post->execute();

$sonpost = $db->query("SELECT * FROM post ORDER BY postID DESC LIMIT 1");
$sonpost = $sonpost->fetch(PDO::FETCH_ASSOC);
move_uploaded_file($dosya['tmp_name'],"C:\Users\yusuf\Desktop\PhpBlog\upload\\".$sonpost['postID'].".jpg");

header("Location: post.php");
}
?>