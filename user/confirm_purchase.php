9<?php
	include('../include/connection.php'); 
	include('../include/header.php');
?>

<?php
	session_start();
		if(!isset($_SESSION['userLogin'])){
		      header("location: ../index.php");
		}
?>

<?php
	$user_purchase 	= user_purchase();
	$user_market	= user_market();
	$conn 			= connectDB();

	date_default_timezone_set("Asia/Dhaka");
  	$date= date("Y-m-d");
	$userName=$_SESSION['user_info'];	
 	$market=$_POST['market'];

 		//Search for date from User purchese...

	 	$sql=" select * from $userName where date='$date' "; 	  	
	  	$result=mysqli_query($user_purchase,$sql);
			if($result) {
		  		$rowcount=mysqli_num_rows($result);
			  		if ($rowcount==1) {
			  			echo "<h1>We find today purchese</h1>";		
			  		}else{
			  			$sql2=" insert into $userName (date) values ('$date') ";
			  			$result2=mysqli_query($user_purchase,$sql2);
				  			if ($result2) {
				  				$sql3=" select * from $userName where date='$date' "; 	  	
		  						$result3=mysqli_query($user_purchase,$sql3);
									if ($result3) {
										$rowcount=mysqli_num_rows($result3);
											if ($rowcount==1) {
												echo "<h1>We insert today purchese</h1>";
											}
									}
							}
					}
			}

		//Search for date from User market	

		$sql=" select * from $userName where date='$date' "; 	  	
	  	$result=mysqli_query($user_market,$sql);
			if($result) {
		  		$rowcount=mysqli_num_rows($result);
			  		if ($rowcount==1) {
			  			echo "<h1>We find today market</h1>";		
			  		}else{
			  			$sql2=" insert into $userName (date) values ('$date') ";
			  			$result2=mysqli_query($user_market,$sql2);
				  			if ($result2) {
				  				$sql3=" select * from $userName where date='$date' "; 	  	
		  						$result3=mysqli_query($user_market,$sql3);
									if ($result3) {
										$rowcount=mysqli_num_rows($result3);
											if ($rowcount==1) {
												echo "<h1>We insert today market</h1>";
											}
									}
							}
					}
			}						

		$sql	=" select * from $userName where date='$date' "; 	  	
		$result=mysqli_query($user_purchase,$sql);
			if($result) {
		  		$todayPurchase 		=	mysqli_fetch_assoc($result);
		  		$todayPurchaseId	=	$todayPurchase['id'];		  		
		  		$todayPurchaseDate	=	$todayPurchase['date'];		  		
	  		}

	  	$sql2	=" select * from $userName where date='$date' "; 	  	
		$result2=mysqli_query($user_market,$sql2);
			if($result2) {
		  		$todayMarket 		=	mysqli_fetch_assoc($result2);
		  		$todayMarketId		=	$todayMarket['id'];		  		
		  		$todayMarketDate	=	$todayMarket['date'];		  		
	  		}

	  		if ($date==$todayPurchaseDate) {  

		 		if ($market=='agrabad') {

		 			if(isset($_POST['appleAdd'])) {

				 		$actionApple=$_POST['actionApple'];
						$apple=$_POST['apple'];

						if ($todayPurchase['apple']==null || $todayPurchase['apple']==0) {	
							$sql 	=	"update $userName set apple='$apple' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set apple='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("apple purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['apple']+$apple;
							$sql3 	=	"update $userName set apple='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['apple'];

			  					if ($actionApple > $thisFruitPrice && $allFruitPrice['apple']!=0) {

			  						$howMuch = ($actionApple-$thisFruitPrice);
									$action= "In ". $market ." market apple's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='apple';
					}

					if(isset($_POST['apricotAdd'])) {

				 		$actionApricot=$_POST['actionApricot'];
						$apricot=$_POST['apricot'];

						if ($todayPurchase['apricot']==null || $todayPurchase['apricot']==0) {	
							$sql 	=	"update $userName set apricot='$apricot' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set apricot='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("apricot purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['apricot']+$apricot;
							$sql3 	=	"update $userName set apricot='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['apricot'];

			  					if ($actionApricot > $thisFruitPrice && $allFruitPrice['apricot']!=0) {

			  						$howMuch = ($actionApricot-$thisFruitPrice);
									$action= "In ". $market ." market apricot's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='apricot';
					}

					if(isset($_POST['bananaAdd'])) {

				 		$actionBanana=$_POST['actionBanana'];
						$banana=$_POST['banana'];

						if ($todayPurchase['banana']==null || $todayPurchase['banana']==0) {	
							$sql 	=	"update $userName set banana='$banana' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set banana='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("banana purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['banana']+$banana;
							$sql3 	=	"update $userName set banana='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['banana'];

			  					if ($actionBanana > $thisFruitPrice && $allFruitPrice['banana']!=0) {

			  						$howMuch = ($actionBanana-$thisFruitPrice);
									$action= "In ". $market ." market banana's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='banana';
					}

					if(isset($_POST['cherriesAdd'])) {

				 		$actionCherries=$_POST['actionCherries'];
						$cherries=$_POST['cherries'];

						if ($todayPurchase['cherries']==null || $todayPurchase['cherries']==0) {	
							$sql 	=	"update $userName set cherries='$cherries' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set cherries='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("cherries purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['cherries']+$cherries;
							$sql3 	=	"update $userName set cherries='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['cherries'];

			  					if ($actionCherries > $thisFruitPrice && $allFruitPrice['cherries']!=0) {

			  						$howMuch = ($actionCherries-$thisFruitPrice);
									$action= "In ". $market ." market cherries's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='cherries';
					}

					if(isset($_POST['coconutAdd'])) {

				 		$actionCoconut=$_POST['actionCoconut'];
						$coconut=$_POST['coconut'];

						if ($todayPurchase['coconut']==null || $todayPurchase['coconut']==0) {	
							$sql 	=	"update $userName set coconut='$coconut' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set coconut='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("coconut purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['coconut']+$coconut;
							$sql3 	=	"update $userName set coconut='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['coconut'];

			  					if ($actionCoconut > $thisFruitPrice && $allFruitPrice['coconut']!=0) {

			  						$howMuch = ($actionCoconut-$thisFruitPrice);
									$action= "In ". $market ." market coconut's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='coconut';
					}

					if(isset($_POST['grapeAdd'])) {

				 		$actionGrape=$_POST['actionGrape'];
						$grape=$_POST['grape'];

						if ($todayPurchase['grape']==null || $todayPurchase['grape']==0) {	
							$sql 	=	"update $userName set grape='$grape' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set grape='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("grape purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['grape']+$grape;
							$sql3 	=	"update $userName set grape='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['grape'];

			  					if ($actionGrape > $thisFruitPrice && $allFruitPrice['grape']!=0) {

			  						$howMuch = ($actionGrape-$thisFruitPrice);
									$action= "In ". $market ." market grape's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='grape';
					}

					if(isset($_POST['iconAdd'])) {

				 		$actionIcon=$_POST['actionIcon'];
						$icon=$_POST['icon'];

						if ($todayPurchase['icon']==null || $todayPurchase['icon']==0) {	
							$sql 	=	"update $userName set icon='$icon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set icon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("icon purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['icon']+$icon;
							$sql3 	=	"update $userName set icon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['icon'];

			  					if ($actionIcon > $thisFruitPrice && $allFruitPrice['icon']!=0) {

			  						$howMuch = ($actionIcon-$thisFruitPrice);
									$action= "In ". $market ." market icon's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='icon';
					}

					if(isset($_POST['lemonAdd'])) {

				 		$actionLemon=$_POST['actionLemon'];
						$lemon=$_POST['lemon'];

						if ($todayPurchase['lemon']==null || $todayPurchase['lemon']==0) {	
							$sql 	=	"update $userName set lemon='$lemon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set lemon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("lemon purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['lemon']+$lemon;
							$sql3 	=	"update $userName set lemon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['lemon'];

			  					if ($actionLemon > $thisFruitPrice && $allFruitPrice['lemon']!=0) {

			  						$howMuch = ($actionLemon-$thisFruitPrice);
									$action= "In ". $market ." market lemon's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='lemon';
					}

					if(isset($_POST['lycheeAdd'])) {

				 		$actionLychee=$_POST['actionLychee'];
						$lychee=$_POST['lychee'];

						if ($todayPurchase['lychee']==null || $todayPurchase['lychee']==0) {	
							$sql 	=	"update $userName set lychee='$lychee' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set lychee='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("lychee purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['lychee']+$lychee;
							$sql3 	=	"update $userName set lychee='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['lychee'];

			  					if ($actionLychee > $thisFruitPrice && $allFruitPrice['lychee']!=0) {

			  						$howMuch = ($actionLychee-$thisFruitPrice);
									$action= "In ". $market ." market lychee's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='lychee';
					}

					if(isset($_POST['mangoAdd'])) {

				 		$actionMango=$_POST['actionMango'];
						$mango=$_POST['mango'];

						if ($todayPurchase['mango']==null || $todayPurchase['mango']==0) {	
							$sql 	=	"update $userName set mango='$mango' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set mango='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("mango purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['mango']+$mango;
							$sql3 	=	"update $userName set mango='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['mango'];

			  					if ($actionMango > $thisFruitPrice && $allFruitPrice['mango']!=0) {

			  						$howMuch = ($actionMango-$thisFruitPrice);
									$action= "In ". $market ." market mango's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='mango';
					}

					if(isset($_POST['melonAdd'])) {

				 		$actionMelon=$_POST['actionMelon'];
						$melon=$_POST['melon'];

						if ($todayPurchase['melon']==null || $todayPurchase['melon']==0) {	
							$sql 	=	"update $userName set melon='$melon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set melon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("melon purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['melon']+$melon;
							$sql3 	=	"update $userName set melon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['melon'];

			  					if ($actionMelon > $thisFruitPrice && $allFruitPrice['melon']!=0) {

			  						$howMuch = ($actionMelon-$thisFruitPrice);
									$action= "In ". $market ." market melon's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='melon';
					}

					if(isset($_POST['orangeAdd'])) {

				 		$actionOrange=$_POST['actionOrange'];
						$orange=$_POST['orange'];

						if ($todayPurchase['orange']==null || $todayPurchase['orange']==0) {	
							$sql 	=	"update $userName set orange='$orange' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set orange='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("orange purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['orange']+$orange;
							$sql3 	=	"update $userName set orange='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['orange'];

			  					if ($actionOrange > $thisFruitPrice && $allFruitPrice['orange']!=0) {

			  						$howMuch = ($actionOrange-$thisFruitPrice);
									$action= "In ". $market ." market orange's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='orange';
					}

					if(isset($_POST['peachAdd'])) {

				 		$actionPeach=$_POST['actionPeach'];
						$peach=$_POST['peach'];

						if ($todayPurchase['peach']==null || $todayPurchase['peach']==0) {	
							$sql 	=	"update $userName set peach='$peach' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set peach='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("peach purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['peach']+$peach;
							$sql3 	=	"update $userName set peach='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['peach'];

			  					if ($actionPeach > $thisFruitPrice && $allFruitPrice['peach']!=0) {

			  						$howMuch = ($actionPeach-$thisFruitPrice);
									$action= "In ". $market ." market peach's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='peach';
					}

					if(isset($_POST['pearAdd'])) {

				 		$actionPear=$_POST['actionPear'];
						$pear=$_POST['pear'];

						if ($todayPurchase['pear']==null || $todayPurchase['pear']==0) {	
							$sql 	=	"update $userName set pear='$pear' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set pear='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("pear purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['pear']+$pear;
							$sql3 	=	"update $userName set pear='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['pear'];

			  					if ($actionPear > $thisFruitPrice && $allFruitPrice['pear']!=0) {

			  						$howMuch = ($actionPear-$thisFruitPrice);
									$action= "In ". $market ." market pear's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='pear';
					}

					if(isset($_POST['pineappleAdd'])) {

				 		$actionPineapple=$_POST['actionPineapple'];
						$pineapple=$_POST['pineapple'];

						if ($todayPurchase['pineapple']==null || $todayPurchase['pineapple']==0) {	
							$sql 	=	"update $userName set pineapple='$pineapple' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set pineapple='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("pineapple purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['pineapple']+$pineapple;
							$sql3 	=	"update $userName set pineapple='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['pineapple'];

			  					if ($actionPineapple > $thisFruitPrice && $allFruitPrice['pineapple']!=0) {

			  						$howMuch = ($actionPineapple-$thisFruitPrice);
									$action= "In ". $market ." market pineapple's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='pineapple';
					}

					if(isset($_POST['plumAdd'])) {

				 		$actionPlum=$_POST['actionPlum'];
						$plum=$_POST['plum'];

						if ($todayPurchase['plum']==null || $todayPurchase['plum']==0) {	
							$sql 	=	"update $userName set plum='$plum' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set plum='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("plum purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['plum']+$plum;
							$sql3 	=	"update $userName set plum='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['plum'];

			  					if ($actionPlum > $thisFruitPrice && $allFruitPrice['plum']!=0) {

			  						$howMuch = ($actionPlum-$thisFruitPrice);
									$action= "In ". $market ." market plum's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='plum';
					}

					if(isset($_POST['raspberryAdd'])) {

				 		$actionRaspberry=$_POST['actionRaspberry'];
						$raspberry=$_POST['raspberry'];

						if ($todayPurchase['raspberry']==null || $todayPurchase['raspberry']==0) {	
							$sql 	=	"update $userName set raspberry='$raspberry' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set raspberry='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("raspberry purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['raspberry']+$raspberry;
							$sql3 	=	"update $userName set raspberry='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['raspberry'];

			  					if ($actionRaspberry > $thisFruitPrice && $allFruitPrice['raspberry']!=0) {

			  						$howMuch = ($actionRaspberry-$thisFruitPrice);
									$action= "In ". $market ." market raspberry's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='raspberry';
					}

					if(isset($_POST['strawberryAdd'])) {

				 		$actionStrawberry=$_POST['actionStrawberry'];
						$strawberry=$_POST['strawberry'];

						if ($todayPurchase['strawberry']==null || $todayPurchase['strawberry']==0) {	
							$sql 	=	"update $userName set strawberry='$strawberry' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set strawberry='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("strawberry purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['strawberry']+$strawberry;
							$sql3 	=	"update $userName set strawberry='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['strawberry'];

			  					if ($actionStrawberry > $thisFruitPrice && $allFruitPrice['strawberry']!=0) {

			  						$howMuch = ($actionStrawberry-$thisFruitPrice);
									$action= "In ". $market ." market strawberry's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='strawberry';
					}

					if(isset($_POST['tangerineAdd'])) {

				 		$actionTangerine=$_POST['actionTangerine'];
						$tangerine=$_POST['tangerine'];

						if ($todayPurchase['tangerine']==null || $todayPurchase['tangerine']==0) {	
							$sql 	=	"update $userName set tangerine='$tangerine' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set tangerine='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("tangerine purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['tangerine']+$tangerine;
							$sql3 	=	"update $userName set tangerine='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['tangerine'];

			  					if ($actionTangerine > $thisFruitPrice && $allFruitPrice['tangerine']!=0) {

			  						$howMuch = ($actionTangerine-$thisFruitPrice);
									$action= "In ". $market ." market tangerine's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='tangerine';
					}

					if(isset($_POST['watermelonAdd'])) {

				 		$actionWatermelon=$_POST['actionWatermelon'];
						$watermelon=$_POST['watermelon'];

						if ($todayPurchase['watermelon']==null || $todayPurchase['watermelon']==0) {	
							$sql 	=	"update $userName set watermelon='$watermelon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set watermelon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("watermelon purchese complete in agrabad market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['watermelon']+$watermelon;
							$sql3 	=	"update $userName set watermelon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['watermelon'];

			  					if ($actionWatermelon > $thisFruitPrice && $allFruitPrice['watermelon']!=0) {

			  						$howMuch = ($actionWatermelon-$thisFruitPrice);
									$action= "In ". $market ." market watermelon's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='watermelon';
					}
				}

				if ($market=='gec') {

		 			if(isset($_POST['appleAdd'])) {

				 		$actionApple=$_POST['actionApple'];
						$apple=$_POST['apple'];

						if ($todayPurchase['apple']==null || $todayPurchase['apple']==0) {	
							$sql 	=	"update $userName set apple='$apple' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set apple='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("apple purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['apple']+$apple;
							$sql3 	=	"update $userName set apple='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['apple'];

			  					if ($actionApple > $thisFruitPrice && $allFruitPrice['apple']!=0) {

			  						$howMuch = ($actionApple-$thisFruitPrice);
									$action= "In ". $market ." market apple's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='apple';
					}

					if(isset($_POST['apricotAdd'])) {

				 		$actionApricot=$_POST['actionApricot'];
						$apricot=$_POST['apricot'];

						if ($todayPurchase['apricot']==null || $todayPurchase['apricot']==0) {	
							$sql 	=	"update $userName set apricot='$apricot' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set apricot='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("apricot purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['apricot']+$apricot;
							$sql3 	=	"update $userName set apricot='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['apricot'];

			  					if ($actionApricot > $thisFruitPrice && $allFruitPrice['apricot']!=0) {

			  						$howMuch = ($actionApricot-$thisFruitPrice);
									$action= "In ". $market ." market apricot's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='apricot';
					}

					if(isset($_POST['bananaAdd'])) {

				 		$actionBanana=$_POST['actionBanana'];
						$banana=$_POST['banana'];

						if ($todayPurchase['banana']==null || $todayPurchase['banana']==0) {	
							$sql 	=	"update $userName set banana='$banana' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set banana='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("banana purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['banana']+$banana;
							$sql3 	=	"update $userName set banana='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['banana'];

			  					if ($actionBanana > $thisFruitPrice && $allFruitPrice['banana']!=0) {

			  						$howMuch = ($actionBanana-$thisFruitPrice);
									$action= "In ". $market ." market banana's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='banana';
					}

					if(isset($_POST['cherriesAdd'])) {

				 		$actionCherries=$_POST['actionCherries'];
						$cherries=$_POST['cherries'];

						if ($todayPurchase['cherries']==null || $todayPurchase['cherries']==0) {	
							$sql 	=	"update $userName set cherries='$cherries' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set cherries='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("cherries purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['cherries']+$cherries;
							$sql3 	=	"update $userName set cherries='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['cherries'];

			  					if ($actionCherries > $thisFruitPrice && $allFruitPrice['cherries']!=0) {

			  						$howMuch = ($actionCherries-$thisFruitPrice);
									$action= "In ". $market ." market cherries's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='cherries';
					}

					if(isset($_POST['coconutAdd'])) {

				 		$actionCoconut=$_POST['actionCoconut'];
						$coconut=$_POST['coconut'];

						if ($todayPurchase['coconut']==null || $todayPurchase['coconut']==0) {	
							$sql 	=	"update $userName set coconut='$coconut' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set coconut='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("coconut purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['coconut']+$coconut;
							$sql3 	=	"update $userName set coconut='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['coconut'];

			  					if ($actionCoconut > $thisFruitPrice && $allFruitPrice['coconut']!=0) {

			  						$howMuch = ($actionCoconut-$thisFruitPrice);
									$action= "In ". $market ." market coconut's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='coconut';
					}

					if(isset($_POST['grapeAdd'])) {

				 		$actionGrape=$_POST['actionGrape'];
						$grape=$_POST['grape'];

						if ($todayPurchase['grape']==null || $todayPurchase['grape']==0) {	
							$sql 	=	"update $userName set grape='$grape' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set grape='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("grape purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['grape']+$grape;
							$sql3 	=	"update $userName set grape='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['grape'];

			  					if ($actionGrape > $thisFruitPrice && $allFruitPrice['grape']!=0) {

			  						$howMuch = ($actionGrape-$thisFruitPrice);
									$action= "In ". $market ." market grape's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='grape';
					}

					if(isset($_POST['iconAdd'])) {

				 		$actionIcon=$_POST['actionIcon'];
						$icon=$_POST['icon'];

						if ($todayPurchase['icon']==null || $todayPurchase['icon']==0) {	
							$sql 	=	"update $userName set icon='$icon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set icon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("icon purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['icon']+$icon;
							$sql3 	=	"update $userName set icon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['icon'];

			  					if ($actionIcon > $thisFruitPrice && $allFruitPrice['icon']!=0) {

			  						$howMuch = ($actionIcon-$thisFruitPrice);
									$action= "In ". $market ." market icon's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='icon';
					}

					if(isset($_POST['lemonAdd'])) {

				 		$actionLemon=$_POST['actionLemon'];
						$lemon=$_POST['lemon'];

						if ($todayPurchase['lemon']==null || $todayPurchase['lemon']==0) {	
							$sql 	=	"update $userName set lemon='$lemon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set lemon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("lemon purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['lemon']+$lemon;
							$sql3 	=	"update $userName set lemon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['lemon'];

			  					if ($actionLemon > $thisFruitPrice && $allFruitPrice['lemon']!=0) {

			  						$howMuch = ($actionLemon-$thisFruitPrice);
									$action= "In ". $market ." market lemon's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='lemon';
					}

					if(isset($_POST['lycheeAdd'])) {

				 		$actionLychee=$_POST['actionLychee'];
						$lychee=$_POST['lychee'];

						if ($todayPurchase['lychee']==null || $todayPurchase['lychee']==0) {	
							$sql 	=	"update $userName set lychee='$lychee' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set lychee='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("lychee purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['lychee']+$lychee;
							$sql3 	=	"update $userName set lychee='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['lychee'];

			  					if ($actionLychee > $thisFruitPrice && $allFruitPrice['lychee']!=0) {

			  						$howMuch = ($actionLychee-$thisFruitPrice);
									$action= "In ". $market ." market lychee's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='lychee';
					}

					if(isset($_POST['mangoAdd'])) {

				 		$actionMango=$_POST['actionMango'];
						$mango=$_POST['mango'];

						if ($todayPurchase['mango']==null || $todayPurchase['mango']==0) {	
							$sql 	=	"update $userName set mango='$mango' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set mango='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("mango purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['mango']+$mango;
							$sql3 	=	"update $userName set mango='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['mango'];

			  					if ($actionMango > $thisFruitPrice && $allFruitPrice['mango']!=0) {

			  						$howMuch = ($actionMango-$thisFruitPrice);
									$action= "In ". $market ." market mango's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='mango';
					}

					if(isset($_POST['melonAdd'])) {

				 		$actionMelon=$_POST['actionMelon'];
						$melon=$_POST['melon'];

						if ($todayPurchase['melon']==null || $todayPurchase['melon']==0) {	
							$sql 	=	"update $userName set melon='$melon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set melon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("melon purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['melon']+$melon;
							$sql3 	=	"update $userName set melon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['melon'];

			  					if ($actionMelon > $thisFruitPrice && $allFruitPrice['melon']!=0) {

			  						$howMuch = ($actionMelon-$thisFruitPrice);
									$action= "In ". $market ." market melon's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='melon';
					}

					if(isset($_POST['orangeAdd'])) {

				 		$actionOrange=$_POST['actionOrange'];
						$orange=$_POST['orange'];

						if ($todayPurchase['orange']==null || $todayPurchase['orange']==0) {	
							$sql 	=	"update $userName set orange='$orange' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set orange='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("orange purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['orange']+$orange;
							$sql3 	=	"update $userName set orange='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['orange'];

			  					if ($actionOrange > $thisFruitPrice && $allFruitPrice['orange']!=0) {

			  						$howMuch = ($actionOrange-$thisFruitPrice);
									$action= "In ". $market ." market orange's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='orange';
					}

					if(isset($_POST['peachAdd'])) {

				 		$actionPeach=$_POST['actionPeach'];
						$peach=$_POST['peach'];

						if ($todayPurchase['peach']==null || $todayPurchase['peach']==0) {	
							$sql 	=	"update $userName set peach='$peach' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set peach='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("peach purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['peach']+$peach;
							$sql3 	=	"update $userName set peach='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['peach'];

			  					if ($actionPeach > $thisFruitPrice && $allFruitPrice['peach']!=0) {

			  						$howMuch = ($actionPeach-$thisFruitPrice);
									$action= "In ". $market ." market peach's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='peach';
					}

					if(isset($_POST['pearAdd'])) {

				 		$actionPear=$_POST['actionPear'];
						$pear=$_POST['pear'];

						if ($todayPurchase['pear']==null || $todayPurchase['pear']==0) {	
							$sql 	=	"update $userName set pear='$pear' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set pear='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("pear purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['pear']+$pear;
							$sql3 	=	"update $userName set pear='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['pear'];

			  					if ($actionPear > $thisFruitPrice && $allFruitPrice['pear']!=0) {

			  						$howMuch = ($actionPear-$thisFruitPrice);
									$action= "In ". $market ." market pear's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='pear';
					}

					if(isset($_POST['pineappleAdd'])) {

				 		$actionPineapple=$_POST['actionPineapple'];
						$pineapple=$_POST['pineapple'];

						if ($todayPurchase['pineapple']==null || $todayPurchase['pineapple']==0) {	
							$sql 	=	"update $userName set pineapple='$pineapple' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set pineapple='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("pineapple purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['pineapple']+$pineapple;
							$sql3 	=	"update $userName set pineapple='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['pineapple'];

			  					if ($actionPineapple > $thisFruitPrice && $allFruitPrice['pineapple']!=0) {

			  						$howMuch = ($actionPineapple-$thisFruitPrice);
									$action= "In ". $market ." market pineapple's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='pineapple';
					}

					if(isset($_POST['plumAdd'])) {

				 		$actionPlum=$_POST['actionPlum'];
						$plum=$_POST['plum'];

						if ($todayPurchase['plum']==null || $todayPurchase['plum']==0) {	
							$sql 	=	"update $userName set plum='$plum' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set plum='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("plum purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['plum']+$plum;
							$sql3 	=	"update $userName set plum='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['plum'];

			  					if ($actionPlum > $thisFruitPrice && $allFruitPrice['plum']!=0) {

			  						$howMuch = ($actionPlum-$thisFruitPrice);
									$action= "In ". $market ." market plum's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='plum';
					}

					if(isset($_POST['raspberryAdd'])) {

				 		$actionRaspberry=$_POST['actionRaspberry'];
						$raspberry=$_POST['raspberry'];

						if ($todayPurchase['raspberry']==null || $todayPurchase['raspberry']==0) {	
							$sql 	=	"update $userName set raspberry='$raspberry' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set raspberry='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("raspberry purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['raspberry']+$raspberry;
							$sql3 	=	"update $userName set raspberry='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['raspberry'];

			  					if ($actionRaspberry > $thisFruitPrice && $allFruitPrice['raspberry']!=0) {

			  						$howMuch = ($actionRaspberry-$thisFruitPrice);
									$action= "In ". $market ." market raspberry's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='raspberry';
					}

					if(isset($_POST['strawberryAdd'])) {

				 		$actionStrawberry=$_POST['actionStrawberry'];
						$strawberry=$_POST['strawberry'];

						if ($todayPurchase['strawberry']==null || $todayPurchase['strawberry']==0) {	
							$sql 	=	"update $userName set strawberry='$strawberry' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set strawberry='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("strawberry purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['strawberry']+$strawberry;
							$sql3 	=	"update $userName set strawberry='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['strawberry'];

			  					if ($actionStrawberry > $thisFruitPrice && $allFruitPrice['strawberry']!=0) {

			  						$howMuch = ($actionStrawberry-$thisFruitPrice);
									$action= "In ". $market ." market strawberry's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='strawberry';
					}

					if(isset($_POST['tangerineAdd'])) {

				 		$actionTangerine=$_POST['actionTangerine'];
						$tangerine=$_POST['tangerine'];

						if ($todayPurchase['tangerine']==null || $todayPurchase['tangerine']==0) {	
							$sql 	=	"update $userName set tangerine='$tangerine' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set tangerine='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("tangerine purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['tangerine']+$tangerine;
							$sql3 	=	"update $userName set tangerine='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['tangerine'];

			  					if ($actionTangerine > $thisFruitPrice && $allFruitPrice['tangerine']!=0) {

			  						$howMuch = ($actionTangerine-$thisFruitPrice);
									$action= "In ". $market ." market tangerine's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='tangerine';
					}

					if(isset($_POST['watermelonAdd'])) {

				 		$actionWatermelon=$_POST['actionWatermelon'];
						$watermelon=$_POST['watermelon'];

						if ($todayPurchase['watermelon']==null || $todayPurchase['watermelon']==0) {	
							$sql 	=	"update $userName set watermelon='$watermelon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set watermelon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("watermelon purchese complete in gec market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['watermelon']+$watermelon;
							$sql3 	=	"update $userName set watermelon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['watermelon'];

			  					if ($actionWatermelon > $thisFruitPrice && $allFruitPrice['watermelon']!=0) {

			  						$howMuch = ($actionWatermelon-$thisFruitPrice);
									$action= "In ". $market ." market watermelon's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='watermelon';
					}
				}

				if ($market=='new_market') {

		 			if(isset($_POST['appleAdd'])) {

				 		$actionApple=$_POST['actionApple'];
						$apple=$_POST['apple'];

						if ($todayPurchase['apple']==null || $todayPurchase['apple']==0) {	
							$sql 	=	"update $userName set apple='$apple' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set apple='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("apple purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['apple']+$apple;
							$sql3 	=	"update $userName set apple='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['apple'];

			  					if ($actionApple > $thisFruitPrice && $allFruitPrice['apple']!=0) {

			  						$howMuch = ($actionApple-$thisFruitPrice);
									$action= "In ". $market ." market apple's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='apple';
					}

					if(isset($_POST['apricotAdd'])) {

				 		$actionApricot=$_POST['actionApricot'];
						$apricot=$_POST['apricot'];

						if ($todayPurchase['apricot']==null || $todayPurchase['apricot']==0) {	
							$sql 	=	"update $userName set apricot='$apricot' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set apricot='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("apricot purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['apricot']+$apricot;
							$sql3 	=	"update $userName set apricot='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['apricot'];

			  					if ($actionApricot > $thisFruitPrice && $allFruitPrice['apricot']!=0) {

			  						$howMuch = ($actionApricot-$thisFruitPrice);
									$action= "In ". $market ." market apricot's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='apricot';
					}

					if(isset($_POST['bananaAdd'])) {

				 		$actionBanana=$_POST['actionBanana'];
						$banana=$_POST['banana'];

						if ($todayPurchase['banana']==null || $todayPurchase['banana']==0) {	
							$sql 	=	"update $userName set banana='$banana' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set banana='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("banana purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['banana']+$banana;
							$sql3 	=	"update $userName set banana='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['banana'];

			  					if ($actionBanana > $thisFruitPrice && $allFruitPrice['banana']!=0) {

			  						$howMuch = ($actionBanana-$thisFruitPrice);
									$action= "In ". $market ." market banana's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='banana';
					}

					if(isset($_POST['cherriesAdd'])) {

				 		$actionCherries=$_POST['actionCherries'];
						$cherries=$_POST['cherries'];

						if ($todayPurchase['cherries']==null || $todayPurchase['cherries']==0) {	
							$sql 	=	"update $userName set cherries='$cherries' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set cherries='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("cherries purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['cherries']+$cherries;
							$sql3 	=	"update $userName set cherries='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['cherries'];

			  					if ($actionCherries > $thisFruitPrice && $allFruitPrice['cherries']!=0) {

			  						$howMuch = ($actionCherries-$thisFruitPrice);
									$action= "In ". $market ." market cherries's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='cherries';
					}

					if(isset($_POST['coconutAdd'])) {

				 		$actionCoconut=$_POST['actionCoconut'];
						$coconut=$_POST['coconut'];

						if ($todayPurchase['coconut']==null || $todayPurchase['coconut']==0) {	
							$sql 	=	"update $userName set coconut='$coconut' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set coconut='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("coconut purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['coconut']+$coconut;
							$sql3 	=	"update $userName set coconut='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['coconut'];

			  					if ($actionCoconut > $thisFruitPrice && $allFruitPrice['coconut']!=0) {

			  						$howMuch = ($actionCoconut-$thisFruitPrice);
									$action= "In ". $market ." market coconut's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='coconut';
					}

					if(isset($_POST['grapeAdd'])) {

				 		$actionGrape=$_POST['actionGrape'];
						$grape=$_POST['grape'];

						if ($todayPurchase['grape']==null || $todayPurchase['grape']==0) {	
							$sql 	=	"update $userName set grape='$grape' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set grape='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("grape purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['grape']+$grape;
							$sql3 	=	"update $userName set grape='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['grape'];

			  					if ($actionGrape > $thisFruitPrice && $allFruitPrice['grape']!=0) {

			  						$howMuch = ($actionGrape-$thisFruitPrice);
									$action= "In ". $market ." market grape's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='grape';
					}

					if(isset($_POST['iconAdd'])) {

				 		$actionIcon=$_POST['actionIcon'];
						$icon=$_POST['icon'];

						if ($todayPurchase['icon']==null || $todayPurchase['icon']==0) {	
							$sql 	=	"update $userName set icon='$icon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set icon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("icon purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['icon']+$icon;
							$sql3 	=	"update $userName set icon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['icon'];

			  					if ($actionIcon > $thisFruitPrice && $allFruitPrice['icon']!=0) {

			  						$howMuch = ($actionIcon-$thisFruitPrice);
									$action= "In ". $market ." market icon's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='icon';
					}

					if(isset($_POST['lemonAdd'])) {

				 		$actionLemon=$_POST['actionLemon'];
						$lemon=$_POST['lemon'];

						if ($todayPurchase['lemon']==null || $todayPurchase['lemon']==0) {	
							$sql 	=	"update $userName set lemon='$lemon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set lemon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("lemon purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['lemon']+$lemon;
							$sql3 	=	"update $userName set lemon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['lemon'];

			  					if ($actionLemon > $thisFruitPrice && $allFruitPrice['lemon']!=0) {

			  						$howMuch = ($actionLemon-$thisFruitPrice);
									$action= "In ". $market ." market lemon's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='lemon';
					}

					if(isset($_POST['lycheeAdd'])) {

				 		$actionLychee=$_POST['actionLychee'];
						$lychee=$_POST['lychee'];

						if ($todayPurchase['lychee']==null || $todayPurchase['lychee']==0) {	
							$sql 	=	"update $userName set lychee='$lychee' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set lychee='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("lychee purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['lychee']+$lychee;
							$sql3 	=	"update $userName set lychee='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['lychee'];

			  					if ($actionLychee > $thisFruitPrice && $allFruitPrice['lychee']!=0) {

			  						$howMuch = ($actionLychee-$thisFruitPrice);
									$action= "In ". $market ." market lychee's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='lychee';
					}

					if(isset($_POST['mangoAdd'])) {

				 		$actionMango=$_POST['actionMango'];
						$mango=$_POST['mango'];

						if ($todayPurchase['mango']==null || $todayPurchase['mango']==0) {	
							$sql 	=	"update $userName set mango='$mango' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set mango='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("mango purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['mango']+$mango;
							$sql3 	=	"update $userName set mango='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['mango'];

			  					if ($actionMango > $thisFruitPrice && $allFruitPrice['mango']!=0) {

			  						$howMuch = ($actionMango-$thisFruitPrice);
									$action= "In ". $market ." market mango's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='mango';
					}

					if(isset($_POST['melonAdd'])) {

				 		$actionMelon=$_POST['actionMelon'];
						$melon=$_POST['melon'];

						if ($todayPurchase['melon']==null || $todayPurchase['melon']==0) {	
							$sql 	=	"update $userName set melon='$melon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set melon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("melon purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['melon']+$melon;
							$sql3 	=	"update $userName set melon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['melon'];

			  					if ($actionMelon > $thisFruitPrice && $allFruitPrice['melon']!=0) {

			  						$howMuch = ($actionMelon-$thisFruitPrice);
									$action= "In ". $market ." market melon's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='melon';
					}

					if(isset($_POST['orangeAdd'])) {

				 		$actionOrange=$_POST['actionOrange'];
						$orange=$_POST['orange'];

						if ($todayPurchase['orange']==null || $todayPurchase['orange']==0) {	
							$sql 	=	"update $userName set orange='$orange' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set orange='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("orange purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['orange']+$orange;
							$sql3 	=	"update $userName set orange='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['orange'];

			  					if ($actionOrange > $thisFruitPrice && $allFruitPrice['orange']!=0) {

			  						$howMuch = ($actionOrange-$thisFruitPrice);
									$action= "In ". $market ." market orange's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='orange';
					}

					if(isset($_POST['peachAdd'])) {

				 		$actionPeach=$_POST['actionPeach'];
						$peach=$_POST['peach'];

						if ($todayPurchase['peach']==null || $todayPurchase['peach']==0) {	
							$sql 	=	"update $userName set peach='$peach' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set peach='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("peach purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['peach']+$peach;
							$sql3 	=	"update $userName set peach='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['peach'];

			  					if ($actionPeach > $thisFruitPrice && $allFruitPrice['peach']!=0) {

			  						$howMuch = ($actionPeach-$thisFruitPrice);
									$action= "In ". $market ." market peach's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='peach';
					}

					if(isset($_POST['pearAdd'])) {

				 		$actionPear=$_POST['actionPear'];
						$pear=$_POST['pear'];

						if ($todayPurchase['pear']==null || $todayPurchase['pear']==0) {	
							$sql 	=	"update $userName set pear='$pear' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set pear='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("pear purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['pear']+$pear;
							$sql3 	=	"update $userName set pear='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['pear'];

			  					if ($actionPear > $thisFruitPrice && $allFruitPrice['pear']!=0) {

			  						$howMuch = ($actionPear-$thisFruitPrice);
									$action= "In ". $market ." market pear's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='pear';
					}

					if(isset($_POST['pineappleAdd'])) {

				 		$actionPineapple=$_POST['actionPineapple'];
						$pineapple=$_POST['pineapple'];

						if ($todayPurchase['pineapple']==null || $todayPurchase['pineapple']==0) {	
							$sql 	=	"update $userName set pineapple='$pineapple' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set pineapple='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("pineapple purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['pineapple']+$pineapple;
							$sql3 	=	"update $userName set pineapple='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['pineapple'];

			  					if ($actionPineapple > $thisFruitPrice && $allFruitPrice['pineapple']!=0) {

			  						$howMuch = ($actionPineapple-$thisFruitPrice);
									$action= "In ". $market ." market pineapple's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='pineapple';
					}

					if(isset($_POST['plumAdd'])) {

				 		$actionPlum=$_POST['actionPlum'];
						$plum=$_POST['plum'];

						if ($todayPurchase['plum']==null || $todayPurchase['plum']==0) {	
							$sql 	=	"update $userName set plum='$plum' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set plum='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("plum purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['plum']+$plum;
							$sql3 	=	"update $userName set plum='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['plum'];

			  					if ($actionPlum > $thisFruitPrice && $allFruitPrice['plum']!=0) {

			  						$howMuch = ($actionPlum-$thisFruitPrice);
									$action= "In ". $market ." market plum's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='plum';
					}

					if(isset($_POST['raspberryAdd'])) {

				 		$actionRaspberry=$_POST['actionRaspberry'];
						$raspberry=$_POST['raspberry'];

						if ($todayPurchase['raspberry']==null || $todayPurchase['raspberry']==0) {	
							$sql 	=	"update $userName set raspberry='$raspberry' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set raspberry='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("raspberry purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['raspberry']+$raspberry;
							$sql3 	=	"update $userName set raspberry='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['raspberry'];

			  					if ($actionRaspberry > $thisFruitPrice && $allFruitPrice['raspberry']!=0) {

			  						$howMuch = ($actionRaspberry-$thisFruitPrice);
									$action= "In ". $market ." market raspberry's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='raspberry';
					}

					if(isset($_POST['strawberryAdd'])) {

				 		$actionStrawberry=$_POST['actionStrawberry'];
						$strawberry=$_POST['strawberry'];

						if ($todayPurchase['strawberry']==null || $todayPurchase['strawberry']==0) {	
							$sql 	=	"update $userName set strawberry='$strawberry' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set strawberry='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("strawberry purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['strawberry']+$strawberry;
							$sql3 	=	"update $userName set strawberry='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['strawberry'];

			  					if ($actionStrawberry > $thisFruitPrice && $allFruitPrice['strawberry']!=0) {

			  						$howMuch = ($actionStrawberry-$thisFruitPrice);
									$action= "In ". $market ." market strawberry's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='strawberry';
					}

					if(isset($_POST['tangerineAdd'])) {

				 		$actionTangerine=$_POST['actionTangerine'];
						$tangerine=$_POST['tangerine'];

						if ($todayPurchase['tangerine']==null || $todayPurchase['tangerine']==0) {	
							$sql 	=	"update $userName set tangerine='$tangerine' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set tangerine='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("tangerine purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['tangerine']+$tangerine;
							$sql3 	=	"update $userName set tangerine='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['tangerine'];

			  					if ($actionTangerine > $thisFruitPrice && $allFruitPrice['tangerine']!=0) {

			  						$howMuch = ($actionTangerine-$thisFruitPrice);
									$action= "In ". $market ." market tangerine's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='tangerine';
					}

					if(isset($_POST['watermelonAdd'])) {

				 		$actionWatermelon=$_POST['actionWatermelon'];
						$watermelon=$_POST['watermelon'];

						if ($todayPurchase['watermelon']==null || $todayPurchase['watermelon']==0) {	
							$sql 	=	"update $userName set watermelon='$watermelon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set watermelon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("watermelon purchese complete in new_market market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['watermelon']+$watermelon;
							$sql3 	=	"update $userName set watermelon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						$sql4	=" select * from $market where date='$date' "; 	  	
						$result4=mysqli_query($conn,$sql4);

							if($result4) {
			  					$allFruitPrice 	=	mysqli_fetch_assoc($result4);
			  					$thisFruitPrice	=	$allFruitPrice['watermelon'];

			  					if ($actionWatermelon > $thisFruitPrice && $allFruitPrice['watermelon']!=0) {

			  						$howMuch = ($actionWatermelon-$thisFruitPrice);
									$action= "In ". $market ." market watermelon's price incress ". $howMuch. " tk.";
			  					}			  					
		  					}
		  				$fruitName='watermelon';
					}
				}

				if ($market=='other') {
					$market='unknown';

		 			if(isset($_POST['appleAdd'])) {

				 		$actionApple=$_POST['actionApple'];
						$apple=$_POST['apple'];

						if ($todayPurchase['apple']==null || $todayPurchase['apple']==0) {	
							$sql 	=	"update $userName set apple='$apple' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set apple='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("apple purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['apple']+$apple;
							$sql3 	=	"update $userName set apple='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						
		  				$fruitName='apple';
					}

					if(isset($_POST['apricotAdd'])) {

				 		$actionApricot=$_POST['actionApricot'];
						$apricot=$_POST['apricot'];

						if ($todayPurchase['apricot']==null || $todayPurchase['apricot']==0) {	
							$sql 	=	"update $userName set apricot='$apricot' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set apricot='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("apricot purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['apricot']+$apricot;
							$sql3 	=	"update $userName set apricot='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						
		  				$fruitName='apricot';
					}

					if(isset($_POST['bananaAdd'])) {

				 		$actionBanana=$_POST['actionBanana'];
						$banana=$_POST['banana'];

						if ($todayPurchase['banana']==null || $todayPurchase['banana']==0) {	
							$sql 	=	"update $userName set banana='$banana' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set banana='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("banana purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['banana']+$banana;
							$sql3 	=	"update $userName set banana='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						
		  				$fruitName='banana';
					}

					if(isset($_POST['cherriesAdd'])) {

				 		$actionCherries=$_POST['actionCherries'];
						$cherries=$_POST['cherries'];

						if ($todayPurchase['cherries']==null || $todayPurchase['cherries']==0) {	
							$sql 	=	"update $userName set cherries='$cherries' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set cherries='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("cherries purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['cherries']+$cherries;
							$sql3 	=	"update $userName set cherries='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						
		  				$fruitName='cherries';
					}

					if(isset($_POST['coconutAdd'])) {

				 		$actionCoconut=$_POST['actionCoconut'];
						$coconut=$_POST['coconut'];

						if ($todayPurchase['coconut']==null || $todayPurchase['coconut']==0) {	
							$sql 	=	"update $userName set coconut='$coconut' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set coconut='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("coconut purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['coconut']+$coconut;
							$sql3 	=	"update $userName set coconut='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						
		  				$fruitName='coconut';
					}

					if(isset($_POST['grapeAdd'])) {

				 		$actionGrape=$_POST['actionGrape'];
						$grape=$_POST['grape'];

						if ($todayPurchase['grape']==null || $todayPurchase['grape']==0) {	
							$sql 	=	"update $userName set grape='$grape' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set grape='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("grape purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['grape']+$grape;
							$sql3 	=	"update $userName set grape='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						
		  				$fruitName='grape';
					}

					if(isset($_POST['iconAdd'])) {

				 		$actionIcon=$_POST['actionIcon'];
						$icon=$_POST['icon'];

						if ($todayPurchase['icon']==null || $todayPurchase['icon']==0) {	
							$sql 	=	"update $userName set icon='$icon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set icon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("icon purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['icon']+$icon;
							$sql3 	=	"update $userName set icon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						
		  				$fruitName='icon';
					}

					if(isset($_POST['lemonAdd'])) {

				 		$actionLemon=$_POST['actionLemon'];
						$lemon=$_POST['lemon'];

						if ($todayPurchase['lemon']==null || $todayPurchase['lemon']==0) {	
							$sql 	=	"update $userName set lemon='$lemon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set lemon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("lemon purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['lemon']+$lemon;
							$sql3 	=	"update $userName set lemon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
					
		  				$fruitName='lemon';
					}

					if(isset($_POST['lycheeAdd'])) {

				 		$actionLychee=$_POST['actionLychee'];
						$lychee=$_POST['lychee'];

						if ($todayPurchase['lychee']==null || $todayPurchase['lychee']==0) {	
							$sql 	=	"update $userName set lychee='$lychee' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set lychee='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("lychee purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['lychee']+$lychee;
							$sql3 	=	"update $userName set lychee='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
					
		  				$fruitName='lychee';
					}

					if(isset($_POST['mangoAdd'])) {

				 		$actionMango=$_POST['actionMango'];
						$mango=$_POST['mango'];

						if ($todayPurchase['mango']==null || $todayPurchase['mango']==0) {	
							$sql 	=	"update $userName set mango='$mango' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set mango='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("mango purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['mango']+$mango;
							$sql3 	=	"update $userName set mango='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						
		  				$fruitName='mango';
					}

					if(isset($_POST['melonAdd'])) {

				 		$actionMelon=$_POST['actionMelon'];
						$melon=$_POST['melon'];

						if ($todayPurchase['melon']==null || $todayPurchase['melon']==0) {	
							$sql 	=	"update $userName set melon='$melon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set melon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("melon purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['melon']+$melon;
							$sql3 	=	"update $userName set melon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
					
		  				$fruitName='melon';
					}

					if(isset($_POST['orangeAdd'])) {

				 		$actionOrange=$_POST['actionOrange'];
						$orange=$_POST['orange'];

						if ($todayPurchase['orange']==null || $todayPurchase['orange']==0) {	
							$sql 	=	"update $userName set orange='$orange' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set orange='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("orange purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['orange']+$orange;
							$sql3 	=	"update $userName set orange='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
					
		  				$fruitName='orange';
					}

					if(isset($_POST['peachAdd'])) {

				 		$actionPeach=$_POST['actionPeach'];
						$peach=$_POST['peach'];

						if ($todayPurchase['peach']==null || $todayPurchase['peach']==0) {	
							$sql 	=	"update $userName set peach='$peach' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set peach='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("peach purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['peach']+$peach;
							$sql3 	=	"update $userName set peach='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
					
		  				$fruitName='peach';
					}

					if(isset($_POST['pearAdd'])) {

				 		$actionPear=$_POST['actionPear'];
						$pear=$_POST['pear'];

						if ($todayPurchase['pear']==null || $todayPurchase['pear']==0) {	
							$sql 	=	"update $userName set pear='$pear' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set pear='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("pear purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['pear']+$pear;
							$sql3 	=	"update $userName set pear='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
					
		  				$fruitName='pear';
					}

					if(isset($_POST['pineappleAdd'])) {

				 		$actionPineapple=$_POST['actionPineapple'];
						$pineapple=$_POST['pineapple'];

						if ($todayPurchase['pineapple']==null || $todayPurchase['pineapple']==0) {	
							$sql 	=	"update $userName set pineapple='$pineapple' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set pineapple='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("pineapple purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['pineapple']+$pineapple;
							$sql3 	=	"update $userName set pineapple='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
					
		  				$fruitName='pineapple';
					}

					if(isset($_POST['plumAdd'])) {

				 		$actionPlum=$_POST['actionPlum'];
						$plum=$_POST['plum'];

						if ($todayPurchase['plum']==null || $todayPurchase['plum']==0) {	
							$sql 	=	"update $userName set plum='$plum' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set plum='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("plum purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['plum']+$plum;
							$sql3 	=	"update $userName set plum='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
					
		  				$fruitName='plum';
					}

					if(isset($_POST['raspberryAdd'])) {

				 		$actionRaspberry=$_POST['actionRaspberry'];
						$raspberry=$_POST['raspberry'];

						if ($todayPurchase['raspberry']==null || $todayPurchase['raspberry']==0) {	
							$sql 	=	"update $userName set raspberry='$raspberry' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set raspberry='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("raspberry purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['raspberry']+$raspberry;
							$sql3 	=	"update $userName set raspberry='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
					
		  				$fruitName='raspberry';
					}

					if(isset($_POST['strawberryAdd'])) {

				 		$actionStrawberry=$_POST['actionStrawberry'];
						$strawberry=$_POST['strawberry'];

						if ($todayPurchase['strawberry']==null || $todayPurchase['strawberry']==0) {	
							$sql 	=	"update $userName set strawberry='$strawberry' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set strawberry='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("strawberry purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['strawberry']+$strawberry;
							$sql3 	=	"update $userName set strawberry='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
					
		  				$fruitName='strawberry';
					}

					if(isset($_POST['tangerineAdd'])) {

				 		$actionTangerine=$_POST['actionTangerine'];
						$tangerine=$_POST['tangerine'];

						if ($todayPurchase['tangerine']==null || $todayPurchase['tangerine']==0) {	
							$sql 	=	"update $userName set tangerine='$tangerine' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set tangerine='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("tangerine purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['tangerine']+$tangerine;
							$sql3 	=	"update $userName set tangerine='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
					
		  				$fruitName='tangerine';
					}

					if(isset($_POST['watermelonAdd'])) {

				 		$actionWatermelon=$_POST['actionWatermelon'];
						$watermelon=$_POST['watermelon'];

						if ($todayPurchase['watermelon']==null || $todayPurchase['watermelon']==0) {	
							$sql 	=	"update $userName set watermelon='$watermelon' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set watermelon='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("watermelon purchese complete in unknown market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['watermelon']+$watermelon;
							$sql3 	=	"update $userName set watermelon='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}			         			
						//Action part...
						
		  				$fruitName='watermelon';
					}
				}
				// Other item add now...
				if (isset($_POST['otherItem'])) {
						$market=$_POST['market'];						
						$otherItemName=$_POST['otherItemName'];
				 		$otherItemPrice=$_POST['otherItemPrice'];

						if ($todayPurchase['other']==null || $todayPurchase['other']==0) {	
							$sql 	=	"update $userName set other='$otherItemPrice' where id=$todayPurchaseId " ;
							$result =	mysqli_query($user_purchase, $sql);

							if ($result) {								
								$sql2 	="update $userName set other='$market' where id=$todayMarketId " ;
								$result2=	mysqli_query($user_market, $sql2);
							}

							$update= '<script type="text/javascript">
										alert("Other item purchese complete in chosen market.");
									</script>';

						}else{							
							$add 	=  $todayPurchase['other']+$otherItemPrice;
							$sql3 	=	"update $userName set other='$add' where id=$todayPurchaseId " ;
							$result3 =	mysqli_query($user_purchase, $sql3);
							$update= '<script type="text/javascript">

									alert("Add this price with your previous price. You update your price sucessfully.");
								</script>';	
						}

						//Go to admin to know this...
						if ($market=='other') {
							$market='unknown';
						}

						$sql4="insert into  user_wish values(null,'$userName','$otherItemName','$market')";
						$result=mysqli_query($conn,$sql4);


		  				$fruitName='Other food';
					}

			$_SESSION['incressPrice']=$action;
			$_SESSION['priceAdded']=$update;
			$_SESSION['fruitName']=$fruitName;
			header("Location: finalWishList.php");


			//all collum somunation code
			$total=0;
            $sql=" select * from $userName where date='$todayPurchaseDate' ";      
            $result=mysqli_query($user_purchase,$sql); 
            $rowPurchase = mysqli_fetch_assoc($result);

          	$sql ="SHOW COLUMNS FROM $userName";
          	$result = mysqli_query($user_purchase,$sql);
            	while($row = mysqli_fetch_assoc($result)){
              		$row['Field']."<br>";  
              		$rowPurchase[$row['Field']];
                		if ($row['Field']!='id' && $row['Field']!='date' && $row['Field']!='total') {
                  				$total=$total  + $rowPurchase[$row['Field']] ;        
                			}                           
            	}
            $sql2=" update $userName set total='$total' where id=$todayPurchaseId ";
		  	$result2=mysqli_query($user_purchase,$sql2);
		  	}      

?>
	<form>
   	<div class="form-group row">
      	<div class="col-sm-offset-5 col-sm-5">
        		<a href="finalWishList.php" class="btn btn-success ">Back</a>
      	</div>
    	</div>
   </form>

<?php include('../include/footer.php'); ?>