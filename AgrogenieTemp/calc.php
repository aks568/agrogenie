<?php 
function emi_calculator($p, $r, $t) 
{ 
    $emi=0;$r = $r / (12 * 100); // one month interest 
    $t = $t * 12;// one month period 
    $emi = ($p * $r * pow(1 + $r, $t)) / (pow(1 + $r, $t) - 1); 
    return ($emi); 
} 
    $principal = 250000; 
    $rate = 9.25; 
    $time = 2; 
    $emi = emi_calculator($principal, $rate, $time); 
    echo "Monthly EMI is = ", $emi; 
?>