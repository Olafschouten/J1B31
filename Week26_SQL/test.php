<?php
require('connect.php');
$id = $_GET['id'];
$game = getGameById($id);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Plannings Tool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>

<body>
    <div class="container">
        <?php
            require "menu.php";
        ?>
        <div id="item<?php echo $row['id']; ?>" class="col-md-12">
            <div class="thumbnail">
                <img class="images" <?php echo '<img src= "img/'.$game['image'].'"/>'?>
                    <h1><?php echo "<br>". $game["name"] . "<br>";?></h1>
                <p><?php echo "<br>". $game["description"] . "<br>";?></p>
            </div>
        </div>
        <?php
            require "footer.php";
        ?>
    </div>
</body>

</html>