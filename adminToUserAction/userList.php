<?php include('../include/connection.php'); ?>
<?php include('../include/header.php'); ?>

<?php 
   session_start();  
      if(!isset($_SESSION['adminName'])){
         header("location: ../index.php");
      } 
   $_SESSION['adminLogin'];
   $tableName='user';
   $pageURL='userList.php';
   $sql="select*from $tableName ";
   include('../include/paginationHeader.php'); 
?>

  	<div id="userList" class="container">
  		<div class="row">  			
  			<div class="col-sm-offset-3 col-sm-5">          
            <?php if(isset($_SESSION['accountCreateSuccessfully'])) { ?>
               <?php
                  echo  '<script type="text/javascript">
                                 alert("Success! new user added successfully.");
                        </script>';
                        ?>
               <?php } ?>

               <?php if(isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger">
                      <strong>Ops!!!</strong> Something wrong.
                    </div>
               <?php } ?>
             
               <?php if(isset($_SESSION['accountDeleteSuccessfully'])) { ?>
                  <?php
                     echo  '<script type="text/javascript">
                                 alert("Success! user all information delete successfully.");
                           </script>';
                     ?>   
               <?php } ?>

            <div>
               <a href="../admin/adminAccount.php" style="padding:10px 30px;" class="btn btn-filled btn-success pull-left">Back</a>
               
               <a href="../user/createAccount.php" class="btn btn-filled btn-success pull-right">Create User Account</a>               
            </div>  	
            <br>
            <h2 class="text-center">User List </h2>
           			
  				<hr>
  				<table class="table" id="search">
  					<thead>
  						<th>Sql ID</th>
  						<th>User Id</th>
  						<th>Gender</th>
  						<th>Age</th>
                  <th>Action</th>
  					</thead>

  					<tbody align="center">
  						<?php while($row = mysqli_fetch_assoc($result2)) { ?>
  						<tr>
  							<td><label> <?= $row['id'] ?></label> </td>
  							<td><label> <?= $row['userId'] ?></label> </td>
  							<td><label> <?= $row['gender'] ?></label> </td>
  							<td><label> <?= $row['age'] ?></label> </td>
  							
  							
  							<td class="text-center">
  							<a class="btn btn-filled btn-info" href="userFullInfo.php?id=<?php echo $row['id']; ?>">View</a>
  							<a class="btn btn-filled btn-primary" href="userAccountEdit.php?id=<?php echo $row['id']; ?>">Edit</a>
  							<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="userAccountDelete.php?id=<?php echo $row['id']; ?>">Delete</a>
  							</td>
  						</tr>
  						<?php } ?>
  					</tbody>
  				</table>
            <?php include('../include/paginationFooter.php'); ?>
  			</div>      
  		</div>
  	</div>


<?php unset($_SESSION['accountCreateSuccessfully']); ?>
<!--
<?php unset($_SESSION['error']); ?>
-->
<?php unset($_SESSION['accountDeleteSuccessfully']); ?> 
<?php include('../include/footer.php'); ?>