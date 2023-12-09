<?php
try{
    // Create a new PDO instance for connecting to the MySQL database
    $conn = new PDO('mysql:host=172.31.22.43;dbname=Bapreet200480338','Bapreet200480338', '_ke9E56-j5');

    // Set the PDO error mode to exception for better error handling
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    // Display an error message if the connection fails
    echo "<p>Connection Failed: " . $e->getMessage();
}
?>
