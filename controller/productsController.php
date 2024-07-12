<?php 

$products = [

    [
        'name' => 'Aspirateur',
        'price' => 500,
        'category' => 'electro-menager',
        'description' => 'Description du produit 1',
        'createdAt'=> "22-03-2024"
    ],

    [
        'name' => 'Aspirateur',
        'price' => 100,
        'category' => 'electro-menager',
        'description' => 'Description du produit 1',
        'createdAt'=> "26-03-2024"
    ],
    [
        'name' => 'Four',
        'price' => 300,
        'category' => 'electro-menager',
        'description' => 'Description du produit 3',
        'createdAt'=> "22-04-2024"
    ],
    [
        'name' => 'Frigo',
        'price' => 200,
        'category' => 'electro-menager',
        'description' => 'Description du produit 2',
        'createdAt'=> "29-06-2024"
    ],
    [
        'name' => 'Ordinateur',
        'price' => 500,
        'category' => 'informatique',
        'description' => 'Description du produit 5',
        'createdAt'=> "22-03-2025"
    ],
    [
        'name' => 'Télévision',
        'price' => 400,
        'category' => 'electro-menager',
        'description' => 'Description du produit 4',
        'createdAt'=> "22-06-2025"
    ],
    [
        'name' => 'Tablette',
        'price' => 600,
        'category' => 'informatique',
        'description' => 'Description du produit 6',
        'createdAt'=> "22-07-2025"
    ],
    [
        'name' => 'Smartphone',
        'price' => 700,
        'category' => 'informatique',
        'description' => 'Description du produit 7',
        'createdAt'=> "22-08-2025"
    ],
    [
        'name' => 'Appareil photo',
        'price' => 800,
        'category' => 'informatique',
        'description' => 'Description du produit 8',
        'createdAt'=> "22-09-2024"
    ],
    [
        'name' => 'Vélo',
        'price' => 900,
        'category' => 'sport',
        'description' => 'Description du produit 9',
        'createdAt'=> "22-10-2025"
    ],
    [
        'name' => 'Tapis de course',
        'price' => 1000,
        'category' => 'sport',
        'description' => 'Description du produit 10',
        'createdAt'=> "22-03-2026"
    ],
    [
        'name' => 'Haltères',
        'price' => 1100,
        'category' => 'sport',
        'description' => 'Description du produit 11',
        'createdAt'=> "22-04-2026"
    ],
    [
        'name' => 'Ballon de foot',
        'price' => 1200,
        'category' => 'sport',
        'description' => 'Description du produit 12',
        'createdAt'=> "22-07-2026"
    ],

    [
        'name' => 'Ballon de foot',
        'price' => 1200,
        'category' => 'chineseGoods',
        'description' => 'Description du produit 12',
        'createdAt'=> "22-08-2026"
    ]
];


$productMaxprice = $products [0] ['price'];
$productMinprice = $products [0] ['price'];

foreach ($products as $product) {
    if ($product['price']> $productMaxprice) { 

        $productMaxprice = $product['price'];
    }
    if ($product['price']<$productMinprice) { 

        $productMinprice = $product['price'];
    }
}

if (isset($_GET['sort']) && $_GET['sort']=== 'price') { 
    usort($products,function($a,$b) { 
        return $a['price'] <=> $b['price'];

    });}



if (isset($_GET['sort']) && $_GET['sort']=== 'createAt') { // bien penser a mettre la value exacte du sort !!

          
 

        usort($products,function( $product,$nextproduct ) { 
  
            $DateTimecreated = new DateTime($product['createdAt']); // chaine de caractere a absolument mettre en date new DateTime
            $NewDateTimeCreated = new DateTime($nextproduct['createdAt']);

            return  $DateTimecreated <=> $NewDateTimeCreated ; // on peut aussi comparer return new DateTime($product['createdAt']<=> new DateTime($nextproduct['createdAt'])
            
            });}
    
        
    




$categorys =[]; 

/* [] = ['electo-menager',
    'informatique',
    'sport'] je mets un tableau vide une fois que j ai fait mon foreach dans mon Controller afin de pouvoir rajouter de nouvelles categories si je le souhaite*/


foreach ($products as $product) { 
    
    if (!in_array($product['category'], $categorys)) {  /*si dans le tableau il n y a pas la categorie, je mets en  params mon nouveau tableau et je rajoute la nouvelle categorie*/

        $categorys[] = $product['category'];
        
           };
}


if (!empty ($_GET)) { 
    
    if (!empty ($_GET['category'])) { 
    $products = array_filter ($products, function($product) { 

    return  $product['category'] === $_GET ['category'] ;


    } ) ;
}



if (!empty ($_GET['priceMax'])) { 

    $products = array_filter ($products, function($product) { 

    return  $product['price'] <= $_GET ['priceMax'] ;
    } ) ;
}

if (!empty ($_GET['priceMin'])) { 

    $products = array_filter ($products, function($product) { 

    return  $product['price'] >= $_GET ['priceMin'] ;


    } ) ;
}
}



/*$productsArrayObject = new ArrayObject($products['']);
$productsArrayObject->asort();

foreach ($productsObject as $key => $val) {
     echo "$key = $val\n";
}*/



