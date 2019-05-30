<?php 
session_start();
$_SESSION["email"] = "hind@gmail.com";
$_SESSION["pas"] = "hind";




if($_SERVER["REQUEST_METHOD"] == "POST"){
	$email = vf($_POST['email']);
	$pass = vf($_POST['Password']);
	@$rem = vf($_POST['remember']);
	if($_SESSION["email"] == $email and $_SESSION["pas"] == $pass){
		      if( isset($_POST['remember']) ){
		       setcookie('email',$email,time()+60*60*7);
               }
       
		$_SESSION['email'] = $email;
		header ('location: welcome.php');
	}else{
		echo "Email or password is invalid .<br> click here to <a href='login.php'>try again </a>";
	}

}else {
	 header('location: login.php');
}


function vf($var){
   trim($var);
   stripcslashes($var);
   htmlspecialchars($var);
   return $var;
}
?>