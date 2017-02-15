<?php

$login_form=<<<GATA
<!DOCTYPE html>
<html>
<br/>
<br/>
<div class = "container">
<div class="wrapper">
<form action= "Home.php" method="POST" name="Login_Form" class="form-signin">       
<h3 class="form-signin-heading">Welcome to Hotel Project!</h3>
<br/>
<br/>
<h4 class="form-signin-heading">Please log in and book your stay.</h4>
<br>
<input type="text" class="form-control" name="userName" placeholder="Username" required="" autofocus=""/>
<input type="password" class="form-control" name="userPassword" placeholder="Password" required=""/>  
<br/>        
<input type="submit" name="submit" class="form-login" value="login">      
</form>
</div>
</div>
</html>
GATA;

if(!empty($_POST['name'])){
	echo $_POST['name'];
}
else
echo $login_form

?>