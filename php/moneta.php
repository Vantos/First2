<?php

$a=0;
$b=0;



for($i = 1; $i<100; $i++){

    $los = rand(1,2);
    if($los == 1){
        echo ("reszka <br>");
        $a++;
    }
    else{
        echo ("orzeł <br>");
        $b++;
    }

    
}

echo ("<br> reszka = $a <br>"); 
echo ("orzeł = $b <br>");

?>