<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require 'php/script.php'; ?>
    <link rel="stylesheet" href="css/style.css">

    <title>Player</title>
</head>

<body>
    <div class="container">
        <a href="/index.php">Back to films</a>
    </div>

    <div class="form">
        <div class="container">
            <div class="form__inner">
                <h1>Wolcome to our cool music list.</h1>
                <h3>Please, type in your favorite song for our list.</h3>
                <form action="player.php" method="post">
                    <input class="input-place" type="text" name="song_name" placeholder="Name of song">
                    <br>
                    <input class="input-place" type="text" name="song_author" placeholder="Author of song">
                    <br>
                    <input class="btn" type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>


    <div class="table">
        <table>
            <caption>Our List of Songs</caption>
            <tr>
                <th>NAME</th>
                <th>AUTHOR</th>
            </tr>
            <?php 
                $query = $mysqli->query('SELECT name, author FROM music');
    
                while ($row = mysqli_fetch_assoc($query)) { 
                echo "<tr><td>".$row['name']."</td><td>". $row['author'] . "</td> ";
                }
            ?>
        </table>
    </div>

</body>

</html>