<?php include('../include/connection.php'); ?>
<?php include('../include/header.php'); ?>
<?php 
  /*
	include('connection.php');
  session_start();
*/
  $id= $_GET['id']; /*come hear from index.php age*/
  

	$conn=connectDB();
	$sql="select*from user where id=$id";
	$result=mysqli_query($conn,$sql);	

  $userFullInfo=mysqli_fetch_assoc($result);
  
  /* N:B: echo $studentView['name'];*/
?>

  	<div id="userFullInfo" class="container">       
      <div class="row">               
         <div class="col-sm-offset-4 col-sm-4">  
            <fieldset class="scheduler-border"> 
            	<legend class="scheduler-border" align="center">
  				      User Information
               </legend>  

     				<table class="table">
     					<tr>
                     <th>Name </th>     
                     <td><label><?= $userFullInfo['userId']; ?></label></td>     
                  </tr>
                  <tr>
                     <th>Password </th> 
                     <td><label> <?= $userFullInfo['password']; ?></label> </td>     
                  </tr>
                  <tr>
                     <th>Gender </th> 
                     <td><label> <?= $userFullInfo['gender']; ?> </label></td>     
                  </tr>
                  <tr>
                     <th>Age </th>    
                     <td><label> <?= $userFullInfo['age']. " year"; ?></label> </td>     
                  </tr>
                  <tr>
                     <th>Address </th> 
                     <td><label>  <?= $userFullInfo['address']; ?> </label></td>     
                  </tr>
                  <tr>
                     <th>Contact </th> 
                     <td><label> <?= $userFullInfo['contact']; ?> </label></td>     
                  </tr>  					
     				</table>
               <div class="text-center" >    
                  <a href="userList.php" style="padding: 10px 30px;"  class="btn btn-filled btn-info">Back/all User</a>  
               </div> 

               <?php if(isset($_SESSION['update'])) { ?>
                   <div class="alert alert-success">
                     <strong>Success!</strong> Added successfully.
                   </div>
               <?php } ?>  
            </fieldset>
         </div> 
      </div>
  	</div>
<!--
<?php unset($_SESSION['update']); ?>
-->

<?php include('../include/footer.php'); ?>
