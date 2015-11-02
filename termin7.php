<?php

function uvecajZaDva($broj){
    return $broj += 2;
}
$x = 8;
echo uvecajZaDva($x) . "<br />";

///////////////////


function saberi($x, $y, $z = null){
    return $x+$y+$z;
}

echo saberi(4, 9) . "<br />";


///////////////////////

function addFive($num){
    $num += 5;
}

function addSix(&$num){
    $num += 6;
}

$origNum = 10;

addFive($origNum);
echo "Original Value is $origNum<br />";

addSix($origNum);
echo "Original Value is $origNum<br />";

////////////////////////////////////////////

/*
 *  Lorem ipsum tekst smestiti u niz reci
 */

$tekst = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$samoglasnici = array("a", "e", "i", "o", "u");
$reci = explode(" ", $tekst);
$finalNiz = null;

foreach($samoglasnici as $samoglasnik){
    $broj = 0;
    foreach($reci as $rec) {
        if(strpos($rec, $samoglasnik) === 0)
        $broj++;
        }
    $finalNiz["$samoglasnik"] = $broj;
}

print_r($finalNiz);

// doraditi sortiranje i prikaz

