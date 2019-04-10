<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Plannings Tool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>

<body>
    <div class="logo">
        <h1>Plannings Tool</h1>
    </div>

    <div class="container">
        <?php
            include 'menu.php';

            require "connect.php";
        ?>

        <form action="test.php" method="POST">
            <h2>Game inplannen..</h2>

            <p>game name <input type="text" name="gameName" placeholder="" list="games" required></p>

            <datalist id="games">
                <option value="7 Wonders">
                <option value="10min Kraak">
                <option value="Camel Up">
                <option value="City Of Horror">
                <option value="Climbers">
                <option value="Codenames">
                <option value="Concept">
                <option value="Counterfeiters">
                <option value="Dale Of Merchants">
                <option value="Dixit">
                <option value="Downforce">
                <option value="Dragon Flagon">
                <option value="Fantasy Realms">
                <option value="Ghost Finding Treasure Hunters">
                <option value="Gizmos">
                <option value="Jhon">
                <option value="Keep Talking And Nobody Explodes">
                <option value="Lemming Mafias">
                <option value="Micropolis">
                <option value="Misterium">
                <option value="Notalone">
                <option value="Pandemic">
            </datalist>



            <p>host <input type="text" name="vraag2" placeholder="" required></p>

            <p>players <input type="number" min=2 name="vraag3" placeholder="" required></p>

            <p>start time <input type="time" name="vraag4" placeholder="" required></p>

            <p>end time <input type="time" name="vraag5" placeholder="" required></p>

            <input type="submit" name='submit'>
        </form>



        <?php
            require "footer.php";
        ?>
    </div>
</body>

</html>