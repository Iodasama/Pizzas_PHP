<?php require_once ('../Config/Config.php');?>
<?php  require_once ('../controller/articleController.php');?>   
<?php require_once ('../Partials/header.php'); ?>

<main>

<?php if($getFileContent) {?>

    <p>You got an article saved in your file : </p>
    <p><?php echo $getFileContent; ?></p>
<?php } else { ?>

    <p> You saved nothing </p>

<?php } ?>
</main>

 