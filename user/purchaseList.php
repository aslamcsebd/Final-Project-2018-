<?php include('../include/connection.php'); ?>
<?php include('../include/header.php'); ?>

<?php 
   session_start(); 
   $user_purchase  = user_purchase();
   $user_market    = user_market();
   $conn           = connectDB();

   date_default_timezone_set("Asia/Dhaka");
   $date= date("Y-m-d");  
   $userName=$_SESSION['user_info'];

   $sql=" select * from $userName where date='$date' ";      
   $result=mysqli_query($user_purchase,$sql); 
   $rowPurchase = mysqli_fetch_assoc($result);

   $sql2=" select * from $userName where date='$date' ";      
   $result2=mysqli_query($user_market,$sql2); 
   $rowMarket = mysqli_fetch_assoc($result2);
   
   //$todayAllCost
   $todayAllCost=0;
      $sql3 ="SHOW COLUMNS FROM $userName";
      $result3 = mysqli_query($user_purchase,$sql3);
         while($row = mysqli_fetch_assoc($result3)){
            $row['Field']."<br>";  
            $rowPurchase[$row['Field']];
               if ($row['Field']!='id' && $row['Field']!='date' && $row['Field']!='total') {
                 $todayAllCost=$todayAllCost  + $rowPurchase[$row['Field']] ;        
               }                           
         }                   
         $todayAllCost;
         $sql4=" update $userName set total='$todayAllCost' where date='$date' ";
         $result4=mysqli_query($user_purchase,$sql4);          


   if(isset($_POST['selectDate'])){

      $advanceDate=$_POST['date'];

      if ($advanceDate<=$date ) {

      $todayAllCost=0;
      $selectDate=$_POST['date'];
      $sql=" select * from $userName where date='$selectDate' ";      
      $result=mysqli_query($user_purchase,$sql); 
      $rowPurchase = mysqli_fetch_assoc($result);

      $sql2=" select * from $userName where date='$selectDate' ";      
      $result2=mysqli_query($user_market,$sql2); 
      $rowMarket = mysqli_fetch_assoc($result2);

      //selected date totalcost...
      $sql3 ="SHOW COLUMNS FROM $userName";
      $result3 = mysqli_query($user_purchase,$sql3);
         while($row = mysqli_fetch_assoc($result3)){
            $row['Field']."<br>";  
            $rowPurchase[$row['Field']];
               if ($row['Field']!='id' && $row['Field']!='date' && $row['Field']!='total') {
                 $todayAllCost=$todayAllCost  + $rowPurchase[$row['Field']] ;
               }                           
         }                   
         $todayAllCost;
         $sql4=" update $userName set total='$todayAllCost' where date='$selectDate' ";
         $result4=mysqli_query($user_purchase,$sql4);

         $_SESSION['selectDate']=true;
      }
      else{
            $sms="Sorry! </br>
                  You select the future date.</br>
                  You should see the previous date.";
                  
            $_SESSION['advanceDate']=$sms;
         }
   }

   //selected month cost

   if(isset($_POST['otherDay'])){
      $firstDay=$_POST['firstDay'];
      $lastDay=$_POST['lastDay'];

      $sql= "SELECT sum(total) as sum FROM $userName WHERE date between DATE_FORMAT(CURDATE() ,'$firstDay') AND DATE_FORMAT(CURDATE() ,'$lastDay') ";
      $result=mysqli_query($user_purchase,$sql);  
      $row = mysqli_fetch_assoc($result);   
      $otherDay=$row['sum'];
      $_SESSION['otherDay']=true; 
   }
?>
      <div id="purchaseList" class="container">
  		<div class="row">
         <div class="col-sm-offset-5 col-sm-3">
            <div style="background-color: green; border: 5px solid pink;">
               <h2 class="text-center">Cost list</h2>
               <hr>
               
               <h3 class="text-center">See previous cost</h3> 
               <a href="userAccount.php" class="btn btn-filled btn-info"> Back </a>
               <form  method="POST" class="pull-right">                     
                  <input type="date" name="date" placeholder="Date" required>
                  <button type="submit" name="selectDate" class="btn btn-filled btn-success">Select</button>
               </form>     
            </div> 
         </div>
      </div>

      <?php if(isset($_SESSION['advanceDate'])) { ?> 
            
            <div class="text-center" style="color: #fff; font-size: 35px; background-color: Red; border: 3px solid blue;">
               <?php echo $_SESSION['advanceDate']; ?> 
            </div>
         <?php }else{ ?>


      <div class="row" style="padding-top: 10px;">
         <div class="col-sm-offset-3 col-sm-6">  				
  				<table class="table">
  					<thead>
  						<th>Image</th>
  						<th>Name</th>
  						<th>Cost</th>
  						<th>Market</th>
                  
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <th>Action</th>    
                     <?php } ?>
                  <th>Total cost</th>
  					</thead>

               <tbody align="center">

                  <?php if ($rowPurchase!=null && $rowPurchase['apple']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/apple.png" > </td>
                        <td><label>Apple</label> </td>
                        <td><label><?php echo $rowPurchase['apple'] ?></label>  </td>
                        <td><label><?php echo $rowMarket['apple'] ?></label></td>
                         
                           <?php if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=apple&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                           <?php } ?>
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['apricot']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/apricot.png" > </td>
                        <td><label>Apricot</label></td>
                        <td><label> <?php echo $rowPurchase['apricot'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['apricot'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=apricot&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                        
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['banana']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/banana.png" > </td>
                        <td><label>Banana</label></td>
                        <td><label> <?php echo $rowPurchase['banana'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['banana'] ?> </label></td>
                     <?php if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=banana&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?> 
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['cherries']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/cherries.png" > </td>
                        <td><label>Cherries</label></td>
                        <td><label> <?php echo $rowPurchase['cherries'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['cherries'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=cherries&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                        
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['coconut']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/coconut.png" > </td>
                        <td><label>Coconut</label></td>
                        <td><label> <?php echo $rowPurchase['coconut'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['coconut'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=coconut&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                        
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['grape']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/grape.png" > </td>
                        <td><label>Grape</label></td>
                        <td><label> <?php echo $rowPurchase['grape'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['grape'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=grape&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?> 
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['icon']!=0) { ?>  
                     <tr>
                        <td><img src="../img/fruit/icon.png" > </td>
                        <td><label>icon</label></td>
                        <td><label> <?php echo $rowPurchase['icon'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['icon'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=icon&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?> 
                     </tr>          
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['lemon']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/lemon.png" > </td>
                        <td><label>Lemon</label></td>
                        <td><label> <?php echo $rowPurchase['lemon'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['lemon'] ?> </label></td>

                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=lemon&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                        
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['lychee']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/lychee.png" > </td>
                        <td><label>Lychee</label></td>
                        <td><label> <?php echo $rowPurchase['lychee'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['lychee'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=lychee&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                       
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['mango']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/mango.png" > </td>
                        <td><label>Mango</label></td>
                        <td><label> <?php echo $rowPurchase['mango'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['mango'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=mango&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                       
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['melon']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/melon.png" > </td>
                        <td><label>Melon</label></td>
                        <td><label> <?php echo $rowPurchase['melon'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['melon'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=melon&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                       
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['orange']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/orange.png" > </td>
                        <td><label>Orange</label></td>
                        <td><label> <?php echo $rowPurchase['orange'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['orange'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=orange&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                        
                     </tr>
                  <?php } ?>
                  
                  <?php if ($rowPurchase!=null && $rowPurchase['peach']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/peach.png" > </td>
                        <td><label>Peach</label></td>
                        <td><label> <?php echo $rowPurchase['peach'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['peach'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=peach&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                        
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['pear']!=0) { ?>
                     <tr> 
                        <td><img src="../img/fruit/pear.png" > </td>
                        <td><label>Pear</label></td>
                        <td><label> <?php echo $rowPurchase['pear'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['pear'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=pear&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                        
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['pineapple']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/pineapple.png" > </td>
                        <td><label>Pineapple</label></td>
                        <td><label> <?php echo $rowPurchase['pineapple'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['pineapple'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=pineapple&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?> 
                     </tr>
                  <?php } ?>
                  
                  <?php if ($rowPurchase!=null && $rowPurchase['plum']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/plum.png" > </td>
                        <td><label>Plum</label></td>
                        <td><label> <?php echo $rowPurchase['plum'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['plum'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=plum&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                        
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['raspberry']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/raspberry.png" > </td>
                        <td><label>Raspberry</label></td>
                        <td><label> <?php echo $rowPurchase['raspberry'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['raspberry'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=raspberry&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                        
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['strawberry']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/strawberry.png" > </td>
                        <td><label>Strawberry</label></td>
                        <td><label> <?php echo $rowPurchase['strawberry'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['strawberry'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=strawberry&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                        
                     </tr>
                  <?php } ?>
                  
                  <?php if ($rowPurchase!=null && $rowPurchase['tangerine']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/tangerine.png" > </td>
                        <td><label>Tangerine</label></td>
                        <td><label> <?php echo $rowPurchase['tangerine'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['tangerine'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=tangerine&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                        
                     </tr>
                  <?php } ?>  
                  
                  <?php if ($rowPurchase!=null && $rowPurchase['watermelon']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/watermelon.png" > </td>
                        <td><label>Watermelon</label></td>
                        <td><label> <?php echo $rowPurchase['watermelon'] ?> </label></td>
                        <td><label> <?php echo $rowMarket['watermelon'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=watermelon&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                       
                     </tr>
                  <?php } ?>

                  <?php if ($rowPurchase!=null && $rowPurchase['other']!=0) { ?>
                     <tr>
                        <td><img src="../img/fruit/app_logo.jpg" width="60" height="60"> </td>
                        <td><label>Other</label></td>
                        <td><label><?php echo $rowPurchase['other'] ?>  </label></td>
                        <td><label> <?php echo $rowMarket['other'] ?> </label></td>
                     <?php  if(!isset($_SESSION['selectDate'])) { ?>
                        <td>
                           <a class="btn btn-filled btn-info" href="updatePrice.php?fruitName=other&purchaseId=<?php echo $rowPurchase['id'] ?>">Edit</a>
                        </td>
                        <?php } ?>                       
                     </tr>
                  <?php } ?>
                  
              
                  <tr>

                     <?php if(!isset($_SESSION['selectDate'])) { ?>
                        <td colspan="4"></td>
                     <?php } ?>

                     <?php if(isset($_SESSION['selectDate'])) { ?>
                        <td colspan="3"></td>
                     <?php } ?>
                     
                     <td colspan=""><label>Total Cost :</label></td>

                     <td><label><?php echo $todayAllCost ." /= taka" ?> </label></td>   

                  </tr> 

                  <tr>
                     <td colspan="6"><h3>Combind day's cost below.</h3></td>
                  </tr>

                  <tr class="otherDay">
                     <td colspan="3">             

                        <form  method="POST" >        
                           <div class="pull-left">
                              <label>First day</label><br>  
                              <input type="date" name="firstDay"  placeholder="Date" required> 
                           </div>   
                          
                           <div class="pull-right">
                              <label>Last day</label><br>  
                              <input type="date" name="lastDay"  placeholder="Date" required>
                           </div>   
                     </td>
                     <td>
                        <button type="submit" name="otherDay" style="padding: 7px 10px;" class="btn btn-filled btn-success">Select</button>
                     </td>
                        </form>                       

                     <?php if(isset($_SESSION['otherDay'])) { ?>        
                     <td colspan=""><label>Total Cost :</label></td>
                     <td><label><?php echo $otherDay ." /=  taka" ?></label></td>
                        <?php } ?>   
                  </tr>  
               </tbody>      
            </table>
  			</div>
  		</div>
       <?php } ?>  


  	</div>
 
<?php unset($_SESSION['otherDay']); ?>
<?php unset($_SESSION['selectDate']); ?>
<?php include('../include/footer.php'); ?>