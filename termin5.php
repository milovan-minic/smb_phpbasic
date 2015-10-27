<?php
if(isset($_GET)) {
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
}
?>
<html>
<head></head>
<body>
<h2>Clanovi niza su:</h2>
<code><?php print_r($niz); ?></code>
<br>
<h2>Clanovi koji su deljivi sa <?php echo $_GET["deliSa"] ?> su:</h2>
<code><?php print_r($deljiviSa3); ?></code>
<br>
</body>
</html>