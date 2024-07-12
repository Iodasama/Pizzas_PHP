<?php require_once ('../Config/Config.php'); /*lignes de debug*/
?>

<?php require_once ('../controller/adminCreateArticlesController.php'); /*lignes de debug*/

?>
<?php require_once ('../Partials/header.php'); ?>

<main class="sectioncreatearticle">
    <section class="sectioncreatearticle">
        <h2>Create an article</h2>
        <form method="post" class="create-articles">
            <div class="inputWrapper">

                <label for="titre"> Titre </label>

                <input id="titre" type="text" name="Title" />
            </div>
            <div class="inputWrapper">
            <label for="Content"> Contenu
               
            </label>
            <input id="Content" type="text" name="Content" />
            </div>
            <div class="inputWrapper">
            <label for="" class="Image"> Image
                
            </label>
            <input id="" type="text" name="Image" />
            </div>
            <input type="submit" value="Create">
        
        </form>
       

        <?php if (isRequestPost()) { ?>





            <?php if (isStringTooShort($_POST['Title'], 3)) { ?>

                <p>Title length is not valid </p>

            <?php } ?>

            <?php if (isStringTooShort($_POST['Content'], 3)) { ?>

                <p>Content length is not valid </p>

            <?php } ?>

            <?php if (isStringTooShort($_POST['Image'], 60)) { ?>

                <p>Image length is not valid </p>

            <?php } ?>



            <?php if (!isStringTooShort($_POST['Title'], 3) && !isStringTooShort($_POST['Content'], 3) && !isStringTooShort($_POST['Image'], 60)) { ?>

                <p>Un message a bien ete envoyé !! </p>

                <h3><?php echo $_POST['Title']; ?></h3>
                <h2><?php echo $_POST['Content'] ?></h2>
                <div class="postImage"><img src="<?php echo $_POST['Image']; ?>"> </div>

            <?php } ?>






        <?php } ?>



    </section>
</main>
<?php require_once ('../Partials/footer.php'); ?>
<?php require_once ('../Partials/sidebar.php'); ?>