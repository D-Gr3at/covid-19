<?php
    session_start();
    include("/lib/dbfunctions.php");
    $db_object = new dao();
    $data = array();
    $op = $_REQUEST['op'];
    $user_data = array();
    if($op == "login"){
        $username = filter_var($_POST["username"],FILTER_SANITIZE_STRING);
        $password = filter_var($_POST["password"],FILTER_SANITIZE_STRING);
        $result = $db_object->check_details($username, $password);
        if($result == 1){
            $data['success'] = true;
            $data['message'] = "Login successful.";
            echo json_encode($data);
        }else{
            $data['success'] = false;
            $data['message'] = "Username or password incorrect.";
            echo json_encode($data);
        }
    }
    if($op == "submit"){
        $click = $_REQUEST['click'];
        echo $click;
        $user_data = explode(',',$_REQUEST['data']);
        $result = $db_object->store_values($user_data, $click);
        if($result == 0){
            $data['success'] = true;
            $data['message'] = "Result saved.";
            echo json_encode($data);
        }else{
            $data['success'] = false;
            $data['message'] = "An error occurred.";
            echo json_encode($data);
        }
    }
?>