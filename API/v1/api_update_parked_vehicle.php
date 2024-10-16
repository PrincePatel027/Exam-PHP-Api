<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: PUT,PATCH");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == "PUT" || $_SERVER['REQUEST_METHOD'] == "PATCH") {

        $config = new Config();

        $input = file_get_contents("php://input");

        parse_str($input,$_UPDATE);

        $id = $_UPDATE['id'];
        $parking_id = $_UPDATE['parking_id'];
        $parking_floor_id = $_UPDATE['parking_floor_id'];
        $user_id = $_UPDATE['user_id'];
        $vehicle_type_id = $_UPDATE['vehicle_type_id'];

        $res = $config->updateParkedVehicle($id, $parking_id,$parking_floor_id,$user_id,$vehicle_type_id);

        if($res) {
            $arr['data'] = "Updated Succesfully..";
        } else {
            $arr['data'] = "Updation failed..";
        }

    } else {
        $arr['error'] = "Only PUT & PATCH http request are allowed...";
    }
    
    echo json_encode($arr);

?>