<?php 
   include('../include/header.php');
   session_start();
   session_destroy();
   session_start();
?>

<div id="adminLogin" class="container">
   <form action="confirmLogin.php" method="POST">
      <div class="form-group row">
         <div class="col-sm-offset-4 col-sm-4">
            <fieldset class="scheduler-border animated zoomIn wow">
               <legend class="scheduler-border" align="center">
                 Admin Login
               </legend>  

               <?php if(isset($_SESSION['adminLoginError'])) { ?>
                  <?php 
                     echo '<script type="text/javascript">
                              alert("Hellow admin! Your ID & password don,t match. Try again.");
                           </script>';
                     ?> 
               <?php } ?>  
    
               <div class="form-group row" style="padding-top: 30px;">
                  <label  class="col-sm-offset-2 col-sm-4 control-label">Admin Id</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control" name="adminId" placeholder="Admin Id" required>
                  </div>
               </div>

               <div class="form-group row">
                  <label  class="col-sm-offset-2 col-sm-3  control-label">Password</label>
                  <div class="col-sm-offset-1 col-sm-4">
                     <input type="password" class="form-control" name="adminPassword" placeholder="Password" required>
                  </div>
               </div>
  
               <div class="form-group row">
                  <div class="col-sm-offset-6">
                     <button type="submit" class="btn btn-filled btn-success">Sign in</button>
                     <a href="../index.php" class="btn btn-filled btn-success ">Home</a>
                  </div>
               </div>

            </fieldset>
         </div>
      </div>
   </form>
</div>


<?php unset($_SESSION['adminLoginError']); ?>
<?php include('../include/footer.php'); ?>