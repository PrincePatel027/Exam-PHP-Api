<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == "GET") {

        $config = new Config();

        if(!empty($_GET['id'])) {
            $id = $_GET['id'];
    
            $response = $config->fetchSingleUser($id);

            if(is_null(mysqli_fetch_assoc($response))) {
                $arr['data'] = "No Data Found...";
            } else {
                $arr = mysqli_fetch_assoc($response);
            }

        } else {
            $arr['warning'] = "Please Enter ID and Try again later...";
        }

    } else {
        $arr['error'] = "Only GET http request are allowed...";
    }
    
    echo json_encode($arr);

?>