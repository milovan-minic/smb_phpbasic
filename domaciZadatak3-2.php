
<?php

if(!empty($_GET["recenica"])) {
    $recenica = $_GET["recenica"];
    $samoglasnici = array("a", "e", "i", "o", "u");

    for($i=0; $i<count($samoglasnici); $i++){
        $brojPonavljanja = substr_count($recenica, $samoglasnici[$i]);
    }

}

?>

<html>
<head>

</head>

<body>
<form action="domaciZadatak3-2.php">
    <h4>Upisite tekst:</h4>
    <textarea rows="3" cols="30" name="recenica"></textarea>
    <br />
    <input type="submit" value="Proveri">
</form>
<h3>Rezultat:</h3>
<?php
if(!empty($recenica )) {
    for($i=0; $i<count($samoglasnici); $i++){
        $brojPonavljanja = substr_count($recenica, $samoglasnici[$i]);
        if($brojPonavljanja > 0) {
            echo $samoglasnici[$i] . " se pojavljuje $brojPonavljanja puta<br />";
        }
    }
}
?>
</body>
</html>

