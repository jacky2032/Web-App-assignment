<?php  
session_start();
 require('db_connect.php');

if (!empty($_POST['userID']) && !empty($_POST['userPass'])){
	
// Assigning POST values to variables.
$username = $_POST['userID'];
$password = $_POST['userPass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM user WHERE user_id= '$username' and user_password = '$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){


$_SESSION["currentUser"] = $username;
header('Location: catalogue.php');

}else{

  
    $_SESSION["error"] = "ID/Password is not matched";
    header('Location: login.php');

}
}else{
    $_SESSION["error"] = "ID/Password is not matched";
    header('Location: login.php');
}


?>