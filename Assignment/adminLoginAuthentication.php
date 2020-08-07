<?php  
session_start();
 require('db_connect.php');

if (!empty($_POST['adminID']) && !empty($_POST['adminPass'])){
	
// Assigning POST values to variables.
$username = $_POST['adminID'];
$password = $_POST['adminPass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM admintable WHERE admin_id= '$username' and admin_password = '$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){


$_SESSION["currentAdmin"] = $username;
header('Location: backendhome.php');

}else{
    $_SESSION["adminerror"] ="ID/Password is not matched";
    header('Location: adminLogin.php');

}
}else{
    $_SESSION["adminerror"] ="ID/Password is not matched";
    header('Location: adminLogin.php');
}


?>