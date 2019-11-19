<?php include('../include/connection.php'); ?>
<?php session_start(); ?>

<?php	
	$conn=connectDB();
	if(isset($_SESSION['userName'])){
		$userId=$_SESSION['userName'];
		$rand=rand(11,99);
		$image='profilePicture/user/' .$rand. $_FILES['image']['name']; //for show the profile picture the path...
		$upload='../profilePicture/user/' .$rand. $_FILES['image']['name']; //for insert the location picture from this path EX: profilePicture.php...
		move_uploaded_file($_FILES['image']['tmp_name'],$upload);

		$sql="select * from user where userId='$userId'";
	  		$result=mysqli_query($conn,$sql);

			$thisUser=mysqli_fetch_assoc($result);
	     	$id=  $thisUser['id'];

		$sql2="update user set image='$image' where id='$id' ";
		$result=mysqli_query($conn,$sql2);

		if($result)	{
			$_SESSION['accountUpdateSuccessfully']=1;
			header("Location: ../user/userAccount.php");
		} else {
			echo "something is wrong;";
				
		}
	}	

	if(isset($_SESSION['adminName'])){
		$adminName=$_SESSION['adminName'];
		$rand=rand(11,99);
		$image='profilePicture/admin/' .$rand. $_FILES['image']['name']; //for show the profile picture the path...
		$upload='../profilePicture/admin/' .$rand. $_FILES['image']['name']; //for insert the location picture from this path EX: profilePicture.php...
		move_uploaded_file($_FILES['image']['tmp_name'],$upload);

		$sql="select * from admin where adminId='$adminName'";
	  		$result=mysqli_query($conn,$sql);

			$thisAdmin=mysqli_fetch_assoc($result);
	     echo	$id=  $thisAdmin['id'];

		$sql2="update admin set image='$image' where id='$id' ";
		$result=mysqli_query($conn,$sql2);

		if($result)	{
			$_SESSION['accountUpdateSuccessfully']=1;
			header("Location: ../admin/adminAccount.php");
		} else {
			echo "something is wrong;";		
			}
		}

?>