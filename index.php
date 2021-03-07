
<?php
function getNumMatches($x){

$a=['dd','rr','ff','h','gg','gg'];

$y=0;

for ($i=0; $i <count($a); $i++) { 
   
    if($a[$i]==$x){
        $y+=1;
        }
}

return $y;
}




function getPriceWithDiscount ($price){


// discount is 10% for prices less than 1000
// and 5% for prices greater than or equal 1000
if ($price<1000) {
    return $dis=$price*(10/100);
}elseif($price>=1000){

    return $dis=$price*(5/100);
}


}



