<?php 
session_start();

if (!isset($_SESSION['user_name'])) {
    header("Location: index.php");
}

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

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
    //   header("Location: change-password.php?error=Old Password is required!");
	echo "
	<script>
	  alert('Old password is required');
	  document.location.href = 'change-password.php';
	</script>";
	  exit();
    }else if(empty($np)){
    //   header("Location: change-password.php?error=New Password is required!");
	echo "
	<script>
	  alert('New password is required');
	  document.location.href = 'change-password.php';
	</script>";
	  exit();
	}else if(strlen($np) < 8){
        // header("Location: change-password.php?error=Password minimum 8 characters");
		echo "
		<script>
		  alert('Password minimum 8 characters');
		  document.location.href = 'change-password.php';
		</script>";
	    exit();
    }else if($np !== $c_np){
    //   header("Location: change-password.php?error=The confirmation password  does not match!");
	echo "
	<script>
	  alert('The confirmation password does not match!');
	  document.location.href = 'change-password.php';
	</script>";
	  exit();
    }else {
    	// hashing the password
    	$op = md5($op);
    	$np = md5($np);
        $id = $_SESSION['id'];

        $sql = "SELECT password
                FROM users WHERE 
                id='$id' AND password='$op'";
        $result = mysqli_query($connect, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE users
        	          SET password='$np'
        	          WHERE id='$id'";
        	mysqli_query($connect, $sql_2);
        	// header("Location: change-password.php?success=Your password has been changed successfully!");
			echo "
			<script>
			  alert('Your password has been changed successfully');
			  document.location.href = 'change-password.php';
			</script>";
	        exit();

        }else {
        	// header("Location: change-password.php?error=Incorrect old password!");
			echo "
			<script>
			  alert('Incorrect old password');
			  document.location.href = 'change-password.php';
			</script>";
	        exit();
        }

    }
 
}else{
	header("Location: change-password.php");
	exit();
}