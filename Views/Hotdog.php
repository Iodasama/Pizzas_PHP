<?php

require_once ('./Meal.php');
// je cree une classe Hot Dog 

// je fais hériter la classe Hotdog ("enfant") de la classe Meal ("parent")
class Hotdog extends Meal{ 
    // protected $size;
    // protected $price;
    // protected $status;

    private $bread;

    function __construct($size,$bread){ 

        $this->size=$size;
        $this->bread=$bread;
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
     //je cree methode pour payer et livrer le hot dog
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
}

$hotdogLeiJie = new Hotdog('XL','toasty') ;

$hotdogLeiJie ->pay(); // on verifie si le hotdog est payé 
$hotdogLeiJie ->ship(); 
var_dump($hotdogLeiJie); // on check que le hot dog est bien payé et/ou livré


require_once('./Meal.php');

// je cree une classe 

