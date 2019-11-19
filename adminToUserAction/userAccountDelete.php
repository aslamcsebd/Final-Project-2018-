<?php include('../include/connection.php'); ?>
 
<?php
	session_start();
	$conn 			= connectDB();
	$user_market	= user_market();
	$user_purchase = user_purchase();
	$user_wishlist	= user_wishlist();	

  	$id= $_GET['id']; /*come hear from index.php age*/

  	$sql="select * from user where id=$id";
  	$result=mysqli_query($conn,$sql);

		$thisUser=mysqli_fetch_assoc($result);
     	$id2=  $thisUser['id'].'_';
       	$name=  $thisUser['userId'];
       	$userName=$id2.$name;
	
	$sql="delete from user where id=$id";
	$result=mysqli_query($conn,$sql);

		if($result){
			
			$_SESSION['accountDeleteSuccessfully']=1;
			header("Location: userList.php");
		}

	$sql = "DROP TABLE $userName";        
   $result=mysqli_query($user_market, $sql);

   $sql = "DROP TABLE $userName";        
   $result=mysqli_query($user_purchase, $sql);

   $sql = "DROP TABLE $userName";        
   $result=mysqli_query($user_wishlist, $sql);
?>  