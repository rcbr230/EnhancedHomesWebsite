<?php
session_start();
if (!isset($_SESSION['loggedInUser'])){
    echo "You are not logged in. Visit <a href='https://reece-brogden.com/EnhancedHomes/AdminPage'>here</a> to log in.>";
    exit();
}
?>
<style>
    body{
        text-align: center;
    }
    .main-div{
        text-align: center;
        margin-right: 30%;
        margin-left: 30%;
        margin-top: 5%;
        border: 1px solid black;
        padding: 15px;
    }
    input{
        margin: 10px;
    }
</style>
<title>Enhanced Homes Add</title>
<body>
    <div class="main-div">
        <!--
            allow a user to pass:
            * ZIP of all images
            * Main house image
            * Floor plans
            * Address
        -->
        <form action="addHome.php" method="POST" enctype="multipart/form-data">
            <label for="houseImgsZip">House photos(.zip):</label>
                <input type="file" name="houseImgsZip" id="houseImgsZip" accept=".zip">
            </br>
            <!-- <label for="houseImgMain">Main house photo(.jpg/.png):</label>
                <input type="file" name="houseImgMain" id="houseImgMain" accept="image/*">
            </br>
            <label for="floorPlan">Floor plans(.pdf):</label>
                <input type="file" name="floorPlan" id="floorPlan" accept=".zip">
            </br>
            <label for="address">Address:</label>
                <input type="text" name="address" id="address">
            </br>
            <label for="sold">Sold:</label>
                <input type="checkbox" name="sold" id="sold">   
            </br> -->
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</body>
