<?php 
   include('../include/header.php');
   include('../include/connection.php');

   session_start();
   if(!isset($_SESSION['userName'])){
      header("location: ../index.php");
   }

   if(isset($_POST['deleteAccount'])) {

      $conn          = connectDB();
      $user_market   = user_market();
      $user_purchase = user_purchase();
      $user_wishlist = user_wishlist();   


      $userId=$_POST['userId'];
      $userPassword=$_POST['userPassword'];  

      $sql="select * from user where userId='$userId' AND password='$userPassword' ";
      $result=mysqli_query($conn,$sql);

      $rowcount=mysqli_num_rows($result);

      if ($rowcount) {
         $thisUser=mysqli_fetch_assoc($result);

         $id2     =  $thisUser['id'];
         $id      =  $thisUser['id'].'_';
         $userId  =  $thisUser['userId'];
         echo $userName=  $id.$userId;

         if ($userName=$_SESSION['user_info']) {
      
            $sql="delete from user where id=$id2";
            $result=mysqli_query($conn,$sql);

               if($result){               
                  $_SESSION['accountDeleteSuccessfully']=1;

                  $sql = "DROP TABLE $userName";
                  $result=mysqli_query($user_market, $sql);

                  $sql = "DROP TABLE $userName";        
                  $result=mysqli_query($user_purchase, $sql);

                  $sql = "DROP TABLE $userName";        
                  $result=mysqli_query($user_wishlist, $sql);

                  header("Location: ../index.php");                
               }else{
                  $_SESSION['accountDeleteFail']=true;
                  header("Location: deleteMyAccount.php");
               }
         }else{
             $_SESSION['fakeAccount']=true;
         }    
      }else{
             $_SESSION['accountInfoFalse']=true;
      } 
   }
?>

<div id="deleteMyAccount" class="container">
   <form action=" " method="POST">
      <div class="form-group row">
         <div class="col-sm-offset-4 col-sm-4">

            <?php if(isset($_SESSION['accountInfoFalse'])) { ?>
               <?php 
                  echo '<script type="text/javascript">
                           alert("Hellow user! Your ID & password don,t match. Try again.");
                           </script>';
                  ?> 
            <?php } ?>

            <?php if(isset($_SESSION['fakeAccount'])) { ?>
               <?php 
                  echo '<script type="text/javascript">
                           alert("Hellow user! Your ID & password match. But you can,t delete other account. You can delete your own account. Sorry! ");
                        </script>';
                  ?> 
            <?php } ?>            

            <?php if(isset($_SESSION['accountDeleteSuccessfully'])) { ?>
               <?php
                  echo  '<script type="text/javascript">
                           alert("Success! Your account delete successfully with all information . You can create new account");
                           </script>';
                     ?>
            <?php } ?>

            <?php if(isset($_SESSION['accountDeleteFail'])) { ?>
               <?php 
                  echo '<script type="text/javascript">
                           alert("Sorry!! Something is wrong. Try again or check your database.");
                        </script>';
                  ?> 
            <?php } ?>

            <fieldset class="scheduler-border animated zoomIn wow">
               <legend class="scheduler-border" align="center">
                 Delete your account
               </legend>               

               <div class="form-group row" style="padding-top: 30px;">
                  <label  class=" col-sm-offset-2 col-sm-4 control-label">Your Id</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="userId" placeholder="Your Id" required>
                  </div>
               </div>

               <div class="form-group row">
                  <label  class="col-sm-offset-2 col-sm-3 control-label">Password</label>
                  <div class="col-sm-offset-1 col-sm-4" >
                    <input type="password" class="form-control" name="userPassword" placeholder="Password" required>
                  </div>
               </div>
              
               <div class="form-group row">
                  <div class="col-sm-offset-6 col-sm-">
                    <button type="submit" name="deleteAccount" onclick="return confirm('Are you sure?')" class="btn btn-filled btn-danger">Delete Now</button>
                    <a href="userAccount.php" class="btn btn-filled btn-success">Back</a>
                  </div>
               </div> 
               
            </fieldset>
         </div>
      </div> 
  </form>
</div>  
<?php unset($_SESSION['accountInfoFalse']); ?>
<?php unset($_SESSION['fakeAccount']); ?>
<?php unset($_SESSION['accountDeleteFail']); ?>
<?php unset($_SESSION['accountDeleteSuccessfully']); ?>
<?php include('../include/footer.php'); ?>