<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: PUT,PATCH");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == "PUT" || $_SERVER['REQUEST_METHOD'] == "PATCH") {

        $config = new Config();

        $input = file_get_contents("php://input");

        parse_str($input,$_UPDATE);

        $id = $_UPDATE['id'];
        $floor_number = $_UPDATE['floor_number'];
        $parking_id = $_UPDATE['parking_id'];

        $res = $config->updateParkingFloor($id,$floor_number,$parking_id);

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