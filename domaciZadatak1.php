<?php
/**
 * Created by PhpStorm.
 * User: misa
 * Date: 10/21/15
 * Time: 9:17 PM
 */

echo "<h3>Provera da dejivosti brojeva!</h3>";
echo "<hr />";
echo '<form action="domaciZadatak1.php">';
echo 'Unesite broj za proveru: <input type="text" name="bzp"><br />';
echo 'Unesite broj za kojim zelite deliti: <input type="text" name="bzd"><br />';
echo '<input type="submit" value="Proveri">';
echo "</form>";

if(isset($_GET["bzp"]) && isset($_GET["bzd"])) {
    $bzp = $_GET["bzp"];
    $bzd = $_GET["bzd"];

    $rez = $bzp % $bzd;

    if ($rez == 0) {
        echo '<h4>Broj ' . $bzp . ' je deljiv sa ' . $bzd . '</h4>';
    } else {
        echo '<h4>Broj ' . $bzp . ' nije deljiv sa ' . $bzd . '</h4>';
    }
}

echo "<br /><a href='domaciZadatak1.php'>Ponovo</a>";