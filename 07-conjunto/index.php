<?php 

class Conjunto{

  

   public function getPrimo(){

    $result = [];
    

    while(count($result) <= 1000){
        $number = rand(1,5000000);
        $isPrime = $this->prime($number);
       
        if($isPrime){

             array_push($result, $number);
            
        }
    }

        // foreach($result as $item){

            print_r($result)."\n";

        // }

   }

   public function prime($i){

        $value = ceil(sqrt($i)); 

        $result = true;

        for($n = 2 ; $n <= $value ; $n++){
            if($i % $n == 0 && $value != 2){
                $result = false;
            }
        }

        return $result;

   }
}

$r = new Conjunto;
$r->getPrimo();

