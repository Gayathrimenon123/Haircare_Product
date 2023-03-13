<?php
include 'staffbase.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>update3</title>
    <style>
th{

    color:white;
}
td{
    color:black;
}
        </style>
</head>
<body>
<form method="post">

<?php
    include '../connection.php';
    $ww=$_GET['id'];
    $sql="select * from tbl_supplier where sup_id='$ww'";
    $run=mysqli_query($conn,$sql);
   
    $row=mysqli_fetch_array($run);



    ?>
    <h2 style="text-align:center">Update Supplier</h2>
<div style="margin: 30px;margin-left:390px;">
    <div style="width: 600px;background-color: rgb(66, 143, 117);border-radius: 30px;color: white;">
        <br>

<table  style="margin-left:110px;width:400px;">

      
   <tr><th>  NAME      :</th><td><input type="text" name="id" value="<?php echo $row['supname'];?>"></td></tr>
  
    <tr><th>CITY     :</th><td><input type="text" name="ty" value="<?php echo $row['supcity'];?>"></td></tr>
    <tr><th>DISTRICT		 :</th><td><input type="text" name="qu" value="<?php echo $row['supdistrict'];?>"></td></tr>
    <tr><th> PINCODE    :</th><td><input type="text" name="ra" value="<?php echo $row['suppincode'];?>"></td></tr>
    <tr><th>PHONE</th><td><input type="text" name="nu" maxlength="10" pattern="[789][0-9]{9}" value="<?php echo $row['supphone'];?>"></td></tr>
    <tr><th>EMAIL</th><td><input type="text" name="nu1" value="<?php echo $row['supemail'];?>"></td></tr>
    
   
<!--    
    <tr><td> Image   :</td><td><input type="file" name="pho" value="<?php echo $row['itemimage'];?>"></td></tr> -->
    
    
    <tr><td colspan="2" align="center"><input type="submit" class="btn btn-success" name="upload3" value="Update"></td></tr>
 </table>
</div></div>

<?php
 include '../connection.php';
 $ww=$_GET['id'];

if(isset($_POST['upload3']))
{
	$fn=$_POST['id'];

	
	$st=$_POST['ty'];
	$dt=$_POST['qu'];
	$pin=$_POST['ra'];
	$ph=$_POST['nu'];
    $em=$_POST['nu1'];
   
	
	
    // $l=$_FILES['pho']['name'];
    //  move_uploaded_file($_FILES['pho']['tmp_name'],"images/".$_FILES['pho']['name']);
	$sql="update tbl_supplier set supname='$fn',supcity='$st',supdistrict='$dt',suppincode='$pin',supphone='$ph',supemail='$em' where sup_id='$ww' ";
	$a=mysqli_query($conn,$sql);
	header('location:addsupplier.php');
}
?>
</form>
</body>
</html>