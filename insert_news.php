<!DOCTYPE html>
<?php
$mydb = "spieldaas";
$conn = mysqli_connect("localhost","root","");

$DB = mysqli_select_db($conn, $mydb);

$game_id = $_POST['game_id'];
$source = $_POST['source'];
$description = $_POST['description'];
$news_link = $_POST['news_link'];
$result = mysqli_query($conn,"INSERT INTO news(game_id, source, description, news_link) VALUES($game_id, '$source', '$description', '$news_link')");
if($result == TRUE) {
    echo "<h1>One record has been added</h1>";
} else {
    echo "False";
}
?>
<br><h1><a href="index.php">click back to continue</a></h1>
</html>
