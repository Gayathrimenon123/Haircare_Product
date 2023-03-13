<?php
include 'adminbase.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>update3</title>

</head>
<body>
<form method="post">

<?php
    include '../connection.php';
    $ww=$_GET['id'];
    $sql="select * from tbl_product where id='$ww'";
    $run=mysqli_query($conn,$sql);
   
    $row=mysqli_fetch_array($run);



    ?>
    <div style="margin-left: 350px;margin-top:60px;">
    <div style="width: 500px;background-color: rgb(66, 143, 117);border-radius: 30px;color: white;">
<table style="margin-left:100px;">

      
   <tr><td> ID       :</td><td><input type="text" name="id" value="<?php echo $row['id'];?>" readonly></td></tr>
    <tr><td> Product Name     :</td><td><input type="text" name="br" value="<?php echo $row['pname'];?>"></td></tr>
    <tr><td>Description     :</td><td><input type="text" name="ty" value="<?php echo $row['description'];?>"></td></tr>
  
    <tr><td> RATE    :</td><td><input type="text" name="ra" value="<?php echo $row['rate'];?>"></td></tr>
    <tr><td>Stock:</td><td><input type="text" name="nu" value="<?php echo $row['stock'];?>" readonly></td></tr>
    <tr><td>Star Value:</td><td><input type="text" name="st" value="<?php echo $row['starvalue'];?>"></td></tr>
<!--    
    <tr><td> Image   :</td><td><input type="file" name="pho" value="<?php echo $row['itemimage'];?>"></td></tr> -->
    
    
    <tr><td colspan="2" align="center"><input type="submit" name="upload3" value="Update"></td></tr>
 </table>
</div>
</div>
<?php
 include '../connection.php';
 $ww=$_GET['id'];

if(isset($_POST['upload3']))
{
	$a=$_POST['id'];
	$b=$_POST['br'];
	
	$d=$_POST['ty'];

	$f=$_POST['ra'];
	$g=$_POST['nu'];
	
	$i=$_POST['st'];
    // $l=$_FILES['pho']['name'];
    //  move_uploaded_file($_FILES['pho']['tmp_name'],"images/".$_FILES['pho']['name']);
	$sql="update tbl_product set id='$a',pname='$b',description='$d',rate='$f',stock='$g',starvalue='$i' where id='$ww' ";
	$a=mysqli_query($conn,$sql);
	header('location:staffviewproduct.php');
}
?>
</form>
</body>
</html>