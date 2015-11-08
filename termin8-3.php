<?php

if(isset($_POST["odgovor"])){
    echo "Odgovor koji ste dali na Pitanje 1 je: <b>Odgovor " . $_POST["odgovor"] . "</b><br />";
    echo '<a href="' . isset($_PHP_SELF) . '">Pokusaj ponovo</a>';
    exit();
} elseif(isset($_POST["submit"]) && empty($_POST["odgovor"])) {
    echo "<h3>Niste izabrali odgovor!</h3>";
    echo '<a href="' . isset($_PHP_SELF) . '">Pokusaj ponovo</a>';
    exit();
}

?>

<html>
<head>

</head>

<body>
<h4>Pitanje 1</h4>
<p>Izaberite jedan odgovor:</p>
<form action="<?php $_PHP_SELF; ?>" method="post">
    <input type="radio" name="odgovor" value="1">Odgovor 1<br />
    <input type="radio" name="odgovor" value="2">Odgovor 2<br />
    <input type="radio" name="odgovor" value="3">Odgovor 3<br />
    <input type="radio" name="odgovor" value="4">Odgovor 4<br />
    <br />
    <input type="submit" name="submit" value="Posalji odgovor"/>
</form>
</body>
</html>