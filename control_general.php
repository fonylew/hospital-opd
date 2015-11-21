<?php
	
	include_once("connection.php");

	if (isset($_POST['employee_logout'])) {
      	session_start();
        session_destroy();
        echo json_encode('logout',JSON_FORCE_OBJECT); 
    }


	if (isset($_POST['login_username'])) {
		employee_login($_POST['login_username'],$_POST['login_password']);
	}

	function employee_login($username,$password) {

		$connection = $GLOBALS['connection'];

		$username=$connection->real_escape_string($username);
		$password=$connection->real_escape_string($password);
		$password = md5($password);

        $result = mysqli_query
        ($connection, "SELECT username,initial,fName,lName,userType FROM user WHERE username = '$username' AND password = '$password'") 
        or die("Query fail: " . mysqli_error($connection));

        $b = array();
        session_start();
        while ($row = mysqli_fetch_array($result)){   
            $b["userrole"] = $row["userType"];
            $_SESSION['employee_initial'] = $row["initial"];
            $_SESSION['employee_fname'] = $row['fName'];
            $_SESSION['employee_lname'] = $row['lName'];
            $_SESSION['employee_username'] = $row['username'];
            $_SESSION['employee_usertype'] = $row['userType'];
        }
        echo json_encode($b,JSON_FORCE_OBJECT); 
	}
?>