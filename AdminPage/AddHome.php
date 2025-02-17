<?php
session_start();
if (!isset($_SESSION['loggedInUser'])){
    echo "You are not logged in. Visit <a href='https://reece-brogden.com/EnhancedHomes/AdminPage'>here</a> to log in.>";
    exit();
}

print_r($_POST);


/*    reformat all the data that is needed       */



/*    Run SQL commands with formated data        */
// include './SQLConnection.php';
// addHouse($address,$homeImages,$floorplan,$mainPhoto,$sold);
// testAdd();

// reload add.php here
?>

<!-- 
    TABLE FORMAT:
    houses( id int, address varchar(255), images blob, floorplans blob, mainphoto blob, sold bool )
-->
