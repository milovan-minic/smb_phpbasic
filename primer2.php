<?php

/* logicka promenljiva */
$indikator = true;
echo $indikator;
echo '<br />';
var_dump($indikator);
echo '<br />';

/* celobrojna promenljiva */
$brojStranaKnjige = 3212;
echo $brojStranaKnjige;
echo '<br />';
var_dump($brojStranaKnjige);
echo '<br />';

/* realna promenljiva */
$temperatura = -15.3;
var_dump($temperatura);
echo '<br />';
echo $temperatura;
echo '<br />';

/* niska */
$grad = 'Beograd';
echo $grad;
echo '<br />';
var_dump($grad);
echo '<br />';

/* nizovi */
$niz = array(1,"string", true,4,6);
print_r($niz);
echo '<br />';
var_dump($niz);
echo '<br />';

/* za odredjivanje tpa promenljive koristiti gettype() */
echo "<h2>gettype() funkcija</h2>";
echo "Tip promenljive indikator: " . gettype($indikator) . "<br />";
echo "Tip promenljive indikator: " . gettype($niz) . "<br />";
echo "Tip promenljive indikator: " . gettype($grad) . "<br />";
echo "Tip promenljive indikator: " . gettype($temperatura) . "<br />";
echo "Tip promenljive indikator: " . gettype($brojStranaKnjige) . "<br />";

///////////////////////////////////////////////////////
$a = 6;
$b = 6;

if($a > $b)
    echo '$a je vece od $b';
elseif($a < $b)
    echo '$a je manje od $b';
else
    echo 'Vrednosti su jednake<br />';

////////////////////////////////////////////////////////

$dan = date("D");

if($dan == "Sat"){
    echo "Danas je prvi dan vikenda";
} elseif ($dan != "Sat" && $dan != "Sun"){
    echo "Danas je radni dan";
} else {
    echo "Danas je drugi dan vikenda";
}
///////////////////////////////////////////

// Napisati program koji ispituje da li je broj deljiv sa 2