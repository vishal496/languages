<?php 
require_once("database.php");

if(isset($database)) { echo "true"; } else {echo "false";}
echo "<br />";
echo $database->mysqli_prep("It's working?");
echo "<br />";

$sql = "SELECT * FROM record";
$result = $database->query($sql);
$found_record = mysqli_fetch_array($result);
echo print_r($found_record);
?>