<html>
    <head>
        <title>Prikazivanje sortiranog niza</title>
    </head>

    <body>
    <h4>Izaberi kako ce se rezultat prikazati.</h4>
    <form action="<?php $_PHP_SELF; ?>">
        <input type="submit" name="neopadajuce" value="Neopadajuce">
        <input type="submit" name="opadajuce" value="Opadajuce">
    </form>

    </body>
</html>

<?php
if($_GET) {

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'kip2';

    $connection = mysql_connect($host, $user, $pass);
    if (!$connection) {
        die('Konekcija sa bazom nije uspostavljena: ' . mysql_error());
    }

    // Dodaje se da bi se prikazivala slova srpske latinice
    mysql_set_charset('utf8', $connection);

    $database = mysql_select_db($db);
    if (!$database) {
        die('Baza podataka nije dostupna: ' . mysql_error());
    }

    $queryNeopadajuce = "SELECT k.Naslov, k.Oblast, p.Ime FROM kp LEFT JOIN k ON k.idk = kp.idk LEFT JOIN p ON p.idp = kp.idp";
    $queryOpadajuce = "SELECT k.Naslov, k.Oblast, p.Ime FROM kp LEFT JOIN k ON k.idk = kp.idk LEFT JOIN p ON p.idp = kp.idp  ORDER BY Naslov ASC";

    if(isset($_GET['neopadajuce'])) {
        $res = mysql_query($queryNeopadajuce);
    } else {
        $res = mysql_query($queryOpadajuce);
    }
    echo '<table>';
    echo '<tr bgcolor="#a9a9a9"><th align="left">Naslov</th><th align="left">Oblast</th><th align="left">Pisac</th></tr>';
    while ($red = mysql_fetch_assoc($res)){
        echo '<tr><td>' . $red['Naslov'] . '</td><td>' . $red['Oblast'] . '</td><td>' . $red['Ime'] . '</td></tr>';
    }
    echo '</table>';
}
