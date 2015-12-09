
<?php
/**
 * Created by PhpStorm.
 * User: Craig
 * Date: 09/11/2015
 * Time: 21:31
 */
$db = new mysqli("eu-cdbr-azure-north-d.cloudapp.net", "b3db0ca6efa7a5", "eb1ce59a", "DataBase_1109847");

if ($db->connect_errno) {
    die('Connectfailed[' . $db->connect_error . ']');
}
echo "HEllo";
$sql_query = "SELECT * FROM marvelmovies WHERE productionStudio LIKE '%Fox%'";

$result = $db->query($sql_query);

while($row = $result->fetch_array()){
    echo "<p>"."Title: ".$row['title']."Year: ".$row['yearReleased']."</p>";
}

$result->close();

$db->close();

?>

