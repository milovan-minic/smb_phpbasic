<?php

$niz = array(2, 5, 8, 13);
$x = count($niz);

// FOR
echo "FOR Petlja<br />";
for($i = 0; $i<$x; $i++){
    echo "$niz[$i]<br />";
}
echo "<hr />";

// WHILE
echo "WHILE Petlja<br />";

$z = 0;
while($z < $x){
    echo "$niz[$z]<br />";
    $z++;
}
echo "<hr />";

// FOREACH
echo "FOREACH Petlja<br />";
foreach($niz as $clan){
    echo "$clan<br />";
}
echo "<hr />";

////////////////////////////////////////
// explode() i implode() funkcije
$imena = "Mika Pera AAAAAAA PHPM B3C4";
$niz = explode(" ", $imena);

echo $niz[0] . " i " . $niz[1] . " i " . $niz[2];
echo "<br />";

foreach($niz as $ime){
    echo $ime . "<br />";
}

$svi = implode(", ", $niz);
echo $svi;

echo "<hr />";

$email = "pera@zdera.com";
$imeIDomen = explode("@", $email);
foreach($imeIDomen as $clan){
    echo $clan . "<br />";
}
$email2 = implode("@", $imeIDomen);
echo $email2;

echo "<hr />";


