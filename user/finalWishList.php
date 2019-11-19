<?php include('../include/connection.php'); ?>
<?php include('../include/header.php'); ?>
<?php  
	session_start();  
  		if(!isset($_SESSION['userName'])){
      	header("location: ../index.php");
   	}
?>

	<div id="finalWishList" class="container ">
		
		<?php
    		$_SESSION['userName'];
    		$userName=$_SESSION['user_info'];
    		$conn=user_wishlist();

    		if (isset($_POST['send1'])) {
    		//Removing the URL id from url	    			
   		//	$url = $_SERVER['REQUEST_URI'];	
   		//	$pos = strrpos($url,'id') - 2;
			// $url = substr($url, 0, $pos);
			// $url;			
    		}

    		if (isset($_GET['id'])) {
    			
    			$id= $_GET['id'];

    			$sql="select*from $userName where id=$id";
				$result=mysqli_query($conn,$sql);
				$fruitName=mysqli_fetch_assoc($result);
				$fruitCheck=$fruitName['fruitName'];
				
				$sql2="insert into $userName values(null,'','$fruitCheck')";
				$result2=mysqli_query($conn,$sql2);	

				$sql="delete from $userName where id=$id";
				$result=mysqli_query($conn,$sql);
    		}

			if(isset($_POST['selectMore'])) {				
				foreach ($_POST['product'] as $key => $value){
					$fruitName=$value;					
					$sql="select*from $userName where fruitName='$fruitName'";
					$result=mysqli_query($conn,$sql);	
					
					if ($result) {														
						$rowcount = mysqli_num_rows($result);
							if($rowcount==0) {
								$sql2="insert into $userName values(null,'$fruitName','')";
								$result2=mysqli_query($conn,$sql2);
		              		$sql4="delete from $userName where fruitCheck='$fruitName'";
								$result4=mysqli_query($conn,$sql4);

		              	}else if($rowcount==1){
		              	}else{
		              		$sql3=$sql;
								$result3=mysqli_query($conn,$sql3);

								$thisUser=mysqli_fetch_assoc($result3);
  								$id=  $thisUser['id'];

		              		$sql4="delete from $userName where id=$id";
								$result4=mysqli_query($conn,$sql4);		              			
		              	}	 	
		         }else{
		          	echo "oh! connection_fail";
		        	}
		      }
		   }else{
				//echo "<h3>	None of now selected</h3>" ;
			}
		?>
		<div class="row">
         <div class="col-sm-offset-5 col-sm-3">
            <div style="background-color: #778899; border:5px solid pink;">            	
               <div>
               	<h2>Your selected items</h2>
               	<hr>  
               	<a href="userAccount.php" class="btn btn-filled btn-success ">Back</a>

               	<div class="pull-right">
               		<form  method="POST" >
								<div class="custom-select">
				   				<select name="product[]" required>
				    					<option>Select More</option>

				    						<?php
												$userName=$_SESSION['user_info'];
												$conn=user_wishlist();

												$sql6="select*from $userName";
												$result6=mysqli_query($conn,$sql6);
											?>

				        					<?php while($row = mysqli_fetch_assoc($result6)) { ?>
						    
						    					<?php	if($row['fruitCheck']=='apple') { ?>	
						             			<option value="apple">apple</option>
						             		<?php } ?>
					
												<?php if($row['fruitCheck']=='apricot') { ?>	
											      <option value="apricot">apricot</option>
											   <?php } ?>

											   <?php if($row['fruitCheck']=='banana') { ?>	
											      <option value="banana">banana</option>
											   <?php } ?>
												
												<?php if($row['fruitCheck']=='cherries') { ?>	
											       <option value="cherries">cherries</option>
											   <?php } ?>

											   <?php if($row['fruitCheck']=='coconut') { ?>	
											      <option value="coconut">coconut</option>
											   <?php } ?>
											
												<?php if($row['fruitCheck']=='grape') { ?>	
											      <option value="grape">grape</option>
											   <?php } ?>

											   <?php if($row['fruitCheck']=='icon') { ?>	
											      <option value="icon">icon</option>
											   <?php } ?>
											
												<?php if($row['fruitCheck']=='lemon') { ?>	
											      <option value="lemon">lemon</option>
											   <?php } ?>

											   <?php if($row['fruitCheck']=='lychee') { ?>	
											      <option value="lychee">lychee</option>
											   <?php } ?>
											
												<?php if($row['fruitCheck']=='mango') { ?>	
											      <option value="mango">mango</option>
											   <?php } ?>

											   <?php if($row['fruitCheck']=='melon') { ?>	
											      <option value="melon">melon</option>
											   <?php } ?>
											
												<?php if($row['fruitCheck']=='orange') { ?>	
											      <option value="orange">orange</option>
											   <?php } ?>

											   <?php if($row['fruitCheck']=='peach') { ?>	
											      <option value="peach">peach</option>
											   <?php } ?>
											
												<?php if($row['fruitCheck']=='pear') { ?>	
											      <option value="pear">pear</option>
											   <?php } ?>

											    <?php if($row['fruitCheck']=='pineapple') { ?>	
											      <option value="pineapple">pineapple</option>
											   <?php } ?>
											
												<?php if($row['fruitCheck']=='plum') { ?>	
											      <option value="plum">plum</option>
											   <?php } ?>

											   <?php if($row['fruitCheck']=='raspberry') { ?>	
											      <option value="raspberry">raspberry</option>
											   <?php } ?>
						
												<?php if($row['fruitCheck']=='strawberry') { ?>	
						             			<option value="strawberry">strawberry</option>
						             		<?php } ?>

						   					<?php if($row['fruitCheck']=='tangerine') { ?>	
						             			<option value="tangerine">tangerine</option>
						             		<?php } ?>
						
												<?php if($row['fruitCheck']=='watermelon') { ?>	
						             			<option value="watermelon">watermelon</option>
						             		<?php } ?>	

											<?php } ?>
				    				</select>									
										<button type="submit" style="padding: 10px 15px; margin-bottom: 10px;" name="selectMore" value="submit" class="btn btn-filled btn-info">Ok</button>
								</div>
							</form>
						</div>
 					</div>	
            </div>
         </div>             
	   </div> 

	   <div class="row" style="padding-top: 10px;">
		   <div class="col-sm-offset-3 col-sm-7">

				<?php if(isset($_SESSION['priceAdded'])) { ?>
					<?php echo $_SESSION['priceAdded']; ?>             
	         <?php } ?>


		      <?php if(isset($_SESSION['incressPrice'])) { ?>
	            <div class="alert alert-danger">
	               <strong>Alert!</strong>
	               <?php echo $_SESSION['incressPrice']; ?> 
	            </div>
	         <?php } ?>


				<?php if(isset($_SESSION['fruitName'])) { ?>             
	         <?php } ?>

		        	<table class="table" id="search">
		            <thead>
			            <th>Image</th>
			            <th>Name</th>
			            <th>Market price</th>
			            <th>Market name</th>
			            <th>Your cost</th>
			            <th>Action</th>
		            </thead>

		            <tbody align="center">

		            	<?php
								$userName=$_SESSION['user_info'];
								$conn=user_wishlist();
								$sql5="select*from $userName";
								$result5=mysqli_query($conn,$sql5);
							?>

	          			<?php while($row = mysqli_fetch_assoc($result5)) { ?>
	              
		              		<form action="confirm_purchase.php" method="POST">
				              	
				              	<?php
					              	if($row['fruitName']=='apple') { ?>				
											<tr>
							               <td><img src="../img/fruit/apple.png" > </td>
							               <td> <label>Apple</label></td>
							               <td><input type="text" class="form-control" name="actionApple" placeholder="kg/tk" required> </td>
							               <td>
							                	<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							               </td>
							               <td><input type="text" class="form-control" name="apple" placeholder="kg/tk" required> </td>
							               <td>
							            		<?php  if (!isset($_SESSION['fruitName'])) { ?>
														<button type="submit" name="appleAdd" class="btn btn-filled btn-info">Add</button>
													<?php	 } ?>

													<?php  if (isset($_SESSION['fruitName'])){
														if($_SESSION['fruitName']!='apple') { ?>
															<button type="submit" name="appleAdd" class="btn btn-filled btn-primary">Add</button>
													<?php	} } ?>

													<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  									</td>	
						               </tr>
				        			<?php } ?>

					        		<?php
					        			if($row['fruitName']=='apricot') { ?>
						                <tr>
						                	<td><img src="../img/fruit/apricot.png" > </td>
						                	<td><label for="party">Apricot</label></td>
						                	<td><input type="text" class="form-control" name="actionApricot" placeholder="kg/tk" required> </td>
						                	<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="apricot" placeholder="kg/tk" required> </td>
							                <td>
							            <?php  if(!isset($_SESSION['fruitName'])) { ?>
												<button class="btn btn-filled btn-filled btn-info" name="apricotAdd" type="submit">Add</button> 
											<?php	} ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='apricot') { ?>
												<button type="submit" name="apricotAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>

												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
						                </tr>
					            <?php } ?>     

					            <?php
					        			if($row['fruitName']=='banana') { ?>
					                	<tr>
						                	<td><img src="../img/fruit/banana.png" > </td>
						                	<td> <label for="party">Banana</label></td>
						                	<td><input type="text" class="form-control" name="actionBanana" placeholder="kg/tk" required> </td>
						                	<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="banana" placeholder="kg/tk" required> </td>
							                <td>
							            <?php  if (!isset($_SESSION['fruitName'])) { ?>
												<button class="btn btn-filled btn-info" name="bananaAdd" type="submit" >Add</button> 
												<?php	 } ?>	

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='banana') { ?>
												<button type="submit" name="bananaAdd" class="btn btn-filled btn-primary">Add</button>
											<?php 	} } ?>	

												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
					                	</tr>
					            <?php } ?>

					            <?php
					        			if($row['fruitName']=='cherries') { ?>
						            	<tr>
						                	<td><img src="../img/fruit/cherries.png" > </td>
						                	<td> <label for="party">Cherries</label></td>
						                	<td><input type="text" class="form-control" name="actionCherries" placeholder="kg/tk" required> </td>
						                	<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="cherries" placeholder="kg/tk" required> </td>
							                <td>
							            <?php  if (!isset($_SESSION['fruitName'])) { ?>
												<button type="submit" class="btn btn-filled btn-info" name="cherriesAdd">Add</button> 									
											<?php } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='cherries') { ?>
												<button type="submit" name="cherriesAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>

												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
						                </tr>
					            <?php } ?>	

					            <?php
					        			if ($row['fruitName']=='coconut') { ?>
					            		<tr>
					            			<td><img src="../img/fruit/coconut.png" > </td>
					            			<td> <label for="party">Coconut</label></td>
					            			<td><input type="text" class="form-control" name="actionCoconut" placeholder="kg/tk" required> </td>
					            			<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="coconut" placeholder="kg/tk" required> </td>
							                <td>
							            <?php  if (!isset($_SESSION['fruitName'])) { ?>
												
												<button type="submit" class="btn btn-filled btn-info" name="coconutAdd">Add</button> 
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='coconut') { ?>
												<button type="submit" name="coconutAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
												
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
					            		</tr>
					            <?php } ?>	

				               <?php
					        			if($row['fruitName']=='grape') { ?>
						                <tr>
						                	<td><img src="../img/fruit/grape.png" > </td>
						               	 	<td> <label for="party">Grape</label></td>
						                	<td><input type="text" class="form-control" name="actionGrape" placeholder="kg/tk" required> </td>
						                	<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="grape" placeholder="kg/tk" required> </td>
							                <td>
							          	<?php  if (!isset($_SESSION['fruitName'])) { ?>
											<button type="submit" class="btn btn-filled btn-info" name="grapeAdd">Add</button> 	
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='grape') { ?>
												<button type="submit" name="grapeAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
												
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
						                </tr>
					            <?php } ?>
				               
				               <?php
					        			if($row['fruitName']=='icon') { ?>
					                	<tr>
					                		<td><img src="../img/fruit/icon.png" > </td>
					                		<td> <label for="party">Icon</label></td>
					                  		<td><input type="text" class="form-control" name="actionIcon" placeholder="kg/tk" required> </td>
					                  		<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="icon" placeholder="kg/tk" required> </td>
							               
					                  		<td>
					                  	<?php  if (!isset($_SESSION['fruitName'])) { ?>									
												<button type="submit" class="btn btn-filled btn-info" name="iconAdd">Add</button> 
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='icon') { ?>
												<button type="submit" name="iconAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
					                  			
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
					                	</tr>
					            <?php } ?>		                
				               
				               <?php
					        			if($row['fruitName']=='lemon') { ?>
					                 	<tr>
					                  		<td><img src="../img/fruit/lemon.png" > </td>
					                  		<td> <label for="party">Lemon</label></td>
					                  		<td><input type="text" class="form-control" name="actionLemon" placeholder="kg/tk" required> </td>		<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="lemon" placeholder="kg/tk" required> </td>
							                               	
					                		<td>
					                	<?php  if (!isset($_SESSION['fruitName'])) { ?>									
												<button type="submit" class="btn btn-filled btn-info" name="lemonAdd">Add</button> 
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='lemon') { ?>
												<button type="submit" name="lemonAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
					                			
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
			  							</tr>	
					            <?php } ?>		                
				               
				               <?php
					        			if($row['fruitName']=='lychee') { ?>
					                 	<tr>
					                  		<td><img src="../img/fruit/lychee.png" > </td>
					                  		<td> <label for="party">Lychee</label></td>
					                  		<td><input type="text" class="form-control" name="actionLychee" placeholder="kg/tk" required> </td>
					                		<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="lychee" placeholder="kg/tk" required> </td>
							               			
					                		<td>
					                	<?php  if (!isset($_SESSION['fruitName'])) { ?>									
												<button type="submit" class="btn btn-filled btn-info" name="lycheeAdd">Add</button>
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='lychee') { ?>
												<button type="submit" name="lycheeAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
					                			
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
			  							</tr>	
					            <?php } ?>		                 
				               
				               <?php
					        			if($row['fruitName']=='mango') { ?>
					                 	<tr>
					                  		<td><img src="../img/fruit/mango.png" > </td>
					                  		<td> <label for="party">Mango</label></td>
					                  		<td><input type="text" class="form-control" name="actionMango" placeholder="kg/tk" required> </td>
					                  		<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="mango" placeholder="kg/tk" required> </td>
							               
					                  		<td>
					                  	<?php  if (!isset($_SESSION['fruitName'])) { ?>
												<button type="submit" class="btn btn-filled btn-info" name="mangoAdd">Add</button>
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='mango') { ?>
												<button type="submit" name="mangoAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
					                  			
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
					                	</tr>
					            <?php } ?>	              
				               
				               <?php
					        			if($row['fruitName']=='melon') { ?>
					                 	<tr>
					                  		<td><img src="../img/fruit/melon.png" > </td>
					                  		<td> <label for="party">Melon</label></td>
					                  		<td><input type="text" class="form-control" name="actionMelon" placeholder="kg/tk" required> </td>
					                  		<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="melon" placeholder="kg/tk" required> </td>
							               
					                  		<td>
					                  	<?php  if (!isset($_SESSION['fruitName'])) { ?>
												<button type="submit" class="btn btn-filled btn-info" name="melonAdd">Add</button> 
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='melon') { ?>
												<button type="submit" name="melonAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
					                  			
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
					                	</tr>
					            <?php } ?>		                
				               
				               <?php
					        			if($row['fruitName']=='orange') { ?>
					                 	<tr>
					                  		<td><img src="../img/fruit/orange.png" > </td>
					                  		<td> <label for="party">Orange</label></td>
					                  		<td><input type="text" class="form-control" name="actionOrange" placeholder="kg/tk" required> </td>
											<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="orange" placeholder="kg/tk" required> </td>
							               
					                  		<td>
					                  	<?php  if (!isset($_SESSION['fruitName'])) { ?>									
												<button type="submit" class="btn btn-filled btn-info" name="orangeAdd">Add</button>
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='orange') { ?>
												<button type="submit" name="orangeAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
					                  			
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
					                	</tr>
					            <?php } ?>		                
				               
				               <?php
					        			if($row['fruitName']=='peach') { ?>
					                 	<tr>
					                  		<td><img src="../img/fruit/peach.png" > </td>
					                  		<td> <label for="party">Peach</label></td>
					                  		<td><input type="text" class="form-control" name="actionPeach" placeholder="kg/tk" required> </td>
					                  		<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="peach" placeholder="kg/tk" required> </td>
							               
					                  		<td>
					                  	<?php  if (!isset($_SESSION['fruitName'])) { ?>									
												<button type="submit" class="btn btn-filled btn-info" name="peachAdd">Add</button> 
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='peach') { ?>
												<button type="submit" name="peachAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
					                  			
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
					                	</tr>
					            <?php } ?>		                
				               
				               <?php
					        			if ($row['fruitName']=='pear') { ?>
					                 	<tr>
					                  		<td><img src="../img/fruit/pear.png" > </td>
					                  		<td> <label for="party">Pear</label></td>
					                  		<td><input type="text" class="form-control" name="actionPear" placeholder="kg/tk" required> </td>
					                  		<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="pear" placeholder="kg/tk" required> </td>
							               
					                  		<td>
					                  	<?php  if (!isset($_SESSION['fruitName'])) { ?>									
												<button type="submit" class="btn btn-filled btn-info" name="pearAdd">Add</button> 
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='pear') { ?>
												<button type="submit" name="pearAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
					                  			
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
					                	</tr>
					            <?php } ?>		                
				               
				               <?php
					        			if($row['fruitName']=='pineapple') { ?>
					                 	<tr>
					                  		<td><img src="../img/fruit/pineapple.png" > </td>
					                  		<td> <label for="party">Pineapple</label></td>
					                  		<td><input type="text" class="form-control" name="actionPineapple" placeholder="kg/tk" required> </td>
					                  		<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="pineapple" placeholder="kg/tk" required> </td>
							               
					                  		<td>
					                  	<?php  if (!isset($_SESSION['fruitName'])) { ?>									
												<button type="submit" class="btn btn-filled btn-info" name="pineappleAdd">Add</button> 
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='pineapple') { ?>
												<button type="submit" name="pineappleAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
					                  			
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
					                	</tr>
					            <?php } ?>		                 
				               
				               <?php
					        			if($row['fruitName']=='plum') { ?>
					                 	<tr>
					                  		<td><img src="../img/fruit/plum.png" > </td>
					                  		<td> <label for="party">Plum</label></td>
					                  		<td><input type="text" class="form-control" name="actionPlum" placeholder="kg/tk" required> </td>
					                  		<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="plum" placeholder="kg/tk" required> </td>
							               
					                  		<td>
					                  	<?php  if (!isset($_SESSION['fruitName'])) { ?>									
												<button type="submit" class="btn btn-filled btn-info" name="plumAdd">Add</button> 
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='plum') { ?>
												<button type="submit" name="plumAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
					                  			
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
					                	</tr>
					            <?php } ?>		                
				               
				               <?php
					        			if($row['fruitName']=='raspberry') { ?>
					                 	<tr>
					                  		<td><img src="../img/fruit/raspberry.png" > </td>
					                  		<td> <label for="party">Raspberry</label></td>
					                  		<td><input type="text" class="form-control" name="actionRaspberry" placeholder="kg/tk" required> </td>
					                  		<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="raspberry" placeholder="kg/tk" required> </td>
							               
					                  		<td>
					                  	<?php  if (!isset($_SESSION['fruitName'])) { ?>									
												<button type="submit" class="btn btn-filled btn-info" name="raspberryAdd">Add</button> 
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='raspberry') { ?>
												<button type="submit" name="raspberryAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
					                  			
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
					                	</tr>
					            <?php } ?>		                
				               
				               <?php
					        			if($row['fruitName']=='strawberry') { ?>
					                 	<tr>
					                  		<td><img src="../img/fruit/strawberry.png" > </td>
					                  		<td> <label for="party">Strawberry</label></td>
					                  			<td><input type="text" class="form-control" name="actionStrawberry" placeholder="kg/tk" required> </td>
					                  			<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="strawberry" placeholder="kg/tk" required> </td>
							               		                	
					                		<td>
					                	<?php  if (!isset($_SESSION['fruitName'])) { ?>									
												<button type="submit" class="btn btn-filled btn-info" name="strawberryAdd">Add</button> 
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='strawberry') { ?>
												<button type="submit" name="strawberryAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
					                			
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
			  							</tr>
					            <?php } ?>		               
				               
				               <?php
					        			if($row['fruitName']=='tangerine') { ?>
					                 	<tr>
					                  		<td><img src="../img/fruit/tangerine.png" > </td>
					                  		<td> <label for="party">Tangerine</label></td>
					                  		<td><input type="text" class="form-control" name="actionTangerine" placeholder="kg/tk" required> </td>
					                  		<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="tangerine" placeholder="kg/tk" required> </td>
							               
					                  		<td>
					                  	<?php  if (!isset($_SESSION['fruitName'])) { ?>									
												<button type="submit" class="btn btn-filled btn-info" name="tangerineAdd">Add</button> 
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='tangerine') { ?>
												<button type="submit" name="tangerineAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
					                  			
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
					                	</tr>
					            <?php } ?>	

					            <?php
					        			if($row['fruitName']=='watermelon') { ?>
					                 	<tr>
					                  		<td><img src="../img/fruit/watermelon.png" > </td>
					                  		<td> <label for="party">Watermelon</label></td>
					                  		<td><input type="text" class="form-control" name="actionWatermelon" placeholder="kg/tk" required> </td>
					                  		<td>
						                		<select name='market' required>
							                		<option value="">Select market</option>
							                		<option value="agrabad">Agrabad</option>
							                		<option value="gec">Gec</option>
							                		<option value="new_market">New_Market</option>
							                		<option value="other">Other</option>
							                	</select>
							                </td>
							                 <td><input type="text" class="form-control" name="watermelon" placeholder="kg/tk" required> </td>
							               
					                  		<td>
					                  	<?php  if (!isset($_SESSION['fruitName'])) { ?>									
												<button type="submit" class="btn btn-filled btn-info" name="watermelonAdd">Add</button> 
											<?php	 } ?>

										<?php  if (isset($_SESSION['fruitName'])){
													if($_SESSION['fruitName']!='watermelon') { ?>
												<button type="submit" name="watermelonAdd" class="btn btn-filled btn-primary">Add</button>
											<?php	 } } ?>
					                  			
												<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="finalWishList.php?id=<?php echo $row['id']; ?>">Delete</a>
			  								</td>
					                	</tr>
					            <?php } ?>	

		              		</form>	              			
							<?php } ?>
						</tbody>	
						<tbody class="addMoreItem" align="center">	     

							<?php if(isset($_POST['addMoreItem'])) {
			        					$_SESSION['addMoreItem']=true;
			        			} ?>
						<?php
		               if(isset($_SESSION['addMoreItem'])) { ?>
		                	<form action="confirm_purchase.php" method="POST">			                		   		
		             			<tr>
	                  			<td colspan="2"><input type="text" class="form-control" name="otherItemName" placeholder="Enter Item Name" required> </td>	                  			
	               			
	               				<td><input type="text" class="form-control" name="" placeholder="Disable" > </td>
		                  		<td>
				                		<select name='market' required>
					                		<option value="">Select market</option>
					                		<option value="agrabad">Agrabad</option>
					                		<option value="gec">Gec</option>
					                		<option value="new_market">New_Market</option>
					                		<option value="other">Other</option>
					                	</select>
				                	</td>
			                 		<td><input type="text" class="form-control" name="otherItemPrice" placeholder="kg/tk" required> </td>				               
	                  			<td>	                  
											<button type="submit" class="btn btn-filled btn-filled btn-info" name="otherItem">Add</button> 
										</td>
	                			</tr>		                		
		                	</form>	
		            	<?php } ?>
		            </tbody>
		        	</table>

		        	<a href="userAccount.php" class="btn btn-filled btn-success pull-left">Back</a>					
		        	 <!-- extra data -->
		        	<?php if(!isset($_SESSION['addMoreItem'])){ ?> 
			        	<form action="finalWishList.php" method="POST">
				        	<button type="submit" name="addMoreItem" class="btn btn-filled btn-filled btn-success">Add More Item</button>
				    	</form>	
			    	<?php  }?>	
		   </div>
    	</div>	
   </div>  

		 

<?php unset($_SESSION['priceAdded']); ?>
<?php unset($_SESSION['incressPrice']); ?>
<?php unset($_SESSION['fruitName']); ?>
<?php unset($_SESSION['addMoreItem']); ?>

<?php include('../include/footer.php'); ?>