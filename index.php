<!-- 
    Website Name: Spieldaas
    Sections: Home, About, News, Discover
 -->

<?php
    $mydb = "spieldaas";
    $conn = mysqli_connect("localhost", "root", "");    
    $DB = mysqli_select_db($conn, $mydb);
    $query_games = "SELECT * FROM games";
    $query_news = "SELECT * FROM news";
    $result_games = mysqli_query($conn, $query_games);
    $result_news = mysqli_query($conn, $query_news);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="resources/spieldaas_logo.ico">

    <!-- For Fonts and Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0%;
        }

        :root {
            --primmary-color: #17252a;
            --secondary-colour: #89abe3ff;
            --alternate-color: rgba(255, 255, 255, 0.94);
        }

        .dark-theme {
            --primary-color: #66fcf1;
            --secondary-colour: #0b0c10;
            --alternate-color: rgba(0, 0, 0, 0.81);
        }

        body {
            font-family: 'Kdam Thmor Pro', sans-serif;
            background-image: url("resources/spieldaas_white.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        h1, h3, p { color: var(--primary-color); }

        h1, h3, img {
            text-align: center; margin: 0 auto; align-items: center; display: block;
        }

        img { width: 30%; }

        #icon{ cursor: pointer; }

        ul {
            background-color: var(--secondary-colour);
            color: var(--primary-color);
            list-style-type: none;
            font-size: 30px;
            text-align: center;
        }

        li {
            display: inline;
            padding: 0px 70px 0px 70px;
        }

        .sections {
            width: 70%;
            background-color: var(--alternate-color);
            margin: 1% auto;
            border: 2px solid black;
            padding: 1%;
        }

        table, div {
            text-align: center; margin: 0 auto;
            color: var(--primary-color);
        }

        tr:nth-child(even) {
            background-color: #89abe3ff;
        }

        a:link { color: orange; }
        a:visited { color: cyan; }
        a:hover { color: limegreen; }
        a:active { color: yellow; }
    </style>

    <title>Spieldaas</title>
</head>
<body>
    <section >
        <ul style="list-style-type: none; font-size: 30px; text-align: center;">
            <li><a href="#home" style="text-decoration: none; color:var(--primary-color)">Home</a></li>
            <li><a href="#about" style="text-decoration: none; color:var(--primary-color)">About</a></li>
            <li><a href="#news" style="text-decoration: none; color:var(--primary-color)">News</a></li>
            <li><a href="#discover" style="text-decoration: none; color:var(--primary-color)">Discover</a></li>
            <i class="fa fa-moon-o" aria-hidden="true" id="icon"></i>
        </ul>
    </section>

    <!-- Home -->
    <section class="homepage sections">
        <img id="home" src="resources/spieldaas_logo.png">
        <h1>Welcome to Spieldaas, where you can get latest news on games.</h1>
    </section>

    <!-- About -->
    <section class="about sections">
        <h1 id="about">About</h1>
        <p>In the gaming world, news especially of a discount is heard through words. For example, you become aware of a sale in the clothing shop through their advertisements, but the same is not the case for games. Spieldaas is created for this purpose: to update you with daily news from various media, and to tell you which games are in discount.</p>
        <p>This website is created by Umair Shakeel, who is currently studying Software Engineering from NED University of Engineering and Technology. Apart from making websites, he is a content writer for numerous NED societies like AI Club <a href="edit.php" target="_blank">,</a> ACM, and GDSC NEDUET.</p>
    </section>

    <!-- News -->
    <section class="news sections">
        <h1 id="news">News</h1>
        <table>
            <?php
            while($rows = mysqli_fetch_assoc($result_news)) {
            ?>
            <tr>
                <td>
                    <div>
                        <h3>News Source: <?php echo $rows['source']; ?></h3>
                        <p><?php echo $rows['description']; ?></p>
                        <p>Find out more here <a href="<?php echo $rows['news_link']; ?>" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a></p>
                    </div>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </section>

    <!-- Discover -->
    <section class="discover sections">
        <h1 id="discover">Discover</h1>
        <table>
            <tr>
                <td>Name</td>
                <td>Developer</td>
                <td>Cost</td>
                <td>Discount?</td>
                <td>Ratings</td>
                <td>Link</td>
            </tr>
            <?php
            while($rows = mysqli_fetch_assoc($result_games)) {
            ?>
            <tr>
                <td><?php echo $rows['game_name']; ?></td>
                <td><?php echo $rows['developer']; ?></td>
                <td>$<?php echo $rows['cost']; ?></td>
                <td><?php echo $rows['discount']; ?></td>
                <td><?php echo $rows['star_rating']; ?></td>
                <td><a href="<?php echo $rows['link']; ?>" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </section>

    <script>
        // For Dark Theme
        let icon = document.getElementById("icon");
        icon.onclick = function() {
            document.body.classList.toggle("dark-theme");
            document.body.style.backgroundImage = "url('resources/spieldaas_black.png')";
            if (document.body.classList.contains("dark-theme")) {
                icon.className = "fa fa-sun-o";
            } else {
                icon.className = "fa fa-moon-o";
                document.body.style.backgroundImage = "url('resources/spieldaas_white.png')";
            }
        }
    </script>
</body>
</html>
