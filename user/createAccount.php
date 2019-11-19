<?php include('../include/header.php'); ?>
<?php session_start(); ?>

  	<div id="createAccount" class="container">  		
      <form action="confirmAccount.php" method="POST">
         <div class="form-group row">
            <div class="col-sm-offset-4 col-sm-5">
               <fieldset class="scheduler-border">
                  <legend class="scheduler-border" align="center">
                     Create New Account
                  </legend> 

                  <table class="table">
                     <hr>
                     <tr>
                        <th  class="text-right"><label>Full Name</label></th>
                        <td>
                           <input type="text" class="form-control" name="fullName" placeholder="Full Name">
                        </td>                 
                     </tr>

                     <tr>
                        <th  class="text-right"><label>User ID</label> </th>
                        <td>
                           <input type="text" class="form-control" name="userId" placeholder="User ID">
                        </td>                 
                     </tr>

                     <tr>
                        <th  class="text-right"><label>Password </label></th>
                        <td>
                           <input type="Password" class="form-control" name="userPassword" placeholder="Password">                            
                        </td>                 
                     </tr>

                     <tr>
                        <th  class="text-right"><label>Gender</label> </th>
                        <td>
                           <div class="gender"> 
                              <input type="radio" name="userGender" value="Male"> <label>Male </label>
                                                               
                              <input type="radio" name="userGender" value="Female"> <label>Female</label>
                           </div>                       
                        </td>                 
                     </tr>

                     <tr>
                        <th  class="text-right"><label>Age</label> </th>
                        <td>
                           <input type="text" class="form-control" name="userAge" placeholder="Age">
                        </td>                 
                     </tr>

                     <tr>
                        <th  class="text-right"><label>Address</label> </th>
                        <td>
                         <input type="text" class="form-control" name="userAddress" placeholder="Address">                               
                        </td>                 
                     </tr>

                     <tr>
                        <th  class="text-right"><label>Contact</label></th>
                        <td>
                           <input type="text" class="form-control" name="userContact" placeholder="Contact">                           
                        </td>                 
                     </tr>
                  </table>

                  <div class="ol-sm-offset-4 ol-sm-3 text-center">

                     <?php 
                        if(isset($_SESSION['adminLogin'])) { ?>   
                           <a href="../admin/adminAccount.php" class="btn btn-filled btn-success">Back</a>
                         
                     <?php } else { ?>   
                           <a href="../index.php" class="btn btn-filled btn-success">Back</a>
                     <?php } ?> 

                     <button type="submit" class="btn btn-filled btn-info">Add Account</button>

                  </div>
               </fieldset>
            </div>
         </div>
      </form>     
   </div>		

<?php include('../include/footer.php'); ?>