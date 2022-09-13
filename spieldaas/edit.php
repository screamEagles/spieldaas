<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="resources/spieldaas_logo.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #0b6ab4;
            text-align: center;
            font-family: 'Kdam Thmor Pro', sans-serif;
        }
        form {
            align-items: center;
            margin: auto;
        }
    </style>
    <title>Edit</title>
</head>
<body>
    <h1>News Insert</h1>
    <form action="insert_news.php" method="POST">
        <label for="game_id">Name</label> <input type="text" id="game_id" name="game_id"> <br><label for="source">Source</label> <input type="text" id="source" name="source"><br>
        <label for="description">Description</label> <input type="text" id="description" name="description"><br>
        <label for="news_link">Link</label> <input type="text" id="news_link" name="news_link"> <br><input type="submit">
    </form><br><br>

    <h1>News Delete</h1>
    <form action="delete_newss.php" method="POST">
        <label for="game_id">ID</label> <input type="text" id="game_id" name="game_id"> <br><input type="submit">
    </form><br><br>

    <h1>Games Insert</h1>
    <form action="insert_games.php" method="POST">
        <label for="game_name">Name</label> <input type="text" id="game_name" name="game_name"> <br><label for="developer">Developer</label> <input type="text" id="developer" name="developer"><br>
        <label for="cost">Cost</label> <input type="text" id="cost" name="cost"><br>
        <label for="discount">Discount</label> <input type="text" id="discount" name="discount"><br>
        <label for="link">Link</label> <input type="text" id="link" name="link"><br>
        <label for="star_rating">Ratings</label> <input type="text" id="star_rating" name="star_rating"><br>
        <input type="submit">
    </form><br><br>

    <h1>Games Delete</h1>
    <form action="delete_games.php" method="POST">
        <label for="game_name">Name</label> <input type="text" id="game_name" name="game_name"> <br><input type="submit">
    </form>
</body>
</html>
