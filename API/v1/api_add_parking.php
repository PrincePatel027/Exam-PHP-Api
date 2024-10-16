<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $parkingName = $_POST['name'];
        $parkingLocation = $_POST['location'];

        $config = new Config();

        $res = $config->addParking($parkingName,$parkingLocation);

        if($res==1) {
            $arr['data'] = "Parking Inserted Succesfully...";
        } else {
            $arr['data'] = "Parking Insertion Failed...";
        }


    } else {
        $arr['error'] = "Only POST http request are allowed...";
    }

    echo json_encode($arr);

?>