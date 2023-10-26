<?php
    include("../Config/config.php");
    header("Access-Control-Allow-Methods: POST");

    $config = new Config();

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $celebration = $_POST['celebration'];

       $res = $config->insert($name,$celebration);
       if($res){
            $arr['status'] = "Data Inserted Successfully...";
       }else{
        
        $arr['status'] = "Data Inserted Failed...";
       }
    
    }
    else{
        $arr['error'] = "Only POST HTTP methods is allow..";
    }
    
    echo json_encode($arr);
?>