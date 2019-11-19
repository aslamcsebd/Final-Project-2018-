<?php include('../include/connection.php'); ?>

<!--Admin Login-->

<?php
	session_start();

	$adminId=$_POST['adminId'];
	$adminPassword=$_POST['adminPassword'];

	$conn=connectDB();
	$sql="select * from admin where adminId='$adminId' AND password='$adminPassword' ";
	$result=mysqli_query($conn,$sql);

	$allAdmin=mysqli_fetch_assoc($result); 
	$adminName=  $allAdmin['adminId']; 

	$rowcount=mysqli_num_rows($result);

	$_SESSION['adminLogin']=true;
	$_SESSION['adminName']=$adminName;

	
	if($rowcount) {	
		header("Location: adminAccount.php?adminName=".$adminName);
	}else{

			$_SESSION['adminLoginError']=true;
      	header("Location: adminLogin.php");
        }
?>