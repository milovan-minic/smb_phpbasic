<?php

$x = 3;

switch($x)
{
    case 1:
        echo "Broj {$x}<br />";
        break;
    case 2:
        echo "Broj {$x}<br />";
        break;
    case 3:
        echo "Broj {$x}<br />";
        break;
    default:
        echo "Broj {$x} nije u opsegu od 1 do 3<br />";
}

//////////////////////////////////////////////////

$y = 10;

$rez = $y % 3;

switch($rez)
{
    case 1:
//        echo "Broj {$y} nije deljiv sa 3<br />";
//        break;
    case 2:
        echo "Broj {$y} nije deljiv sa 3<br />";
        break;
    default:
        echo "Broj {$y} je deljiv sa 3<br />";
}

//////////////////////////////////////////////////

// Ispisati svaki drugi broj od 15 do 1
for($i = 15; $i >= - 10; $i -= 2) {
    echo "Broj: {$i}<br />";
}

//////////////////////////////////////////////////

$niz = array(0=>1, 1=>2, 3=>5, 4=>8);
for($z = 0; $z < count($niz); $z++){
    if($z == 0) {
        echo $z + 1 . ". Clan niza je: " . current($niz) . "<br />";
    } else {
        echo $z + 1 . ". Clan niza je: " . next($niz) . "<br />";
    }
}
