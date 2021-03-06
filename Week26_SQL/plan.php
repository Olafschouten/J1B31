<!DOCTYPE html>
<html lang="nl">

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
            require 'menu.php';       

            require "connect.php";

            $data = convertPost();

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $error = controle($data);
                if (count($error) == 0) {

                    $fields = ['game_name', 'host_name', 'players', 'time_start', 'time_end'];
                    $cleanFields = [];

                    foreach ($fields as $field) {
                        $cleanFields[$field] = changeInput($_POST[$field]);
                    }
                    
                    insertPlanning($cleanFields);
                    header("Location: overzicht.php");
                    exit();
                }
            }  
        ?>

        <form method="post">
            <h2>Game inplannen</h2>

            <p>Game naam
                <select name="game_name" class="games-select">
                    <?php
                        $conn = databaseConnect();
						$sql = $conn->prepare("SELECT name FROM games");
						$sql->execute();
						$results = $sql->fetchall();
						foreach ($results as $row) {
							echo "<option value='".$row['name']."'>".$row['name']."</option>";
                        }
                        
                        
					?>
                </select>
            </p>

            <p>Host <input type="text" name="host_name" value="<?php echo $data["host_name"];?>">*
                <?php echo $error["host_name"]?></p>

            <p>Spelers <input type="number" min=2 name="players" value="<?php echo $data["players"];?>">*
                <?php echo $error["players"]?></p>

            <p>Start tijd <input type="time" name="time_start"
                    value="<?php echo $data["time_start"];?>">* <?php echo $error["time_start"]?></p>

            <p>Eind tijd <input type="time" name="time_end" value="<?php echo $data["time_end"];?>">*
                <?php echo $error["time_end"]?></p>

            <input class="btn btn-secondary" type="submit" name="submit" value="Verzenden">
        </form>

        <?php
            require "footer.php";
        ?>
    </div>
</body>

</html>