<?php include('../include/header.php'); ?>
<?php include('../include/connection.php'); ?>

<?php 
  $id= $_GET['id']; /*come hear from index.php age*/
	$conn=connectDB();
	$sql="select*from user where id=$id";
	$result=mysqli_query($conn,$sql);
  $userAccountEdit=mysqli_fetch_assoc($result);  
?>

   <div id="userAccountEdit" class="container">       
      <div class="row">               
         <div class="col-sm-offset-4 col-sm-4">  
            <fieldset class="scheduler-border"> 

               <legend class="scheduler-border" align="center">
                  Account Edit
               </legend>
              
               <form action="userAccountUpdate.php?id=<?php echo $id ?>" method="POST">
                  <table class="table" >
                     <tr>
                        <th >Name</th>
                        <td>
                           <input type="text" class="form-control" name="userId" placeholder="Student Name"  value="<?php echo $userAccountEdit['userId']; ?>">
                        </td>                 
                     </tr>
                     
                     <tr>
                        <th> Password</th> <!--also use// width="150" --> 
                        <td>
                           <input type="text" class="form-control" name="userPassword" placeholder="Roll" value="<?php echo $userAccountEdit['password']; ?>">
                        </td>  
                     </tr>
                     
                     <tr>
                        <th> Gender </th>
                        <td>
                           <input type="text" class="form-control" name="userGender" placeholder="Roll" value="<?php echo $userAccountEdit['gender']; ?>">
                        </td>
                     </tr>
                   
                     <tr>
                        <th>Age </th>
                        <td>
                           <input type="text" class="form-control" name="userAge" placeholder="Age" value="<?php echo $userAccountEdit['age']; ?>">
                        </td>
                     </tr>

                     <tr>
                        <th> Address</th>
                        <td>
                           <input type="text" class="form-control" name="userAddress" placeholder="Adress" value="<?php echo $userAccountEdit['address']; ?>">
                        </td>
                     </tr>

                     <tr>
                        <th> Contact </th>
                        <td>
                           <input type="text" class="form-control" name="userContact" placeholder="Contack" value="<?php echo $userAccountEdit['contact']; ?>">   
                        </td> 
                     </tr>   
                     
                  </table>  
                  <div class="text-center">   
                     <a href="userList.php" style="padding: 10px 30px;" class="btn btn-filled btn-info">Back</a>                                
                     <button type="submit" style="padding: 10px 30px;" class="btn btn-filled btn-success pull-down">Update</button>
                  </div> 
               </form>    
            </fieldset>
         </div> 
      </div>
   </div>

<?php include('../include/footer.php'); ?>
