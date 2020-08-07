<?php
session_start();
require('db_connect.php');
if(!isset($_SESSION['currentAdmin'])){

 header('Location:adminLogin.php');


}
?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="betopNav-1">
		<div class="betopNav-2">

		<a href="backendhome.php" class="logo">DIGITALLIBRARY</a>
			<!-- Right-sided navbar links -->
			<div class="betopNav-right">
				
				<a href="logout.php" class="betopNavButton m-r-100">
			  <i class="fa fa-sign-out"></i>
			      Sign Out <?php echo "[ ". $_SESSION['currentAdmin'] ." ]"?></a>
			</div>
			<!-- Hide right-floated links on small screens and replace them with a menu icon -->

	  </div>
	</div>
	
	
	<div class="beContainer">
		<div class="beContent">
		<a class="beCaption">
			ADD ITEM
		</a>
		
		<form id="addForm" method = "post" action ="addItemFunction.php" enctype="multipart/form-data" name="addForm">
			
			<label for="itemtype" class="itemadd-label">Select item type: </label><br>
			<select class="itemadd" id="itemType" name ="itemType">
				<option value="Book">Book</option>
				<option value="Magazine">Magazine</option>
				<option value="Journal">Journal</option>
				<option value="CD">CD</option>
			</select><br><br>
			
			<label for="stock" class="itemadd-label">Select item category: </label><br>
			<select class="itemadd" id="itemCategory" name ="itemCategory">
				<option value="Cooking">Cooking</option>
				<option value="Fashion">Fashion</option>
				<option value="History">History</option>
				<option value="Movie">Movie</option>
			</select><br><br>
			
			<label for="stock" class="itemadd-label">Enter stock availability: </label><br>
			<input class="itemadd" id="stock" name="stock" type="number" value="1" min="1" required>
			
			<?php	/*	<label for="itemtype" class="itemadd-label-2">Author: </label><br>
			<select class="itemadd-2">
				<option value="0">Author1</option>
				<option value="1">Author2</option>
				<option value="2">Author3</option>
				<option value="3">Author4</option>
			</select><br><br>

			<input class="itemadd-image" type="checkbox" name="nonexist" value="nonexist">
			<label for="nonexist" class="itemadd-label-2 margin-0">Non-existing author</label><br>
			
			*/ ?>
			<br><br>

			<label for="author" class="itemadd-label">Enter author name: </label><br>
			<input class="itemadd" name="author" type="text" required><br>


			
			<label for="title" class="itemadd-label">Enter title: </label><br>
			<input class="itemadd" name="title" type="text" required><br>
			
			<label for="description" class="itemadd-label">Description: </label><br>
			<textarea name="description" class="itemadd height-80" required></textarea><br>
			
			<label for="image" class="itemadd-label">Insert image: </label><br>
			<input class="itemadd-image" type="file" name="image" required>



			
			<div class="mg-top">
				<button class="button button1" name ="submitAdd" value="submit">Confirm</button>
				</form>
				<button class="button button2" onclick="location.href='backendhome.php'">Back</button>
			</div>
			
	
		
		</div>
	</div>
	
	<footer id="bepageFooter">Copyright &#9400; 2020 DIGITAL LIBRARY. All rights reserved.
	</footer>
</body>

</html>