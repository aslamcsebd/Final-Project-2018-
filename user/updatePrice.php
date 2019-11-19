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

  $purchaseId=$_GET['purchaseId'];
  $fruitName=$_GET['fruitName']; 


    if (isset($_GET['purchaseId']) ) {  
      $sql="select*from $userName where id=$purchaseId";
      $result=mysqli_query($user_purchase,$sql); 
      $allFruit=mysqli_fetch_assoc($result);
      $thisFruit=$allFruit[$fruitName];          
    }

    if(isset($_POST['updatePriceSubmit'])){

      $updatePrice=$_POST['updatePrice'];
        
      $sql2="update $userName set $fruitName='$updatePrice' where id=$purchaseId";
      $result2=mysqli_query($user_purchase,$sql2);

      if($result2) {
          header("Location: purchaseList.php");
        } else {
          header("Location: 404.php");
        }
    }
?>

   <div id="editPrice" class="container">
      <div class="row">       
         <div class="col-sm-offset-4 col-sm-4"> 
            <form  method="POST">
               <fieldset class="scheduler-border">
                  <legend class="scheduler-border" align="center">
                     <h2>Edit Fruite price</h2>                
                  </legend>
                  <hr>
                       
                  <table class="table">
                     <thead>
                        <th>Fruit Name</th>
                        <th>Price</th>
                        <th>Action</th>
                     </thead>

                     <tbody>
                        <tr align="center">
                           <td><label><?php echo $fruitName; ?></label> </td>
                           <td>  
                              <input type="text" class="form-control" name="<?php echo "updatePrice" ; ?>"
                                 placeholder="Edit price"  value="<?php echo $allFruit[$fruitName]; ?>">
                           </td>
                           <td>
                              <button type="submit" style="padding:10px 10px;" name="updatePriceSubmit" class="btn btn-filled btn-success">Edit Now</button>
                           </td>
                        </tr>                           
                     </tbody>
                          
                  </table>
                     <hr>
               </fieldset>
            </form>
         </div>
      </div>
   </div>    


<?php include('../include/footer.php'); ?>
