<?php 
session_start(); 

require_once('config.php');
 
if(isset($_POST) & !empty($_POST)){
 
    if(isset($_POST['csrf_token'])){
        $msgs[] = "CSRF Token Verification Success";
        if($_SESSION['csrf_token'] === $_POST['csrf_token']){
            $msgs[] = "CSRF Token Validation success";
        }else{
            $csrferrors[] = "CSRF Token Validation Failed";
        }
    }else{
        $csrferrors[] = "CSRF Token Verification Failed";
    }
    
  if(!isset($csrferrors)){  
 
  }else{
      $errors = $csrferrors;
  }
}

include "config.php";

if (isset($_POST['username']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
	include "config.php";
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   $data = mysqli_real_escape_string($connect, $data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'username='. $username. '&name='. $name;

	if (empty($username)) {
		echo "
		<script>
		  alert('Username is required');
		  document.location.href = 'signup.php';
		</script>";
	    exit();

	}else if(empty($pass)){
        // header("Location: signup.php?error=Password is required&$user_data");
		echo "
		<script>
		  alert('Password is required');
		  document.location.href = 'signup.php';
		</script>";
	    exit();

	}else if(empty($re_pass)){
        // header("Location: signup.php?error=Confirm Password is required&$user_data");
		echo "
		<script>
		  alert('Confirm password is required');
		  document.location.href = 'signup.php';
		</script>";
	    exit();

	}else if(empty($name)){
        // header("Location: signup.php?error=Name is required&$user_data");
		echo "
		<script>
		  alert('Name is required');
		  document.location.href = 'signup.php';
		</script>";
	    exit();

	}else if($pass !== $re_pass){
        // header("Location: signup.php?error=The confirmation password  does not match&$user_data");
		echo "
		<script>
		  alert('The confirmation password does no match');
		  document.location.href = 'signup.php';
		</script>";
	    exit();
	
	}else if(strlen($pass) < 8){
        // header("Location: signup.php?error=Password minimum 8 characters");
		echo "
		<script>
		  alert('Password minimum 8 characters');
		  document.location.href = 'signup.php';
		</script>";
	    exit();

	}else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$username' ";
		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result) > 0) {
			// header("Location: signup.php?error=The username is taken try another&$user_data");
			echo "
			<script>
			  alert('The username is taken try another');
			  document.location.href = 'signup.php';
			</script>";
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$username', '$pass', '$name')";
           $result2 = mysqli_query($connect, $sql2);
           if ($result2) {
           	//  header("Location: signup.php?success=Your account has been created successfully");
			   echo "
			   <script>
				 alert('Your account has been created successfully');
				 document.location.href = 'signup.php';
			   </script>"; 
			exit();
           }else {
	           	// header("Location: signup.php?error=unknown error occurred&$user_data");
				   echo "
				   <script>
					 alert('Unknown error occurred');
					 document.location.href = 'signup.php';
				   </script>";
				exit();
           }
		}
	}
	
	}else{
		header("Location: signup.php");
		exit();
	}