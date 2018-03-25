<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("mysql17.000webhost.com", "a3931369_asanzc", "Genista2", "a3931369_antonio");

$result = $conn->query("SELECT user_ID, username FROM User");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"ID":"'  . $rs["user_ID"] . '",';
    $outp .= '"Nombre":"'   . $rs["username"]        . '"}';
}
$outp .="]";

$conn->close();

echo($outp);
?>