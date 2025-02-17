
<?php
    // Count the number of files in the directory
    $dir = "./Homes";
    $fileCount = 0;
    // use glob to make an a
    $files = glob($dir."/*");
    $fileCount = count($files);

    
    // Build an array of all the homes and convert it to a JSON
    $data = [];
    foreach($files as $key => $val){
        // load file
        $homeFile = fopen($val."/info.txt", "r");

        // format date
        $date = fgets($homeFile);
        $date = explode(":", $date)[1];
        $date=str_replace("\n","",$date);
        $date = strtotime($date);

        // format address
        $address = fgets($homeFile);
        $address = explode(":", $address)[1];
        $address=str_replace("\n","",$address);

        // add all images
        $images = [];
        $imageFiles = glob($val."/*.{jpg,png}", GLOB_BRACE);
        foreach($imageFiles as $imgKey => $imgVal){
            $images[] = $imgVal;
        }

        // add data to returning 
        $homeData["date"] = $date;
        $homeData["address"] = $address;
        $homeData["fileLocation"] = $val;
        $homeData["images"] = $images;
        $data[] = $homeData;

        // sort data by the dates
        usort($data, function($a, $b){
            // descending, reverse to do ascending
            return $b["date"] - $a["date"];
        });
    }
    echo json_encode($data);



?>