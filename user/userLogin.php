<?php 
   include('../include/header.php');
   session_start();
?>

<div id="userLogin" class="container">
   <form action="confirmLogin.php" method="POST">
      <div class="form-group row">
         <div class="col-sm-offset-4 col-sm-4">
            <fieldset class="scheduler-border animated zoomIn wow">
               <legend class="scheduler-border" align="center">
                 User Login
               </legend>  

                <?php if(isset($_SESSION['userLoginError'])) { ?>
                  <?php 
                     echo '<script type="text/javascript">
                              alert("Hellow user! Your ID & password don,t match. Try again.");
                           </script>';
                     ?> 
               <?php } ?>

               <?php if(isset($_SESSION['newAccountCreateSuccessfully'])) { ?>
                  <?php
                     echo  '<script type="text/javascript">
                                 alert("Hellow user! Your account create successfully.");
                           </script>';
                  ?>
              <?php } ?>

               <div class="form-group row" style="padding-top: 30px;">
                  <label  class=" col-sm-offset-2 col-sm-4 control-label">User Id</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="userId" placeholder="User Id" required>
                  </div>
               </div>

               <div class="form-group row">
                  <label  class="col-sm-offset-2 col-sm-3 control-label">Password</label>
                  <div class="col-sm-offset-1 col-sm-4" >
                    <input type="password" class="form-control" name="userPassword" placeholder="Password" required>
                  </div>
               </div>
              
               <div class="form-group row">
                  <div class="col-sm-offset-6 col-sm-" >
                    <button type="submit" class="btn btn-filled btn-success">Sign in</button>
                    <a href="../index.php" class="btn btn-filled btn-success ">Home</a>
                  </div>
               </div> 
            </fieldset>
         </div>
      </div> 
  </form>
</div>
<?php unset($_SESSION['userLoginError']); ?>
<?php unset($_SESSION['newAccountCreateSuccessfully']); ?>
<?php include('../include/footer.php'); ?>