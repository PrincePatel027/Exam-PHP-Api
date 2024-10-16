<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $name = $_POST['name'];
        $age = $_POST['age'];

        $config = new Config();

        $res = $config->addUser($name,$age);

        if($res==1) {
            $arr['data'] = "User Inserted Succesfully...";
        } else {
            $arr['data'] = "User Insertion Failed...";
        }


    } else {
        $arr['error'] = "Only POST http request are allowed...";
    }

    echo json_encode($arr);

?>