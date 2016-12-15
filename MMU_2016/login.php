<?php 

//Connects to your Database 
$conect = mysqli_connect("localhost","root","localhost@@", "mmu2016") or die(mysql_error()); 

//Checks if there is a login cookie
/*
if(isset($_COOKIE['ID_your_site'])){ //if there is, it logs you in and directes you to the members page
 	$username = $_COOKIE['ID_your_site']; 
 	$pass = $_COOKIE['Key_your_site'];
 	$check = mysqli_query($conect, "SELECT * FROM users WHERE username = '$username'")or die(mysql_error());

 	while($info = mysqli_fetch_array( $check )){
 		if ($pass != $info['password']){}
 		else{
 			header("Location: login.php");
		}
 	}
 }*/

 //if the login form is submitted 
 if (isset($_POST['submit'])) {

 	if(!$_POST['pass']){
 		die('You did not fill in a password.');
 	}

 	// checks it against the database
 	/*
 	if (!get_magic_quotes_gpc()){
 		$_POST['email'] = addslashes($_POST['email']);
 	}*/

 	//$check = mysqli_query($conect, "SELECT * FROM judges WHERE access_key = '".md5($_POST['pass']."'")) or die(mysql_error());
 	$check = mysqli_query($conect, "SELECT * FROM judges WHERE id = '".$_POST['pass']."'") or die(mysql_error());

 //Gives error if user dosen't exist
 $check2 = mysqli_num_rows($check);
 if ($check2 == 0){
	die('That user does not exist in our database.<br /><br />If you think this is wrong <a href="login.php">try again</a>.');
 }else{
	
	while($info = mysqli_fetch_array( $check )){
		$_POST['pass'] = stripslashes($_POST['pass']);
	 	$info['passcode'] = stripslashes($info['passcode']);
	 	$_POST['pass'] = md5($_POST['pass']);

		header("Location: Menu.php"); 
	}

 }

}
else{
// if they are not logged in 
?>

 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 

 <table border="0"> 

 <tr><td colspan=2><h1>Login</h1></td></tr> 

 <tr><td>Passcode:</td><td> 

 <input type="password" name="pass" maxlength="50" required> 

 </td></tr> 

 <tr><td colspan="2" align="right"> 

 <input type="submit" name="submit" value="Login"> 

 </td></tr> 

 </table> 

 </form> 

 <?php 
 }


 ?> 
