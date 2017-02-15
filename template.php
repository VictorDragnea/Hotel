<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page_title.' | '.'Hotel Project' ; ?></title>
		<?php include('config/css.php'); ?>
		
		<script>
		$(document).ready(function() {

			   var docHeight = $(window).height();
			   var footerHeight = $('.footer').height();
			   var footerTop = $('.footer').position().top + footerHeight;

			   if (footerTop < docHeight) {
			    $('.footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
			   }
			  });
		</script>
	</head>
	<body>
		<div id="wrap">
			<nav class="navbar navbar-default" role="navigation">
			  <div class="container">
			  	<ul class="nav navbar-nav">
				  	<li><a href="index.php">Home</a></li>
				  	<li><a href="#">About Us</a></li>
				  	<li><a href="#">Gallery</a></li>
				  	<li><a href="#">Contact</a></li>
				  </ul>
	 		  </div>
			</nav> <!-- END nav -->
		</div>
		
		<div id = "content">
			<?php echo $content; ?>
		</div>
		
		<footer class = 'footer'>
			<p>All rights reserved</p>
		</footer>
	</body>
</html>