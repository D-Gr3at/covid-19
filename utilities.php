<?php
    include("lib/dbfunctions.php");
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
        $user_data = explode(',',$_REQUEST['data']);
        $user_id = $_REQUEST['user_id'];
        $result = $db_object->store_values($user_data, $click, $user_id);
        if($result == 0){
            $data['success'] = true;
            $data['message'] = "Result saved.";
            echo json_encode($data);
        }else if($result == 1){
            $data['success'] = true;
            $data['message'] = "Updated successfully.";
            echo json_encode($data);
        } else{
            $data['success'] = false;
            $data['message'] = "An error occurred.";
            echo json_encode($data);
        }
    }
    if($op == "signup"){
        $phone = filter_var($_POST["phone"],FILTER_SANITIZE_STRING);
        $fullname = filter_var($_POST["full_name"],FILTER_SANITIZE_STRING);
        $email = filter_var($_POST["email"],FILTER_SANITIZE_STRING);
        $tested = $_REQUEST['tested'];
        $result = $db_object->save_data($fullname, $email, $phone, $tested);
        if($result == 0){
            $data['success'] = true;
            $data['message'] = "User data saved.";
            echo json_encode($data);
        }
        if($result == 20){
            $data['success'] = false;
            $data['message'] = "Phone number already exist.";
            echo json_encode($data);
        }
        if($result == 10){
            $data['success'] = false;
            $data['message'] = "Email aready exist.";
            echo json_encode($data);
        }
        if($result == 30){
            $data['success'] = false;
            $data['message'] = "An error occurred.";
            echo json_encode($data);
        }
    }

    if($op == "signin"){
        $email_or_phone = filter_var($_POST["phone_or_email"],FILTER_SANITIZE_STRING);
        $result = $db_object->check_user_details($email_or_phone);
        if($result == 1){
            $data['success'] = true;
            $data['message'] = "Login successful.";
            echo json_encode($data);
        }else{
            $data['success'] = false;
            $data['message'] = "Email or phone number incorrect";
            echo json_encode($data);
        }
    }

    if(isset($_REQUEST['data_id'])){
        $data_id = $_REQUEST['data_id'];
        $result = $db_object->getData($data_id);
        //var_dump($result);
        if ($result == 1) {
            $data['success'] = false;
            $data['message'] = "This user have not been tested.";
            echo json_encode($data);
        }else{
            $data['success'] = true;
            $data['message'] = $result;
            echo json_encode($data);
        }
    }
?>