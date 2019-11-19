<?php include('../include/connection.php');?>
<?php 
   session_start();
   $conn=connectDB();
   $userId=$_POST['userId'];
   $userPassword=$_POST['userPassword'];
  

   $sql="select * from user where userId='$userId' AND password='$userPassword' ";

   $result=mysqli_query($conn,$sql);

   if ($result) {
      $thisUser=mysqli_fetch_assoc($result);

      $id=  $thisUser['id'].'_';
      $userId=  $thisUser['userId'];
      $userId_Name=$id.$userId;

      $_SESSION['user_info']=$userId_Name;

      $rowcount=mysqli_num_rows($result);  

      if($rowcount) {
         $_SESSION['userName']=$userId;
         $_SESSION['userLogin']=true;

         header("Location: userAccount.php?name=".$name);

      }else{
         $_SESSION['userLoginError']=true;
         header("Location: userLogin.php");
      }
   }
   else{
      echo "result error";
   }
?>