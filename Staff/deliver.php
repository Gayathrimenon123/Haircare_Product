
<?php

include '../connection.php';
$id = $_GET['id'];
$qry = mysqli_query($conn,"update tbl_cmaster set status='delivered' where orderid='" . $id . "'");
if ($qry) {
    echo'<script>alert("Delivered............")</script>';
    echo '<script>location.href="vieworders.php"</script>';
}