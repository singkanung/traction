<?php 
    require 'config.php';
    $id_item = $_GET['id'];

    $result = mysqli_query($connect,"DELETE FROM item WHERE id_item = $id_item");
    if( $result ){
        header("Location: tableitem.php");
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'tableitem.php';
        </script";
    }
?>