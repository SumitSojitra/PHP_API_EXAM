<?php
    include("../Config/config.php");
    header("Access-Control-Allow-Methods: DELETE");

    $config = new Config();

    if($_SERVER['REQUEST_METHOD']=='DELETE'){
        $input = file_get_contents("php://input");
        parse_str($input,$_DELETE);
        $id = $_DELETE['id'];
        
        $res = $config->delete($id);

        if($res){
            $arr['data'] = "Data Deleted Successfully...";
        }else{

            $arr['data'] = "Data Deleted Failed...";
        }
    }
    else{
        $arr['error'] = "Only DELETE HTTP methods is allow..";
    }
    
    echo json_encode($arr);
?>