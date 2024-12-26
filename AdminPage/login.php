<?php
    session_start();
    
    $userIN = $_POST['username'];
    $passIN = $_POST['password'];
    if(checkValid($userIN, $passIN)){
        $_SESSION['loggedInUser'] = TRUE;
        $action = $_POST['remove-add'];
        header("Location: ".$action.".php");
        exit();
    } else{
        echo "<b>INVALID</b> username or password.";
    }

    function checkValid($username, $password){
        $file = fopen("usernameandpassword.txt", "r");

        // only need to grab the first two lines. split by : and remove any white space
        $user = trim(explode(":", fgets($file))[1]);
        $pass = trim(explode(":", fgets($file))[1]);

        if($username == $user and $password == $pass){
            return TRUE;
        }
        return FALSE;
    }
?>