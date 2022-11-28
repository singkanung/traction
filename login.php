<?php 

session_start(); 

include "config.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($username)) {
		echo "
		<script>
		  alert('Username is required');
		  document.location.href = 'index.php';
		</script>";
	    exit();
	}else if(empty($pass)){
		echo "
		<script>
		  alert('Username is required');
		  document.location.href = 'index.php';
		</script>";
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);
        
		$sql = "SELECT * FROM users WHERE user_name='$username' AND password='$pass'";

		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $username && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: halamanadmin.php");
		        exit();
            }else{
			echo "
				<script>
				alert('Incorrect username or password');
				document.location.href = 'index.php';
				</script>";
		    exit();
			}
		}else{
		echo "
			<script>
			alert('Incorrect username or password');
			document.location.href = 'index.php';
			</script>";
	    exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}