<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: DELETE");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == "DELETE") {

        $config = new Config();

        $input = file_get_contents("php://input");

        parse_str($input,$_DELETE);

        $id = $_DELETE['id'];

        $res = $config->deleteParkedVehicle($id);

        if($res) {
            $arr['data'] = "Deleted Succesfully...";
        } else {
            $arr['data'] = "Deletion Failed...";
        }

    } else {
        $arr['error'] = "Only DELETE http request are allowed...";
    }

    echo json_encode($arr);

?>