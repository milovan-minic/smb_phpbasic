<!DOCTYPE html>
<html>
    <head>
        <title>Termin 11</title>
    </head>

    <body>
        <form action="termin11.php" method="get">
            Red: <input type="number" name="red">
            <input type="submit" value="Prikazi">
        </form>
    </body>
</html>


<?php

if($_GET) {

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'kip';
    $red = $_GET['red'];
    $brojRedova = 0;

    $connection = mysql_connect($host, $user, $pass);
    if (!$connection) {
        die('Konekcija sa bazom nije uspostavljena: ' . mysql_error());
    }

    $database = mysql_select_db($db);
    if (!$database) {
        die('Baza podataka nije dostupna: ' . mysql_error());
    }

    $query = "  SELECT *
            FROM k";

    $res = mysql_query($query);
    $brojRedova = mysql_num_rows($res);

    if($red>0 && $red <= $brojRedova) {
        $result = mysql_query($query);

        $filteredResult = mysql_data_seek($result, $red-1);

        if ($filteredResult) {
            $row = mysql_fetch_row($result);

            echo '<p>Sadrzaj reda <b>' . $red . '</b> je knjiga sa naslovom <b>' . $row['1'] . '</b> i iz oblasti <b>' . $row[2] . '</b></p>';

            echo '<a href="termin11.php">Pokusaj ponovo</a>';
        }
    } else {
        echo '<h4>Morate izabrati broj reda u opsegu od 1 do ' . $brojRedova . ' da biste ga prikazali</h4>';
    }
}

