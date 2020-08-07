<?php  
session_start();
 require('db_connect.php');

if (isset($_POST['delete']) ){
	
// Assigning POST values to variables.
$itemCode = $_POST['delete'];

// CHECK FOR THE RECORD FROM TABLE
$query = "Delete FROM item WHERE item_id= '$itemCode' ";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
if (mysqli_query($connection, $query)) {

    echo "Record deleted successfully";
 
} else {
    echo "Error deleting record: " . mysqli_error($conn);
  
}
}

?>