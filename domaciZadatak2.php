<?php

/**
 * Написати php скрипт који ће да испише првих
 * 30 бројева. Бројеве исписати тако да се
 * након сваког броја налази зарез, сем иза
 * последњег, иза којег би требало да се налази
 * тачка.
 */
for($i = 1; $i<=30; $i++){
    if($i <= 29){
        echo $i . ", ";
    } else {
        echo $i . ".";
    }
}
echo "<br />";
echo "<hr />";


/**
 * Написати php скрипт где се дефинише низ
 * бројева, а потом се из низа исписује највећи
 * и најмањи елемент.
 */

echo "Koriscenjem PHP funkcija min() i max()<br />";
$x = array(1, 40, 2, 6, 8, 4, 3, 8, 9);
echo min($x);
echo "<br />";
echo max($x);

echo "<br />";
echo "<hr />";

echo "Sortiranjem niza i prikazivanjem prvog i poslednjeg clana niza<br />";
$y = array(1, 40, 2, 6, 8, 4, 3, 8, 9);
sort($y);
echo $y[0];
echo "<br />";
echo $y[count($y) - 1];

echo "<br />";
echo "<hr />";

echo "Uporedjivanjem clanova niza<br />";
$y = array(1, 80, 2, 6, 8, 4, 3, 8, 9);
$max = $y[0];
$min = $y[0];
for($i = 0; $i < count($y); $i++){
    if($max < $y[$i]){
        $max = $y[$i];
    }
    if($min > $y[0]){
        $min = $y[$i];
    }
}
echo $max;
echo "<br />";
echo $min;