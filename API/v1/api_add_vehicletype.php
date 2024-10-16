<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $name = $_POST['name'];
        $price = $_POST['price'];

        $config = new Config();

        $res = $config->addVehicle($name,$price);

        if($res==1) {
            $arr['data'] = "Vehicle Inserted Succesfully...";
        } else {
            $arr['data'] = "Vehicle Insertion Failed...";
        }


    } else {
        $arr['error'] = "Only POST http request are allowed...";
    }

    echo json_encode($arr);

?>