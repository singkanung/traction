<?php 
    require 'config.php';
    $id_kategori = $_GET['id'];

    $result = mysqli_query($connect,"DELETE FROM kategori WHERE id_kategori = $id_kategori");
    if( $result ){
        header("Location: tablecategory.php");
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'tablecategory.php';
        </script";
    }
?>