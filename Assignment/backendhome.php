<?php
session_start();
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
			ADMINISTRATOR / LIBRARIAN<br>
			MANAGING SYSTEM
			</a>
			<a href="backenditemadd.php">
				<div class="beOption">
					<img class="beOption-img" src="additem.jpg">
				</div>
			</a>
			<a href="backenddelete.php">
				<div class="beOption">
					<img class="beOption-img" src="deleteitem.jpg">
				</div>
			</a>
			<a href="backendupdate.php">
				<div class="beOption">
					<img class="beOption-img" src="updateitem.jpg">
				</div>
			</a>

		</div>
	</div>
	
	<footer id="bepageFooter">Copyright &#9400; 2020 DIGITAL LIBRARY. All rights reserved.
	</footer>
</body>

</html>