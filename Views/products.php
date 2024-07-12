<?php 

require_once ('../controller/productsController.php'); ?>

<?php 

require_once ('../Partials/header.php'); ?>

<?php require_once ('../Config/Config.php');?>

<main>
    <form class="category">
        <!-- <div class="pricesMaxMin"> -->
        
            <select name="category">
                <option value="" selected disabled>Category</option> 
                <?php foreach ($categorys as $category){?>
                <option value="<?php echo $category?>"><?php echo $category ?></option>
                <?php  }?>
            </select>
            <!-- une fois mon foreach cree je rajoute un tableau vide dans mon controller pour rajouter les Category que je souhaite -->
            
            <label>Prix minimum : </label>
            <input type="number" placeholder="100" name="minPrice"min="<?php echo $productMinprice?>" max="<?php echo $productMaxprice?>"> 

            <label>Prix maximum: </label>
            <input type="number" placeholder="1200" name="maxPrice" min="<?php echo $productMinprice?>"max="<?php echo $productMaxprice?>"> 
            
            <button type="submit">Filter</button>
    

        <label class="sortByPrice" >Trier par : </label>
        <select name= "sort">
            <option value="">Par défaut</option>
            <option value="price">Prix</option>
            <option value="createAt">Date</option>
        </select>
        <button type="submit">Filtrer</button>
        <!-- </div> -->
    </form>
    <a href="http://localhost/piscine-php-tpblog/Views/products.php"><button>Reset</button></a>

        <h2 class="Title"> Buy a product </h2>
        <section class="products">
        <?php foreach ($products as $product) { ?> 
            <article>
                <h2><?php echo $product ['name'];?></h2>
                <p>Price : <?php echo $product ['price'];?></p>
                <p> <?php echo $product ['description'];?></p>
                <!-- j utilise la classe DateTime avec le mot cle new et je lui place en parametre ma date en chaine de caractere. DateTime cree une vraie date que l on va pouvoir manipuler: afficher uniquement le mois ou l annee avec le format souhaité. On peut aussi comparer deux dates ou encore ajouter x secondes ou x mois a une date   -->
                <p>Category: <?php echo $product ['category'];?></p>
                <?php $createdAtDateTime = new DateTime($product['createdAt']); ?>
                <!-- on choisit le format avec new DateTime->, la -> appelle la fonction en php comme => en JS -->
                <p> Creation Date: <?php echo $createdAtDateTime->format("d/m/Y"); ?> </p>  
                <!-- appel de fonction dans php -> -->
            </article>
        <?php } ?> 
        </section>
</main>