<?php

if(isset($_POST["odgovor"])){
    echo "Odgovor koji ste dali je: Odgovor " . $_POST["odgovor"];
    echo '<a href="' . isset($_PHP_SELF) . '">Pokusaj ponovo</a>"';
    exit();
} elseif(isset($_POST["odgovor"])) {
    echo "<h3>Niste izabrali odgovor!</h3>";
    echo '<a href="' . isset($_PHP_SELF) . '">Pokusaj ponovo</a>"';
    DORADITI ODAVDE!
    exit();
}

?>

<html>
<head>

</head>

<body>
<p>Izaberi odgovor:</p>
<form action="<?php $_PHP_SELF; ?>" method="post">
    <input type="radio" name="odgovor" value="1">Odgovor 1<br />
    <input type="radio" name="odgovor" value="2">Odgovor 2<br />
    <input type="radio" name="odgovor" value="3">Odgovor 3<br />
    <input type="radio" name="odgovor" value="4">Odgovor 4<br />
    <br />
    <input type="submit" name="submit" value="Go"/>
</form>
</body>
</html>