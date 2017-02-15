<!DOCTYPE html>
<html>
	<h2>Hotel Project</h2>
	
	<br/>
	
	<h4>Address</h4>
	<p>1111 Forest Trail/ PO Box 3459</p>
	<p>Mammoth Lakes, Ca., USA 93546</p>
	<p>Reservations: 800.MAMMOTH</p>
	
	
	<br/>
	
	<h4>Contact</h4>
	
	<form method="POST" action= "Contact.php" >
	
		Name(full) <input type="text" name="name" class="form-control">
		<br/>
		Email <input type="text" name="email" class="form-control">
		<br/>
		Phone <input type="text" name="phone" class="form-control">
		<br/>
		How did you found us? 
		<select name="source" class="form-control">
				<option value="friends">Friends</option>
				<option value="google" selected="selected">Google</option>
				<option value="other">Other</option>
		</select>
		<br/>
	
		
		Your message: <br/>
		<textarea name="message" rows="3" cols="60" class="form-control"></textarea>
		<br/>
		<input type="submit" value="Send">
		
	</form>
</html>

<?php
$source = array("friends", "google", "other");


if (!empty($_POST['submit'])) {
	if (!isset($_POST['name']) || !preg_match('#^[A-Za-z][a-z]+([\s,`][A-Za-z][a-z]+)+$#',$_POST['name'])){
		$errors[] = "Please enter a valid name";
	}

	if (!isset($_POST['email']) || !preg_match('#[a-z|\d]+([_\-\.][a-z|\d]+)*@[a-z]+(-[a-z]+)*(\.[a-z]+(-[a-z]+)*)*(\.[a-z]{2,4}){1,2}$#',$_POST['email'])) {
		$errors[] = "Please enter a valid email";
	}

	if (!isset($_POST['phone']) || !preg_match('#^(\d{4})?0(7([2-6]\d|7[0-2]|88))|([2-3]\d\d)\d{6}$#',$_POST['phone'])) {
		$errors[] = "Please enter a valid phone";
	}

	if(!empty($_POST['source'])){
		if( !in_array($_POST['source'], $source) )
		{$errors[] =  "Invalid source!";}

		if (empty($_POST['message'])) {
			$errors[] = "Please enter a valid message";
		}

		if (count($errors)) {
			foreach ($errors as $err) {
				echo "<b><p>$errors</p></b>";
			}
		} else {
			include "Contact.php";	
		}

	}
}

?>



