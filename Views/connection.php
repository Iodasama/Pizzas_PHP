<?php require_once ('../Config/Config.php'); /*lignes de debug*/
?>
<?php require_once ('../controller/connectionController.php');?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
<link rel="stylesheet" type="text/css" href="../Assets/style.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
       <div class="login">
            <div> 
                <label for="username" > UserName </label>
                <input type="text" id="username" name="username" required> 
            </div>
            <div> 
                <label for="password" >Login </label>
                <input type="password" id="password" name="password" required> 
            </div>
            <div>
            <button type="submit">Connection</button>
            </div>
        </div> 
    </form>     
</body>
</html>

<?php 

function isRequestPost(){
    return $_SERVER['REQUEST_METHOD']==="POST";
}

if (isRequestPost() && 
    $_POST['username']=== 'LeiJie' && 
    $_POST['password']=== '123MDP') {  ?>

    <!-- // $_SESSION['username']===$_POST['username']&&
    // $_SESSION['password']===$_POST['password']  -->

    <p>You re logged </p>

<?php  

logUSer();
redirectToAdmin();

?>
  
<?php  } else {?>

<p>Wrong username Try again!!!</p>

<?php } ?>



<!-- 

refactorisation CFf connectionController
session_start();

$_SESSION['username'] = $_POST['username']; 

header("Location:http://localhost/piscine-php-tpblog/Views/adminCreateArticles.php") ; -->


