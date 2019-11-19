	<section id="footer">
		<ul class="list-inline text-center"> <!-- animated fadeInDownBig wow -->
			<li><a href="https://www.facebook.com/aslam.cse.ctg" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/aslamctg" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>			
		</ul>

		<div class="text-center"><!-- animated fadeInDownBig wow -->
			<p>&copy; <?php date_default_timezone_set("Asia/Dhaka"); echo $year= date("Y"); ?>
			<!-- $date3= date("Y-m-d")."<br>"; -->			
                        PUC, Premier University, Chittagong <br>
			Leveraging Information & Communication Technology (LICT)</p>
		</div>
	</section>

<script type="text/javascript" src="../js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    	$(document).ready( function () {
        $('#search').DataTable();
    } );
    </script>

	<!--WOW CSS-->
	<script>
	    new WOW().init();
	</script>

	<script>
	    $('.carousel').carousel({
	        interval: 1000
	    })
	</script>


</body>
</html>		