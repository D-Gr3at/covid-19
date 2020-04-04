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
        // $username_query = "SELECT username FROM portal_user WHERE username='$username' AND passkey='$passkey'";
        // $result = pg_query($username_query);
        // $count = pg_num_rows($result);
        $admin_password = "ndc@123!";
        $admin_username = "admin@ndc.com";
        if($admin_username == $username && $admin_password == $passkey){
            return 1;
        }else{
            return 20;
        }
    }

    public function store_values($data){
        // $username_query = "SELECT username FROM portal_user WHERE username='$username' AND passkey='$passkey'";
        // $result = pg_query($username_query);
        // $count = pg_num_rows($result);
        $query = "insert into data 
                        values('','$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]', '$data[9]', '$data[10]', '$data[11]')";
        $result = pg_query($query);
        $count = pg_num_rows($result);
        if($count == 1){
            return $count;
        }else{
            return 20;
        }
    }
}

?>