

<?php
include 'adminbase.php';
?>



<br><br>
<div style="margin: 30px;margin-left:390px;">
    <div style="width: 600px;background-color: rgb(66, 143, 117);border-radius: 30px;color: white;">
        <br>
<h2 style="text-align:center;">ADD CATEGORY</h2>
<form method="post" enctype="multipart/form-data">
    <!--<h1  align="center" style="margin-left: 350px;">Login</h1>-->
    <!--<hr style="color: black;">-->
    <table align="center" style="margin-left: 90px;" >

        <tr>
            <td>Category Name</td>
            <td><input type="text"  name="cname" class="form-control" required></td>
        </tr>

        <tr>
            <td colspan="2" align="center"><input type="submit" align="center"  style="width:100px" name="submit" class="btn btn-primary" value="ADD" ></td>

        </tr>
    </table>
</form>
<br>
</div>
</div>
<br><br>

<?php
include '../connection.php';
if (isset($_POST['submit'])) {
    $cname = $_POST['cname'];
    $qr = "select count(*) as count from tbl_category where cname='$cname'";
    $qr1 = mysqli_query($conn,$qr);
    $qry = mysqli_fetch_array($qr1);
    if ($qry[0] > 0) {
        echo '<script>alert(" Already added ....");</script>';
    } else {

        $qry1 = "insert into tbl_category(cname,status)values('$cname','1')";

        $res1 = mysqli_query($conn,$qry1);

        if ($res1) {
            echo '<script>alert(" category added ....");</script>';
        }
    }
}
?>
<br><br><br><br>

<h2 style="margin-left:500px;">Active Category</h2>
<table border='4' align="center" cellspacing="5"  >
    <th style="background-color:rgb(66, 143, 117);"> CATEGORY ID    </th>
    <th style="background-color:rgb(66, 143, 117);"> CATEGORY NAME     </th>
 <th style="background-color:rgb(66, 143, 117);" colspan="2">     </th>

    <?php
    include '../connection.php';
    $qry = mysqli_query($conn,"select * from tbl_category where status='1'");
    while ($row = mysqli_fetch_array($qry)) {
        echo '<tr><td>' . $row['id'] . '</td><td>' . $row['cname'] . '</td><td><a href="editcategory.php?id=' . $row['id'] . '" class="btn btn-success">EDIT</a></td><td><a href="deletec.php?id=' . $row['id'] . '" class="btn btn-success">Inactive</a></td></tr>';
    }
    ?>

</table>
<br><br><br>

<h2 style="margin-left:500px;">InActive Category</h2>
<table border='4' align="center" cellspacing="5"  >
    <th style="background-color:rgb(66, 143, 117);"> CATEGORY ID    </th>
    <th style="background-color:rgb(66, 143, 117);"> CATEGORY NAME     </th>
 <th style="background-color:rgb(66, 143, 117);">     </th>

    <?php
    include '../connection.php';
    $qry = mysqli_query($conn,"select * from tbl_category where status='0'");
    while ($row = mysqli_fetch_array($qry)) {
        echo '<tr><td>' . $row['id'] . '</td><td>' . $row['cname'] . '</td><td><a href="editcategory.php?id=' . $row['id'] . '" class="btn btn-success">EDIT</a></td><td><a href="unblockcat.php?id=' . $row['id'] . '" class="btn btn-success">Active</a></td></tr>';
    }
    ?>

</table>


<?php
include '../footer.php';
?>
         

