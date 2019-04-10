<?php
function DBconn(){
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "Planningstool";
    $conn = null;
  
    try {
    $conn = new PDO("mysql:host=".$servername.";dbname=".$dbname.";", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        echo 'Connection faile: '. $e->getMessage();
    }
    return $conn;
}

function getAllGames(){
    $conn = DBconn();
    $sql =  $conn->prepare("SELECT * FROM games");
    $sql->execute();
    $result = $sql->fetchAll();
    return $result;
}

function getGameById($id){
    $conn = DBconn();
    $sql = $conn->prepare("SELECT * FROM games where id=:id");
    $sql->execute([':id' => $id]);
    $result = $sql->fetch();
    $conn = null;
    return $result;
}

?>

<!-- // if(isset($_POST['submit'])) {
// $gameName = $_POST['gameName'];

// $stmt = $conn->prepare("INSERT INTO `user_input` (game_name) VALUES ('".$gameName."')");
// $stmt->execute();
// } -->