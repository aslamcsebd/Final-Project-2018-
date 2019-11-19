<?php include('../include/connection.php'); ?>
<?php include('../include/header.php'); ?>

<?php 
  session_start();
  $_SESSION['adminLogin'];
  $tableName='user_wish';
  $pageURL='userNewChose.php';
  $sql="select*from $tableName ";
  include('../include/paginationHeader.php');  
?>
  	<div id="userNewChose" class="container">
  		<div class="row"> 
         
  			<div class="col-sm-offset-3 col-sm-6">   

            <?php if(isset($_SESSION['approveAccept'])) { ?>
               <?php
                     echo '<script type="text/javascript">
                                 alert("Approve accept...");
                           </script>';
                     ?>   
            <?php } ?>

            <?php if(isset($_SESSION['itemDeleteSuccessfully'])) { ?>
                  <?php
                     echo  '<script type="text/javascript">
                                 alert("Success! user request item delete successfully.");
                           </script>';
                     ?>   
            <?php } ?>

            <div>
               <a href="../admin/adminAccount.php" style="padding:10px 30px;" class="btn btn-filled btn-success pull-left">Back</a>             
               
               <h2 class="text-center" > User chosen product </h2> 
               <hr>
            </div>          

  				<table class="table" id="search">
  					<thead>
                  <th>Serial No</th>						
  						<th>User</th>
  						<th>Item</th>
  						<th>Market</th>
                  <th>Action</th>
  					</thead>

  					<tbody>
  						<?php while($row = mysqli_fetch_assoc($result2)) { ?>
     						<tr>
                        <td><label> <?= $row['id'] ?></label> </td>
     							<td><label> <?= $row['userName'] ?></label> </td>
     							<td><label> <?= $row['itemName'] ?></label> </td>
     							<td><label> <?= $row['marketName'] ?></label> </td> 						
     							
     							<td class="text-center">					
     							   <a class="btn btn-filled btn-info" href="userChosenDelete.php?approve=<?php echo $row['id']; ?>">Approve</a>

     							   <a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="userChosenDelete.php?id=<?php echo $row['id']; ?>">Delete</a>
                           
     							</td>
     						</tr>
  						<?php } ?>
  					</tbody>
  				</table>
            <?php include('../include/paginationFooter.php'); ?>
  			</div>   

  		</div>
  	</div>



<?php unset($_SESSION['approveAccept']); ?>
<?php unset($_SESSION['itemDeleteSuccessfully']); ?> 

<?php include('../include/footer.php'); ?>
