<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	    <!-- Bootstrap -->
	    <?php echo link_tag('assets/css/bootstrap.min.css') ?>;
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		<!-- load method -->
		<!-- <script src="../assets/js/load.js"></script> -->
		
		<script type="text/javascript">
			$('#myModal').on('shown.bs.modal', function () {
			  $('#myInput').focus()
			})
		</script>
		
		<title><?php echo $title; ?></title>
	</head>

	<body>
		<?php echo $menu_top; ?>
		<!-- Image header-->
		<div class="container header clearfix" style="margin-top:25px">
			<nav>
			  <ul class="nav nav-pills pull-right">
				<a href="http://www.usth.edu.vn/" id="logo" target="_blank" style="margin-right:10px;">
					<img alt="USTH website" src="<?php echo base_url() ?>assets/img/2.png"></a>
				<a href="http://www.ioit.ac.vn/" id="logo" target="_blank" style="margin-right:10px;">
					<img alt="IOIT" src="<?php echo base_url() ?>assets/img/3.jpg"></a>
				<a href="http://en.vietnam.ird.fr/" id="logo" target="_blank" style="margin-right:10px;">
					<img alt="IRD Vietnam" src="<?php echo base_url() ?>assets/img/4.png"></a>
				<a href="http://www.univ-larochelle.fr/" id="logo" target="_blank">
					<img alt="Larochelle Universite" src="<?php echo base_url() ?>assets/img/5.jpg"></a>	            
			  </ul>
			</nav>
			<a href="<?php echo base_url('webapp'); ?>" style="margin-left: -15px"><img alt="ICTLab website" src="<?php echo base_url() ?>assets/img/1.png"></a>
	    </div>

			
	    <!-- Fixed navbar -->
	    <nav class="navbar navbar-static-top">
			<div class="container" style="background-color: #015601; margin-top:20px; border-radius: 5px;">
				<div id="navbar" class="navbar-collapse collapse">
				  <ul class="nav navbar-nav navbar-left">
					<li><a href="<?php echo base_url('webapp/about'); ?>">ABOUT ICTLAB</a></li>
					<li><a href="<?php echo base_url('webapp/research_topic'); ?>">RESEARCH TOPIC</a></li>
					<li class="dropdown">
					  <a href="<?php echo base_url('webapp/research_project'); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
						aria-expanded="false" >RESEARCH PROJECTS &raquo;</a>
					  <ul class="dropdown-menu">
						<li><a href="<?php echo base_url('webapp/swarms_project'); ?>">SWARMS project</a></li>
						<li><a href="<?php echo base_url('webapp/archives_project'); ?>">ARCHIVES project</a></li>		               
					  </ul>
					</li>
					<li class="dropdown">
					  <a href="#" id="logo" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
						aria-expanded="false" style="color:white;">NEWS AND EVENTS &raquo;</a>
					  <ul class="dropdown-menu">
						<li><a href="<?php echo base_url('webapp/news'); ?>">News</a></li>
						<li><a href="<?php echo base_url('webapp/seminars'); ?>" id="logo">Seminars</a></li>		             
					  </ul>
					</li>
					<li><a href="<?php echo base_url('webapp/members'); ?>">MEMBERS</a></li>
					<li><a href="<?php echo base_url('webapp/contact'); ?>">CONTACT</a></li>
				  </ul>
				</div><!--/.nav-collapse -->
			</div>
	    </nav>

		<div class="container mainwrapper">
		    <div class="row">
		    	<!-- Left Sidebar-->
		      	<div class="col-sm-3 blog-sidebar" style="margin-top: 25px;">
					<div class="sidebar-module sidebar-module-inset">
						<form>
							<div class="form-group">
							  <input type="text" class="form-control" placeholder="Search">
							  <span class="glyphicons glyphicons-search"></span>
							</div>
							<!-- <button type="submit" class="btn btn-default">Submit</button> -->
						</form>
					</div>

					<div class="sidebar-module">
						<div class="sidebar-header" style="text-decoration: bold;">
						  <h4 style="color:#015601;"><b>RECENT NEWS</b></h4>
						</div>
						
						<div class="sidebar-news">
						  <h4 style="color:red;"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  <a href="<?php echo base_url('webapp/news1'); ?>" id="sidebar-news-link"> Call for Internship 2016 (HealthOmics)</a></h4>
						</div>

						<div class="sidebar-news">
						  <h4 style="color:red;"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  <a href="<?php echo base_url('webapp/news2'); ?>" id="sidebar-news-link"> Call for bachelor internship at ICTLab</a></h4>
						</div>

						<div class="sidebar-news">
						  <h4 style="color:red;"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  <a href="<?php echo base_url('webapp/news3'); ?>" id="sidebar-news-link"> ICTLab Poster: Epidemiological Risks Model for the Dengue Fever with Control Policies and Economic Mobility</a></h4>
						</div>

						<div class="sidebar-news">
						  <h4 style="color:red;"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  <a href="<?php echo base_url('webapp/news5'); ?>" id="sidebar-news-link"> Kick-off Meeting of SWARMS Project</a></h4>
						</div>

						<div class="sidebar-news">
						  <h4 style="color:red;"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  <a href="<?php echo base_url('webapp/news7'); ?>" id="sidebar-news-link"> Call for M2 internship students</a></h4>
						</div>
						
					</div>

					<div class="sidebar-module">
						<div class="sidebar-header" style="text-decoration: bold;">
						  <h4 style="color:#015601;"><b>LATEST EVENT</b></h4>
						</div>

						<div class="sidebar-news">
						  <h4 style="color:red;"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  <a href="<?php echo base_url('webapp/blank'); ?>" id="sidebar-news-link"> ICTLab Seminar 2016/01/26 @ USTH</a></h4>
						</div>

						<div class="sidebar-news">
						  <h4 style="color:red;"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  <a href="<?php echo base_url('webapp/blank'); ?>" id="sidebar-news-link"> ICTLab Seminar 2015/10/16 @ USTH</a></h4>
						</div>

						<div class="sidebar-news">
						  <h4 style="color:red;"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  <a href="<?php echo base_url('webapp/blank'); ?>" id="sidebar-news-link"> ICTLab Seminar 2015/05/13 @ USTH</a></h4>
						</div>

						<div class="sidebar-news">
						  <h4 style="color:red;"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  <a href="<?php echo base_url('webapp/blank'); ?>" id="sidebar-news-link"> ICTLab Seminar 2015/04/15 @ USTH</a></h4>
						</div>

						<div class="sidebar-news">
						  <h4 style="color:red;"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						  <a href="<?php echo base_url('webapp/blank'); ?>" id="sidebar-news-link"> ICTLab Seminar 2015/04/07 @ USTH</a></h4>
						</div>
					</div>
				</div><!-- /.blog-sidebar -->
				
	        	<!-- Main content-->
		        <div class="col-sm-9 blog-main" id="main-content"><?php echo $body; ?>
				</div><!-- /.blog-main -->
				
		    </div><!-- /.row -->
	    </div><!-- /.container -->

	    <footer class="container blog-footer mainwrapper" style="border-style: hidden; margin-top:20px; margin-bottom:20px; background-color: #ECF4F7; padding:4px;">		      	
			    <p style="text-align:center;"><a href="#sitemap">Sitemap</a> | Copyright &#169; Group4</p>		    
		</footer>
		
		<!-- addon from w3schools -->
		<!-- <script src="http://www.w3schools.com/lib/w3data.js"></script>
		<script>w3IncludeHTML();</script> -->
		
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		
	</body>
</html>