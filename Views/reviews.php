<?php require_once ('../Config/Config.php'); /*lignes de debug*/
?>
 
<?php  require_once ('../Partials/header.php');?>     

<?php  require_once ('../controller/reviewsController.php');?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
<!-- pas besoin de echo en simple link html puisque balise php fermée-->


<body>
        <main>
           
            <?php foreach ($reviews as $review) { ?> 
            <section>
                <div class="reviews"> 
                <h3>User Comments </h3>
                <h1><?php echo $review['user'];?></h1> 
                <h2><?php echo $review['message'];?></h2>
                <h3><?php echo $review['rating'];?>/5</h3>
                </div> 
             </section>
            <?php } ?>
  
        </main>
       
    <?php  require_once ('../Partials/footer.php');?>  

        <!-- <i class="fa-solid fa-torii-gate"></i>       -->
</body>