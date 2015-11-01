<html>
<head>

</head>

<body>
<?php

    echo "Zdravo Svete!";
    echo "<br>Bonjour, Monde!";
    echo "<br>Hello, World!<br><hr>";

    $vreme = date("H:i");
    echo "Sada je $vreme CET!<br><hr>";

    $ime = "Pera";
    $prezime = "Zdera";

    $imeIPrezime = $ime . " " . $prezime;

    echo "<b>Ime i prezime:</b> " . $imeIPrezime . "<br>";
    echo "<b>Duzina imena:</b> " . strlen($ime) . "<br>";
    echo "<b>Pozicija na kojoj pocinje prezime:</b> " . (strpos($imeIPrezime, $prezime) + 1) . "<br><hr>";

?>
</body>
</html>
