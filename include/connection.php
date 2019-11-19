<?php

	function connectDB() {
		$conn =mysqli_connect('localhost','root','','bazar');
		return $conn;
	}
	
	function user_market() {
		$user_market =mysqli_connect('localhost','root','','user_market');
		return $user_market;
	}
	function user_purchase() {
		$user_purchase =mysqli_connect('localhost','root','','user_purchase');
		return $user_purchase;
	}
	
	function user_wishlist() {
		$user_wishlist =mysqli_connect('localhost','root','','user_wishlist');
		return $user_wishlist;
	}
?> 