<h1>Voeg een medewerker toe</h1>
<form name="create" method="post" action="store">
    <h2>Game inplannen</h2>

    <p>Game naam
        <select name="game_name" class="games-select">
            <?php
            var_dump($data);
            foreach ($data as $row) {
                echo "<option value='".$row['name']."'>".$row['name']."</option>";
            }
        ?>
        </select>
    </p>

    <p>Host <input type="text" name="host_name" value="<?php echo $data["host_name"];?>">*
        <?php echo $error["host_name"]?></p>

    <p>Spelers <input type="number" min=2 name="players" value="<?php echo $data["players"];?>">*
        <?php echo $error["players"]?></p>

    <p>Start tijd <input type="time" name="time_start" value="<?php echo $data["time_start"];?>">*
        <?php echo $error["time_start"]?></p>

    <p>Eind tijd <input type="time" name="time_end" value="<?php echo $data["time_end"];?>">*
        <?php echo $error["time_end"]?></p>

    <button type="submit">Verzenden</button>
</form>