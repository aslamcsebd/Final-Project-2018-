<?php include('../include/connection.php'); ?>
<?php include('../include/header.php'); ?>

	<div id="wishList" class="container" style="padding-top: 50px;">
		<?php 
    		session_start();
    		$userName=$_SESSION['user_info'];
    		$conn=user_wishlist();

    		if (isset($_POST['send'])) {

	    		//Removing the URL id from url
	    		#as a url we use it or 		    			
	    		//$url = $_SERVER['QUERY_STRING'];	   	

	    		#Get URL and remove id from it
	    		#https://stackoverflow.com/questions/43715904/get-url-and-remove-id-from-it	    		
				
				#as a url we use it  	
	    		$url = $_SERVER['REQUEST_URI'];
				#Get id position and remove && by subtracting 2 from length
				
	    		$pos = strrpos($url,'id') - 2;
				$url = substr($url, 0, $pos);
				$url;		
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

				if(isset($_POST['chooseItem']) || isset($_POST['selectMore']) ) {					
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
			              			//echo $fruitName. "  delete now<br><br>";

			              		}else if($rowcount==1){
			              			//echo $fruitName. "  No problem date has 1 pic<br>";
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
					// echo "<h3>	None of now selected</h3>" ;
				}			
		?>		

		<div class="row">
         <div class="col-sm-offset-4 col-sm-3">	           
            <div style="background-color: #778899; border:5px solid pink;">
            	
               <div>
               	<h2>Your selected items</h2>
               	<hr>

               	<div class="pull-left" style="background-color: green;">
 							<a href="userChose.php" style="margin-top: 8px; padding: 10px 25px;" class="btn btn-filled btn-info">Back</a>
 							<br>
         				<a href="finalWishList.php" class="btn btn-filled btn-success ">Buy now</a>
 						</div>	           		 	

			         <form  method="POST" style="background-color: #B0C4DE;">
							<div class="custom-select">
							   <select name="product[]" >
							    	<option requered>Select More</option>		

										<?php	            				
											$sql6="select*from $userName";
											$result6=mysqli_query($conn,$sql6);									
										?>	

							        	<?php while($row = mysqli_fetch_assoc($result6)) { ?>
									    
									    	<?php if($row['fruitCheck']=='apple') { ?>	
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

									    	<?php	if($row['fruitCheck']=='lychee') { ?>	
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
							   	<button type="submit" style="margin: 20px 0 10px 5px ; padding: 10px 40px;" name="selectMore" value="submit"  class="btn btn-filled btn-success">Add now</button>				   		          	
							</div>										
						</form>
 					</div>	
            </div>
         </div>             
	   </div> 

	   <div class="row" style="margin-top: 10px;">
		   <div class=" col-sm-offset-4 col-sm-2">

				<table class="table">
				   <thead>
				      <th>Image</th>
				      <th>Name</th>
				      <th>Action</th>
				   </thead>

 					<tbody align="center">	

				   	<?php
							$sql5="select*from $userName";
							$result5=mysqli_query($conn,$sql5);
						?> 
						<?php while($row = mysqli_fetch_assoc($result5)) { ?>

				        	<?php
				           	if($row['fruitName']=='apple') { ?>				
								<tr>
					            <td><img src="../img/fruit/apple.png" ></td>
					            <td><label>Apple</label></td>	
					            <td>
										<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
									</td>	
				            </tr>
				  			<?php } ?>
				     		<?php
				     			if($row['fruitName']=='apricot') { ?>
				               <tr>
				                	<td><img src="../img/fruit/apricot.png" > </td>
				                	<td> <label >Apricot</label></td>
				                	<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				               </tr>
				         <?php } ?>
				         <?php
				     			if($row['fruitName']=='banana') { ?>
				             	<tr>
				                	<td><img src="../img/fruit/banana.png" > </td>
				                	<td> <label >Banana</label></td>
				                	<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				             	</tr>
				         <?php } ?>
				         <?php
				     			if($row['fruitName']=='cherries') { ?>
				            	<tr>
				                	<td><img src="../img/fruit/cherries.png" > </td>
				                	<td> <label >Cherries</label></td>
				                	<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				               </tr>
				         <?php } ?>
				         <?php
				     			if ($row['fruitName']=='coconut') { ?>
				         		<tr>
				         			<td><img src="../img/fruit/coconut.png" > </td>
				         			<td> <label >Coconut</label></td>
				         			<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				         		</tr>
				         <?php } ?>		                 
				         <?php
				     			if($row['fruitName']=='grape') { ?>
				               <tr>
				                	<td><img src="../img/fruit/grape.png" > </td>
				               	<td> <label>Grape</label></td>
				                	<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				                </tr>
				         <?php } ?>
				         <?php
				     			if($row['fruitName']=='icon') { ?>
				             	<tr>
				             		<td><img src="../img/fruit/icon.png" > </td>
				             		<td> <label >Icon</label></td>
				               	<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				             	</tr>
				         <?php } ?>		                
				         <?php
				     			if($row['fruitName']=='lemon') { ?>
				              	<tr>
				               	<td><img src="../img/fruit/lemon.png" > </td>
				               	<td> <label >Lemon</label></td>
				               	<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
										</tr>	
				         <?php } ?>		                
				         <?php
				     			if($row['fruitName']=='lychee') { ?>
				              	<tr>
				               	<td><img src="../img/fruit/lychee.png" > </td>
				               	<td> <label >Lychee</label></td>
				               	<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
										</tr>
				         <?php } ?>		                 
				         <?php
				     			if($row['fruitName']=='mango') { ?>
				              	<tr>
				               	<td><img src="../img/fruit/mango.png" > </td>
				               	<td> <label >Mango</label></td>
				               	<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				             	</tr>
				         <?php } ?>		                  
				         <?php
				     			if($row['fruitName']=='melon') { ?>
				              	<tr>
				               	<td><img src="../img/fruit/melon.png" > </td>
				               	<td> <label >Melon</label></td>
				               	<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				             	</tr>
				         <?php } ?>		                
				         <?php
				     			if($row['fruitName']=='orange') { ?>
				              	<tr>
				              		<td><img src="../img/fruit/orange.png" > </td>
				              		<td> <label >Orange</label></td>
				              		<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				             	</tr>
				         <?php } ?>		                
				         <?php
				     			if($row['fruitName']=='peach') { ?>
				              	<tr>
				              		<td><img src="../img/fruit/peach.png" > </td>
				              		<td> <label >Peach</label></td>
				              		<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				             	</tr>
				         <?php } ?>		                
				         <?php
				     			if ($row['fruitName']=='pear') { ?>
				              	<tr>
				              		<td><img src="../img/fruit/pear.png" > </td>
				              		<td> <label >Pear</label></td>
				              		<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				             	</tr>
				         <?php } ?>		                
				         <?php
				     			if($row['fruitName']=='pineapple') { ?>
				              	<tr>
				              		<td><img src="../img/fruit/pineapple.png" > </td>
				              		<td> <label >Pineapple</label></td>
				              		<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				             	</tr>
				         <?php } ?>		                 
				         <?php
				     			if($row['fruitName']=='plum') { ?>
				              	<tr>
				              		<td><img src="../img/fruit/plum.png" > </td>
				              		<td> <label >Plum</label></td>
				              		<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				             	</tr>
				         <?php } ?>		                
				         <?php
				     			if($row['fruitName']=='raspberry') { ?>
				              	<tr>
				            		<td><img src="../img/fruit/raspberry.png" > </td>
				               	<td> <label >Raspberry</label></td>
				               	<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				             	</tr>
				         <?php } ?>		                
				         <?php
				     			if($row['fruitName']=='strawberry') { ?>
				              	<tr>
				              		<td><img src="../img/fruit/strawberry.png" > </td>
				              		<td> <label >Strawberry</label></td>
				              		<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
									</tr>
				         <?php } ?>		               
				         <?php
				     			if($row['fruitName']=='tangerine') { ?>
				              	<tr>
				              		<td><img src="../img/fruit/tangerine.png" > </td>
				              		<td> <label >Tangerine</label></td>
				              		<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				             	</tr>
				         <?php } ?>		                
				         <?php
				     			if($row['fruitName']=='watermelon') { ?>
				              	<tr>
				              		<td><img src="../img/fruit/watermelon.png" > </td>
				              		<td> <label >Watermelon</label></td>
				              		<td>
											<a class="btn btn-filled btn-danger" onclick="return confirm('Are you sure?')" href="wishList.php?id=<?php echo $row['id']; ?>">Delete</a>
											</td>
				             	</tr>
				         <?php } ?>	
				      <?php } ?>	  

				   </tbody> 
				</table>
			</div>	          
		</div>		 
	</div>
<?php include('../include/footer.php'); ?>