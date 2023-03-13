<?php
include 'adminbase.php';
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
$orderid=$_GET['id'];
include '../connection.php';

$qry = mysqli_query($conn,"SELECT tbl_cmaster.orderid,tbl_customer.fname,tbl_customer.lname,tbl_customer.phone,tbl_product.`id` AS productid,tbl_category.cname,tbl_subcat.category,tbl_product.`pname`,tbl_cchild.`qty`,tbl_cchild.`totalprice`,tbl_cchild.`odate` FROM tbl_cmaster,tbl_cchild,tbl_product,tbl_customer,tbl_category,tbl_subcat WHERE tbl_category.id=tbl_subcat.catid and tbl_category.id=tbl_product.cat and tbl_cmaster.custid=tbl_customer.id  and tbl_cchild.custid=tbl_cmaster.custid and tbl_cchild.custid=tbl_customer.id and tbl_cmaster.orderid=tbl_cchild.cmasterid  and tbl_cmaster.custid=tbl_customer.id and tbl_product.id=tbl_cchild.itemid and tbl_product.scat=tbl_subcat.scid and tbl_cmaster.orderid='$orderid' and tbl_cchild.cstatus='Order Placed'");
if (mysqli_fetch_array($qry) > 0) {
    ?>
<h2 style="text-align:center">Placed Orders</h2>
    <table border='3' align="center" id="customers">
        <th> ORDER ID</th>
		<th> PRODUCT ID    </th>
       
        <th>PRODUCT CATEGORY </th>
        <th>SUB CATEGORY </th>
        <th> PRODUCT NAME </th>
        <th> QUANTITY </th>

        <th> TOTAL PRICE </th>
        <th>ORDER DATE </th>
  
        <th></th>

        <?php
        $qry = mysqli_query($conn,"SELECT tbl_cmaster.orderid,tbl_customer.fname,tbl_customer.lname,tbl_customer.phone,tbl_product.`id` AS productid,tbl_category.cname,tbl_subcat.category,tbl_product.`pname`,tbl_cchild.`qty`,tbl_cchild.`totalprice`,tbl_cchild.`odate` FROM tbl_cmaster,tbl_cchild,tbl_product,tbl_customer,tbl_category,tbl_subcat WHERE tbl_category.id=tbl_subcat.catid and tbl_category.id=tbl_product.cat and tbl_cmaster.custid=tbl_customer.id  and tbl_cchild.custid=tbl_cmaster.custid and tbl_cchild.custid=tbl_customer.id and tbl_cmaster.orderid=tbl_cchild.cmasterid  and tbl_cmaster.custid=tbl_customer.id and tbl_product.id=tbl_cchild.itemid and tbl_product.scat=tbl_subcat.scid and tbl_cmaster.orderid='$orderid' and tbl_cchild.cstatus='Order Placed'");
        while ($row = mysqli_fetch_array($qry)) {
            // echo '<tr><td>' . $row['id'] . '</td><td>' . $row['fname'] . ' '.  $row['lname'] .'</td><td>' . $row['phone'] . '</td><td>' . $row['cname'] . '</td><td>' . $row['category'] . '</td><td>' . $row['pname'] . '</td><td>' . $row['qty'] . '</td><td>' . $row['totalprice'] . '</td><td>' . $row['reqdate'] . '</td><td>' . $row['odate'] . '</td><td><a href="status.php?id=' . $row['id'] . '" class="btn btn-success">ACCEPT</a></td></tr>';
            echo '<tr><td>' . $row['orderid'] . '</td><td>' . $row['productid'] . '</td><td>' . $row['cname'] . '</td><td>' . $row['category'] . '</td><td>' . $row['pname'] . '</td><td>' . $row['qty'] . '</td><td>' . $row['totalprice'] . '</td><td>' . $row['odate'] . '</td></tr>';
        
        }
    } else {
        ?>

       
        
        <?php
    }
    ?>

</table>


<br><br>



<?php
// session_start();
$staffid = $_SESSION['sid'];
$orderid=$_GET['id'];
include '../connection.php';

$qry = mysqli_query($conn,"SELECT tbl_cmaster.orderid,tbl_customer.fname,tbl_customer.lname,tbl_customer.phone,tbl_product.`id` AS productid,tbl_category.cname,tbl_subcat.category,tbl_product.`pname`,tbl_cchild.`qty`,tbl_cchild.`totalprice`,tbl_cchild.`odate` FROM tbl_cmaster,tbl_cchild,tbl_product,tbl_customer,tbl_category,tbl_subcat WHERE tbl_category.id=tbl_subcat.catid and tbl_category.id=tbl_product.cat and tbl_cmaster.custid=tbl_customer.id and tbl_cchild.custid=tbl_cmaster.custid and tbl_cchild.custid=tbl_customer.id and tbl_cmaster.orderid=tbl_cchild.cmasterid  and tbl_cmaster.custid=tbl_customer.id and tbl_product.id=tbl_cchild.itemid and tbl_product.scat=tbl_subcat.scid and tbl_cmaster.orderid='$orderid' and tbl_cchild.cstatus='Cancelled, Refunded'");
if (mysqli_fetch_array($qry) > 0) {
    ?>
<h2 style="text-align:center">Cancelled Orders</h2>
    <table border='3' align="center" id="customers">
        <th> ORDER ID</th>        
		<th> PRODUCT ID    </th>
       
        <th>PRODUCT CATEGORY </th>
        <th>SUB CATEGORY </th>
        <th> PRODUCT NAME </th>
        <th> QUANTITY </th>

        <th> TOTAL PRICE </th>
        <th>ORDER DATE </th>
        <th>REMARKS </th>
        <th></th>

        <?php
        $qry = mysqli_query($conn,"SELECT tbl_cmaster.orderid,tbl_customer.fname,tbl_customer.lname,tbl_customer.phone,tbl_product.`id` AS productid,tbl_category.cname,tbl_subcat.category,tbl_product.`pname`,tbl_cchild.`qty`,tbl_cchild.`totalprice`,tbl_cchild.`odate`,tbl_remark.remarks FROM tbl_cmaster,tbl_cchild,tbl_product,tbl_customer,tbl_category,tbl_subcat,tbl_remark WHERE tbl_remark.cchildid=tbl_cchild.cchildid and tbl_category.id=tbl_subcat.catid and tbl_category.id=tbl_product.cat and tbl_cmaster.custid=tbl_customer.id  and tbl_cchild.custid=tbl_cmaster.custid and tbl_cchild.custid=tbl_customer.id and tbl_cmaster.orderid=tbl_cchild.cmasterid  and tbl_cmaster.custid=tbl_customer.id and tbl_product.id=tbl_cchild.itemid and tbl_product.scat=tbl_subcat.scid and tbl_cmaster.orderid='$orderid' and tbl_cchild.cstatus='Cancelled, Refunded'");
        while ($row = mysqli_fetch_array($qry)) {
            // echo '<tr><td>' . $row['id'] . '</td><td>' . $row['fname'] . ' '.  $row['lname'] .'</td><td>' . $row['phone'] . '</td><td>' . $row['cname'] . '</td><td>' . $row['category'] . '</td><td>' . $row['pname'] . '</td><td>' . $row['qty'] . '</td><td>' . $row['totalprice'] . '</td><td>' . $row['reqdate'] . '</td><td>' . $row['odate'] . '</td><td><a href="status.php?id=' . $row['id'] . '" class="btn btn-success">ACCEPT</a></td></tr>';
            echo '<tr><td>' .$row['orderid'] .'</td><td>' . $row['productid'] . '</td><td>' . $row['cname'] . '</td><td>' . $row['category'] . '</td><td>' . $row['pname'] . '</td><td>' . $row['qty'] . '</td><td>' . $row['totalprice'] . '</td><td>' . $row['odate'] . '</td><td>' . $row['remarks'] . '</td></tr>';
        
        }
    } else {
        ?>

        <!-- <img src="../images/no_data_found.png" width="30%" height="30%" > -->
        
        <?php
    }
    ?>

</table>


<?php
include '../footer.php';
?>