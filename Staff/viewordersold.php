<?php
include './staffBase.php';
?>
<style>
th{
    background-color:rgb(66, 143, 117);
}
th,td{
    padding:10px;
    text-align:center;
}
    </style>
<br><br>

<?php
session_start();
$staffid = $_SESSION['sid'];
include '../connection.php';

$qry = mysqli_query($conn,"select tbl_cmaster.orderid,tbl_customer.fname,tbl_customer.lname,tbl_customer.phone,tbl_cmaster.status from tbl_cmaster,tbl_customer where tbl_cmaster.custid=tbl_customer.id and tbl_cmaster.status='Order Placed'");  
if (mysqli_fetch_array($qry) > 0) {
    ?>

    <table border='3' align="center" id="customers" >
        <th> ORDER ID    </th>
        <th>CUSTOMER NAME </th>
        <th>CONTACT NUMBER </th>
        <th colspan="2">ACTION</th>

        <?php
          $qry = mysqli_query($conn,"select tbl_cmaster.orderid,tbl_customer.fname,tbl_customer.lname,tbl_customer.phone,tbl_cmaster.status from tbl_cmaster,tbl_customer where tbl_cmaster.custid=tbl_customer.id and tbl_cmaster.status='Order Placed'");  
        while ($row = mysqli_fetch_array($qry)) {
            // echo '<tr><td>' . $row['id'] . '</td><td>' . $row['fname'] . ' '.  $row['lname'] .'</td><td>' . $row['phone'] . '</td><td>' . $row['cname'] . '</td><td>' . $row['category'] . '</td><td>' . $row['pname'] . '</td><td>' . $row['qty'] . '</td><td>' . $row['totalprice'] . '</td><td>' . $row['reqdate'] . '</td><td>' . $row['odate'] . '</td><td><a href="status.php?id=' . $row['id'] . '" class="btn btn-success">ACCEPT</a></td></tr>';
            echo '<tr><td>' . $row['orderid'] . '</td><td>' . $row['fname'] . ' '.  $row['lname'] .'</td><td>' . $row['phone'] . '</td><td><a href="vieworder2.php?id=' . $row['orderid'] . '" class="btn btn-success">view order</a></td><td><a href="deliver.php?id=' . $row['orderid'] . '" class="btn btn-success">delivered</a></td></tr>';
        
        }
    } else {
        ?>

        <img src="../images/no_data_found.png" width="30%" height="30%" >
        
        <?php
    }
    ?>

</table>


<?php
include '../footer.php';
?>