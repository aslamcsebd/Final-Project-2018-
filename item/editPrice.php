<?php include('../include/connection.php'); ?>
<?php include('../include/header.php'); ?>

<?php
  session_start();
  if(!isset($_SESSION['adminLogin']) ){
      header("Location: ../index.php");
  }
?>

<?php
  $conn=connectDB();
  date_default_timezone_set("Asia/Dhaka");
  $date= date("Y-m-d");
  $fruitName= $_GET['name'];   //apple
  $city= $_GET['bazar'];  //agrabad
  $fruitId= $_GET['id'];       //price id

  if($city=='agrabad'){

  $sql="select*from agrabad where id=$fruitId";
  $result=mysqli_query($conn,$sql);
  $allPrice=mysqli_fetch_assoc($result);

  }
  else if($city=='gec'){

  $sql="select*from gec where id=$fruitId";
  $result=mysqli_query($conn,$sql);
  $allPrice=mysqli_fetch_assoc($result);

  }
  else if($city=='new_market'){

  $sql="select*from new_market where id=$fruitId";
  $result=mysqli_query($conn,$sql);
  $allPrice=mysqli_fetch_assoc($result);

  } 



//All update hear...
  if(isset($_POST['submit'])){
  $id=$_GET['id'];
  $updatePrice=$_POST['updatePrice'];

    //Agrabad update hear...
    if($city=='agrabad'){
      $sql1="update agrabad set $fruitName='$updatePrice' where id=$id";
      $result1=mysqli_query($conn,$sql1);
    
        if($result1) {
          header("Location: todayUpdate.php");
        } else {
          header("Location: 404.php");
        }
      }

    //GEC update hear...
    else if($city=='gec'){
      $sql1="update gec set $fruitName='$updatePrice' where id=$id";
      $result1=mysqli_query($conn,$sql1);
    
        if($result1) {
          header("Location: todayUpdate.php");
        } else {
          header("Location: 404.php");
        }
      }

    //New Market update hear...
    else if($city=='new_market'){
      $sql1="update new_market set $fruitName='$updatePrice' where id=$id";
      $result1=mysqli_query($conn,$sql1);
    
        if($result1) {
          header("Location: todayUpdate.php");
        } else {
          header("Location: 404.php");
        }
      }      

}
?>  

  	<div id="editPrice" class="container" style="padding-top: 150px;">
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
                                    placeholder="Edit price"  value="<?php echo $allPrice[$fruitName]; ?>">
                              </td>
                              <td>
                                 <button type="submit" style="padding:10px 10px;" name="submit" class="btn btn-filled btn-success">Edit Now</button>
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