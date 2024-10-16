<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $parking_id = $_POST['parking_id'];
        $parking_floor_id = $_POST['parking_floor_id'];
        $user_id = $_POST['user_id'];
        $vehicle_type_id = $_POST['vehicle_type_id'];

        $config = new Config();

        $res = $config->parkVehicle($parking_id,$parking_floor_id,$user_id,$vehicle_type_id);

        if($res==1) {
            $arr['data'] = "Succesfully...";
        } else {
            $arr['data'] = "Failed...";
        }

    } else {
        $arr['error'] = "Only POST http request are allowed...";
    }

    echo json_encode($arr);

?>