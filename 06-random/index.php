<?php 

class RadomNUmebers{

    public function getRandomNumebers(){

        $time = microtime();

        for($i=1 ; $i <= 100 ; $i++){

            $value = round($i * $time);

            if($value >= 100){
                $value = $value/100;
            }    

        }
           

        print_r($value);

    }
}


$random = new RadomNUmebers;
echo $random->getRandomNumebers();