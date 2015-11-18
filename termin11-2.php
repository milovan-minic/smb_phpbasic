<!DOCTYPE html>
<html>
    <head>
        <title>Termin 11</title>
    </head>

    <body>
        <form action="termin11-2.php" method="post">
            Unos podataka u tabelu 'k'
            <table>
                <tr>
                    <td>K_SIF</td>
                    <td><input type="text" name="ksif"/></td>
                </tr>
                <tr>
                    <td>NASLOV</td>
                    <td><input type="text" name="naslov"/></td>
                </tr>
                <tr>
                    <td>OBLAST</td>
                    <td><input type="text" name="oblast"/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Unesite"></td>
                </tr>
            </table>
<!--            Red: <input type="number" name="red">-->
<!--            <input type="submit" value="Prikazi">-->
        </form>
    </body>
</html>


<?php

if($_POST) {

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'kip';

    $ksif = $_POST['ksif'];
    $naslov = $_POST['naslov'];
    $oblast = $_POST['oblast'];

    $connection = mysql_connect($host, $user, $pass);
    if (!$connection) {
        die('Konekcija sa bazom nije uspostavljena: ' . mysql_error());
    }

    $database = mysql_select_db($db);
    if (!$database) {
        die('Baza podataka nije dostupna: ' . mysql_error());
    }

    $query = "  INSERT INTO k (idK, Naslov, Oblast)
                VALUES ('$ksif', '$naslov', '$oblast')";

    $insertValues = mysql_query($query, $connection) or die("Nije unesen zapis" . mysql_error());

    echo '<h3>Uspesno uneseni podaci</h3>';
    echo 'Uneseni podaci su: <br />';
    echo 'K_SIF: ' . $ksif . '<br />';
    echo 'NASLOV: ' . $naslov . '<br />';
    echo 'OBLAST: ' . $oblast . '<br />';

}

