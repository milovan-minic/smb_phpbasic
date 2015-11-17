<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'kip';

$naziv = 'Osma ofanziva';
$oblast = 'roman';

$connection = mysql_connect($host, $user, $pass);
if(!$connection){
    die('Could not connect: ' . mysql_error());
}

$database = mysql_select_db($db);
if(!$database){
    die('Could not find database: ' . mysql_error());
}

$query =
    sprintf("   SELECT *
                FROM k");
//                WHERE Naslov = '%s'
//                AND Oblast = '%s'",
//        mysql_real_escape_string($naziv),
//        mysql_real_escape_string($oblast));

$result = mysql_query($query);

//for($i=0; $i<mysql_num_rows($result); $i++){
//    $id = mysql_result($result, $i, 0);
//    $n = mysql_result($result, $i, 1);
//    $o = mysql_result($result, $i, 2);
//    echo "$id | $n | $o";
//}
//
//for($i=0; $i<mysql_num_rows($result); $i++){
//    for($j=0; $j<mysql_num_fields($result); $j++){
//        $polje = mysql_result($result, $i, $j);
//        echo $polje . " | ";
//    }
//    echo "<br />";
//}

//while ($red = mysql_fetch_array($result)){
////    echo $red['idK'] . ' | ' . $red['Naslov'] . ' | ' . $red['Oblast'] . '<br />';
//    echo $red[0] . ' | ' . $red[1] . ' | ' . $red[2] . '<br />';
//}
//mysql_free_result($result);

while ($red = mysql_fetch_assoc($result)){
    echo $red['idK'] . ' | ' . $red['Naslov'] . ' | ' . $red['Oblast'] . '<br />';
}
mysql_free_result($result);

