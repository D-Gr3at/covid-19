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
        var_dump($user_data[0]);
        $clicked_value = $_REQUEST['clicked'];
        if($user_data[0] == NULL){
            $user_data[0] = $clicked_value;
            var_dump($user_data[0]);
            var_dump(sizeof($user_data));
            return;
        }
        if($user_data[1] == NULL){
            $user_data[1] = $clicked_value;
            var_dump($user_data);
            return;
        }
        if($user_data[2] == NULL){
            $user_data[2] = $clicked_value;
            var_dump($user_data);
            return;
        }
        if($user_data[3] == NULL){
            $user_data[3] = $clicked_value;
            var_dump($user_data);
            return;
        }
        if($user_data[4] == NULL){
            $user_data[4] = $clicked_value;
            var_dump($user_data);
            return;
        }
        if($user_data[5] == NULL){
            $user_data[5] = $clicked_value;
            var_dump($user_data);
            return;
        }
        if($user_data[6] == NULL){
            $user_data[6] = $clicked_value;
            var_dump($user_data);
            return;
        }
        if($user_data[7] == NULL){
            $user_data[7] = $clicked_value;
            var_dump($user_data);
            return;
        }
        if($user_data[8] == NULL){
            $user_data[8] = $clicked_value;
            var_dump($user_data);
            return;
        }
        if($user_data[9] == NULL){
            $user_data[9] = $clicked_value;
            var_dump($user_data);
            return;
        }
        if($user_data[10] == NULL){
            $user_data[10] = $clicked_value;
            var_dump($user_data);
            return;
        }
        if($user_data[11] == NULL){
            $user_data[11] = $clicked_value;
            var_dump($user_data);
            return;
        }
        if(sizeof($user_data) == 12){
            $result = $db_object->store_values($user_data);
            if($result == 1){
                $data['success'] = true;
                $data['message'] = "stored successfully.";
                echo json_encode($data);
            }else{
                $data['success'] = false;
                $data['message'] = "An error occurred.";
                echo json_encode($data);
            }
        }
    }
?>