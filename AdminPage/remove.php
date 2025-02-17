<?php
session_start();
if (!isset($_SESSION['loggedInUser'])){
    echo "You are not logged in. Visit <a href='./index.php'>here</a> to log in.>";
    exit();
}
?>