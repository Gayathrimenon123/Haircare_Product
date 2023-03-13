<?php
include 'staffBase.php';
?>

<br><br>


<br><br>
 <?php
    session_start();
    $staffid = $_SESSION['sid'];
    include '../connection.php';
    
    $qry = mysqli_query($conn,"SELECT DISTINCT  tbl_customer.id AS custid,tbl_order.`id` AS orderid,tbl_customer.`fname`,tbl_customer.`lname`,tbl_customer.`phone`,tbl_payment.cname,tbl_payment.amount,tbl_payment.pdate,tbl_order.`status` FROM tbl_customer,tbl_payment,tbl_order,`tbl_product` p WHERE p.`id`=tbl_order.`productid` AND  tbl_customer.`id`=tbl_payment.`custid` AND tbl_payment.custid=tbl_order.`custid` AND tbl_order.id=tbl_payment.`orderid` AND tbl_order.status!='ordered'  and tbl_customer.status='1'");

if (mysqli_fetch_array($qry) > 0) {
    ?>

<table border='3' align="center" id="customers">
<th>CUSTOMER ID </th> 
   
    <th> CUSTOMER   NAME </th>
    <th> CONTACT </th>
    <th> ORDER ID    </th>
    <th> CARD HOLDER NAME </th>
    <th> PAYED AMOUNT </th>
    <th>  DATE </th>
    <th> STATUS </th>
    <th></th>
        
        <?php
         $qry = mysqli_query($conn,"SELECT DISTINCT  tbl_customer.id AS custid,tbl_order.`id` AS orderid,tbl_customer.`fname`,tbl_customer.`lname`,tbl_customer.`phone`,tbl_payment.cname,tbl_payment.amount,tbl_payment.pdate,tbl_order.`status` FROM tbl_customer,tbl_payment,tbl_order,`tbl_product` p WHERE p.`id`=tbl_order.`productid` AND  tbl_customer.`id`=tbl_payment.`custid` AND tbl_payment.custid=tbl_order.`custid` AND tbl_order.id=tbl_payment.`orderid` AND tbl_order.status!='ordered'  and tbl_customer.status='1'");

       while ($row = mysqli_fetch_array($qry)) {
        echo '<tr><td>' . $row['custid'] . '</td><td>' . $row['fname'] . ' '. $row['lname'] . '</td><td>' . $row['phone'] . '</td><td>' . $row['orderid'] . '</td><td>' . $row['cname'] . '</td><td>' . $row['amount'] . '</td><td>' . $row['pdate'] . '</td><td>' . $row['status'] . '</td><td><button class="btn btn-primary" onclick="myFunction()">PRINT</button></td></tr>';
   }
    } 
    else {
        ?>

        <img src="../images/no_data_found.png" width="30%" height="30%" >
        
        <?php
    }
    ?>

</table>
<script>
    function myFunction() {
        window.print();
    }
</script>


<?php
include '../footer.php';
?>