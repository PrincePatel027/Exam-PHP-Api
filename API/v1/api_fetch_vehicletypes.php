<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == "GET") {

        $config = new Config();

        $response = $config->fetchAllVehicle();

        $array = [];

        while($temp = mysqli_fetch_assoc($response)) {
            array_push($array, $temp);
        }

        echo json_encode($array);

    } else {
        $arr['error'] = "Only GET http request are allowed...";
        echo json_encode($arr);
    }


?>