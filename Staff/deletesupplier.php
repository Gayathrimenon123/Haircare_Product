
<?php

include '../connection.php';
$id = $_GET['id'];
$qry = mysqli_query($conn,"delete from tbl_supplier where sup_id='" . $id . "'");
if ($qry) {
    echo'<script>alert("Deleted............")</script>';
    echo '<script>location.href="addsupplier.php"</script>';
}

?>