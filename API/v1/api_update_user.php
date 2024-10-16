<?php

    include "../../config/config.php";

    header("Access-Control-Allow-Methods: PUT,PATCH");
    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == "PUT" || $_SERVER['REQUEST_METHOD'] == "PATCH") {

        $config = new Config();

        $input = file_get_contents("php://input");

        parse_str($input,$_UPDATE);

        if( !empty($_UPDATE['id']) && !empty($_UPDATE['name']) && !empty($_UPDATE['age']) ) {

            // $id = $_UPDATE['id'];
            // $name = $_UPDATE['name'];
            // $age = $_UPDATE['age'];

            // $res = $config->updateUser($id,$name,$age);

            // if($res) {
            //     $arr['data'] = "User Update Succesfully...";
            // } else {
            //     $arr['data'] = "User Updation Failed...";
            // }

        } else {
            $arr['warning'] = "Please fill out all fields(id,name,course) and Continue...";
        }

        $id = $_UPDATE['id'];
        $course = $_UPDATE['name'];
        $age = $_UPDATE['age'];

        $config->updateUser($id,$name,$age);
        

    } else {
        $arr['error'] = "Only PUT & PATCH http request are allowed...";
    }
    
    echo json_encode($arr);

?>