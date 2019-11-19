<?php
   function connectDB() {
      
   $todayAllCost=0;
   $sql=" select * from $userName where date='$date' ";      
   $result=mysqli_query($user_purchase,$sql); 
   $rowPurchase = mysqli_fetch_assoc($result);

      $sql ="SHOW COLUMNS FROM $userName";
      $result = mysqli_query($user_purchase,$sql);
         while($row = mysqli_fetch_assoc($result)){
            $row['Field']."<br>";  
            $rowPurchase[$row['Field']];
               if ($row['Field']!='id' && $row['Field']!='date' && $row['Field']!='total') {
                 $todayAllCost=$todayAllCost  + $rowPurchase[$row['Field']] ;        
               }                           
         }                   
         return $todayAllCost;  
      }

?>