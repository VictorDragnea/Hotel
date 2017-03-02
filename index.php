<?php
require_once ('head.php');
require_once ('menu.php');



require_once ('footer.php');
?>




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
		
	</body>
</html>