<?php include('../include/connection.php'); ?>
<?php
	session_start();

    $conn=connectDB();
    $user_market=user_market();
    $user_purchase=user_purchase();
    $user_wishlist=user_wishlist();

	$fullName=$_POST['fullName'];
	$userId=$_POST['userId'];
	$userPassword=$_POST['userPassword'];
	$userGender=$_POST['userGender'];
	$userAge=$_POST['userAge'];
	$userAddress=$_POST['userAddress'];
	$userContact=$_POST['userContact'];

	$userInsert="insert into user (id,fullName,userId,password,gender,age,address,contact) values (null,'$fullName','$userId','$userPassword','$userGender','$userAge','$userAddress','$userContact')";
	$result=mysqli_query($conn,$userInsert);
    

	if($result){
        
		$sql2="select * from user where userId='$userId' AND password='$userPassword' ";
  		$result2=mysqli_query($conn,$sql2);

		$thisUser=mysqli_fetch_assoc($result2);
     	$id=  $thisUser['id'].'_';
       	$name=  $thisUser['userId'];
       	$userId=$id.$name;

       	//user_market connection...
       	
       	// $result3=mysqli_select_db($conn,"user_market");
		$result3=mysqli_select_db($user_market,"epiz_22969359_user_market");
		if ($result3) {
			$sql3="CREATE TABLE $userId (
			id int NOT NULL AUTO_INCREMENT,
			date date NOT NULL,
			apple varchar(20),
			apricot varchar(20),
			banana varchar(20),
			cherries varchar(20),
			coconut varchar(20),
			grape varchar(20),
			icon varchar(20),
			lemon varchar(20),
			lychee varchar(20),
			mango varchar(20),
			melon varchar(20),
			orange varchar(20),
			peach varchar(20),
			pear varchar(20),
			pineapple varchar(20),
			plum varchar(20),
			raspberry varchar(20),
			strawberry varchar(20),
			tangerine varchar(20),
			watermelon varchar(20),
			other varchar(20),
			PRIMARY KEY(id)			
		)";						
	
			if(mysqli_query($user_market,$sql3)){
				echo "Successfully 'user_market' table created<br>";
			}else{
				echo "Oh! Doesn't 'user_market' table created<br>";
			}		
		}else{
			echo "Doesn't connection 'user_market' database";
		}		


       	//user_purchase connection...
       	
       	$result4=mysqli_select_db($user_purchase,"epiz_22969359_user_purchase");

		if ($result4) {
			$sql4="CREATE TABLE $userId (
			id int NOT NULL AUTO_INCREMENT,
			date date NOT NULL,
			apple int (20),
			apricot int(20),
			banana int(20),
			cherries int(20),
			coconut int(20),
			grape int(20),
			icon int(20),
			lemon int(20),
			lychee int(20),
			mango int(20),
			melon int(20),
			orange int(20),
			peach int(20),
			pear int(20),
			pineapple int(20),
			plum int(20),
			raspberry int(20),
			strawberry int(20),
			tangerine int(20),
			watermelon int(20),
			other int(20),
			total int(20),
			PRIMARY KEY(id)			
		)";						
	
			if(mysqli_query($user_purchase,$sql4)){
				echo "Successfully 'user_purchase' table created<br>";
			}else{
				echo "Oh! Doesn't 'user_purchase' table created<br>";
			}		
		}else{
			echo "Doesn't connection 'user_purchase' database";
		}		
		
		//user_wishlist connection...
       
       	$result5=mysqli_select_db($user_wishlist,"epiz_22969359_user_wishlist");
		
		if ($result5) {
			
			$sql5="CREATE TABLE $userId (
			id int NOT NULL AUTO_INCREMENT,
			fruitName varchar(20),
			fruitCheck varchar(20),
			PRIMARY KEY(id)
			)";

			if(mysqli_query($user_wishlist,$sql5)){
				//insert data	

				$sql6="INSERT INTO $userId (`id`, `fruitName`, `fruitCheck`) VALUES
							(1, '', 'apple'),
							(2, '', 'apricot'),
							(3, ' ', 'banana'),
							(4, ' ', 'cherries'),
							(5, ' ', 'coconut'),
							(6, ' ', 'grape'),
							(7, ' ', 'icon'),
							(8, ' ', 'lemon'),
							(9, ' ', 'lychee'),
							(10, ' ', 'mango'),
							(11, ' ', 'melon'),
							(12, ' ', 'orange'),
							(13, ' ', 'peach'),
							(14, ' ', 'pear'),
							(15, ' ', 'pineapple'),
							(16, ' ', 'plum'),
							(17, ' ', 'raspberry'),
							(18, ' ', 'strawberry'),
							(19, ' ', 'tangerine'),
							(20, ' ', 'watermelon')						
						";

					if(mysqli_query($user_wishlist,$sql6)){
						echo "Successfully data insert<br>";
					}

			}else{
				echo "Oh! Doesn't 'user_wishlist' table created<br>";
			}
		
		}else{
			echo "Doesn't connection 'user_wishlist' database<br>";
		}


		//By admin create account
		if(isset($_SESSION['adminLogin'])){
			$_SESSION['accountCreateSuccessfully']=true;
     		header("location: ../adminToUserAction/userList.php");
		
		}else{	
			$_SESSION['newAccountCreateSuccessfully']=true;
			header("Location:userLogin.php");
		}
	
	}else{
		header("Location:createAccount.php");
	}
?>