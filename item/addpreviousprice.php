<?php 
      include('include/connection.php');
      $conn          = connectDB();

      date_default_timezone_set("Asia/Dhaka");
      $today= date("Y-m-d");   

      /*
         $previousDay=date('Y-m-d', strtotime('-1 day')); 
         $nextDay=date('Y-m-d', strtotime('+1 day'));

      */  

       //For agrabad market

      $sql="select * from agrabad where date='$today'";
      $result=mysqli_query($conn,$sql);

      $rowcount=mysqli_num_rows($result);

      if ($rowcount) {
      }else{

         $sql="select * from agrabad ORDER BY date DESC LIMIT 1";

         $result=mysqli_query($conn,$sql);

         $allData=mysqli_fetch_row($result); //it must be 'row' not 'assoc'

         $lastUpdate= $allData[1]; //Example: 01/12/2018 get data
         $lastUpdateNextDay = date ("Y-m-d", strtotime("+1 day", strtotime($lastUpdate))); 
         //Ex: set data: 02/12/2018 to now, so add 1 day



         $sql="select * from agrabad where date='$lastUpdate'";
         $result=mysqli_query($conn,$sql);

         $allPrice=mysqli_fetch_assoc($result);     

            while (strtotime($lastUpdateNextDay) <= strtotime($today)) {

               $systemInsert="insert into agrabad values (null,
                                                '$lastUpdateNextDay',
                                                '$allPrice[apple]',
                                                '$allPrice[apricot]',
                                                '$allPrice[banana]',
                                                '$allPrice[cherries]', 
                                                '$allPrice[coconut]',
                                                '$allPrice[grape]',
                                                '$allPrice[icon]',
                                                '$allPrice[lemon]', 
                                                '$allPrice[lychee]',   
                                                '$allPrice[mango]',
                                                '$allPrice[melon]',
                                                '$allPrice[orange]',   
                                                '$allPrice[peach]',
                                                '$allPrice[pear]',
                                                '$allPrice[pineapple]',   
                                                '$allPrice[plum]',
                                                '$allPrice[raspberry]',   
                                                '$allPrice[strawberry]',  
                                                '$allPrice[tangerine]', 
                                                '$allPrice[watermelon]')";
               $result=mysqli_query($conn,$systemInsert);

               $lastUpdateNextDay = date ("Y-m-d", strtotime("+1 day", strtotime($lastUpdateNextDay)));
            } 
      }


       //For GEC market

      $sql="select * from gec where date='$today'";
      $result=mysqli_query($conn,$sql);

      $rowcount=mysqli_num_rows($result);

      if ($rowcount) {
      }else{

         $sql="select * from gec ORDER BY date DESC LIMIT 1";

         $result=mysqli_query($conn,$sql);

         $allData=mysqli_fetch_row($result); //it must be 'row' not 'assoc'

         $lastUpdate= $allData[1]; //Example: 01/12/2018 get data
         $lastUpdateNextDay = date ("Y-m-d", strtotime("+1 day", strtotime($lastUpdate))); 
         //Ex: set data: 02/12/2018 to now, so add 1 day



         $sql="select * from gec where date='$lastUpdate'";
         $result=mysqli_query($conn,$sql);

         $allPrice=mysqli_fetch_assoc($result);     

            while (strtotime($lastUpdateNextDay) <= strtotime($today)) {

               $systemInsert="insert into gec values (null,
                                                '$lastUpdateNextDay',
                                                '$allPrice[apple]',
                                                '$allPrice[apricot]',
                                                '$allPrice[banana]',
                                                '$allPrice[cherries]', 
                                                '$allPrice[coconut]',
                                                '$allPrice[grape]',
                                                '$allPrice[icon]',
                                                '$allPrice[lemon]', 
                                                '$allPrice[lychee]',   
                                                '$allPrice[mango]',
                                                '$allPrice[melon]',
                                                '$allPrice[orange]',   
                                                '$allPrice[peach]',
                                                '$allPrice[pear]',
                                                '$allPrice[pineapple]',   
                                                '$allPrice[plum]',
                                                '$allPrice[raspberry]',   
                                                '$allPrice[strawberry]',  
                                                '$allPrice[tangerine]', 
                                                '$allPrice[watermelon]')";
               $result=mysqli_query($conn,$systemInsert);

               $lastUpdateNextDay = date ("Y-m-d", strtotime("+1 day", strtotime($lastUpdateNextDay)));
            } 
      }


   
      //For new_market market

      $sql="select * from new_market where date='$today'";
      $result=mysqli_query($conn,$sql);

      $rowcount=mysqli_num_rows($result);

      if ($rowcount) {
      }else{

         $sql="select * from new_market ORDER BY date DESC LIMIT 1";

         $result=mysqli_query($conn,$sql);

         $allData=mysqli_fetch_row($result); //it must be 'row' not 'assoc'

         $lastUpdate= $allData[1]; //Example: 01/12/2018 get data
         $lastUpdateNextDay = date ("Y-m-d", strtotime("+1 day", strtotime($lastUpdate))); 
         //Ex: set data: 02/12/2018 to now, so add 1 day



         $sql="select * from new_market where date='$lastUpdate'";
         $result=mysqli_query($conn,$sql);

         $allPrice=mysqli_fetch_assoc($result);     

            while (strtotime($lastUpdateNextDay) <= strtotime($today)) {

               $systemInsert="insert into new_market values (null,
                                                '$lastUpdateNextDay',
                                                '$allPrice[apple]',
                                                '$allPrice[apricot]',
                                                '$allPrice[banana]',
                                                '$allPrice[cherries]', 
                                                '$allPrice[coconut]',
                                                '$allPrice[grape]',
                                                '$allPrice[icon]',
                                                '$allPrice[lemon]', 
                                                '$allPrice[lychee]',   
                                                '$allPrice[mango]',
                                                '$allPrice[melon]',
                                                '$allPrice[orange]',   
                                                '$allPrice[peach]',
                                                '$allPrice[pear]',
                                                '$allPrice[pineapple]',   
                                                '$allPrice[plum]',
                                                '$allPrice[raspberry]',   
                                                '$allPrice[strawberry]',  
                                                '$allPrice[tangerine]', 
                                                '$allPrice[watermelon]')";
               $result=mysqli_query($conn,$systemInsert);

               $lastUpdateNextDay = date ("Y-m-d", strtotime("+1 day", strtotime($lastUpdateNextDay)));
            } 
      }


?>