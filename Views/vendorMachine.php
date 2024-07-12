<!-- Dans un fichier, créez une classe VendorMachine. Cette classe a plusieurs propriétés :
-- snacks (les produits vendus)
-- cashAmount (le cash dans la machine)
-- isOn (si elle est allumée ou pas)


Quand une nouvelle VendorMachine est instanciée, elle doit automatiquement avoir le totalAmount à 0 et doit contenir les snacks envoyés plus bas.

Créez plusieurs méthodes dans la classe :

-- turnOn : allume la machine

-- turnOff
        // s'il est après 18h (on ne peux pas éteindre la machine avant 18h)
        // éteint la machine

-- buySnack($snackName)
        // si la machine est allumée

        // si le snack est présent dans la liste
        // et que la quantité est suffisante
        // on enlève une quantité pour ce snack
        // et on ajoute au cashAmount le montant du snack

-- shootWithFoot
        // si la machine est allumée

        // fais tomber un snack au hasard
        // et fait tomber un montant de cash au hasard
        //donc decremente le snack et le cashAmount

Tableau de snacks :

[
            [
                "name" => "Snickers",
                "price" => 1,
                "quantity" => 5
            ],
            [
                "name" => "Mars",
                "price" => 1.5,
                "quantity" => 5
            ],
            [
                "name" => "Twix",
                "price" => 2,
                "quantity" => 5
            ],
            [
                "name" => "Bounty",
                "price" => 2.5,
                "quantity" => 5
            ]
        ]; -->

        <?php 




class  VendorMachine { 

        public $status; //*

        public $snacks;

        public $cashAmount;

        public $isOn;

        public $currentTime;

        // public $ ;

        function __construct(){ 

            // $this->status = "machineOff";
            $this->currentTime = intval(date('H'));   // currentTime-> setTime ('H') intval pour decalage horaire 2h 
            $this->isOn = false;
            $this->cashAmount = 0;
            $this-> snacks= [
                [
                    "name" => "Snickers",
                    "price" => 1,
                    "quantity" => 5
                ],
                [
                    "name" => "Mars",
                    "price" => 1.5,
                    "quantity" => 5
                ],
                [
                    "name" => "Twix",
                    "price" => 2,
                    "quantity" => 5
                ],
                [
                    "name" => "Bounty",
                    "price" => 2.5,
                    "quantity" => 5
                ]
            ];

            // $this->id=uniqid();
            // $this->customer = $customerName;
        }

     

   
    
    
    
        public function turnOnVendorMachine() { 

            if ( $this->isOn == false && $this->cashAmount === 0 ) { 

          
                $this->isOn = true;
               

            
        } 
    }


        public function turnOffVendorMachine() { 
      
            if ($this->isOn == true && $this->currentTime >17 ) { 

          
                $this->isOn = false;

        }
    }

        public function buySnacks($snackName) {

            if ( $this->isOn == true ) { 

                foreach ($this->snacks as $key => $snack ) { // $key => $snack = &snack

                if ($snackName===$snack['name'] && $snack['quantity']>0) {
                    
                $this->snacks[$key]['quantity']= $snack['quantity']-1; // si &snack alors $this->snack['quantity']= $snack['quantity']-1;
                $this->cashAmount=$this->cashAmount+$snack['price'];

                }

            }

        }

    }


    function shootWithFoot() {
        // si la machine est allumée
                if($this->isOn === true){
        //un snack au hasard tombe
                $randomSnack = round(random_int(0, count($this->snacks) - 1)); //random_int permet de convertir le float en integer et gerer les erreurs plutot que rand !! 
        //du cash au hasard tombe
                $randomCashAmount = random_int(0, $this->cashAmount*100)/100;
        //decrementer le snack et le cashAmount
                    if($this->snacks[$randomSnack]['quantity'] > 0){

                        $this->snacks[$randomSnack]['quantity']--;
                        $this->cashAmount -= $randomCashAmount; //$this->cashAmount = $this->cashAmount-$randomCashAmount equivalent
                    }
                    
                }
             }



    }

    



$vendorMachine = new VendorMachine; 
$vendorMachine->turnOnVendorMachine();

//$vendorMachine->turnOffVendorMachine();
$vendorMachine->buySnacks('Mars');
$vendorMachine->buySnacks('Mars');
$vendorMachine->buySnacks('Mars');
$vendorMachine->buySnacks('Mars'); // quantity a 0 
$vendorMachine->buySnacks('Mars'); // quantity reste a 0 
$vendorMachine->shootWithFoot();
var_dump($vendorMachine);



//var_dump($vendorMachine);




//         public function cancel () {    

//             if ($this->status === "en cours" && $this->productQuantity>0 && $this->totalPrice>0){


//             $this->status = "annulé";

//             }
//         }

//         public function buy () { 
            

//             $this->totalPrice = $this->totalPrice+10 ;
//             $this->productQuantity++;
    

//         }

//         public function removeProduct() { 

//             if ($this->productQuantity>0 && $this->totalPrice>0) { 
//             $this->totalPrice = $this->totalPrice-10 ;
//             $this->productQuantity = $this->productQuantity-1 ;

//         }

//         }

//     }
 


// $order = new Order("LeiJie");
// $order->buy();



//$order->pay();
//$order->cancel();
// var_dump($order);



