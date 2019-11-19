<?php
if(!isset($_SESSION['userLogin']) || !isset($_SESSION['adminLogin'])){
      header("location: ../index.php");
  }

  ?>
<h1>Something is wrong</h1>