<h1>Persoon wijzigen</h1>
<form name="update" method="post" action="<?=URL?>employee/update/ <? echo $data[1]['id'] ?>">
    <input type="text" name="id" value="<?= $data[1]['id'] ?>" />
    <div class="userInput">

        <h2>Edit spel</h2>
        <p>Game naam
            <select name="game_name" class="games-select">
                <?
                foreach ($data[0] as $row) {
                $selected = ($data['game_name'] == $row['name']? ' selected' : '');
                echo "<option value='".$row['name']."'".$selected.">".$row['name']."</option>";
            }
        ?>
            </select>
        </p>

        <p>Spel verteller
            <input type='text' name='host_name'
                value="<?php echo $data[1]['host_name']?>">*<?php echo $error["host_name"]?></p>

        <p>Aantal spelers
            <input type="text" name="players" value="<?php echo $data[1]['players']?>">*<?php echo $error["players"]?></p>

        <p>Start tijd
            <input type="time" name="time_start"
                value="<?php echo $data[1]['time_start']?>">*<?php echo $error["time_start"]?></p>

        <p>Eind tijd
            <input type="time" name="time_end" value="<?php echo $data[1]['time_end']?>">*<?php echo $error["time_end"]?>
        </p>

        <button type="submit">Verzenden</button>
    </div>
</form>