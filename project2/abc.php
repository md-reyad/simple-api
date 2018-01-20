<?php
//include("http://localhost/project/index.php?ID=1");
//
//$id = 12;
//
//
//

//
$data = $_POST['data'];
$params=['data'=>$data];
 $defaults = array(
//        CURLOPT_URL             => "http://localhost/phpApi/project/index.php?data=$data", //when get method
        CURLOPT_URL             => "http://localhost/phpApi/project/index.php",
        CURLOPT_POST            => false,
        CURLOPT_HEADER          => false,
        CURLOPT_SSL_VERIFYPEER  => false,
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_SSL_VERIFYHOST  => false,
        CURLOPT_POSTFIELDS => $params,

    );
    $curl               = curl_init();
    curl_setopt_array($curl, $defaults);
    $curl_response      = curl_exec($curl);

    $json_objekat       = json_decode($curl_response);

    if(isset($json_objekat)) {
        foreach ($json_objekat as $data) {
            echo "<h5>" . $data->name . "</h5>";
        }
    }else{
        echo "data not found";
    }





?>


