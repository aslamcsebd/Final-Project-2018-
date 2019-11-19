<?php include('../include/connection.php'); ?>
<?php
	session_start();
	if(!isset($_SESSION['adminLogin'])){
	      header("location: ../index.php");
	  }
?>

<?php
	$conn=connectDB();

	$market=$_POST['market'];

	$date=$_POST['date'];

	$apple=$_POST['apple'];
	$apricot=$_POST['apricot'];
	$banana=$_POST['banana'];
	$cherries=$_POST['cherries'];
	$coconut=$_POST['coconut'];
	$grape=$_POST['grape'];
	$icon=$_POST['icon'];
	$lemon=$_POST['lemon'];
	$lychee=$_POST['lychee'];
	$mango=$_POST['mango'];
	$melon=$_POST['melon'];
	$orange=$_POST['orange'];
	$peach=$_POST['peach'];
	$pear=$_POST['pear'];
	$pineapple=$_POST['pineapple'];
	$plum=$_POST['plum'];
	$raspberry=$_POST['raspberry'];
	$strawberry=$_POST['strawberry'];
	$tangerine=$_POST['tangerine'];
	$watermelon=$_POST['watermelon'];

	$sql="select * from $market where date='$date'";
    $result=mysqli_query($conn,$sql);  
    $rowcount=mysqli_num_rows($result);

    if ($rowcount) {
       $sql="update $market set
							apple 		='$apple',
							apricot 	='$apricot',
							banana 		='$banana',
							cherries 	='$cherries',
							coconut 	='$coconut',
							grape 		='$grape',
							icon 		='$icon',
							lemon 		='$lemon',
							lychee 		='$lychee',
							mango 		='$mango',
							melon 		='$melon',
							orange 		='$orange',
							peach 		='$peach',
							pear 		='$pear',
							pineapple 	='$pineapple',
							plum 		='$plum',
							raspberry 	='$raspberry',
							strawberry 	='$strawberry',
							tangerine 	='$tangerine',
							watermelon 	='$watermelon' 
							where date='$date'"; 
		$result=mysqli_query($conn,$sql);

		if ($market=='agrabad'){
			if ($result) {
					$addPrice 	= '<script type="text/javascript">
										alert("Success! Agrabad,s item price add successfully");
								</script>';
				}else{
					$addPrice = '<script type="text/javascript">
										alert("Alert! Agrabad,s item price don,t added successfully");
								</script>';
			}
		}

		if ($market=='gec'){

			if ($result) {

					$addPrice 	= '<script type="text/javascript">
										alert("Success! Gec,s item price add successfully");
										</script>';
				}else{
					$addPrice = '<script type="text/javascript">
										alert("Alert! Gec,s item price don,t added successfully");
									</script>';
			}
		}

		if ($market=='new_market'){

			if ($result) {

					$addPrice 	= '<script type="text/javascript">
										alert("Success! New market,s item price add successfully");
										</script>';
				}else{
					$addPrice = '<script type="text/javascript">
										alert("Alert! New market,s item price don,t added successfully");
									</script>';
			}
		}


   }else{

		$sql="insert into $market values(
									null,
									'$date',
									'$apple',
									'$apricot',
									'$banana',
									'$cherries',
									'$coconut',
									'$grape',
									'$icon',
									'$lemon',
									'$lychee',
									'$mango',
									'$melon',
									'$orange',
									'$peach',
									'$pear',
									'$pineapple',
									'$plum',
									'$raspberry',
									'$strawberry',
									'$tangerine',
									'$watermelon' )";
		$result2=mysqli_query($conn,$sql);
		if ($market=='agrabad'){

			if ($result2) {

					$addPrice 	= '<script type="text/javascript">
										alert("Success! Agrabad,s item price add successfully");
										</script>';
				}else{
					$addPrice = '<script type="text/javascript">
										alert("Alert! Agrabad,s item price don,t added successfully");
									</script>';
			}
		}

		if ($market=='gec'){

			if ($result2) {

					$addPrice 	= '<script type="text/javascript">
										alert("Success! Gec,s item price add successfully");
										</script>';
				}else{
					$addPrice = '<script type="text/javascript">
										alert("Alert! Gec,s item price don,t added successfully");
									</script>';
			}
		}

		if ($market=='new_market'){

			if ($result2) {

					$addPrice 	= '<script type="text/javascript">
										alert("Success! New market,s item price add successfully");
										</script>';
				}else{
					$addPrice = '<script type="text/javascript">
										alert("Alert! New market,s item price don,t added successfully");
									</script>';
			}
		}			
	}
        

	echo $_SESSION['addPrice']=$addPrice;
	header("Location: addItem.php");
		
?>
<?php include('../include/footer.php'); ?>