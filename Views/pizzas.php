<?php 

// on instancie une class Pizza et on ajoute des proprietes 
class Pizza { 

    private $size;
    private  $price;
    private  $base;
    private  $ingredient1;
    private  $ingredient2;
    private  $ingredient3;
    private  $status;
    private  $orderAt;


 //je crée mon constructeur

 function __construct($size,$base,$ingredient1,$ingredient2,$ingredient3){ 

    $this->size=$size;
    $this->base=$base;
    $this->ingredient1=$ingredient1;
    $this->ingredient2=$ingredient2;
    $this->ingredient3=$ingredient3;
    $this->status="commande en cours";
    $this->orderAt= new DateTime('NOW');


    if ($size==='s') { 
        $this->price = 9;
    }
    if ($size==='m') { 
        $this->price = 11;
    }
    if ($size==='L') { 
        $this->price = 13;
    }
    if ($size==='XL') { 
        $this->price = 15;
    }


 }

 // fonction pour payer si le statut est en cours 
 public function pay () { 

    if ($this->status === "commande en cours") { 

  
        $this->status = "payé";
       

    }
}

public function ship () { 

    if ($this->status === "payé") { 

  
        $this->status = "livré";
       

    }
} 
    
// function getIngredient1 () { 

//     return $this-> ingredient1 ;
// }



   public function getIngredients () { 

    
        
        $ingredients = [$this -> ingredient1,$this -> ingredient2, $this -> ingredient3];
    
        return $ingredients;

    }
   

}

 


$newBrandPizza = new Pizza ("XL","tomate","champignons","jambon","oeuf");  // on etablit une nouvelle instance de classe et c'est aussi un objet
$newBrandPizza->pay(); // on verifie si la pizza est payé 
$newBrandPizza->ship(); // on verifie si la pizza est payé 

;

foreach ($newBrandPizza->getIngredients() as $ingredient) {

    echo $ingredient . '<br>';

}

// $ingredientsNewPizza = $newBrandPizza->getIngredients();

// foreach ( $ingredientsNewPizza as $ingredient) {

//     echo $ingredient;

// }





//va permettre qu'une nouvelle Pizza soit créée (nouvelle instance)

// Créez un nouveau fichier contenant une classe Pizza.
// Ajoutez en propriétés privées : size, price, base, ingredient1, ingredient2, ingredient3, status, orderedAt
// Faites en sorte que quand une nouvelle Pizza est créée (nouvelle instance), toutes les propriétés soient obligatoirement remplies, soit par l'utilisateur, soit calculées.
// Faites une méthode pay() qui permet de passer la pizza en status "payé" uniquement si le statut actuel est "en cours"
// Faites une méthode ship() qui permet de passer la pizza en status "livré" uniquement si le status actuel est "payé"

// Commentez votre code
 
// quand c'est ok, envoyé le lien github