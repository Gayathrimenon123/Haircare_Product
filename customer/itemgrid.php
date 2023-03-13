<?php
include 'customerbase.php';
include '../connection.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Free Smart-Sale Website Template | Index :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="cart/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
</head>
<body>
<form method="POST">
		<div style="float:right;margin-top:20px">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The form -->
<form class="example"  method="POST">
  <input type="text" placeholder="Search Brand"  style="color:black" name="sss">
  <button type="submit" name="search" style="background-color:green"><i class="fa fa-search"></i></button>
</form>
		</div>
<div class="wrap">

<div class="cnt-main btm">
	<div class="section group">
    <?php

if(isset($_POST['search']))
{
  $s=$_POST['sss'];
  $t="select tbl_product.*,tbl_subcat.category from tbl_product,tbl_subcat where tbl_product.status='1' and tbl_subcat.scid=tbl_product.scat  and tbl_product.stock>'0'  and pname='$s'";
  // $t="select * from tbl_product where status='1' and pname='$s' ";
  // echo $t;
  $qry=mysqli_query($conn,$t);
  
  while($row=mysqli_fetch_array($qry))
   {

    //   $sql=("select tbl_product.*,tbl_subcat.category from tbl_product,tbl_subcat where tbl_product.status='1' and tbl_subcat.scid=tbl_product.scat  and tbl_product.stock>'0'");
    // $tt=mysqli_query($conn,$sql);
    //  while($row=mysqli_fetch_array($tt))
    //  {
   ?>
				<div class="grid_1_of_3 images_1_of_3">
					 <a href="details.html"><img src="<?php echo $row['itemimage'];?>" alt=""/></a>
					 <a href="details.html"><h3><?php echo $row['pname'];?></h3></a>
           <a href="details.html"><h3><?php echo $row['category'];?></h3></a>
					 <div class="cart-b">
             <br>
					<span class="price left"><sup>Rs.<?php echo $row['rate'];?></sup><sub></sub></span>
				    <div class="btn top-right right"><a href="viewitems.php?pid=<?php echo $row['id']; ?>">Add to Cart</a></div>
				    <div class="clear"></div>
				 </div>
  
				</div>
                <?php
     }
     ?>
			
		
			</div>
</div>
</div>
<div class="clear"></div>
</div>




<?php

    }
    else{

    
     $sql=("select tbl_product.*,tbl_subcat.category from tbl_product,tbl_subcat where tbl_product.status='1' and tbl_subcat.scid=tbl_product.scat  and tbl_product.stock>'0'");
    $tt=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_array($tt))
     {
   ?>
				<div class="grid_1_of_3 images_1_of_3">
					 <a href="details.html"><img src="<?php echo $row['itemimage'];?>" alt=""/></a>
					 <a href="details.html"><h3><?php echo $row['pname'];?></h3></a>
           <a href="details.html"><h3><?php echo $row['category'];?></h3></a>
					 <div class="cart-b">
             <br>
					<span class="price left"><sup>Rs.<?php echo $row['rate'];?></sup><sub></sub></span>
				    <div class="btn top-right right"><a href="viewitems.php?pid=<?php echo $row['id']; ?>">Add to Cart</a></div>
				    <div class="clear"></div>
				 </div>
  
				</div>
                <?php
     }
    }
     ?>
			
		
			</div>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="footer-bg">
<div class="wrap">

</div>
</div>
</body>
</html>