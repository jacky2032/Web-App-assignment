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
		<div class="beContent sizefull">
			<a class="beCaption">
				UPDATE ITEM
			</a>

			<form action="" id="searchItem" method="post">
			<div class="findkword">
				<label for="findkword">Find: </label>
				<input type="text" id="searcshValue"  class="inputcell" name="searchValue" placeholder="Search by Keywords...">
				<button type="submit" name="submit" value="submit">Submit</button>
			</div>
			</form>
			<br>
			
			<div class="itemsort">
				<label for="itemsort">Sort By: </label>
				<select name="itemsort">
							<option value="personA">Name: A to Z</option>
							<option value="personB">Name: Z to A</option>
				</select>
			</div>
			<br>
			
			<div class="itempos">
				<table class="itemlist" cellspacing="0" cellpadding="15">
					<tr>
						<th>No.</th>
						<th>Item Code</th>
						<th>Title</th>
						<th>Author</th>
						<th>Item Types</th>
						<th>Categories</th>
						<th>Stock Available</th>
						<th>Edit</th>
					</tr>
					<?php 
				 if( isset( $_POST['searchValue'] ) ) {
				$search_value=$_POST['searchValue'];
				$query = "SELECT  * from item where title like '%$search_value%'";
				$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
				if (mysqli_num_rows($result) > 0) {
					$i=1;
					while($row = mysqli_fetch_assoc($result)) {
			  echo'
			  <form action="returnUpdateValue.php"  method="post"> 
			  <tr>
			  <td>'.$i.'</td>
			  <td>&nbsp;'.$row["item_id"].'</td>
			  <td>&nbsp;'.$row["title"].'</td>
			  <td>&nbsp;'.$row["author_name"].'</td>
			  <td>&nbsp;'.$row["item_type"].'</td>
			  <td>&nbsp;'.$row["category"].'</td>
			  <td>&nbsp;'.$row["stock"].'</td>
			  <td><button type="submit"  class="btn-update" id="edit" name="edit" value='.$row["item_id"].'><i class="fa fa-edit"></i></button></td>
				</tr>
				</form>
				' ;
				$i++;}
					}
					else {
						echo'	<tr>
						No results found.
					</tr>';
					}
				}
				
					
					?>
				</table>
				<br><br><br>
				
				<div class="pagination">
					<a class="pagination-label" href="https://www.w3schools.com/html/">«</a>
					<a class="pagination-label" href="https://www.w3schools.com/html/">1</a>
					<a class="pagination-label" href="https://www.w3schools.com/html/">2</a>
					<a class="pagination-label" href="https://www.w3schools.com/html/">3</a>
					<a class="pagination-label" href="https://www.w3schools.com/html/">»</a>           
				</div> 
				<br><br>
				
				<div class="mg-left mg-right">
					<button class="button button1">Save</button>
					<button class="button button2">Back</button>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="update-popup" id="myForm">
		<form class="update-container" action="updateFunction.php" id="updateItem" name=updateItem method="post"> 
	<?php	if( isset( $_POST['edit'] ) ) {
				$itemID=$_POST['edit'];
				$query = "SELECT  * from item where item_id ='$itemID'";

				$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	
				$title= $row["title"];
			}
		echo'	<h2>Update Item</h2>
			
			
			<label class="update-label">Title: </label>
			<input type="text" class="update-input" name="updateitem" value="lord">
			<br><br>
			
			<label class="update-label">Author: </label>
			<input type="text" class="update-input" name="updateitem" value="Lord of Ther Rings">
			<br><br>
			
			<label class="update-label">Item Types: </label>
			<input type="text" class="update-input" name="updateitem" placeholder="Book">
			<br><br>
			
			<label class="update-label">Categories: </label>
			<input type="text" class="update-input" name="updateitem" placeholder="Fantasy Fiction">
			<br><br>
			
			<label class="updatelabel">Stock Available: </label>
			<input type="text" class="update-input" name="updateitem" placeholder="8">
			<br><br>
			
			<button type="button" class="btn-updateitem-1" onclick="closeForm()">Update</button>
			<button type="button" class="btn-updateitem-2" onclick="closeForm()">Close</button>'
		;?>
		</form>
	</div>

	<footer id="bepageFooter">Copyright &#9400; 2020 DIGITAL LIBRARY. All rights reserved.
	</footer>
	<script type="text/javascript" src="jScript"></script>
</body>

</html>