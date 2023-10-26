<?php
    include("../Config/config.php");
    header("Access-Control-Allow-Methods: PUT");

    $config = new Config();

    if($_SERVER['REQUEST_METHOD']=='PUT'){
        $input = file_get_contents("php://input");
        parse_str($input,$_PUT);
        $id = $_PUT['id'];
        $name = $_PUT['name'];
        $celebration = $_PUT['celebration'];

        $res = $config->update($name,$celebration,$id);
        if($res){
            $arr['data'] = "Data Updated Successfully...";
        }else{
            $arr['data'] = "Data Updated Failed...";}
        
    }else{
        $arr['error'] = "Only PUT HTTP Request is Allow...";


    }

    echo json_encode($arr);
?>