<?php require_once ('../Config/Config.php'); /*lignes de debug*/
?>
<?php require_once ('../controller/commandeController.php');?>


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
    <main>  
        <!-- je check ma page -->
        <p> Hello World!
        </p>

        <?php foreach ($orders as $order) { ?> 
            <article>
                <h3><?php echo $order ['id'];?></h3>
                <h3><?php echo $order ['customer'];?></h3>
                <p>Price : <?php echo $order ['amount'];?></p>
                <p><?php foreach ($order['products'] as $product) { ?>
                    <?php echo $product;?>
                <?php } ;?></p>
                <!-- j utilise la classe DateTime avec le mot cle new et je lui place en parametre ma date en chaine de caractere. DateTime cree une vraie date que l on va pouvoir manipuler: afficher uniquement le mois ou l annee avec le format souhaité. On peut aussi comparer deux dates ou encore ajouter x secondes ou x mois a une date   -->
                <?php $createdAtDateTime = new DateTime($order['date']); ?>
                <!-- on choisit le format avec new DateTime->, la -> appelle la fonction en php comme => en JS -->
                <p> Creation Date: <?php echo $createdAtDateTime->format("Y/m/d"); ?> </p>  
                <!-- appel de fonction dans php -> -->
            </article>

        <?php } ?> 
    </main>

    
</body>
</html>
