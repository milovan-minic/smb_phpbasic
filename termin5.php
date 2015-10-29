<!DOCTYPE html>
<html>
<head><title>Manipulacija clanovima niza</title></head>

<body>
<form action="termin5.php" method="get">
<table>
    <tr>
        <td>
            Unesi broj clanova niza:
        </td>
        <td>
            <input type="number" name="brojClanova">
        </td>
    </tr>
    <tr>
        <td>
            Unesi najnizu vrednost clanova niza:
        </td>
        <td>
            <input type="number" name="najnizi">
        </td>
    </tr>
    <tr>
        <td>
            Unesi najvisu vrednost clanova niza:
        </td>
        <td>
            <input type="number" name="najvisi">
        </td>
    </tr>
    <tr>
        <td>
            Unesi vrednost za proveru deljivosti:
        </td>
        <td>
            <input type="number" name="deliSa">
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="Ispisi">
        </td>
    </tr>
    </table>
</form>
<?php
/*
 * Ne znam da li je ovko ispravno, ali ako ne dodam uslova da postoji neka od
 * $_GET vrednosti, ako pokusam da izracunam vrednosti, prijavljuje greske i ispisuje tekst koji ne bi trebalo
 */
//if ($_GET && $_GET["brojClanova"] && $_GET["najnizi"] && $_GET["najvisi"] && $_GET["deliSa"]) {
if ($_GET && $_GET["brojClanova"] && $_GET["najnizi"] && $_GET["najvisi"] && $_GET["deliSa"]) {
    $niz = array();
    for ($i = 0; $i < $_GET["brojClanova"]; $i++) {
        $niz[] = mt_rand($_GET["najnizi"], $_GET["najvisi"]);
    }

// Ispis elemenata deljivih sa unesenom vrednoscu
    $deljiviSa = array();
    foreach ($niz as $clan) {
        $broj = $clan % $_GET["deliSa"];
        if ($broj == 0) {
            $deljiviSa[] = $clan;
        }
    }

// Prosecna vrednost vrednosti svih elemenata
    $zbir = 0;
    foreach ($niz as $clan) {
        $zbir += $clan;
    }

// Maksimalna vrednost clanova niza
    $max = $niz[0];
    for ($i = 0; $i < count($niz); $i++) {
        if ($max < $niz[$i]) {
            $max = $niz[$i];
        }
    }


// Minimalna vrednost clanova niza
    $min = $niz[0];
    for ($i = 0; $i < count($niz); $i++) {
        if ($min > $niz[$i]) {
            $min = $niz[$i];
        }
    }
?>
<h2>Clanovi niza su:</h2>
<code><?php print_r($niz); ?></code><br />
<h2>Clanovi koji su deljivi sa <?php echo $_GET["deliSa"]; ?> su:</h2>
<code><?php print_r($deljiviSa); ?></code><br>
<h2>Prosecna vrednost svih clanova niza je: </h2><?php echo $zbir / count($niz); ?><br>
<h2>Najvisa vrednost svih clanova niza je: </h2><?php echo $max; ?><br>
<h2>Najniza vrednost svih clanova niza je: </h2><?php echo $min; ?><br><br>

<?php unset($_GET); ?>
<a href="termin5.php">Ponovo?<a/>

<?php } elseif($_GET && (!$_GET["brojClanova"] || !$_GET["najnizi"] || !$_GET["najvisi"] || !$_GET["deliSa"])) {
    echo '<h3>Niste uneli sve vrednosti.</h3>';
    echo '<h4>Unesite sve vrednosti i <a href="termin5.php">pokusajte ponovo</a></h4>';
} ?>

</body>
</html>