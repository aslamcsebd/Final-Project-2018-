<?php

	$conn=connectDB();
	
	$result=mysqli_query($conn,$sql);

		$number_of_results = mysqli_num_rows($result);
		$results_per_page = 5;
		$number_of_pages = ceil($number_of_results/$results_per_page);


		if (!isset($_GET['page'])) {
		    $page = 1;
		}else{
		      $page = $_GET['page'];
		}

	$this_page_first_result = ($page-1)*$results_per_page;
	$sql2="SELECT * FROM $tableName ORDER BY id ASC LIMIT " . $this_page_first_result . ',' .  $results_per_page;
	$result2 = mysqli_query($conn, $sql2);
?>