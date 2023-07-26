<?php
$db= new PDO('sqlite:veritaban/veritabanım.db');
$mesajlar=$db->query("SELECT * FROM contact");
foreach($mesajlar as $mesaj){
    
    echo "1)", $mesaj['name'] . "<br>"; 
    echo "2)", $mesaj['email'] . "<br>";
    echo "3)", $mesaj['subject'] . "<br>";
    echo "4)", $mesaj['message'] . "<br>";
    echo "----------------------------" ."<br>";       
}
?>