<?php
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head><title>Manipulacija clanovima niza</title></head>';

echo '<body>';
echo '<form action="view_termin5.php" method="get">';
echo 'Unesi broj clanova niza: <input type="number" name="brojClanova"><br>';
echo 'Unesi najnizu vrednost clanova niza: <input type="number" name="najnizi"><br>';
echo 'Unesi najvisu vrednost clanova niza: <input type="number" name="najvisi"><br>';
echo 'Unesi vrednost za proveru deljivosti: <input type="number" name="deliSa"><br><br>';
echo '<input type="submit" value="Ispisi">';
echo '</form>';

/*
 * Ne znam da li je ovko ispravno, ali ako ne dodam uslova da postoji neka od
 * $_GET vrednosti, ako pokusam da izracunam vrednosti, prijavljuje greske i ispisuje tekst koji ne bi trebalo
 */
if ($_GET && $_GET["brojClanova"] && $_GET["najnizi"] && $_GET["najvisi"] && $_GET["deliSa"]) {
    $niz = array();
    for ($i = 0; $i < $_GET["brojClanova"]; $i++) {
        $niz[] = mt_rand($_GET["najnizi"], $_GET["najvisi"]);
    }

// Ispis elemenata deljivih sa 3
    $deljiviSa3 = array();
    foreach ($niz as $clan) {
        $broj = $clan % $_GET["deliSa"];
        if ($broj == 0) {
//        echo "Broj $clan je deljiv sa 3 <br />";
            $deljiviSa3[] = $clan;
        }
    }
//    echo print_r($deljiviSa3);
//    echo "<hr />";

// Prosecna vrednost vrednosti svih elemenata
    $zbir = 0;
    foreach ($niz as $clan) {
        $zbir += $clan;
    }
//    echo "Prosek je: " . $prosek = $zbir / count($niz) . "<br />";
//    echo "<hr />";

// Maksimalna vrednost clanova niza
    $max = $niz[0];
    for ($i = 0; $i < count($niz); $i++) {
        if ($max < $niz[$i]) {
            $max = $niz[$i];
        }
    }

//    echo "Maksimalna vrednost je: " . $max . "<br />";
//    echo "<hr />";

// Minimalna vrednost clanova niza
    $min = $niz[0];
    for ($i = 0; $i < count($niz); $i++) {
        if ($min > $niz[$i]) {
            $min = $niz[$i];
        }
    }
//    echo "Minimalna vrednost je: " . $min . "<br />";
//    echo "<hr />";

// Prikazati sve clanove niza
//foreach($niz as $clan){
//    echo $clan . "<br />";
//    print_r($clan);
//}
//    print_r($niz);
//    echo "<hr />";

    echo '<h2>Clanovi niza su:</h2>';
    echo '<code>' . print_r($niz) . '</code><br />';
    echo '<h2>Clanovi koji su deljivi sa ' . $_GET["deliSa"] . ' su:</h2>';
    echo '<code>' . print_r($deljiviSa3) . '</code><br>';
    echo '<h2>Prosecna vrednost svih clanova niza je: </h2>' . $zbir / count($niz) . '<br>';
    echo '<h2>Najvisa vrednost svih clanova niza je: </h2>' . $max . '<br>';
    echo '<h2>Najniza vrednost svih clanova niza je: </h2>' . $min . '<br><br>';

    unset($_GET);
    echo '<a href="view_termin5.php">Ponovo?<a/>';

    echo '</body>';
    echo '</html>';
} else {
    echo '<h3>Niste uneli ni jednu od vrednosti.</h3>';
    echo '<h3>Unesite sve vrednosti i <a href="view_termin5.php">pokusajte ponovo</a></h3>';
}