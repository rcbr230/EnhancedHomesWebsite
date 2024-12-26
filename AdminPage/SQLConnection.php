<?php
$servername = "localhost";
$user       = "Admin";
$password   = "";
$dbName     = "EnhancedHomes";
function addHouse($address, $images, $floorplan, $mainPhoto){

    // connect to DB and check if connection is working
    $conn = new mysqli($servername,$user,$password, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";  


    /*    EXAMPLE QUERY     */
    // $testQuery = "INSERT INTO test VALUES (1);";
    // $conn->query($testQuery);
    $query = 
    "
    INSERT INTO houses (
        address, images, floorplan, mainphoto
    ) 
    VALUES (
        
    );
    
    ";
    // commit and close DB connection
    $conn->commit();
    $conn->close();
}
?>