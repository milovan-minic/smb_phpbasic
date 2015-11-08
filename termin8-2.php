<?php
if(isset($_POST["location"])){
    $location = $_POST["location"];
    header("Location:$location");
    exit();
}
?>

<html>
<head>

</head>

<body>
<p>Choose site to visit:</p>
<form action="<?php $_PHP_SELF; ?>" method="post">
    <select name="location">
        <option value=""></option>
        <option value="http://w3c.org">World Wide Web Consortium</option>
        <option value="http://www.google.rs">Google Serbia</option>
    </select>
    <br />
    <input type="submit" name="submit" value="Go"/>
</form>
</body>
</html>