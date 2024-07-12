<?php
require_once ('../Config/Config.php');

$articles = [
    [
        'title' => 'Article 1',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://thumbs.dreamstime.com/b/illustration-de-vecteur-pikachu-sur-le-pokeball-d-isolement-fond-blanc-pokemon-136791058.jpg",
    'isPublished'=>true,
    'author'=> "David Robert"
    ],
    [
        'title' => 'Article 2',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
        'isPublished'=>false,
        'author'=> "David Douillet"
    ],
    [
        'title' => 'Article 3',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://thumbs.dreamstime.com/b/illustration-de-vecteur-pikachu-sur-le-pokeball-d-isolement-fond-blanc-pokemon-136791058.jpg",
        'isPublished'=>true,
        'author'=> "David Trezeguet"
      
    ]
];

function isStringTooLong($stringToCheck, $lengthToCheck) {
	return strlen($stringToCheck) >$lengthToCheck; 
} // je cree ma fonction avec un param qui me retourne un booleen, quand j appelle cette fonction je recup ce booleen

function shortenArticle ($articleToCut, $lengthToCut) { 

    return substr($articleToCut, 0, $lengthToCut);

} ;  // je cree une deuxieme fonction avec un param et je retourne pour obtenir ce que je veux que fasse ma fonction quand je l appelle
