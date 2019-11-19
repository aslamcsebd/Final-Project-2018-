<?php 
   include('../include/connection.php');
   include('../include/header.php');

   session_start();  
      if(!isset($_SESSION['adminName'])){
         header("location: ../index.php");
      }

   $conn=connectDB();
   $adminName=$_SESSION['adminName']; 

   $sql="select * from admin where adminId='$adminName' ";
   $result=mysqli_query($conn,$sql);   
   $row=mysqli_fetch_assoc($result);
?>

   <section id="adminAccount" class="contact_us_area fix animated zoomIn wow">
      <div class="contact_fullwidth animated zoomIn wow">
         <div class="column contact_us fix"> 
            <h2>About yourself</h2>
            <div class="contact_us_inner">  

               <div class="left ">
                  <h3>Type: Admin</h3>
                  <h3>Gender: <?php echo $row['gender']; ?></h3>
                  <h3>Address: <?php echo $row['address']; ?></h3>
                  <h3>Contact : <?php echo $row['contact']; ?></h3>
               </div>

               <div class="right animated zoomIn wow">
                  <div class="/pull-right">
                     <?php if ($row['image']==null) { ?>
                        <form action="../include/profilePicture.php" enctype="multipart/form-data" method="POST">
                           <label for="imageUpload">Select Profile picture</label>
                           <input  type="file" id="imageUpload" name="image" style="display: none">   
                           <br>
                           <button type="submit" style="padding: 8px;" class="btn btn-info">Submit</button>
                        </form>    
                     <?php }else{?>
                        <div> 
                           <img class="pull-right" src="../<?php echo $row['image']; ?>" width='auto'  height='auto'>
                        </div> 
                        <div class="name">
                           <?php echo $row['fullName'] ?> 
                        </div>     
                     <?php } ?>                
                  </div>
               </div>

               <div class="middle animated zoomIn wow">
                  <form action="confirmLogin.php" method="POST" class="animated fadeInDownBig wow">
                     <div class="text-center">                       
                           
                        <a href="../item/addItem.php" class="btn btn-filled btn-success ">Add Item</a>
                          
                        <a href="../item/todayUpdate.php" class="btn btn-filled btn-info ">Today's Price</a>                        
                       
                        <a href="../adminToUserAction/userList.php" class="btn btn-filled btn-primary ">See User List</a>
                    
                        <a href="../adminToUserAction/userNewChose.php" class="btn btn-filled btn-info ">User new Chose</a>
       
                        <a href="adminLogout.php" class="btn btn-filled btn-danger ">Logout</a>
                     </div>
                  </form>
               </div>               
            </div>      
         </div>
      </div>
   </section>           

<?php include('../include/footer.php'); ?>