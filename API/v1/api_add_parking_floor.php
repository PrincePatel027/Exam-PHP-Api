<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $floorName = $_POST['floor_number'];
        $parkingId = $_POST['parking_id'];

        $config = new Config();

        $res = $config->addParkingFloor($floorName,$parkingId);

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