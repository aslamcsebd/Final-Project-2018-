<?php
	session_start();
	function portfolio() {
		$conn =mysqli_connect('sql308.epizy.com','epiz_22969359','Aslamctgcse','epiz_22969359_portfolio');
		return $conn;
	}
?>
<?php
	// session_start();
	// function portfolio() {
	// 	$conn =mysqli_connect('localhost','root','','portfolio');
	// 	return $conn;
	// }
?>
