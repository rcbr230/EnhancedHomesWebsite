<?php
session_start();

// grab data from POST
$address    = $_POST['address'];
$homeImages = $_POST['houseImgsZip'];
$floorplan = $_POST['floorPlan'];
$mainPhoto  = $_POST['houseImgMain'];

/*    reformat all the data that is needed       */



/*    Run SQL commands with formated data        */
include './SQLConnection.php';
addHouse($address,$homeImages,$floorplan,$mainPhoto)
?>

<!-- 
    TABLE FORMAT:
    houses( id int, address varchar(255), images blob, floorplans blob, mainphoto blob)
-->
