<?php include('../include/connection.php'); ?>
<?php include('../include/header.php'); ?>

<?php
   session_start();
   $conn=connectDB();
   date_default_timezone_set("Asia/Dhaka");
	//$date3= date("Y-m-d")."<br>";
   $date= date("Y-m-d-D");

   $sql="select*from agrabad where date='$date'";
   $result1=mysqli_query($conn,$sql);

   $sql2="select*from gec where date='$date'";
   $result2=mysqli_query($conn,$sql2);	

   $sql3="select*from new_market where date='$date'";
   $result3=mysqli_query($conn,$sql3);


   if(isset($_POST['send'])){

      $date1=$_POST['date'];

         if ($date1<=$date ) {   
            $sql="select*from agrabad where date='$date1'";
            $result1=mysqli_query($conn,$sql);

            $sql2="select*from gec where date='$date1'";
            $result2=mysqli_query($conn,$sql2);	

            $sql3="select*from new_market where date='$date1'";
            $result3=mysqli_query($conn,$sql3);		 
         }else{
            $sms="Sorry! </br>
                  You select the future date.</br>
                  You should see the previous date.";
                  
            $_SESSION['advanceDate']=$sms;

         }
    }
?>

   <div id="todaysPrice" class="container" style="padding-top: 50px;">
      <div class="row">  
         <div class="col-sm-offset-3 col-sm-2 choseDate2">

            <a href="userAccount.php" style="padding:10px 50px;" class="btn btn-filled btn-success ">Back</a>       

            <?php
               if(!isset($_POST['send'])){ ?>
                  <h3 style="background-color: #B0C4DE; padding: 10px 0px; margin:0px;">Today's product date  <label > [<?=  "$date"; ?>]</label> </h3>
                  
            <?php } ?>

            <form  method="POST">
               <?php 
                  if(isset($_POST['send'])){ ?>
                     <h3 style="background-color: #778899;padding: 10px 0px; margin:0px;" >Your selected date
                        <label>[<?= "$date1"; ?>]</label>
                     </h3> 
                  <?php }
               ?>
            </form>

            <form  method="POST" style="background-color: #778899; margin: -15px 0px 10px 0px;">
               <?php                
                  if(isset($_POST['send'])){ ?>  

                     <button type="submit" name="today" class="btn btn-filled btn-info">Today's price</button>  
               <?php } ?>
            </form>

            <form  method="POST"  style="background-color: #778899; padding: 5px 0px;">
               <label>See previous price</label>                  
               <input type="date"  name="date"  placeholder="Date" required style=" width: 60%;">
               <button type="submit" style="padding: 5px 15px;" name="send" class="btn btn-filled btn-danger">Click</button>            
            </form> 
         </div> 

         <div class="col-sm-offset- col-sm-2 choseDate2">
             <h3 style="background-color: #B0C4DE; padding: 10px 0px; margin:0px;">Product Graph Price</h3>            

            <form  method="POST" action="" style="background-color: #778899; padding: 5px 0px;">
               <label>Search Product</label>              
                  <input  type="text" name="product" style=" width: 50%;"> 
                  <input  type="submit" name="graph" value="Search">                                      
            </form>

            <form method="POST" action="" style="background-color: #778899;">
               <label>OR &nbsp; Select product</label>
               <select name='product' required style=" width: 55%;">
                  <option value="">Select Product</option>
                  <option value="apple">Apple</option>
                  <option value="apricot">Apricot</option>
                  <option value="banana">Banana</option>
                  <option value="cherries">Cherries</option>
                  <option value="coconut">Coconut</option>
                  <option value="grape">Grape</option>
                  <option value="icon">Icon</option>
                  <option value="lemon">Lemon</option>
                  <option value="lychee">Lychee</option>
                  <option value="mango">Mango</option>
                  <option value="melon">Melon</option>
                  <option value="orange">Orange</option>
                  <option value="peach">Peach</option>
                  <option value="pear">Pear</option>
                  <option value="pineapple">Pineapple</option>
                  <option value="plum">Plum</option>
                  <option value="raspberry">Raspberry</option>
                  <option value="strawberry">Strawberry</option>
                  <option value="tangerine">Tangerine</option>
                  <option value="watermelon">Watermelon</option>
               </select>
                <button type="submit" style="padding: 5px 5px;" name="graph" class="btn btn-filled btn-danger">Search</button>  
            </form>                   
         </div>   
      </div>

      <?php if(!isset($_POST['graph'])) { ?>   

         <div class="row todaysPrice">
            <?php if(isset($_SESSION['advanceDate'])) { ?>             
               <div class="text-center" style="color: #fff; font-size: 35px; background-color: green; border: 3px solid blue;">
                  <?php echo $_SESSION['advanceDate']; ?> 
               </div>
            <?php }else{ ?>
               <div class="col-sm-offset-2 col-sm-2">
                  <h3>Agrabad <hr> </h3>
                  <table class="table">

                     <thead>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                     </thead>

                     <tbody align="center">
                        <?php $row = mysqli_fetch_assoc($result1) ?>                
                        <tr>
                           <td><img src="../img/fruit/apple.png" class="responsive"> </td>
                           <td><label>Apple</label>  </td>
                           <td><?php echo $row['apple'] ?> </td>                     
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/apricot.png" class="responsive"> </td>
                           <td> <label> Apricot </label></td>
                           <td><?php echo $row['apricot'] ?> </td>                     
                        </tr> 
                        <tr>
                           <td><img src="../img/fruit/banana.png" class="responsive"> </td>
                           <td> <label> Banana</label></td>
                           <td> <?php echo $row['banana'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/cherries.png" class="responsive"> </td>
                           <td> <label> Cherries</label></td>
                           <td> <?php echo $row['cherries'] ?> </td>
                        </tr> 
                        <tr>
                           <td><img src="../img/fruit/coconut.png" class="responsive"> </td>
                           <td> <label>Coconut </label></td>
                           <td> <?php echo $row['coconut'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/grape.png" class="responsive"> </td>
                           <td> <label> Grape</label></td>
                           <td> <?php echo $row['grape'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/icon.png" class="responsive"> </td>
                           <td> <label>Icon </label></td>
                           <td> <?php echo $row['icon'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/lemon.png" class="responsive"> </td>
                           <td> <label> Lemon</label></td>
                           <td> <?php echo $row['lemon'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/lychee.png" class="responsive"> </td>
                           <td> <label> Lychee</label></td>
                           <td> <?php echo $row['lychee'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/mango.png" class="responsive"> </td>
                           <td> <label> Mango</label></td>
                           <td> <?php echo $row['mango'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/melon.png" class="responsive"> </td>
                           <td> <label>Melon </label></td>
                           <td> <?php echo $row['melon'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/orange.png" class="responsive"> </td>
                           <td> <label> Orange</label></td>
                           <td> <?php echo $row['orange'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/peach.png" class="responsive"> </td>
                           <td> <label> Peach</label></td>
                           <td> <?php echo $row['peach'] ?> </td>
                        </tr>
                        <tr> 
                           <td><img src="../img/fruit/pear.png" class="responsive"> </td>
                           <td> <label> Pear</label></td>
                           <td> <?php echo $row['pear'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/pineapple.png" class="responsive"> </td>
                           <td> <label> Pineapple</label></td>
                           <td> <?php echo $row['pineapple'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/plum.png" class="responsive"> </td>
                           <td> <label> Plum</label></td>
                           <td> <?php echo $row['plum'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/raspberry.png" class="responsive"> </td>
                           <td> <label> Raspberry</label></td>
                           <td> <?php echo $row['raspberry'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/strawberry.png" class="responsive"> </td>
                           <td> <label>Strawberry </label></td>
                           <td> <?php echo $row['strawberry'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/tangerine.png" class="responsive"> </td>
                           <td> <label> Tangerine</label></td>
                           <td> <?php echo $row['tangerine'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/watermelon.png" class="responsive"> </td>
                           <td> <label> Watermelon</label></td>
                           <td> <?php echo $row['watermelon'] ?> </td>
                        </tr>                
                     </tbody>
                  </table>
               </div>
               <div class="col-sm-2">
                  <h3 class="text-center">GEC<hr></h3>  
                  <table class="table">
                     <thead>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                     </thead>

                     <tbody align="center">
                        <?php $row = mysqli_fetch_assoc($result2) ?>                
                        <tr>
                           <td><img src="../img/fruit/apple.png" class="responsive"> </td>
                           <td><label>Apple</label>  </td>
                           <td><?php echo $row['apple'] ?> </td>                     
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/apricot.png" class="responsive"> </td>
                           <td> <label> Apricot </label></td>
                           <td><?php echo $row['apricot'] ?> </td>                     
                        </tr> 
                        <tr>
                           <td><img src="../img/fruit/banana.png" class="responsive"> </td>
                           <td> <label> Banana</label></td>
                           <td> <?php echo $row['banana'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/cherries.png" class="responsive"> </td>
                           <td> <label> Cherries</label></td>
                           <td> <?php echo $row['cherries'] ?> </td>
                        </tr> 
                        <tr>
                           <td><img src="../img/fruit/coconut.png" class="responsive"> </td>
                           <td> <label>Coconut </label></td>
                           <td> <?php echo $row['coconut'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/grape.png" class="responsive"> </td>
                           <td> <label> Grape</label></td>
                           <td> <?php echo $row['grape'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/icon.png" class="responsive"> </td>
                           <td> <label>Icon </label></td>
                           <td> <?php echo $row['icon'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/lemon.png" class="responsive"> </td>
                           <td> <label> Lemon</label></td>
                           <td> <?php echo $row['lemon'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/lychee.png" class="responsive"> </td>
                           <td> <label> Lychee</label></td>
                           <td> <?php echo $row['lychee'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/mango.png" class="responsive"> </td>
                           <td> <label> Mango</label></td>
                           <td> <?php echo $row['mango'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/melon.png" class="responsive"> </td>
                           <td> <label>Melon </label></td>
                           <td> <?php echo $row['melon'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/orange.png" class="responsive"> </td>
                           <td> <label> Orange</label></td>
                           <td> <?php echo $row['orange'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/peach.png" class="responsive"> </td>
                           <td> <label> Peach</label></td>
                           <td> <?php echo $row['peach'] ?> </td>
                        </tr>
                        <tr> 
                           <td><img src="../img/fruit/pear.png" class="responsive"> </td>
                           <td> <label> Pear</label></td>
                           <td> <?php echo $row['pear'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/pineapple.png" class="responsive"> </td>
                           <td> <label> Pineapple</label></td>
                           <td> <?php echo $row['pineapple'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/plum.png" class="responsive"> </td>
                           <td> <label> Plum</label></td>
                           <td> <?php echo $row['plum'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/raspberry.png" class="responsive"> </td>
                           <td> <label> Raspberry</label></td>
                           <td> <?php echo $row['raspberry'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/strawberry.png" class="responsive"> </td>
                           <td> <label>Strawberry </label></td>
                           <td> <?php echo $row['strawberry'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/tangerine.png" class="responsive"> </td>
                           <td> <label> Tangerine</label></td>
                           <td> <?php echo $row['tangerine'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/watermelon.png" class="responsive"> </td>
                           <td> <label> Watermelon</label></td>
                           <td> <?php echo $row['watermelon'] ?> </td>
                        </tr>                
                     </tbody>
                  </table>
               </div>
               <div class="col-sm-2">
                  <h3 class="text-center">New Market <hr> </h3>                
                  <table class="table">
                     <thead>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                     </thead>
                      <tbody align="center">
                        <?php $row = mysqli_fetch_assoc($result3) ?>                
                        <tr>
                           <td><img src="../img/fruit/apple.png" class="responsive"> </td>
                           <td><label>Apple</label>  </td>
                           <td><?php echo $row['apple'] ?> </td>                     
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/apricot.png" class="responsive"> </td>
                           <td> <label> Apricot </label></td>
                           <td><?php echo $row['apricot'] ?> </td>                     
                        </tr> 
                        <tr>
                           <td><img src="../img/fruit/banana.png" class="responsive"> </td>
                           <td> <label> Banana</label></td>
                           <td> <?php echo $row['banana'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/cherries.png" class="responsive"> </td>
                           <td> <label> Cherries</label></td>
                           <td> <?php echo $row['cherries'] ?> </td>
                        </tr> 
                        <tr>
                           <td><img src="../img/fruit/coconut.png" class="responsive"> </td>
                           <td> <label>Coconut </label></td>
                           <td> <?php echo $row['coconut'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/grape.png" class="responsive"> </td>
                           <td> <label> Grape</label></td>
                           <td> <?php echo $row['grape'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/icon.png" class="responsive"> </td>
                           <td> <label>Icon </label></td>
                           <td> <?php echo $row['icon'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/lemon.png" class="responsive"> </td>
                           <td> <label> Lemon</label></td>
                           <td> <?php echo $row['lemon'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/lychee.png" class="responsive"> </td>
                           <td> <label> Lychee</label></td>
                           <td> <?php echo $row['lychee'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/mango.png" class="responsive"> </td>
                           <td> <label> Mango</label></td>
                           <td> <?php echo $row['mango'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/melon.png" class="responsive"> </td>
                           <td> <label>Melon </label></td>
                           <td> <?php echo $row['melon'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/orange.png" class="responsive"> </td>
                           <td> <label> Orange</label></td>
                           <td> <?php echo $row['orange'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/peach.png" class="responsive"> </td>
                           <td> <label> Peach</label></td>
                           <td> <?php echo $row['peach'] ?> </td>
                        </tr>
                        <tr> 
                           <td><img src="../img/fruit/pear.png" class="responsive"> </td>
                           <td> <label> Pear</label></td>
                           <td> <?php echo $row['pear'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/pineapple.png" class="responsive"> </td>
                           <td> <label> Pineapple</label></td>
                           <td> <?php echo $row['pineapple'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/plum.png" class="responsive"> </td>
                           <td> <label> Plum</label></td>
                           <td> <?php echo $row['plum'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/raspberry.png" class="responsive"> </td>
                           <td> <label> Raspberry</label></td>
                           <td> <?php echo $row['raspberry'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/strawberry.png" class="responsive"> </td>
                           <td> <label>Strawberry </label></td>
                           <td> <?php echo $row['strawberry'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/tangerine.png" class="responsive"> </td>
                           <td> <label> Tangerine</label></td>
                           <td> <?php echo $row['tangerine'] ?> </td>
                        </tr>
                        <tr>
                           <td><img src="../img/fruit/watermelon.png" class="responsive"> </td>
                           <td> <label> Watermelon</label></td>
                           <td> <?php echo $row['watermelon'] ?> </td>
                        </tr>                
                     </tbody>
                  </table>
               </div>
            <?php } ?>                  
         </div>

      <?php } elseif (isset($_POST['graph'])) { 
         if (isset($_POST['product'])) { ?>

            <?php
               $productName=$_POST['product']=$_POST['product'];

               $sql="select * from product_name where product='$productName'";     
               $result=mysqli_query($conn,$sql);
               $rowcount=mysqli_num_rows($result);
               
               if ($rowcount==1) {
                  // Agrabad Market
                  $query = "SELECT * FROM agrabad";
                  $result = mysqli_query($conn, $query);
                  $chart_data = '';
                  while($row = mysqli_fetch_array($result)){
                     $chart_data .= "{ AgrabadDate:'".$row["date"]."', AgrabadProduct:".$row[$productName]."}, ";
                  }
                  $chart_data = substr($chart_data, 0, -2);

                  // Gec Market
                  $query = "SELECT * FROM gec";
                  $result = mysqli_query($conn, $query);
                  $chart_data2 = '';
                  while($row = mysqli_fetch_array($result)){
                     $chart_data2 .= "{ GecDate:'".$row["date"]."', GecProduct:".$row[$productName]."}, ";
                  }
                  $chart_data2 = substr($chart_data2, 0, -2);

                  // New Market
                  $query = "SELECT * FROM new_market";
                  $result = mysqli_query($conn, $query);
                  $chart_data3 = '';
                  while($row = mysqli_fetch_array($result)){
                     $chart_data3 .= "{ New_marketDate:'".$row["date"]."', New_marketProduct:".$row[$productName]."}, ";
                  }
                  $chart_data3 = substr($chart_data3, 0, -2);

            ?>
               <!DOCTYPE html>
                  <html>
                     <head>
                       <link rel="stylesheet" href="./css/chartCss/morris.css">
                       <script src="../css/chartCss/jquery.min.js"></script>
                       <script src="../css/chartCss/raphael-min.js"></script>
                       <script src="../css/chartCss/morris.min.js"></script>                 
                     </head>

                     <body>   
                        <div class="container" style="width:auto; margin-top: 10px; background-color: #002;">
                           <h2 align="center">Market : Agrabad &nbsp;  Product : <?= $productName ?> </h2>
                           <br/>
                           <div id="chart"></div>
                        </div>

                        <div class="container" style="width:auto; margin-top: 10px; background-color: #003 ;">
                           <h2 align="center">Market : Gec &nbsp;  Product : <?= $productName ?> </h2>
                           <br/>
                           <div id="chart2"></div>
                        </div>

                        <div class="container" style="width:auto; margin-top: 10px; background-color: #005;">
                           <h2 align="center">Market : New Market &nbsp;  Product : <?= $productName ?> </h2>
                           <br/>
                           <div id="chart3"></div>
                        </div>

                     </body>

                     <script>
                        Morris.Line({
                           element : 'chart',
                           data:[<?php echo $chart_data; ?>],
                           xkey:'AgrabadDate',
                           ykeys:['AgrabadProduct'],
                           labels:[ '<?=$productName; ?>'],
                           hideHover:'auto',
                           stacked:true
                        });
                     </script>
                      <script>
                        Morris.Line({
                           element : 'chart2',
                           data:[<?php echo $chart_data2; ?>],
                           xkey:'GecDate',
                           ykeys:['GecProduct'],
                           labels:[ '<?=$productName; ?>'],
                           hideHover:'auto',
                           stacked:true
                        });
                     </script>
                      <script>
                        Morris.Line({
                           element : 'chart3',
                           data:[<?php echo $chart_data3; ?>],
                           xkey:'New_marketDate',
                           ykeys:['New_marketProduct'],
                           labels:[ '<?=$productName; ?>'],
                           hideHover:'auto',
                           stacked:true
                        });
                     </script>
                  </html>

               <?php }else{
                  $sms="Sorry! </br>
                        Product Not Found.";    
                  ?>        
                  <div class="text-center" style="color: #fff; font-size: 35px; background-color: green; border: 3px solid blue;">
                     <?=$sms; ?> 
                  </div>
               <?php } ?> 
            <?php } ?>  
         <?php } ?>  
      <div align="center" class="footerButton">  
         <a href="userAccount.php" style="padding:10px 50px;" class="btn btn-filled btn-info">Back</a>
      </div>
   </div>

<?php unset($_SESSION['advanceDate']); ?>
<?php include('../include/footer.php'); ?>