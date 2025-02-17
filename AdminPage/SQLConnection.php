<?php
$servername = "localhost";
$user       = "Admin";
$password   = "";
$dbName     = "EnhancedHomes";
function addHouse($address, $images, $floorplan, $mainPhoto, $sold){
    global $servername, $user, $password, $dbName;

    $fileDataIMGs = file_get_contents($images);
    $fileDataFP = file_get_contents($floorplan);


    // connect to DB and check if connection is working
    $conn = new mysqli($servername,$user,$password, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";  

    // $query = 
    // "
    // INSERT INTO houses (address, images, floorplan, mainphoto, sold) VALUES 
    // ('".$address."',".$fileDataIMGs.",".$fileDataFP.",".$mainPhoto.",".$sold.");";
    // echo $query;

    // if(!$conn->query($query)){
    //     echo("Error: ".$conn->error);
    // }
    // commit($conn);
}

function testAdd(){
    global $servername, $user, $password, $dbName;
    // connect to DB and check if connection is working
    $conn = new mysqli($servername,$user,$password, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";  

    /*    EXAMPLE QUERY     */
    $testQuery = "INSERT INTO test VALUES (1);";
    $conn->query($testQuery);
    commit();
}

function commit($conn){
    $conn->commit();
    $conn->close();
}
?>