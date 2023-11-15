<?php 

class PrimeNumber{

    public function calculate($a){

        if($a > 1){
            $result = ceil(sqrt($a));
        }else{
            return  "Número es menor a uno";
        }
       
        $message = " Es primo";
        
        for($i = 2 ; $i <= $result ; $i++){

            if($a % $i == 0 ){
                
                $message =  "No es primo";
                break;
                
            }
    
        }

        return $message;
        
    }
}

$prime = new PrimeNumber();
echo $prime->calculate(9);