<div class="GameInfo">
    <h4 class="title"><?php echo $info['name']; ?></h4> <img class="images" src="img/<?php echo $info['image']; ?>">
    <p class="description"><?php echo $info['description']; ?></p>
    <p class="players-min">Minimale spelers: <?php echo $info['min_players']; ?>.</p>
    <p class="players-max">Maximale spelers: <?php echo $info['max_players']; ?>.</p>
    <p class="playtime">Speeltijd: <?php echo $info['play_minutes']; ?> minuten.</p>
    <p class="time">Uitlegtijd: <?php echo $info['explain_minutes']; ?> minuten.</p>
</div>

<?php echo $result; ?>

<h1><?php echo $result["name"]; ?></h1>
<p><?php echo $result["description"]; ?></p>
<img src="img/<?php echo $result["image"]; ?>">