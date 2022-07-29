<?php

$url ="http://localhost:4000/getSingleCampaignProfile/62e37dac4716fdcc24d03acc";

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$set_data=curl_exec($ch);
if($e = curl_error($ch)){
    echo $e;
    
}
else{
    // $decode =json_decode($set_data);
    // print_r($decode);
    echo $set_data;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data</h1>
    <?php 

        $arr = json_decode($set_data, true);

        echo $arr["_id"].'<br>';
       echo $arr['campaignTitle'];
        
        ?>
</body>
</html>