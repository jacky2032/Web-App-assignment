<?php  
session_start();
 require('db_connect.php');
 include('myFunctions.php');
 if( isset($_GET['Search'])){
	$itemName= test_input($_GET['Search']);
	$sql = "SELECT item_id FROM item WHERE title = '$itemName'";
	$result = mysqli_query($connection,$sql);
	if(mysqli_num_rows($result) != 0){
	   $row = mysqli_fetch_assoc($result);
	  $itemID=$row["item_id"];
}
else
{
	header('Location:errorPage.php');
}
 }
if( isset($_GET['itemID'])){
 $itemID = $_GET['itemID'];
}
$_SESSION["itemID"] = $itemID;
 if(!isset($_GET['Search']) &&  !isset($_GET['itemID']) ){

	
	header('Location:catalogue.php');
   
   
   }
 ?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="jScript"></script>
<script src ="jquery.js"></script></head>

<body>
<?php include("header.php")?>

	<!-- body -->
			<div class="flexContainer">
		<?php	
		$itemID = $_SESSION['itemID'];
		$query = "SELECT * FROM item WHERE item_id = $itemID";
			$result = mysqli_query($connection, $query) or die(mysqli_error($connection));    
			$row = mysqli_fetch_assoc($result);
			$category =$row["category"];
            echo ' <div class="main" id="stupid">
				
					<div class="description">
						<div class="description-image"> 
						<img src="data:image/jpeg;base64,'.base64_encode( $row['bookImage'] ).'">
						</div>
						
						<div class="description-item">
							<span>
								<label for= "title"><strong>'.$row["title"].'</strong></label>
								<br>
								<label for = "author">Author: '.$row["author_name"].'</label>
								<br>
								<label for ="dateOfRelease">Book Type : '.$row["item_type"].'</label>
								<br>
								<label for ="dateOfRelease">Category: '.$row["category"].'</label>
								<br><br>
								<label>Description: </label>
								<p>'.$row["bookDescription"].' stock(s) available. </p>
								<br>
								<label for ="stock">'.$row["stock"].'  stock(s) available.</label>
							</span>
						</div>
					</div>';
			$query = "SELECT * FROM item WHERE category = '$category'";
			$result = mysqli_query($connection, $query) or die(mysqli_error($connection));    
			echo '<h3>Recommendation:</h3>
			<div class="recommendation">';
   				$i=0;
				while($row = mysqli_fetch_assoc($result)){
					if($i < 4)
					{
				$itemID= $row["item_id"];
					echo'	
							<form id="displayItem" method="get" action="itemDisplay.php" >
							<button type="submit" id ="itemID" name="itemID" value='.$itemID.'>
							<div class="recommendation-box">
							<div class="recommendation-image">
							<img src="data:image/jpeg;base64,'.base64_encode( $row['bookImage'] ).'" >
							</div>
							</form>
							<label><strong>'.$row["title"].'</strong></label>
						</div>
						</button>';
					$i++;
				}}
						
		?>
					</div>
				</div>
			
			</div>

	<footer id="pageFooter">
        Copyright &#9400; 2020 DIGITAL LIBRARY. All rights reserved.
	</footer>
	<script type="text/javascript" src="jScript"></script>
</body>

</html>