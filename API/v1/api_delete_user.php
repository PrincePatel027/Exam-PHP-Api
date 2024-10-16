<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: DELETE");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == "DELETE") {

        $config = new Config();

        $input = file_get_contents("php://input");

        parse_str($input,$_DELETE);

        $name = $_DELETE['name'];

        $res = $config->deleteUser($name);

        if($res) {
            $arr['data'] = "User Deleted Succesfully...";
        } else {
            $arr['data'] = "User Deletion Failed...";
        }


    } else {
        $arr['error'] = "Only DELETE http request are allowed...";
    }

    echo json_encode($arr);

?>