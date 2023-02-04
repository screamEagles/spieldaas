<!DOCTYPE html>
<?php
$mydb = "spieldaas";
$conn = mysqli_connect("localhost","root","");
$DB = mysqli_select_db($conn, $mydb);

$game_name = $_POST['game_name'];
$result=mysqli_query($conn, "DELETE FROM games WHERE game_name = '$game_name'");
if($result == TRUE) {
    echo "<h1>One record has been deleted</h1>";
} else {
    echo "<h1>False</h1>";
}
?>
<br><h1><a href="index.php">click back to continue</a></h1>
</html>
