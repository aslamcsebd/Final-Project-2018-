<?php include('../include/connection.php'); ?>
 
<?php
	session_start();
	$conn 			= connectDB();

  	if(isset($_GET['id'])){
  	 /*come hear from index.php age*/
  	$id=$_GET['id'];	
	$sql="delete from user_wish where id=$id";
	$result=mysqli_query($conn,$sql);

		if($result){
			
			$_SESSION['itemDeleteSuccessfully']=1;
			header("Location: userNewChose.php");
		}}

	if(isset($_GET['approve'])){
		$id=$_GET['approve'];
		$sql="delete from user_wish where id=$id";
		$result=mysqli_query($conn,$sql);
		
		$_SESSION['approveAccept']=1;
		header("Location: userNewChose.php");
	}

?>  