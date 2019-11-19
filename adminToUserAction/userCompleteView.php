<?php include('../include/header.php'); ?>
<?php include('../include/connection.php'); ?>


<?php 
   session_start();

   $id= $_GET['id']; /*come hear from index.php age*/
  

	$conn=connectDB();
	$sql="select*from user where id=$id";
	$result=mysqli_query($conn,$sql);	

   $userFullInfo=mysqli_fetch_assoc($result);  
  /* N:B: echo $studentView['name'];*/
?>

   <div id="userCompleteView" class="container">
      <div class="row" style="padding-top: 50px;">               
         <div class="col-sm-offset-4 col-sm-4">  
            <fieldset class="scheduler-border"> 
               <legend class="scheduler-border" align="center">
                  User update Information
               </legend> 

               <table class="table" style="margin-top: 20px;">

                  <?php if(isset($_SESSION['accountUpdateSuccessfully'])) { ?>
                     <?php
                        echo '<script type="text/javascript">
                                    alert("Success! account edit successfully.");
                              </script>';
                        ?> 
                     <?php } ?>   

                  <tr>
                     <th>Name</th>     
                     <td><label><?= $userFullInfo['userId']; ?></label></td>     
                  </tr>
                  
                  <tr>
                     <th>Password</th> 
                     <td><label> <?= $userFullInfo['password']; ?></label> </td>     
                  </tr>
                  
                  <tr>
                     <th>Gender</th> 
                     <td><label> <?= $userFullInfo['gender']; ?> </label></td>     
                  </tr>
                  
                  <tr>
                     <th>Age</th>    
                     <td><label> <?= $userFullInfo['age'] . "  year"; ?></label> </td>     
                  </tr>
                  
                  <tr>
                     <th>Address</th> 
                     <td><label>  <?= $userFullInfo['address']; ?> </label></td>     
                  </tr>
                  
                  <tr>
                     <th>Contact  </th> 
                     <td><label> <?= $userFullInfo['contact']; ?> </label></td>     
                  </tr>
               </table>  

               <div class="text-center">    
                  <a href="userList.php" style="padding: 10px 30px;"  class="btn btn-filled btn-info">
                  Back/all User</a>  
               </div> 

            </fieldset>
         </div> 
      </div>
   </div>


<?php unset($_SESSION['accountUpdateSuccessfully']); ?>
<?php include('../include/footer.php'); ?>
