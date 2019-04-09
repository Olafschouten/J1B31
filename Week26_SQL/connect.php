<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "PlanningsTool";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }

$query = $conn->prepare('SELECT * FROM games');
$query->execute();
$result = $query->fetchAll();

foreach ($result as $info) {
    include 'games.php';
}

?>