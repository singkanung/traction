<?php 
    require 'config.php';

    $id_tracking = mysqli_real_escape_string($connect, $_GET['id']);

    $result = mysqli_query($connect,"DELETE FROM tracking WHERE id_tracking = $id_tracking");
    if( $result ){
        header("Location: halamanadmin.php");
    } else {
        echo "
        <script>
            alert('Successfully to delete your tracking');
            document.location.href = 'halamanadmin.php';
        </script";
    }
?>