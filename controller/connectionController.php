<?php 

require_once ('../Config/Config.php'); /*lignes de debug*/


function logUSer(){ 

 
    session_start();

    $_SESSION['username'] = $_POST['username'];

}

function redirectToAdmin(){ 

    header("Location:http://localhost/piscine-php-tpblog/Views/adminCreateArticles.php") ;

}