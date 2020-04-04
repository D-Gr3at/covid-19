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

    public function store_values($data, $click){
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
        $query = "insert into user_data values(".$id.",'$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]', '$data[9]', '$data[10]', '$data[11]','$prescription')";
        echo $query;
        $result = pg_query($query);
        $count = pg_num_rows($result);
        if($count == 0){
            return $count;
        }else{
            return 20;
        }
    }
}

?>