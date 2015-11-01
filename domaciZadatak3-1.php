
<?php

if(!empty($_GET["emails"])) {
    $emailAdreseInput = str_replace(" ", "", $_GET["emails"]);

    $emailAdrese = str_replace(".yu", ".rs", $emailAdreseInput);

    $emailAdreseArray = explode(",", $emailAdrese);
}

?>

<html>
    <head>

    </head>

    <body>
        <form action="domaciZadatak3-1.php">
            <h4>Unesite email adrese i svaku razdvojite zarezom</h4>
            <textarea rows="3" cols="30" name="emails"></textarea>
            <br />
            <input type="submit" value="Proveri">
        </form>
    <h3>Ispravne adrese su:</h3>
    <?php
    if(!empty($emailAdreseArray)) {
        echo "<ul>";
        foreach ($emailAdreseArray as $email) {
            echo "<li>$email</li>";
        }
        echo "</ul>";
    }
//    else {
//        echo "<h3>Niste uneli email adrese.</h3>";
//    }
    ?>
    </body>
</html>

