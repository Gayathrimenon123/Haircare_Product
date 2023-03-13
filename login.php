<?php
include 'header.php';
?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Classic Login Form Responsive Widget Template :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="login/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="login/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- js -->
<script type="text/javascript" src="login/js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Oleo+Script:400,700&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>
<script src="login/js/jquery.vide.min.js"></script>
	<!-- main -->
	<div data-vide-bg="video/Ipad">
		<div class="center-container">
			<!--header-->
		
			<!--//header-->
			<div class="main-content-agile">
				<div class="sub-main-w3">	
					<div class="wthree-pro">
						<h2>Login Here</h2>
					</div>
					<form action="#" method="POST">
						<input placeholder="Username or E-mail" name="username" class="user" type="email" required="">
						<span>&nbsp;<i class="fa fa-user" aria-hidden="true"></i></span><br><br>
						<input  placeholder="Password" name="password" class="pass" type="password" required="">
						<span >&nbsp;<i class="fa fa-unlock" aria-hidden="true"></i></span><br>
						<div class="sub-w3l">
							<!-- <h6><a href="#">Forgot Password?</a></h6> -->
							<div class="right-w3l">
								<input type="submit" name="submit" value="Login">
							</div>
                            <h2><a href="customer.php">Don't You create an Account</a></h2>
						</div>
					</form>
				</div>
			</div>
			<!--//main-->

			<!--footer-->
			<div class="footer">
				<!-- <p>&copy; 2017 Classic Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p> -->
			</div>
			<!--//footer-->
		</div>
	</div>

</body>
</html>


<?php
if($_GET){
$pid=$_GET['id'];
if($pid){

    session_start();
    include 'connection.php';
    if (isset($_POST['submit'])) {
        // echo "<script>alert('first User');</script>";
        $email = $_POST['username'];
        $password = $_POST['password'];
        $qry = "select * from tbl_login where username='$email' and password='$password'";
        $check = mysqli_query($conn,$qry);
        if (mysqli_num_rows($check) == 0) {
            echo "<script>alert('Username or password incorrect');</script>";
        } 
        else {
            // echo "<script>alert('Two User');</script>";
            $row = mysqli_fetch_array($check);
          
            $_SESSION["id"] = $row["id"];
            if ($row["usertype"] == "Customer") {
               
                $q2 = mysqli_query($conn,"select * from tbl_customer where email='$email'");
                $row1 = mysqli_fetch_array($q2);
                $_SESSION['id'] = $row1['id'];
                echo "<script>alert('Welcome User');</script>";
                // echo "<script>window.location='customer/viewitems.php?id="+$pid"'</script>";
            //    echo "window.location('customer/viewitems.php')"; 
                echo "<script>window.location='customer/viewitems.php?pid=".$pid."'</script>";
           
           
             } 
           else{
                echo "<script>alert('Invalid User');</script>";
            }
        }

}
}
}
else{


    session_start();
    include 'connection.php';
    if (isset($_POST['submit'])) {
        $email = $_POST['username'];
        $password = $_POST['password'];
        $qry = "select *from tbl_login where username='$email' and password='$password'";
        $check = mysqli_query($conn,$qry);
        if (mysqli_num_rows($check) == 0) {
            echo "<script>alert('Username or password incorrect');</script>";
        } else {
            $row = mysqli_fetch_assoc($check);

            $_SESSION["id"] = $row["id"];
            if ($row["usertype"] == "admin") {
                $q2 = mysqli_query($conn,"select * from tbl_staff where email='$email'");
                $row1 = mysqli_fetch_array($q2);
                $_SESSION['sid'] = $row1['sid'];
                echo "<script>window.location='admin/adminhome.php'</script>";
            } else if ($row["usertype"] == "Customer") {
             
                $q2 = mysqli_query($conn,"select * from tbl_customer where email='$email'");
                $row1 = mysqli_fetch_array($q2);
                $_SESSION['id'] = $row1['id'];
                if ($row1["status"] == 0) {
                    echo "<script>alert('Account Not Activated');</script>";
                } 
                else if ($row1["status"] == -1) {
                    echo "<script>alert('Account Deactivated');</script>";
                } 
                else {
                    echo "<script>alert(' Welcome Customer...');</script>";
                    echo "<script>window.location='customer/customerhome.php'</script>";
                }
            } else {
              
                echo "<script>alert(' Welcome Staff...');</script>";
                $q2 = mysqli_query($conn,"select * from tbl_staff where email='$email'");
                $row1 = mysqli_fetch_array($q2);
                $_SESSION['sid'] = $row1['sid'];
               
                if ($row1["status"] == 0) {
                    echo "<script>alert('Account Not Activated');</script>";
                }
                
                else if ($row1["status"] == -1) {
                    echo "<script>alert('Account Deactivated');</script>";
                } 
                else {
                    echo "<script>window.location='Staff/StaffHome.php'</script>";
                }
            // }
        }
    }
}
}
    ?>