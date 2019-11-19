
<?php
//this is main code

	/*if ($_SESSION['adminLogin']) {
		echo "<span class='pagination'>";			
			for ($page=1;$page<=$number_of_pages;$page++) {
				if ($page==1){ 
					echo "<a href='userList.php?page=1'>".'First'."</a>";	
				}else if($page==$number_of_pages){
					echo "<a href='userList.php?page=$number_of_pages'>".'Last'."</a></span>";
				}else{					
					echo "<a href='userList.php?page=" . $page . "'>" . $page . "</a> ";
				}
  			}
  		}
  		*/
  		

  		if ($_SESSION['adminLogin']) {
		echo "<span class='pagination'>";			
			for ($page=1;$page<=$number_of_pages;$page++) {
				if ($page==1){ 
					echo "<a href='$pageURL?page=1'>".'First'."</a>";	
				}else if($page==$number_of_pages){
					echo "<a href='$pageURL?page=$number_of_pages'>".'Last'."</a></span>";
				}else{					
					echo "<a href='$pageURL?page=" . $page . "'>" . $page . "</a> ";
				}
  			}
  		}
  		
?>