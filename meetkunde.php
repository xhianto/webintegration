<?php 
function berekenOppervlakteDriehoek($basis, $hoogte){
    funtionsExecutedCounter();
    return 0.5 * $basis * $hoogte;
}
function berekenOppervlakteVierkant($zijde){
    funtionsExecutedCounter();
    return berekenOppervlakteRechthoek($zijde, $zijde);
}
function berekenOppervlakteRechthoek($zijde1, $zijde2){
    funtionsExecutedCounter();
    return $zijde1 * $zijde2;
}
function berekenOpperVlakteCirkel($straal){
    funtionsExecutedCounter();
    return $straal * $straal * M_PI;
}
?>