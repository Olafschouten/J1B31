<div id="item<?php echo $row['id']; ?>" class="col-md-12">
    <div class="thumbnail">
        <img class="image" src="<?php echo  URL .'/' . URL_PUBLIC_FOLDER ?>/img/<?php echo $data['image']; ?>" />
        <h1><?php echo $data["name"];?></h1>
        <?php echo $data["description"];?>
        <div class="description">
            <p>Minimale spelers: <?php echo $data["min_players"];?></p>
            <p>Maximale spelers: <?php echo $data["max_players"];?></p>
            <p>Speeltijd: <?php echo $data["play_minutes"];?> minuten</p>
            <p>Uitlegtijd: <?php echo $data["explain_minutes"];?> minuten</p>
        </div>

        <div class="embed-responsive embed-responsive-16by9">
            <?php echo "<br>". $data["youtube"] . "<br>";?>
        </div>
    </div>
</div>\