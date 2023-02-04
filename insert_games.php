<!DOCTYPE html>
<?php
$mydb = "spieldaas";
$conn = mysqli_connect("localhost","root","");
$DB = mysqli_select_db($conn, $mydb);

$game_name = $_POST['game_name'];
$developer = $_POST['developer'];
$cost = $_POST['cost'];
$discount = $_POST['discount'];
$link = $_POST['link'];
$star_rating = $_POST['star_rating'];
$result = mysqli_query($conn,"INSERT INTO games(game_name, developer, cost, discount, link, star_rating) VALUES('$game_name', '$developer', '$cost', '$discount', '$link', '$star_rating')");
if($result == TRUE) {
    echo "<h1>One record has been added</h1>";
} else {
    echo "<h1>False</h1>";
}
?>
<br><h1><a href="index.php">click back to continue</a></h1>
</html>
