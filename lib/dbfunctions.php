<?php
error_reporting(E_ERROR);
require_once("lib/dbConnection.inc.php");

class dao{
    function begin()
	{
		@pg_query("BEGIN");
	}
	function commit()
	{
		@pg_query("COMMIT");
	}
	function rollback()
	{
		@pg_query("ROLLBACK");
    }
    
    public function check_details($username, $passkey){
        $admin_password = "ndc@123!";
        $admin_username = "admin@ndc.com";
        if($admin_username == $username && $admin_password == $passkey){
            return 1;
        }else{
            return 20;
        }
    }

    public function store_values($data, $click, $user_id){
        if($click <= 2){
            $prescription = "LOW";
        }
        if($click > 2 && $click <= 5){
            $prescription = "MEDIUM";
        }
        if($click > 5 && $click <= 12){
            $prescription = "HIGH";
        }
        if($click > 12){
            $prescription = "SEVERE";
        }
        $query_select_id = "SELECT id from user_data ORDER BY id DESC LIMIT 1";
        $resource_id = pg_query($query_select_id);
        $id = pg_fetch_result($resource_id, 0, 'id');
        $id = $id + 1;
        $tested_query = "SELECT * from user_info where id=".$user_id."";
        $tested_resource = pg_query($tested_query);
        $tested_result = pg_fetch_result($tested_resource, 0, 'tested');
        if($tested_result == 'NO'){
            $user_query = "UPDATE user_info SET tested='YES' WHERE id=".$user_id."";
            $user_resource = pg_query($user_query);
            $query = "insert into user_data values(".$id.",'$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]', '$data[9]', '$data[10]', '$data[11]','$prescription',".$user_id.")";
        }else{
            $query ="UPDATE user_data SET cough='$data[0]', cold='$data[1]', diarrhea='$data[2]', sore_throat='$data[3]', body_aches='$data[4]', headache='$data[5]', temperature='$data[6]', breathing='$data[7]', fatigue='$data[8]', traveled='$data[9]', traveled_area='$data[10]', contact='$data[11]', result='$prescription' WHERE user_id=".$user_id."";
            // pg_query($query);
        }
        $result = pg_query($query);
        $count = pg_num_rows($result);
        if($count == 0){
            return $count;
        }else if($count == 1){
            return 1;
        }else{
            return 20;
        }
    }

    public function save_data($fullname, $email, $phone, $tested){
        $email_query = "SELECT email FROM user_info WHERE email='$email'";
        $phone_query = "SELECT phone FROM user_info WHERE phone='$phone'";
        $query_select_id = "SELECT id from user_info ORDER BY id DESC LIMIT 1";
        $resource_id = pg_query($query_select_id);
        $id = pg_fetch_result($resource_id, 0, 'id');
        $id = $id + 1;
        $email_resource = pg_query($email_query);
        $email_count = pg_num_rows($email_resource);
        $phone_resource = pg_query($phone_query);
        $phone_count = pg_num_rows($phone_resource);
        // echo pg_fetch_result($phone_resource,"phone");
        if($phone_count > 0){
            return 20;
        }
        if($email_count > 0){
            return 10;
        }
        $insert_query = "insert into user_info values(".$id.",'$email','$phone','$fullname', '$tested')";
        $result = pg_query($insert_query);
        $insert_count = pg_num_rows($result);
        if($insert_count == 0){
            return $insert_count;
        }else{
            return 30;
        }
    }

    public function check_user_details($phone_or_email){
        $query = "SELECT * FROM user_info WHERE phone='$phone_or_email' OR email='$phone_or_email'";
        $result = pg_query($query);
        $count = pg_num_rows($result);
        if($count == 1){
            return $count;
        }else{
            return 20;
        }
    }

    public function getData($data_id){
        $query = "SELECT * FROM user_data WHERE id='$data_id'";
        $data_resource = pg_query($query);
        $data = pg_fetch_row($data_resource);
        return $data;
    }
}

?>