<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<header>
	<title>About | ICTLab</title>
	<script src="../assets/js/minimal.lightbox.js"></script>
	<!-- load method -->
	<!-- <script src="../assets/js/load.js"></script> -->
</header>
<body>
	<div class="blog-post">
		<a href="<?php echo base_url('webapp/home'); ?>" class="link">ICTLab</a> &rsaquo; <a href="<?php echo base_url('webapp/about'); ?>" class="link">About</a>
		<h2>About</h2>
		<p>
			ICTLab is a joint international ICT research laboratory between USTH and 
			Vietnamese and French partners. It involves researchers coming from USTH, IOIT 
			(Institute of Information Technology, Hanoï), IRD (Institut de Recherche pour le Développement) 
			and the University of La Rochelle, France. 
		</p>
		<h3>History</h3>
		<p>
			ICTLab was created on December 1st, 2014. Its creation was supported (directly or indirectly) 
			by USTH, the French Embassy in Vietnam, 13 French high education institutes and universities 
			(USTH Consortium), and the ADB (Asian Development Bank).
		</p>
		<h3>Facilities</h3>
		<p>
			The laboratory is located in the heart of the VAST (Vietnamese Academy of Science and Technology) complex, 
			in the city center of Hanoi, Vietnam.
			<br><br>
			Hereafter a few pictures of our facilities.
		</p>	
		
		<div id="img_box">
			<img class="resize_horizontal" data-toggle="modal" data-target="#myModal" src="../assets/img/facilities.jpg">
		</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">			      	
			    <img src="../assets/img/facilities.jpg">	      	      	    
		  </div>
		</div>
	</div>
</body>
</html>