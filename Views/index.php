<?php 

require_once ('../controller/indexController.php');
require_once ('../Config/Config.php');

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
var_dump($articles);
var_dump($_SERVER);
echo '<head><link rel="stylesheet" type="text/css" href="../Assets/style.css"></head>';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
// icon test mettre un echo pour le link vu que la balise <?php de depart n'est pas fermée 




echo "<body>";
    
require_once ('../Partials/header.php');




echo " <main>";
require_once ('../Partials/sidebar.php');
// on peut mettre $paramToCut = 35 par ex  et apres remplacer par $lengthToCut 
foreach ($articles as $article){ 
  
    if ($article['isPublished']=== true && $article['author']=="David Trezeguet") { 

    echo "<articles>";
        echo "<h2>".$article['title']." </h2>";
        echo "<h3>".$article['author']." </h3>";
       //echo "<p>".substr($article['content'],0,20)."..."."</p>";
        echo"<div><img src=".$article["img"]."></div>";

        if (isStringTooLong($article['content'], 15)){ // je mets le param que je souhaite passer a ma fonction et j appelle ma fonction.
            echo "<p>" . shortenArticle($article['content'], 5) . "...</p>"; //idem 
					} else {
						echo "<p>" . $article["content"] . "</p>";
					}


        echo "</articles>";
        };
};
//echo '<i class="fa-solid fa-torii-gate"></i>'; icon test
echo "</main>";


require_once ('../Partials/footer.php');
echo "</body>";




//echo substr('abcdef', 0, 4);  // abcd
//echo substr('abcdef', 0, 8);  // abcdef

