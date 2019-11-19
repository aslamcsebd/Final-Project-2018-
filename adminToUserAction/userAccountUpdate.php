<?php include('../include/connection.php'); ?>
<?php session_start(); ?>

<?php
	$id=$_GET['id'];

	$userId=$_POST['userId'];
	$userPassword=$_POST['userPassword'];
	$userGender=$_POST['userGender'];
	$userAge=$_POST['userAge'];
	$userAddress=$_POST['userAddress'];
	$userContact=$_POST['userContact'];
?>

<?php 
	$conn=connectDB();
	$sql="update user set userId='$userId',password='$userPassword',gender='$userGender',age='$userAge',address='$userAddress',contact='$userContact' where id=$id";

	$result=mysqli_query($conn,$sql);

	if($result)	{
		$_SESSION['accountUpdateSuccessfully']=1;
		header("Location: userCompleteView.php?id=".$id);
	} else {
			
	}	
?>


