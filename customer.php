<?php
include 'header.php';
?>
<!DOCTYPE HTML>
<html lang="zxx">
   <head>
      <title>Item Order Form Responsive Widget Template :: w3layouts</title>
      <!-- Meta tag Keywords -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="UTF-8" />
      <meta name="keywords" content="Item Order Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
         />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!-- Meta tag Keywords -->
      <!-- css files -->
      <link rel="stylesheet" href="custreg/css/style.css" type="text/css" media="all" />
      <!-- Style-CSS -->
      <!-- Font-Awesome-Icons-CSS -->
      <!-- //css files -->
      <!-- web-fonts -->
      <link href="//fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet">
      <!-- //web-fonts -->
   </head>
   <body>
      <!-- title -->
      <h1 class="header-w3ls">Customer Registeration</h1>
      <!-- //title -->
      <!-- content -->
      <div class="porduct-order-agile">
         <form action="#" method="POST">
            <div class="form-group">
               <p>First Name</p>
               <input type="text" name="fname" placeholder="First Name" required="">
            </div>
            <div class="form-group">
               <p>Last Name</p>
               <input type="text" name="lname" placeholder="Last Name " required="">
            </div>
            <div class="form-group">
               <p>Email </p>
               <input type="email" name="email" placeholder="Email" required="">
            </div>
            <div class="form-group">
               <p>Phone</p>
               <input type="text" name="phone" placeholder="Phone" maxlength="10" pattern="[789][0-9]{9}" required="">
            </div>
            <div class="main">
               <div class="form-left-to-w3l">
                  <p>House Name</p>
                  <input type="text" name="hname" placeholder=" House Name" required="">
               </div>
               <div class="form-left-to-w3l">
                  <p>city</p>
                  <input type="text" name="city" placeholder="City " required="">
               </div>
            </div>
            <div class="main">
               <div class="form-left-to-w3l">
                  <p>District</p>
                  <input type="text" name="dist" placeholder="District" required="">
                  <div class="clear"></div>
               </div>
               <div class="form-left-to-w3l">
                  <p>State</p>
                  <input type="text" name="state" placeholder="" required="">
                  <div class="clear"></div>
               </div>
            </div>
            <div class="main">
               <div class=" form-group form-left-to-w3l">
                  <p>Pin Code</p>
                  <input type="text" name="pin" id="phch" onchange="phvalid()" placeholder="Pin Code" required="" maxlength="6">
                  <div class="clear"></div>
               </div>
               <div class="form-left-to-w3l">
                  <p style="margin-top:7px;">Password</p>
                  <input type="password" class="form-control" style="margin-top:6px;" name="password" placeholder="password" required="">
                  <div class="clear"></div>
               </div>
               <!-- <div class="form-left-to-w3l">
                  <p>Select Country</p>
                  <select class="form-control buttom">
                     <option value="">Canada
                     </option>
                     <option value="category2">Oman</option>
                     <option value="category1">Australia</option>
                     <option value="category3">America</option>
                     <option value="category3">London</option>
                     <option value="category3">Goa</option>
                     <option value="category3">Canada</option>
                     <option value="category3">Srilanka</option>
                  </select>
               </div> -->
            </div>
           
            <!-- </div> -->
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
      <script>
    function phvalid()
{

    var mobile = document.getElementById('phch');
    if(mobile.value.length!=6){
       
       alert("required 6 digits, match requested format!");
    }
    }
    </script>
      <!-- copyright -->
      <div class="copy">
       
      <?php
                include 'connection.php';
                if (isset($_POST['submit'])) {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $phone = $_POST['phone'];
                    $hno = $_POST['hname'];
                    $street = $_POST['city'];
                    $district = $_POST['dist'];
                    $state = $_POST['state'];
                    $pin = $_POST['pin'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $cdate=date("Y/m/d");
                    $check = mysqli_query($conn,"select count(*) as count from tbl_customer where email='$email'");
                    $fetch = mysqli_fetch_array($check);
                    if ($fetch['count'] > 0) {
                        echo '<script> alert("Already Registered")</script>';
                    } else {

                        $qry = "insert into tbl_customer(fname,lname,phone,housename,city,district,pincode,state,email,status,date) values('$fname','$lname','$phone','$hno','$street','$district','$pin','$state','$email','1','$cdate')";

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
      </div>
      <!-- //copyright -->
   </body>
</html>