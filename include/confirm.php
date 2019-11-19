<?php include('connection.php'); ?>

<?php
if(!isset($_SESSION['login']) || !isset($_SESSION['adminLogin'])){
      header("location: ../index.php");
  }

  ?>


<!--User Login-->
<?php

$userName=$_POST['userName'];
$userPassword=$_POST['userPassword'];
$userAge=$_POST['userAge'];
$userAdress=$_POST['userAdress'];
$userContack=$_POST['userContack'];

	$sqlForInsert="insert into user values(null,'$userName','$userPassword','$userAge','$userAdress','$userContack')";
	$result=mysqli_query($conn,$sqlForInsert);
	if($result){
		echo "Congralatude member";
		header("Location: ../user/userLogin.php");

	}


	$sqlForLogin="select * from user where name='$userName' AND password='$userPassword' ";
	$result2=mysqli_query($conn,$sqlForLogin);

	$rowcount=mysqli_num_rows($result2);

	if($rowcount) {
	header("Location: ../user/userAccount.php?name=<?php echo $userName ?>");
	}

?>