<!-- en  regardant la correction (https://github.com/davidroberto/piscine-php-blog.git), créez un fichier Order contenant une classe Order avec une variable (propriété) status et deux fonctions (méthodes). La fonction pay modifie la propriété status à "payé" et la fonction cancel modifie la propriété status à "annulé".
Testez de créer une instance de la classe (avec le mot clé new) et d'appeler les méthodes pay et cancel -->
<?php 




class  Order { 

        public $status; //*

        public $totalPrice;

        public $productQuantity;

        public $id;

        public $customer;

        function __construct($customerName){ 

            $this->status = "en cours";
            $this->totalPrice = 0;
            $this->productQuantity = 0;
            $this->id=uniqid();
            $this->customer = $customerName;
        }



        public function pay () { 

            if ($this->status === "en cours" && $this->productQuantity>0 && $this->totalPrice>0) { 

          
                $this->status = "payé";
               

            }
        }

        public function cancel () {    

            if ($this->status === "en cours" && $this->productQuantity>0 && $this->totalPrice>0){


            $this->status = "annulé";

            }
        }

        public function buy () { 
            

            $this->totalPrice = $this->totalPrice+10 ;
            $this->productQuantity++;
    

        }

        public function removeProduct() { 

            if ($this->productQuantity>0 && $this->totalPrice>0) { 
            $this->totalPrice = $this->totalPrice-10 ;
            $this->productQuantity = $this->productQuantity-1 ;

        }

        }

    }
 


$order = new Order("LeiJie");
$order->buy();



//$order->pay();
//$order->cancel();
var_dump($order);



// var_dump($order->status)

//* si private Fatal error: Uncaught Error: Cannot access private property Order::$status in /Users/iodasama/Documents/Dossier JT/PHP/piscine-php-tpblog/Views/Order.php:26 Stack trace: #0 {main} thrown in /Users/iodasama/Documents/Dossier JT/PHP/piscine-php-tpblog/Views/Order.php on line 26

// $order2 = new Order();
// $order2->buy();
// $order2->pay();

// var_dump($order2);

// $order3= new Order();

// $order3->removeProduct(); 
// $order3->removeProduct(); 
// $order3->removeProduct(); 
// $order3->removeProduct(); 
// $order3->removeProduct(); 
// $order3->removeProduct(); 
// $order3->removeProduct(); 

// var_dump($order3);