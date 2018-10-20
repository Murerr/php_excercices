#!/usr/bin/php
<?php
function good_pestel($argv){
    $pestel_number = $argv[1]; // get argument from Linux console
    $pestel_array = str_split($pestel_number); //split each character into a array
    
    if(sizeof($pestel_array) != 11){
        echo"false\n";
        return false;
    }

    $res = 0;
    for($i=0;$i<sizeof($pestel_array)-1;$i++){ // pestel array size -1 do not multiply last digit
        $res += (int)$pestel_array[$i] * multiplier($i+1); 
    }
    echo $res,"\n";
    $res = $res%10;
    echo $res,"\n";

    
}
function multiplier(int $index){    //A*1 + B*3 + C*7 + D*9 + E*1 + F*3 + G*7 + H*9 + I*1 + J*3 
    if ($index > 4){
        return multiplier($index - 4); // if index superior to 4 substract 4 until index is between 1 and 4
    }
    switch ($index) {

        case 1: return 1; //A   

        case 2: return 3; //B

        case 3: return 7; //C

        case 4: return 9; //D

    }
}

good_pestel($argv);
?>