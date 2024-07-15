<?php 

require_once ('../controller/getBddProductsController.php');?>

<?php require_once ('../Config/Config.php'); /*lignes de debug*/
?>
 
<?php  require_once ('../Partials/header.php');?>     


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
<!-- pas besoin de echo en simple link html puisque balise php fermée-->


<body>
        <main>
           
            <?php foreach ($products as $product) { ?> 
            <section>
                <h3>Product</h3>
                <h1><?php echo $product['titre'];?></h1> 
                <h2><?php echo $product['sous_titre'];?></h2>
                <h3><?php echo $product['date_creation'];?></h3>
                </div> 
             </section>
            <?php } ?>
  
        </main>
       
    <?php  require_once ('../Partials/footer.php');?>  

        <!-- <i class="fa-solid fa-torii-gate"></i>       -->
</body>