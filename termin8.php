<?php
    if(isset($_POST["name"]) && isset($_POST["age"])){
        echo "Welcome " . $_POST["name"] . "!<br />";
        echo "You are " . $_POST["age"] . " years old.<br />";

        echo '<a href="' . isset($_PHP_SELF) . '">Ponovo</a>';

        exit();
    }
?>

<html>
    <head>

    </head>

    <body>
        <form action="<?php $_PHP_SELF; ?>" method="post">
            Name: <input type="text" name="name" />
            <br />
            Age: <input type="number" name="age" />
            <br />
            <input type="submit" name="submit" value="Prikazi"/>
        </form>
    </body>
</html>