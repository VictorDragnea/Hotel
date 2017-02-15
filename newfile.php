<?php
<!DOCTYPE html>
<html>

<head>

		<?php include('config/css.php'); ?>
		<?php include('config/js.php'); ?>
		<?php $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null; ?>
		
		<title><?php echo $page.' | '."Hotel Project"; ?></title>
		
	</head>
	
	<body>
	
		<div id="wrap">
	
			<nav class="navbar navbar-default" role="navigation">
			  
			  <div class="container">
			  
				  <ul class="nav navbar-nav">
				  	<li <?php if($page == "Home" || $page == null) { echo 'class="active"'; } ?>><a href="?page=Home">Home</a></li>
				  	<li <?php if($page == "About_Us") { echo 'class="active"'; } ?>><a href="?page=About_Us">About Us</a></li>
				  	<li <?php if($page == "Gallery") { echo 'class="active"'; } ?>><a href="?page=Gallery">Gallery</a></li>
				  	<li <?php if($page == "Contact") { echo 'class="active"'; } ?>><a href="?page=Contact">Contact</a></li>
				  </ul>
	 		  
			  </div>
			  
			</nav> <!-- END nav -->
			
			<div class="container">
				<?php switch($page){
					case "Home": include('Home.php');
									break;
					case "About_Us": include('About_Us.php');
									break;
					case "Gallery": include('Gallery.php');
									break;
					case "Contact": include('Contact.php');
				} ?>
			</div>
		
		</div>
		
		<footer id="footer">
			
			<div class="container">
				<div class="plm">
					<a href="?page=Home">Home</a>
					<a href="https://www.google.com/adsense/localized-terms">Terms</a>
					<a href="?page=Contact">Contact</a>
				</div>
			</div>
			
		</footer>

	</body>
	
</html>