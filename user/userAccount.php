<?php 
   include('../include/connection.php'); 
   include('../include/header.php');
	session_start();
	if(!isset($_SESSION['userName'])){
     	header("location: ../index.php");
	}
      $conn=connectDB();
      $userName=$_SESSION['userName']; 
      $sql="select * from user where userId='$userName' ";
      $result=mysqli_query($conn,$sql);   
      $row=mysqli_fetch_assoc($result);  
?>
   <section id="userAccount" class="contact_us_area fix animated zoomIn wow">
      <div class="contact_fullwidth animated zoomIn wow">
         <div class="column contact_us fix"> 
            <h2 class="animated fadeInUpBig wow">About yourself</h2>
            <div class="contact_us_inner ">  

               <div class="left animated fadeInUpBig wow">
                  <h3>Type: User</h3> 
                  <h3>Gender: <?php echo $row['gender']; ?></h3>
                  <h3>Address: <?php echo $row['address']; ?></h3>
                 <h3>Contact : <?php echo $row['contact']; ?></h3>
               </div>

               <div class="right animated zoomIn wow">
                  <div class="animated fadeInUpBig wow">
                     <?php if ($row['image']==null) { ?>
                        <form  action="../include/profilePicture.php" enctype="multipart/form-data" method="POST" class="text-center">
                          <label for="imageUpload">Select Profile picture</label>
                           <input  type="file" id="imageUpload" name="image" style="display: none">
                           <br>
                           <button type="submit" style="padding: 8px;" class="btn btn-info">Submit</button>
                        </form>    
                     <?php }else{?>
                        <div> 
                           <img class="pull-right" src="../<?php echo $row['image']; ?>" width='auto' height='auto'>
                        </div>                         
                     
                        <div class="name ">
                           <?php echo $row['fullName'] ?> 
                        </div> 
                     <?php } ?>                        
                  </div>
               </div>

               <div class="middle animated zoomIn wow">
                  <form action="confirmLogin.php" method="POST" class="animated fadeInDownBig wow">  

                     <div class="text-center">

                        <a href="todaysPrice.php" class="btn btn-primary btn-filled">Today's price</a>

                        <a href="userChose.php" class="btn btn-warning btn-filled ">Choose Product</a>
                        
                        <a href="finalWishList.php" class="btn btn-info btn-filled ">Wish List</a>
                                              
                        <a href="purchaseList.php" class="btn btn-success btn-filled ">purchase list</a>
                        <a href="userLogout.php" class="btn btn-filled btn-danger ">Logout</a>
                       <a href="deleteMyAccount.php" onclick="return confirm('Are you sure?')" class="btn btn-filled btn-danger ">Delete My Account</a>
                     </div>               
                  </form>
               </div>
            </div>        
         </div>
      </div>
   </section>            
                
<?php include('../include/footer.php'); ?>