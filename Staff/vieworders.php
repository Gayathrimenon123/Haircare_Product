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

// $qry = mysqli_query($conn,"select tbl_cmaster.orderid,tbl_customer.fname,tbl_customer.lname,tbl_customer.phone,tbl_cmaster.status from tbl_cmaster,tbl_customer where tbl_cmaster.custid=tbl_customer.id and tbl_cmaster.status='Order Placed'");  

$qry = mysqli_query($conn,"select tbl_cmaster.orderid,tbl_customer.fname,tbl_customer.lname,tbl_customer.phone,tbl_cmaster.status from tbl_cmaster,tbl_customer where tbl_cmaster.custid=tbl_customer.id");  
if (mysqli_fetch_array($qry) > 0) {
    ?>

    <table border='3' align="center" id="customers" >
        <th> ORDER ID    </th>
        <th>CUSTOMER NAME </th>
        <th>CONTACT NUMBER </th>
        <th colspan="2">ACTION</th>

        <?php
        //  $qry = mysqli_query($conn,"select tbl_cmaster.orderid,tbl_customer.fname,tbl_customer.lname,tbl_customer.phone,tbl_cmaster.status from tbl_cmaster,tbl_customer where tbl_cmaster.custid=tbl_customer.id and tbl_cmaster.status='Order Placed'");  
         $qry = mysqli_query($conn,"select tbl_cmaster.orderid,tbl_customer.fname,tbl_customer.lname,tbl_customer.phone,tbl_cmaster.status from tbl_cmaster,tbl_customer where tbl_cmaster.custid=tbl_customer.id ");  
        while ($row = mysqli_fetch_array($qry)) {
           
            echo '<tr><td>' . $row['orderid'] . '</td><td>' . $row['fname'] . ' '.  $row['lname'] .'</td><td>' . $row['phone'] . '</td><td><a href="vieworder2.php?id=' . $row['orderid'] . '" class="btn btn-success">view order</a></td></tr>';
        
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