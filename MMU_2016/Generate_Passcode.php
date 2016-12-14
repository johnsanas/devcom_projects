<?php
mysql_connect("localhost", "root", "localhost@@") or die(mysql_error()); 
$connection = mysql_connect("localhost", "root", "localhost@@") or die(mysql_error()); 
mysql_select_db("mmu2016") or die(mysql_error()); 

function random_password( $length = 8 ) {
	 //Simple 
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    //Complex
    //$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
//echo random_password(4);

 if (isset($_POST['generate'])) {

	// makes sure they filled it in
 	if(!$_POST['judge_name']){
 		die('You did not fill in a username.');
 	}
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	<label for="judge_name">Judge Name
	<input type="text" name="judge_name" required value=
	"<?php 
	if (isset($_POST['judge_name'])){
		echo $_POST['judge_name'];
	}
	?>
	"><br />
	

	<input type="submit" value="Generate" name="generate"> <br /><br />
	<label for="passcode">Generated Passcode
	<input type="text" name="passcode" value=
	"<?php 
	if (isset($_POST['judge_name'])){
		echo $_POST['judge_name'];
		$_POST['passcode'] = random_password(4);
		echo " " . $_POST['passcode'];
	}
	?>
	"><br />
	
</form>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	
	<input type="hidden" name="f_judge_name" value = 
	"<?php 
	if (isset($_POST['judge_name'])){
		$_POST['f_judge_name'] = $_POST['judge_name'];
		echo $_POST['f_judge_name'];

	}
	?>
	">

	<input type="hidden" name="f_passcode"value = 
	"<?php 
	if (isset($_POST['judge_name'])){
		$_POST['f_passcode'] = random_password(4);
		echo $_POST['f_passcode'];
	}
	?>
	">

	<input type="submit" name="save" value="Save">

<?php 

if (isset($_POST['save'])) {

//$_POST['f_passcode'] = md5($_POST['f_passcode']);
	$_POST['f_passcode'] = md5($_POST['f_passcode']);

if (!get_magic_quotes_gpc()) {
	$passcode = addslashes($_POST['f_passcode']);
	$judgeName = addslashes($_POST['f_judge_name']);
}

// now we insert it into the database
//$insert = "INSERT INTO admin (id_number, password) VALUES ('".$_POST['username']."', '".$_POST['pass']."')";
//$insert = "INSERT INTO judges (first_name, access_key) VALUES ('".$_POST['f_judge_name']."', '".$_POST['f_passcode']."')";
$insert = "INSERT INTO judges (first_name, access_key) VALUES ('$judgeName', '$passcode')";
//$insert = "INSERT INTO judges (first_name, last_name, access_key) VALUES ('assdfgdf', 'asdf', 'sd')";
$add_member = mysql_query($insert, $connection);
}

?>

</form>
