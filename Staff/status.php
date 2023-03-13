
<?php

include '../connection.php';
$id = $_GET['id'];
$qry = mysqli_query($conn,"update tbl_order set status='accepted' where id='" . $id . "'");
if ($qry) {
    echo'<script>alert("Accepted............")</script>';
    echo '<script>location.href="vieworders.php"</script>';
}