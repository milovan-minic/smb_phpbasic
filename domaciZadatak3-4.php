<?php

$sabirci = array(1, 2, 5, 8);

$zbir = 0;
foreach($sabirci as $sabirak){
    $zbir += $sabirak;
}


echo implode("+", $sabirci) . "=" . $zbir;