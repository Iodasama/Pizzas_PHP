<?php 

session_start ();

if ($_SESSION['username'] !== 'LeiJie') { 


    header("Location:http://localhost/piscine-php-tpblog/Views/connection.php");

}

file_put_contents('../articles.txt','');