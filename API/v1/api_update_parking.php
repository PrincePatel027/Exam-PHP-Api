<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: PUT,PATCH");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == "PUT" || $_SERVER['REQUEST_METHOD'] == "PATCH") {

        $config = new Config();

        $input = file_get_contents("php://input");

        parse_str($input,$_UPDATE);

        $id = $_UPDATE['id'];
        $name = $_UPDATE['name'];
        $parking_location = $_UPDATE['location'];

        $res = $config->updateParking($id,$name,$parking_location);

            if($res) {
                $arr['data'] = "Parking Update Succesfully...";
            } else {
                $arr['data'] = "Parking Updation Failed...";
            }
        
    } else {
        $arr['error'] = "Only PUT & PATCH http request are allowed...";
    }
    
    echo json_encode($arr);

?>