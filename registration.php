<?php
include 'header.php';
?>
<!--header//-->
<div class="registration-form">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Registration</li>
		 </ol>
		 <h2>Registration</h2>
		 <div class="col-md-6 reg-form">
			 <div class="reg">
			<h1><a href="login.php">Login</a></h1>
				 <form method="POST">
					 <ul>
						 <li class="text-info">First Name: </li>
						 <li><input type="text" name="fname" required class="form-control"></li>
					 </ul>
					 <ul>
						 <li class="text-info">Last Name: </li>
						 <li><input type="text" name="lname" required class="form-control"></li>
					 </ul>	
					 <ul>
						 <li class="text-info">Phone: </li>
						 <li> <input type="text" name="phone" maxlength="10" id="phch" onchange="phvalid()" patteren="[789][0-9]{9}" required class="form-control">	</li>
					 </ul>	
					 <ul>
						 <li class="text-info">House Number: </li>
						 <li> <input type="number" name="hno" required class="form-control" style="width:400px;">	</li>
					 </ul>		
					 <ul>
						 <li class="text-info">Street: </li>
						 <li><input type="text" name="street" required class="form-control"></li>
					 </ul>	
					 <ul>
						 <li class="text-info">District: </li>
						 <li><select name="district" style="width:400px;" class="form-control" required style="color: black;font-size: bold;font-weight: 400;">
               <option>-----SELECT------</option>
                        <option value="kasargod">Kasargod</option>
                <option value="kannur">Kannur</option>
                <option value="kozhikode">Kozhikode</option>
                <option value="wayanad">Wayanad</option>
                <option value="malapuram">Malapuram</option>
                <option value="palakkad">Palakkad</option>
                <option value="thrissur">Thrissur</option>
                <option value="ernakulam">Ernakulam</option>
                <option value="idukki">Idukki</option>
                <option value="kottayam">Kottayam</option>
                <option value="alappuzha">Alappuzha</option>
                <option value="pathanamthitta">Pathanamthitta</option>
                <option value="kollam">Kollam</option>
                <option value="thiruvananthapuram">Thiruvananthapuram</option>
                </select></li>
					 </ul>	
						 
					<ul>
						 <li class="text-info">Pincode: </li>
						 <li><td><input type="number" style="width:400px;" name="pin" maxlength="6" required class="form-control"></li>
					 </ul>
					 <ul>
						 <li class="text-info">Email:</li>
						 <li><input type="email" name="email" style="width:400px;" required class="form-control"></li>
					 </ul>
					 <ul>
						 <li class="text-info">Password: </li>
						 <li><td><input type="password" name="password" required class="form-control"></li>
					 </ul>
					
										
					 <input type="submit" name="submit" value="REGISTER" class="btn btn-success" align="center">
					 <p class="click">By clicking this button, you agree to my modern style <a href="#">Pollicy Terms and Conditions</a> to Use</p> 
				 </form>

				 <script>
    function phvalid()
{

    var mobile = document.getElementById('phch');
    if(mobile.value.length!=10){
       
       alert("required 10 digits, match requested format!");
    }
    }
    </script>
			 </div>
		 </div>
		 <div class="col-md-6 reg-right">
			 <h3>Completely Free Accouent</h3>
			 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
			 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
			 <h3 class="lorem">Lorem ipsum dolor sit amet elit.</h3>
			 <p>Tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
		 </div>
		 <div class="clearfix"></div>		 
	 </div>
</div>
<?php
                include 'connection.php';
                if (isset($_POST['submit'])) {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $phone = $_POST['phone'];
                    $hno = $_POST['hno'];
                    $street = $_POST['street'];
                    $district = $_POST['district'];
                  
                    $pin = $_POST['pin'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $check = mysqli_query($conn,"select count(*) as count from tbl_customer where email='$email'");
                    $fetch = mysqli_fetch_array($check);
                    if ($fetch['count'] > 0) {
                        echo '<script> alert("Already Registered")</script>';
                    } else {

                        $qry = "insert into tbl_customer(fname,lname,phone,houseno,street,district,pincode,email,status) values('$fname','$lname','$phone','$hno','$street','$district','$pin','$email','0')";

                        $exe = mysqli_query($conn,$qry);
                        if ($qry) {
                            $logqry = mysqli_query($conn,"insert into tbl_login(username,password,usertype) values('$email','$password','Customer')");

                            echo '<script>alert("successfull")</script>';
                        } else {
                            echo '<script>alert("login error")</script>';
                        }
                    }
                }
                ?>
<!--fotter-->
<div class="fotter-logo">
	 <div class="container">
	 <div class="ftr-logo"><h3><a href="index.html">NEW FASHIONS</a></h3></div>
	 <div class="ftr-info">
	 <p>&copy; 2015 All Rights Reseverd Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
	</div>
	 <div class="clearfix"></div>
	 </div>
</div>
<!--fotter//-->	
</body>
</html>
		