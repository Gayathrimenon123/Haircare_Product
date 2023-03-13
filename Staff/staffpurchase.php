<?php
include 'staffBase.php';
?>
<style>
    input{
        width: 50px;
    }
    td{
        padding: 5px;
    }
</style>
<div style="margin: 30px;margin-left:390px;">
    <div style="width: 600px;background-color: rgb(66, 143, 117);border-radius: 30px;color: white;">
        <br>
<h2 style="text-align:center;">ADD PURCHASE DETAILS</h2>

<form method="post" enctype="multipart/form-data">
    <!--<h1  align="center" style="margin-left: 350px;">Login</h1>-->
    <!--<hr style="color: black;">-->
<table align="center" style="margin-left: 130px;">


<tr>
    <td> Supplier </td> 
      <td><select name="supid"  class="form-control">
              <option value="0">--Select Supplier--</option>
                  <?php
                      include '../connection.php';
                                $exee= mysqli_query($conn,"select * from tbl_supplier");
                               
                                while($row=mysqli_fetch_array($exee))
                                {
                                    echo '<option value="'.$row['sup_id'].'">'.$row['supname'].' '.$row['supphone'].'</option>';
                                }
                                ?>
                                    
                                </select></td>
                        </tr>
                        
  
  
<tr>
    <td colspan="2" align="center"><input type="submit" align="center"  style="width:100px" name="submit" class="btn btn-primary" value="ADD" ></td>

  </tr>
  </table>
</form>
<br>
 </div></div>
<br><br>
<?php
session_start();
$staffid=$_SESSION['sid'];
include '../connection.php';
if(isset($_REQUEST['submit']))
        {
          $supid=$_REQUEST['supid'];         
           

        $qry = "insert into tbl_purchasemaster (supid,staffid) values('$supid','$staffid')";
    //  echo $qry;
        $exe = mysqli_query($conn,$qry);
        if($exe){
            //  echo '<script>alert(" Bottle Added")</script>';
            echo '<script>location.href="purchaseitems.php"</script>';
            
        }
       
           
        }
        



        ?>


   


        <?php
include '../footer.php';
?>